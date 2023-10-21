<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Rental;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RentalReturnController extends Controller
{
    public function index(){
        // get all the invoices with rentals with the status of rented and the ending date is today or before today
        $date = '2023-11-03';
        $invoices = Invoice::whereHas('rentals', function($query) use ($date){
            $query->where('status', 'rented')->whereDate('ending_date', '<=', $date);
        })->with(['rentals.product', 'customer'])->get();

        return view('admin.pages.rental.return.invoices', [
            'invoices' => $invoices,
        ]);
    }

    public function show(Invoice $invoice){
        $date = '2023-11-03';
        $rentalEndingDate = Carbon::parse($invoice->rentals->first()->ending_date)->format('Y-m-d');
        $isEndingDateTodayOrBefore = $rentalEndingDate <= $date;

        if(!$isEndingDateTodayOrBefore){
            return redirect()->back()->with('error', 'This invoice is not yet due');
        }

        if($invoice->rentals->count() == 0){
            return redirect()->back()->with('error', 'This invoice has no rentals');
        }

        //get the rentals with product
        $rentals = Rental::where('invoice_id', $invoice->id)->with('product')->get();

        return view('admin.pages.rental.return.rentals', [
            'invoice' => $invoice,
            'rentals' => $rentals,
        ]);
    }
}