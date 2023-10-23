<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index(){
        $rentals = Rental::with('customer', 'product', 'invoice')->latest()->get();
        $customers = Customer::all();
        return view('admin.pages.rental.rentals', [
            'rentals' => $rentals,
            'customers' => $customers,
        ]);
    }

    public function create(Request $request){
        if(!$request->customer_id){
            return redirect()->back()->with('error','Please select a customer');
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

        $rentedOrders = Rental::whereIn('status', ['approved','rented'])
            ->where('ending_date', '<', $newOrdersStartDate)
            ->get();

        foreach ($products as $product) {
            $product->stock += $rentedOrders
                ->where('product_id', $product->id)
                ->sum('quantity');
        }

        $latestInvoiceId = Invoice::max('id') ?? 1300;

        return view('admin.pages.rental.create', [
            'customer' => $customer,
            'products' => $products,
            'start_date' => $startDate,
            'return_date' => $endDate,
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
        $invoice->save();

        $grandTotal = $request->subtotal + ($request->subtotal * $request->vat_percentage / 100) - $request->discount - $request->paid;
        

        return redirect()->route('admin.rentals')->with('success','Rental created successfully and is pending approval from the admin with and grand total: ' . $grandTotal . ' BDT'); 
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
