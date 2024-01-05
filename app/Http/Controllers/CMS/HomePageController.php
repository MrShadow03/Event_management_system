<?php

namespace App\Http\Controllers\CMS;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function edit(){
        $section = Page::where('name', 'Home')->first()->sections()->where('name', 'about')->first();
        return view('admin.pages.home_general_info',  [
            'section' => $section,
        ]);
    }

    public function editReviewCta(){
        $section = Page::where('name', 'Home')->first()->sections()->where('name', 'review_CTA')->first();
        return view('admin.pages.home_review_cta',  [
            'section' => $section,
        ]);
    }
}
