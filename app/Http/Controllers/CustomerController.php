<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Traits\ImageHandling;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    use ImageHandling;
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $customers = Customer::with('rentals', 'invoices.rentals')->latest()->get();
        
        return view('admin.pages.customer.customers', [
            'customers' => $customers,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer){
        $latestInvoice = $customer->invoices()->latest()->first() ?? null;
        return view('admin.pages.customer.details', [
            'customer' => $customer,
            'latestInvoice' => $latestInvoice,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:customers',
            'phone_number' => 'required|numeric|unique:customers',
            'company' => 'nullable|string',
            'address' => 'nullable|string',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:1024',
        ]);

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->company = $request->company;
        $customer->password = bcrypt($request->phone_number);
        $customer->image = $this->uploadImage('image', 'customers');
        $customer->save();

        return redirect()->back()->with('success','Customer created successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:customers,email,'.$customer->id,
            'phone_number' => 'required|unique:customers,phone_number,'.$customer->id,
            'company' => 'nullable|string',
            'address' => 'nullable|string',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:1024',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->company = $request->company;
        $customer->image = $this->updateImage('image', 'customers', $customer->image);
        $customer->save();

        return redirect()->back()->with('success', $customer->name.'\'s profile updated successfully!');
    }
    
    public function updatePassword(Request $request, Customer $customer){
        $validator = Validator::make($request->all(), [
            'admin_password' => 'required|string',
            'password' => 'required|string|min:4|confirmed',
        ]);

        // dd($request->all());
        if ($validator->fails()) {
            return redirect(route('admin.customer.show', $customer->id).'#update')->with('error', $validator->errors()->first());
        }

        if(!Hash::check($request->admin_password, Auth::user()->password)){
            return redirect()->back()->with('error', 'Admin password does not match!');
        }

        $customer->password = bcrypt($request->password);
        $customer->save();

        return redirect(route('admin.customer.show', $customer->id).'#update')->with('success', $customer->name.'\'s password updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
