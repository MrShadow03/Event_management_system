<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Invoice;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InvoiceController extends Controller
{
    public function show(Invoice $invoice){
        // if invoice does not exist, return error
        if(!$invoice){
            return redirect()->back()->with('error', 'Invoice does not exist');
        }
        $invoice->load('customer', 'rentals.product', 'transactions');
        $user = User::find($invoice->user_id) ?? null;
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

        // if invoice is pending then return error
        if($invoice->status == 'pending approval'){
            return redirect()->back()->with('error', "Invoice is not approved yet!");
        }

        // if the amount is greater than the due amount then return error
        if($request->amount > $invoice->due){
            return redirect()->back()->with('error', "Amount is greater than due amount");
        }

        if($amount > $customer->deposit){
            return redirect()->back()->with('error', "Insufficient deposit");
        }

        // determine the amount to be collected
        $amount = $amount > $customer->deposit ? $customer->deposit : $amount;

        // collect the due
        $invoice->collectDue($amount);

        // update the deposit
        $customer->deposit -= $amount;
        $customer->deposit = $customer->deposit < 0 ? 0 : $customer->deposit;
        $customer->save();

        Transaction::create([
            'user_id' => auth()->user()->id,
            'customer_id' => $customer->id,
            'invoice_id' => $invoice->id,
            'type' => 'due collection',
            'amount' => $amount,
            'balance' => $customer->deposit,
            'description' => 'due collection',
        ]);

        return redirect()->back()->with('success',"{$request->amount} collected from invoice {$request->invoice_id}");
    }
}
