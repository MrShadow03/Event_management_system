<?php

namespace App\Http\Controllers\website;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(Request $request){
        $categories = Category::all();
        $products = Product::with('category')->where('category_id', $request->id)->get();
        return view('website.pages.products',[
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
