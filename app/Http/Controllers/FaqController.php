<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Section;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $faqs = Faq::all();
        $sectionData = Section::where('name', 'faq')->first();
        return view('admin.pages.faqs', [
            'faqs' => $faqs,
            'sectionData' => $sectionData,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect()->back()->with('success', 'Faq added successfully');
    }

    public function update(Request $request){
        $request->validate([
            'id' => 'required | exists:faqs,id',
            'question' => 'required',
            
        ]);

        $faq = Faq::find($request->id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect()->back()->with('success', 'Faq updated successfully');
    }

    public function changeStatus(Request $request){
        $faq = Faq::find($request->id);
        $faq->status = !$faq->status;
        $faq->save();

        return redirect()->back()->with('success', 'Faq status updated successfully');
    }

    public function destroy(Request $request){
        $faq = Faq::find($request->id);
        $faq->delete();

        return redirect()->back()->with('success', 'Faq deleted successfully');
    }

    public function updateSection(Request $request){
        $request->validate([
            'id' => 'required | exists:sections,id',
            'description' => 'required | string',
        ]);

        $section = Section::find($request->id);
        $section->description = $request->description;
        $section->save();

        return redirect()->back()->with('success', 'Section settings updated successfully');
    }
}
