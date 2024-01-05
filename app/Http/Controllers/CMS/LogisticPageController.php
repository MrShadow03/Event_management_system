<?php

namespace App\Http\Controllers\CMS;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogisticPageController extends Controller
{
    public function edit(){
        $section = Page::where('name', 'Logistics')->first()->sections()->where('name', 'logistic_page_info')->first();
        return view('admin.pages.logistic_general_info', [
            'section' => $section,
        ]);
    }
}
