<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\CompanyHistory;
use App\Traits\ImageHandling;

class CompanyHistoryController extends Controller
{
    use ImageHandling;
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $company_histories = CompanyHistory::orderBy('date')->get();
        $sectionData = Section::where('name', 'company-history')->first();
        return view('admin.pages.company_histories', [
            'company_histories' => $company_histories,
            'sectionData' => $sectionData,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'milestone' => 'required',
            'description' => 'nullable',
            'date' => 'nullable | date',
            'image' => 'nullable | mimes:jpeg,png,jpg,webp | max:2048',
        ]);

        $company_history = new CompanyHistory();
        $company_history->milestone = $request->milestone;
        $company_history->description = $request->description;
        $company_history->date = $request->date;
        $company_history->image = $this->uploadImage('image', 'gallery');
        $company_history->save();

        return redirect()->back()->with('success', 'Company History added successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $request->validate([
            'id' => 'required | exists:company_histories,id',
            'milestone' => 'required',
            'description' => 'nullable',
            'date' => 'nullable | date',
            'image' => 'nullable | mimes:jpeg,png,jpg,webp | max:2048',
        ]);

        $company_history = CompanyHistory::find($request->id);
        $company_history->milestone = $request->milestone;
        $company_history->description = $request->description;
        $company_history->date = $request->date;
        $company_history->image = $this->updateImage('image', 'gallery', $company_history->image);
        $company_history->save();

        return redirect()->back()->with('success', 'Company History updated successfully');
    }

    public function changeStatus(Request $request){
        $company_history = CompanyHistory::find($request->id);
        $company_history->status = !$company_history->status;
        $company_history->save();

        return redirect()->back()->with('success', 'Company History status updated successfully');
    }

    public function destroy(Request $request){
        $company_history = CompanyHistory::find($request->id);
        $company_history->delete();

        return redirect()->back()->with('success', 'Company History deleted successfully');
    }
}
