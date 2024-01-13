<?php

namespace App\Http\Controllers\Reporting;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rental;

class OrderController extends Controller
{
    public function index(){
        //get all the invoices with at least one order with the customer and the first order
        $invoices = Invoice::orderBy('created_at', 'desc')->whereHas('rentals')->with('customer')->get();

        // get the starting date for each deu
        foreach ($invoices as $invoice) {
            $invoice->starting_date = Rental::where('invoice_id', $invoice->id)->orderBy('created_at', 'asc')->first()->starting_date;
        }

        return view('admin.pages.reporting.orders', [
            'dues' => $invoices,
        ]);
    }
}
