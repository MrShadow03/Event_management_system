<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalProfileController extends Controller{
    public function index(){
        return view('admin.pages.profile.user-profile');
    }
}
