<?php

namespace App\Http\Controllers\Customer;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ImageHandling;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller{
    use ImageHandling;

    public function index(){
        $customer = Customer::find(Auth::user()->id)->load('invoices');
        $latestInvoice = $customer->invoices()->latest()->first() ?? null;
        return view('customer.pages.profile',[
            'customer' => $customer,
            'latestInvoice' => $latestInvoice,
        ]);
    }

    public function update(Request $request, Customer $customer){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:customers,email,'.$customer->id,
            'phone_number' => 'required|unique:customers,phone_number,'.$customer->id,
            'company' => 'nullable|string',
            'address' => 'nullable|string',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:1024',
        ]);

        if ($validator->fails()) {
            return redirect(route('customer.profile', $customer->id).'#update')->with('error', $validator->errors()->first());
        }

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->company = $request->company;
        $customer->image = $this->updateImage('image', 'customers', $customer->image);
        $customer->save();

        return redirect(route('customer.profile', $customer->id).'#update')->with('success', 'Your profile updated successfully!');
    }
    
    public function updatePassword(Request $request, Customer $customer){

        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'password' => 'required|string|min:4|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect(route('customer.profile', $customer->id).'#update')->with('error', $validator->errors()->first());
        }

        if(!Hash::check($request->current_password, Auth::user()->password)){
            return redirect()->back()->with('error', 'Incorrect current password!');
        }

        $customer->password = bcrypt($request->password);
        $customer->save();

        return redirect(route('customer.profile', $customer->id).'#update')->with('success', $customer->name.'\'s password updated successfully!');
    }
}
