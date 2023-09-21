<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Section;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $feedbacks = Feedback::all();
        $sectionData = Section::where('name', 'feedbacks')->first();
        return view('admin.pages.feedbacks', [
            'feedbacks' => $feedbacks,
            'sectionData' => $sectionData,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'feedback' => 'required'
        ]);

        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->feedback = $request->feedback;
        $feedback->save();

        return redirect()->back()->with('success', 'Feedback added successfully');
    }

    public function update(Request $request){
        $request->validate([
            'id' => 'required | exists:feedbacks,id',
            'name' => 'required',
            'feedback' => 'required'
        ]);

        $feedback = Feedback::find($request->id);
        $feedback->name = $request->name;
        $feedback->feedback = $request->feedback;
        $feedback->save();

        return redirect()->back()->with('success', 'Feedback updated successfully');
    }

    public function changeStatus(Request $request){
        $feedback = Feedback::find($request->id);
        $feedback->status = !$feedback->status;
        $feedback->save();

        return redirect()->back()->with('success', 'Feedback status updated successfully');
    }

    public function destroy(Request $request){
        $feedback = Feedback::find($request->id);
        $feedback->delete();

        return redirect()->back()->with('success', 'Feedback deleted successfully');
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
