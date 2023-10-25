<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InvoiceController extends Controller
{
    public function show(Invoice $invoice){
        $invoice->load('customer', 'rentals.product');
        $user = User::find($invoice->user_id)->name ?? 'Deleted User';
        return view('admin.pages.invoice.show', [
            'invoice' => $invoice,
            'admin' => $user,
        ]);
    }

    public function collectDue(Request $request){
        // Validate the request
        $validator = Validator::make($request->all(), [
            'invoice_id' => 'required|exists:invoices,id',
            'amount' => 'required|numeric|min:1',
        ]);

        // Manually pass the errors to the validation instance
        if ($validator->fails()) {
            $errors = $validator->errors();
            $messageText = $errors->first();
            return redirect()->back()->with('error', $messageText);
        }

        Invoice::find($request->invoice_id)->collectDue($request->amount);

        return redirect()->back()->with('success',"{$request->amount} collected from invoice {$request->invoice_id}");
    }
}
