<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Traits\ImageHandling;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    use ImageHandling;
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $customers = Customer::latest()->get();

        return view('admin.pages.customer.customers', [
            'customers' => $customers,
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
     * Display the specified resource.
     */
    public function show(Customer $customer){
        return view('admin.pages.customer.details', [
            'customer' => $customer,
        ]);
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
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
