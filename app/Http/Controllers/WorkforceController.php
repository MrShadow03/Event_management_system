<?php

namespace App\Http\Controllers;

use App\Models\Workforce;
use Illuminate\Http\Request;

class WorkforceController extends Controller{

    public function index(){
        $workforces = Workforce::all();
        return view('admin.pages.workforce', [
            'workforces' => $workforces,
        ]);
    }

    public function show(Request $request){
        $workforce = Workforce::find($request->id);
        return view('admin.pages.workforce_single', [
            'workforce' => $workforce,
        ]);
    }
}
