<?php

namespace App\Http\Controllers\Reporting;

use App\Models\Product;
use App\Models\Section;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller{
    public function index(){
        $products = Product::with('category')->latest()->get();
        $categories = Category::all();
        $sectionData = Section::where('name', 'products')->first();
        $lastProduct = Product::with('category')->orderBy('id', 'desc')->first() ?? null;

        //include product count for each category
        foreach ($categories as $category) {
            $category->product_count = Product::where('category_id', $category->id)->count();
        }
        return view('admin.pages.reporting.products', [
            'products' => $products,
            'categories' => $categories,
            'sectionData' => $sectionData,
            'lastProduct' => $lastProduct,
        ]);
    }
}
