<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Service;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Traits\ImageHandling;

class EmployeeController extends Controller
{
    use ImageHandling;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        $sectionData = Section::where('name', 'team')->first();
        return view('admin.pages.employees', [
            'employees' => $employees,
            'sectionData' => $sectionData,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'name' => 'required | max:255',
            'designation' => 'nullable | max:255',
            'phone_number' => 'nullable | max:255',
            'email' => 'nullable | email | max:255',
            'social_media' => 'nullable | max:255 | url',
            'image' => 'nullable | image | max:2048 | mimes:jpg,jpeg,png,webp',
        ]);

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->designation = $request->designation ?? 'Member';
        $employee->phone_number = $request->phone_number;
        $employee->email = $request->email;
        $employee->social_media = $request->social_media;
        $employee->image = $this->uploadImage('image', 'employee');
        $employee->save();

        return redirect()->back()->with('success', 'Member added successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $request->validate([
            'id' => 'required | exists:employees,id',
            'name' => 'required | max:255',
            'designation' => 'nullable | max:255',
            'phone_number' => 'nullable | max:255',
            'email' => 'nullable | email | max:255',
            'social_media' => 'nullable | max:255 | url',
            'image' => 'nullable | image | max:2048 | mimes:jpg,jpeg,png,webp',
        ]);

        $employee = Employee::find($request->id);
        $employee->name = $request->name;
        $employee->designation = $request->designation ?? 'Member';
        $employee->phone_number = $request->phone_number;
        $employee->email = $request->email;
        $employee->social_media = $request->social_media;
        $employee->image = $this->updateImage('image', 'employee', $employee->image);
        $employee->save();

        return redirect()->back()->with('success', 'Member updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request){
        $employee = Employee::find($request->id);
        $employee->delete();

        return redirect()->back()->with('success', 'Member deleted successfully');
    }

    public function changeStatus(Request $request){
        $employee = Employee::find($request->id);
        $employee->status = !$employee->status;
        $employee->save();

        return redirect()->back()->with('success', 'Member status updated successfully');
    }

    public function updateSection(Request $request){
        $request->validate([
            'id' => 'required | exists:sections,id',
            'description' => 'required | string',
        ]);

        $section = Service::find($request->id);
        $section->description = $request->description;
        $section->save();

        return redirect()->back()->with('success', 'Section settings updated successfully');
    }
}
