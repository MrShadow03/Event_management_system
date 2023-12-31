<?php

namespace App\Http\Controllers\Customer;

use Carbon\Carbon;
use App\Models\Rental;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RentalController extends Controller
{
    public function index(){
        $invoices = Invoice::where('customer_id', auth()->user()->id)->with('rentals')->whereHas('rentals')->latest()->get();
        return view('customer.pages.rental.rentals', [
            'invoices' => $invoices,
        ]);
    }

    public function create(Request $request){
        /**
         * @var Illuminate\Http\Request $request
         */

        $venue = $request->venue ?? null;

        if(!$request->customer_id){
            return redirect()->back()->with('error','Please select a customer');
        }
        
        if(auth()->user()->id != $request->customer_id){
            return redirect()->back()->with('error','You are not authorized to create a rental for another customer');
        }

        if(!$request->date_range){
            return redirect()->back()->with('error','Please select a date range');
        }

        $customer = Customer::find($request->customer_id);

        if(!$customer){
            return redirect()->back()->with('error','Customer not found');
        }

        $dates = $this->parseDateRange($request->date_range);
        $startDate = $dates['start_date'];
        $endDate = $dates['end_date'];
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

        return view('customer.pages.rental.create', [
            'customer' => $customer,
            'products' => $products,
            'start_date' => $startDate,
            'return_date' => $endDate,
            'venue' => $venue,
            'invoice_id' => $latestInvoiceId + 1,
            'number_of_days' => $totalDays,
        ]);
    }

    public function store(Request $request){
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
            'venue' => 'nullable',
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

            // Create a rental
            $rental = new Rental();
            $rental->customer_id = $request->customer_id;
            $rental->product_id = $product_id;
            $rental->invoice_id = $request->invoice_id;
            $rental->starting_date = $request->start_date;
            $rental->ending_date = $request->return_date;
            $rental->number_of_days = $request->number_of_days;
            $rental->quantity = $quantity;
            $rental->status = 'pending approval';
            $rental->save();
        }

        // Create an invoice
        $invoice = new Invoice();
        $invoice->id = $request->invoice_id;
        $invoice->customer_id = $request->customer_id;
        $invoice->user_id = auth()->user()->id;
        $invoice->subtotal = $request->subtotal;
        $invoice->vat_percentage = $request->vat_percentage;
        $invoice->paid = $request->paid;
        $invoice->discount = $request->discount;
        $invoice->grand_total = $request->grand_total;
        $invoice->due = $request->due;
        $invoice->status = 'pending approval';
        $invoice->venue = $request->venue;
        $invoice->save();

        return redirect()->route('customer.rentals')->with('success','Rental created successfully and is pending approval from the admin'); 
    }

    public function edit(Invoice $invoice){
        if($invoice->status != 'pending approval'){
            return redirect()->back()->with('error', 'This invoice is already approved');
        }

        if($invoice->rentals->count() == 0){
            return redirect()->back()->with('error', 'This invoice has no rentals');
        }

        $customer = auth()->user();

        if($invoice->customer_id != $customer->id){
            return abort(404);
        }

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

        //load the rentals with product in the invoice
        $invoice->load('rentals.product');

        return view('customer.pages.rental.edit', [
            'invoice' => $invoice,
            'customer' => $customer,
            'products' => $products,
            'start_date' => $startDate,
            'return_date' => $endDate,
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

        $grand_total = $request->grand_total; // 12,000
        $paid = $request->paid ?? 0; // 0

        $vat_percentage = $request->vat_percentage ?? 0;
        $discount = $request->discount ?? 0;
        $due = $request->due ?? 0;

        $rental_ids = [];

        // For each product create a rental with the status pending approval
        foreach ($request->products as $product_id => $value){
            // get the quantity
            $quantity = $value['quantity'];

            // update or create a rental
            $rental = Rental::where('invoice_id', $request->invoice_id)->where('product_id', $product_id)->first();

            // if the rental exists update it else create it
            if($rental){
                $rental->quantity = $quantity;
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
                $rental->status = 'pending approval';
                $rental->save();
            }

            $rental_ids[] = $rental->id;
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
        $invoice->save();

        // get the declined rentals
        $declinedRentals = Rental::where('invoice_id', $request->invoice_id)->whereNotIn('id', $rental_ids)->get();

        // dd($declinedRentals);

        if($declinedRentals->count() == 0){
            return redirect()->route('customer.rentals')->with('success','Rental updated successfully and is waiting for approval.'); 
        }

        // Delete the declined rentals
        foreach ($declinedRentals as $declinedRental) {
            $declinedRental->delete();
        }

        return redirect()->route('customer.rentals')->with('success','Rental updated successfully and is waiting for approval.'); 
    }

    protected function parseDateRange($dateString) {
        if (preg_match('/^\d{4}-\d{2}-\d{2} to \d{4}-\d{2}-\d{2}$/', $dateString)) {
            $dateParts = explode(" to ", $dateString);
            $startDate = $dateParts[0];
            $endDate = $dateParts[1];

            // if start date is greater than end date then swap
            if (strtotime($startDate) > strtotime($endDate)) {
                $temp = $startDate;
                $startDate = $endDate;
                $endDate = $temp;
            }
            
            return [
                'start_date' => $startDate,
                'end_date' => $endDate,
            ];
        } else {
            return redirect()->back()->with('error','Invalid date range');
        }
    }
}
