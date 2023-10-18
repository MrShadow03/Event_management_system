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
        $rentals = Rental::with('customer', 'product', 'invoice')->get();
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
        $rentedOrders = Rental::where('status', 'rented')
            ->where('ending_date', '<', $newOrdersStartDate)
            ->get();

        foreach ($products as $product) {
            $product->stock += $rentedOrders
                ->where('product_id', $product->id)
                ->sum('quantity');
        }

        $latestInvoiceId = Invoice::latest()->first()->id ?? 1300;

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
        $request->validate([
            'customer_id' => 'required | exists:customers,id',
            'invoice_id' => 'required',
            'start_date' => 'required',
            'return_date' => 'required',
            'number_of_days' => 'required',
            'products' => 'required | array',
        ]);

        // For each product create a rental and update the stock
        foreach ($request->products as $product_id => $value){
            // Update the stock
            $quantity = $value['quantity'];
            $product = Product::find($product_id);
            $product->stock -= $quantity;
            $product->save();

            // Create a rental
            $rental = new Rental();
            $rental->customer_id = $request->customer_id;
            $rental->product_id = $product_id;
            $rental->invoice_id = $request->invoice_id;
            $rental->starting_date = $request->start_date;
            $rental->ending_date = $request->return_date;
            $rental->number_of_days = $request->number_of_days;
            $rental->quantity = $quantity;
            $rental->status = 'rented';
            $rental->save();
        }

        // Create an invoice
        $invoice = new Invoice();
        $invoice->id = $request->invoice_id;
        $invoice->customer_id = $request->customer_id;
        $invoice->user_id = auth()->user()->id;
        $invoice->save();

        return redirect()->route('admin.rentals')->with('success','Rental created successfully');
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
