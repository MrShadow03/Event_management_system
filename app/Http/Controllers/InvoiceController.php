<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function show(Invoice $invoice)
    {
        $invoice->load('customer', 'rentals.product');
        return view('admin.pages.invoice.show', [
            'invoice' => $invoice,
        ]);
    }
}
