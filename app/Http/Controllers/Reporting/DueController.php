<?php

namespace App\Http\Controllers\Reporting;

use App\Models\Invoice;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DueController extends Controller
{
    public function index(){
        $dues = Invoice::where('due', '>', 0)->where('status' , '!=', 'pending approval')->orderBy('created_at', 'desc')->with('customer')->get();

        return view('admin.pages.reporting.dues', [
            'dues' => $dues,
        ]);
    }
}
