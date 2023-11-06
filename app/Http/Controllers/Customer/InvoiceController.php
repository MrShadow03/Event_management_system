<?php

namespace App\Http\Controllers\Customer;

use App\Models\User;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function show(Invoice $invoice){
        if($invoice->customer_id != auth()->user()->id){
            return abort(404, "Invoice not found");
        }
        $invoice->load('customer', 'rentals.product');
        $user = User::find($invoice->user_id) ?? null;
        return view('customer.pages.invoice.show', [
            'invoice' => $invoice,
            'admin' => $user,
        ]);
    }
}
