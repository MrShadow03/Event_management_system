<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller{
    public function index(){
        return redirect(route('customer.profile'));
        return view('customer.pages.dashboard');
    }
}
