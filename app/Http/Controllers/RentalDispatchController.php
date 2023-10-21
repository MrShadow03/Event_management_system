<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalDispatchController extends Controller{
    public function index(){
        $invoices = Invoice::whereHas('rentals', function($query){
            $query->where('status', 'approved');
        })->with(['rentals', 'customer'])->get();

        return view('admin.pages.rental.dispatch.invoices', [
            'invoices' => $invoices,
        ]);
    }
    
    public function show(Invoice $invoice){
        // if invoice is not approved, redirect back
        if($invoice->status != 'approved'){
            return redirect()->back()->with('error', 'Invoice is not approved');
        }
        // get all rentals that are approved
        $invoice->load(['rentals' => function($query){
            $query->where('status', 'approved');
        }, 'customer']);
        
        return view('admin.pages.rental.dispatch.orders', [
            'invoice' => $invoice,
        ]);
    }

    public function update(Rental $rental){
        // check if rental is approved
        if($rental->status != 'approved'){
            return redirect()->back()->with('error', 'Rental is not approved');
        }

        // check if rental is already dispatched
        if($rental->status == 'rented'){
            return redirect()->back()->with('error', 'Rental is already rented');
        }

        // update rental status to rented
        $rental->status = 'rented';
        $rental->save();

        // check if all rentals in invoice are rented
        $hasUnrentedRentals = Rental::where('invoice_id', $rental->invoice_id)
            ->where('status', 'approved')
            ->exists();
        
        if($hasUnrentedRentals){
            return redirect()->back()->with('success', 'Order dispatched successfully');
        }
        
        // if all rentals are rented, update invoice status to rented
        $invoice = Invoice::find($rental->invoice_id);
        $invoice->status = 'rented';
        $invoice->save();

        return redirect()->route('admin.rentals.dispatch')->with('success', 'All the orders in this invoice are dispatched');
    }
}
