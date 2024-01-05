<?php

namespace App\Http\Controllers\Website;

use App\Models\Section;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogisticController extends Controller
{
    public function index(){
        $section = Section::where('name', 'logistic_page_info')->first();
        $categories = Category::with('products')->get();
        
        return view('website.pages.logistics', [
            'section' => $section,
            'categories' => $categories,
        ]);
    }
}
