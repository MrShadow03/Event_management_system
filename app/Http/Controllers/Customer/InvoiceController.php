<?php

namespace App\Http\Controllers\Customer;

use App\Models\User;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function show(Invoice $invoice){
        $invoice->load('customer', 'rentals.product');
        $user = User::find($invoice->user_id)->name ?? 'Deleted User';
        return view('customer.pages.invoice.show', [
            'invoice' => $invoice,
            'admin' => $user,
        ]);
    }
}
