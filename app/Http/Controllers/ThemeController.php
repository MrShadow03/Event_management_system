<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index(){
        return view('admin.pages.theme.view');
    }

    public function create(){
        return view('admin.pages.theme.create', [
            'products' => Product::limit(10)->get(),
        ]);
    }
}
