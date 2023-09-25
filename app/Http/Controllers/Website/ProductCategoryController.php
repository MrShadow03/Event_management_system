<?php

namespace App\Http\Controllers\website;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('website.pages.logistics', [
            'categories' => $categories,]
        );
    }
}
