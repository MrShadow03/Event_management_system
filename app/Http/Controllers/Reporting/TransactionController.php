<?php

namespace App\Http\Controllers\Reporting;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::with(['user', 'customer', 'invoice'])->get();

        return view('admin.pages.reporting.transactions', [
            'transactions' => $transactions,
        ]);
    }
}
