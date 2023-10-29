<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerDepositController extends Controller
{
    public function update(Request $request, $id)
    {
        if($request->amount <= 0){
            return redirect()->back()->with('error', 'Deposit must be greater than 0');
        }
        if(!Customer::find($id)){
            return redirect()->back()->with('error', 'Customer not found');
        }

        $customer = Customer::find($id);
        $customer->deposit += $request->amount;
        $customer->save();

        return redirect()->back()->with('success', $request->amount . ' has been added to ' . $customer->name . '\'s account');
    }
}
