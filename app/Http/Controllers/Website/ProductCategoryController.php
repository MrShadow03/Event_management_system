<?php

namespace App\Http\Controllers\Website;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{
    public function index(){
        $categories = Category::with('products')->get();
        return view('website.pages.logistics', [
            'categories' => $categories,
            ]
        );
    }
}
