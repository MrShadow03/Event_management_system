<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Rental;
use App\Models\Repair;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\DamagedProduct;

class RentalApprovalController extends Controller{
    public function index(){
        //get all the invoices that have rentals with status pending approval
        $invoices = Invoice::whereHas('rentals', function($query){
            $query->where('status', 'pending approval');
        })->with(['rentals.product', 'customer'])->get();

        // dd($invoices);
        return view('admin.pages.rental.approvals', [
            'invoices' => $invoices,
        ]);
    }

    public function edit(Invoice $invoice){
        if($invoice->status != 'pending approval'){
            return redirect()->back()->with('error', 'This invoice is not pending approval');
        }

        if($invoice->rentals->count() == 0){
            return redirect()->back()->with('error', 'This invoice has no rentals');
        }

        $customer = Customer::find($invoice->customer->id);

        if(!$customer){
            return redirect()->back()->with('error', 'Customer not found');
        }

        $startDate = Carbon::parse($invoice->rentals->first()->starting_date)->format('Y-m-d');
        $endDate = Carbon::parse($invoice->rentals->last()->ending_date)->format('Y-m-d');
        $totalDays = ((strtotime($endDate) - strtotime($startDate)) / (60 * 60 * 24));

        
        /**
         * @var Collection $products
         */
        $products = Product::with('rentals')->get();

        $newOrdersStartDate = $startDate;
        $newOrdersEndDate = $endDate;

        $rentedOrders = Rental::whereIn('status', ['approved', 'rented'])
            ->where(function ($query) use ($newOrdersStartDate, $newOrdersEndDate) {
                $query->whereNotBetween('starting_date', [$newOrdersStartDate, $newOrdersEndDate])
                ->whereNotBetween('ending_date', [$newOrdersStartDate, $newOrdersEndDate]);
            })
            ->get();

        foreach ($products as $product) {
            $product->stock += $rentedOrders
                ->where('product_id', $product->id)
                ->sum('quantity');
        }

        $latestInvoiceId = Invoice::max('id') ?? 1300;

        //load the rentals with product in the invoice
        $invoice->load('rentals.product');

        return view('admin.pages.rental.review', [
            'invoice' => $invoice,
            'customer' => $customer,
            'products' => $products,
            'start_date' => $startDate,
            'return_date' => $endDate,
            'invoice_id' => $invoice->id,
            'number_of_days' => $totalDays,
        ]);
    }

    public function update(Request $request){
        /**
         * @var Illuminate\Http\Request $request
         */
        $request->validate([
            'customer_id' => 'required | exists:customers,id',
            'invoice_id' => 'required',
            'start_date' => 'required',
            'return_date' => 'required',
            'number_of_days' => 'required',
            'paid' => 'nullable',
            'vat_percentage' => 'nullable',
            'discount' => 'nullable',
            'subtotal' => 'required',
            'grand_total' => 'required',
            'due' => 'nullable',
            'products' => 'required | array',
        ]);

        $deposit = Customer::find($request->customer_id)->deposit; // 10,000
        $grand_total = $request->grand_total; // 12,000
        $paid = $request->paid ?? 0; // 0

        $vat_percentage = $request->vat_percentage ?? 0;
        $discount = $request->discount ?? 0;
        $due = 0;

        $deposit = $deposit - $grand_total; // 10,000 - 12,000 = -2,000
        
        if($deposit < 0){
            $due = abs($deposit); // 2,000
            $deposit = 0; // 0
        }
        
        $customer = Customer::find($request->customer_id);
        $customer->deposit = $deposit;
        $customer->save();

        // For each product create a rental with the status pending approval
        foreach ($request->products as $product_id => $value){
            // get the quantity
            $quantity = $value['quantity'];

            // reduce the stock
            $product = Product::find($product_id);
            $product->stock -= $quantity;
            $product->save();

            // update or create a rental
            $rental = Rental::where('invoice_id', $request->invoice_id)->where('product_id', $product_id)->first();

            // if the rental exists update it else create it
            if($rental){
                $rental->quantity = $quantity;
                $rental->status = 'approved';
                $rental->save();
            }else{
                $rental = new Rental();
                $rental->invoice_id = $request->invoice_id;
                $rental->customer_id = $request->customer_id;
                $rental->product_id = $product_id;
                $rental->starting_date = $request->start_date;
                $rental->ending_date = $request->return_date;
                $rental->number_of_days = $request->number_of_days;
                $rental->quantity = $quantity;
                $rental->status = 'approved';
                $rental->save();
            }
        }

        // update the invoice
        $invoice = Invoice::find($request->invoice_id);
        $invoice->user_id = auth()->user()->id;
        $invoice->subtotal = $request->subtotal;
        $invoice->vat_percentage = $vat_percentage;
        $invoice->paid = $paid;
        $invoice->discount = $discount;
        $invoice->grand_total = $grand_total;
        $invoice->due = $due;
        $invoice->status = 'approved';
        $invoice->save();

        // if paid is more than 0 create transaction
        if($paid > 0){
            Transaction::create([
                'user_id' => auth()->user()->id,
                'customer_id' => $request->customer_id,
                'invoice_id' => $request->invoice_id,
                'type' => 'rental cost',
                'amount' => $paid,
                'balance' => $deposit,
                'description' => 'rental cost',
            ]);
        }

        // change the status of remaining rentals to declined
        $declinedRentals = Rental::where('invoice_id', $request->invoice_id)
            ->where('status', '!=', 'approved')
            ->get();

        if($declinedRentals->count() == 0){
            return redirect()->route('admin.rentals.approve')->with('success','Rental created successfully and is pending approval from the admin'); 
        }

        // Delete the declined rentals
        foreach ($declinedRentals as $declinedRental) {
            $declinedRental->delete();
        }

        return redirect()->route('admin.rentals.approve')->with('success','Rental created successfully and is pending approval from the admin'); 
    }

    public function decline(Request $request){
        // Only take the invoice id and validate it
        $request->validate([
            'invoice_id' => 'required | exists:invoices,id',
        ]);

        // Delete rentals and invoice
        Invoice::find($request->invoice_id)->rentals()->delete();
        Invoice::destroy($request->invoice_id);

        return redirect()->route('admin.rentals')->with('warning', 'Request of invoice #' . $request->invoice_id . ' has been declined');
    }

    public function acceptReturn(Request $request){
        $this->validate($request, [
            'rental_id' => 'required | exists:rentals,id',
            'process_quantity' => 'required | numeric | min:1',
            'repair_quantity' => 'nullable | numeric | min:0',
            'repair_cost' => 'nullable | numeric | min:0',
            'damage_quantity' => 'nullable | numeric | min:0',
            'damage_cost'=> 'nullable | numeric | min:0',
            'damageToInvoice' => 'nullable',
        ]);

        $repairQuantity = $request->repair_quantity ?? 0;
        $repairCost = $request->repair_cost ?? 0;
        $damageQuantity = $request->damage_quantity ?? 0;
        $damageCost = $request->damage_cost ?? 0;

        $hasDamageToInvoiceInput = $request->has('damageToInvoice') ?? false;

        // dd($hasDamageToInvoiceInput);
        $rental = Rental::find($request->rental_id);
        $invoice = Invoice::find($rental->invoice_id);
        $product = Product::find($rental->product_id);

        if(($repairQuantity + $damageQuantity) > $request->process_quantity){
            return redirect()->back()->with('error', 'The repair and damage quantity cannot be more than the accepted quantity');
        }

        if($product == null){
            return redirect()->back()->with('error', 'Product not found');
        }

        if($repairQuantity){
            // create a new repair order
            $repair =  new Repair();
            $repair->product_id = $product->id;
            $repair->rental_id = $rental->id;
            $repair->quantity = $repairQuantity;
            $repair->cost = $repairCost;
            $repair->save();
        }

        if($damageQuantity){
            // create a new damaged product
            $damagedProduct = new DamagedProduct();
            $damagedProduct->product_id = $product->id;
            $damagedProduct->rental_id = $rental->id;
            $damagedProduct->quantity = $damageQuantity;
            $damagedProduct->cost = $damageCost;
            $damagedProduct->save();
        }

        //if hasDamageToInvoiceInput update the invoice due
        if($hasDamageToInvoiceInput){
            $invoice->grand_total += ($damageCost+$repairCost);
            $invoice->due += ($damageCost+$repairCost);
            $invoice->save();

            //add transaction for the damage cost
            if(($damageCost+$repairCost) > 0){
                Transaction::create([
                    'user_id' => auth()->user()->id,
                    'customer_id' => $invoice->customer_id,
                    'invoice_id' => $invoice->id,
                    'type' => 'due added',
                    'amount' => ($damageCost+$repairCost),
                    'balance' => $invoice->due,
                    'description' => 'Repair and damage cost',
                ]);
            }
        }

        // update the stock
        $returnedQuantity = $request->process_quantity - ($repairQuantity + $damageQuantity);
        $product->stock += $returnedQuantity;
        $product->save();

        // if the process quantity is equal to the quantity in the rental change the status to returned else reduce the quantity
        if($rental->quantity == $request->process_quantity){
            // update the rental status
            $rental->status = 'returned';
            $rental->save();
        }else{
            // update the rental quantity
            $rental->quantity -= $request->process_quantity;
            $rental->save();
        }

        // check if all the rentals in the invoice are returned
        $hasUnreturnedRentals = Rental::where('invoice_id', $invoice->id)->where('status', '!=', 'returned')->exists();
        if($hasUnreturnedRentals){
            return redirect()->back()->with('success', 'Product returned successfully');
        }

        // update the invoice status
        $invoice->status = 'returned';
        $invoice->save();

        return redirect()->route('admin.rentals.returns')->with('success', 'Product returned successfully. All the products in the invoice have been returned');
    }
}
