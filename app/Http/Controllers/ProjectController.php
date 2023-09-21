<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Section;
use App\Traits\ImageHandling;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    use ImageHandling;
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $projects = Project::all();
        $categories = Category::all();
        $sectionData = Section::where('name', 'projects')->first();
        //include project count for each category
        foreach ($categories as $category) {
            $category->project_count = Project::where('category_id', $category->id)->count();
        }
        return view('admin.pages.projects', [
            'projects' => $projects,
            'categories' => $categories,
            'sectionData' => $sectionData,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'bullets' => 'nullable',
            'category_id' => 'required | exists:categories,id',
            'image' => 'nullable | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);

        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->bullets = $this->extractDataToString($request->bullets);
        $project->category_id = $request->category_id;
        $project->image = $this->uploadImage('image', 'project');
        $project->save();

        return redirect()->back()->with('success', 'Project added successfully');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project){
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $request->validate([
            'id' => 'required | exists:projects,id',
            'title' => 'required',
            'description' => 'nullable',
            'bullets' => 'nullable',
            'category_id' => 'required | exists:categories,id',
            'image' => 'nullable | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);

        $project = Project::find($request->id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->bullets = $this->extractDataToString($request->bullets);
        $project->category_id = $request->category_id;
        $project->image = $this->updateImage('image', 'project', $project->image);
        $project->save();

        return redirect()->back()->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }

    public function changeStatus(Request $request){
        $project = Project::find($request->id);
        $project->status = !$project->status;
        $project->save();

        return redirect()->back()->with('success', 'Project status updated successfully');
    }

    public function extractDataToString($dataArray) {
        $resultArray = [];
        
        foreach ($dataArray as $item) {
            // Remove any empty or null values from the inner array
            $item = array_filter($item, fn($value) => $value !== '' && $value !== null);
            
            if (!empty($item)) {
                $resultArray[] = implode(' ', $item);
            }
        }
        
        return implode('*', $resultArray);
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
