<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Invoice;
use App\Models\Customer;
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
            'payment_method' => 'required|string',
        ]);

        // Manually pass the errors to the validation instance
        if ($validator->fails()) {
            $errors = $validator->errors();
            $messageText = $errors->first();
            return redirect()->back()->with('error', $messageText);
        }

        // Find the invoice
        $invoice = Invoice::find($request->invoice_id);
        $customer = Customer::find($invoice->customer_id);
        $amount = $request->amount;

        // if the amount is greater than the due amount then return error
        if($request->amount > $invoice->due){
            return redirect()->back()->with('error', "Amount is greater than due amount");
        }

        if($request->payment_method == 'deposit'){
            // determine the amount to be collected
            $amount = $amount > $customer->deposit ? $customer->deposit : $amount;

            // collect the due
            $invoice->collectDue($amount);

            // update the deposit
            $customer->deposit -= $amount;
            $customer->deposit = $customer->deposit < 0 ? 0 : $customer->deposit;
            $customer->save();

            return redirect()->back()->with('success',"{$request->amount} collected from invoice {$request->invoice_id}");
        }

        $invoice->collectDue($amount);

        return redirect()->back()->with("success","{$request->amount} collected from invoice {$request->invoice_id}");
    }
}
