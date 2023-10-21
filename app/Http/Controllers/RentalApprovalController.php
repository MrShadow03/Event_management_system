<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Rental;
use App\Models\Repair;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;

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

        $rentedOrders = Rental::whereIn('status', ['approved','rented'])
            ->where('ending_date', '<', $newOrdersStartDate)
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
            'invoice_id' => $latestInvoiceId + 1,
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

        $request->paid = $request->paid ?? 0;
        $request->vat_percentage = $request->vat_percentage ?? 0;
        $request->discount = $request->discount ?? 0;
        $request->due = $request->due ?? 0;


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
        $invoice->vat_percentage = $request->vat_percentage;
        $invoice->paid = $request->paid;
        $invoice->discount = $request->discount;
        $invoice->grand_total = $request->grand_total;
        $invoice->due = $request->due;
        $invoice->status = 'approved';
        $invoice->save();

        // change the status of remaining rentals to declined
        $declinedRentals = Rental::where('invoice_id', $request->invoice_id)
            ->where('status', '!=', 'approved')
            ->get();

        if($declinedRentals->count() == 0){
            return redirect()->route('admin.rentals')->with('success','Rental created successfully and is pending approval from the admin'); 
        }

        // Delete the declined rentals
        foreach ($declinedRentals as $declinedRental) {
            $declinedRental->delete();
        }

        return redirect()->route('admin.rentals')->with('success','Rental created successfully and is pending approval from the admin'); 
    }

    public function acceptReturn(Request $request){
        $this->validate($request, [
            'rental_id' => 'required | exists:rentals,id',
            'repair_quantity' => 'nullable | numeric | min:0',
        ]);

        $repairQuantity = $request->repair_quantity ?? 0;
        $rental = Rental::find($request->rental_id);
        $invoice = Invoice::find($rental->invoice_id);
        $product = Product::find($rental->product_id);

        if($repairQuantity > $rental->quantity){
            return redirect()->back()->with('error', 'The repair quantity cannot be more than the rented quantity');
        }

        if($product == null){
            return redirect()->back()->with('error', 'Product not found');
        }

        if($repairQuantity){
            // create a new repair order
            $repair =  new Repair();
            $repair->product_id = $product->id;
            $repair->rental_id = $rental->id;
            $repair->quantity = $request->repair_quantity;
            $repair->save();
        }

        // update the rental status
        $rental->status = 'returned';
        $rental->save();

        // update the stock
        $returnedQuantity = $rental->quantity - $repairQuantity;
        $product->stock += $returnedQuantity;
        $product->save();

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
