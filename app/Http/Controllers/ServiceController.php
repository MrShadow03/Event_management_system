<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Section;
use App\Models\Service;
use App\Traits\ImageHandling;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    use ImageHandling;
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $services = Service::all();
        $sectionData = Section::where('name', 'services')->first();
        return view('admin.pages.services', [
            'services' => $services,
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
            'icon' => 'nullable',
            'image' => 'nullable | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);

        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->bullets = $this->extractDataToString($request->bullets);
        $service->icon = $request->icon;
        $service->image = $this->uploadImage('image', 'service');
        $service->save();

        return redirect()->back()->with('success', 'Service added successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service){
        $request->validate([
            'id' => 'required | exists:services,id',
            'title' => 'required',
            'description' => 'nullable',
            'bullets' => 'nullable',
            'icon' => 'nullable',
            'image' => 'nullable | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);

        $service = Service::find($request->id);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->bullets = $this->extractDataToString($request->bullets);
        $service->icon = $request->icon;
        $service->image = $this->updateImage('image', 'service', $service->image);
        $service->save();

        return redirect()->back()->with('success', 'Service updated successfully');
    }

    public function changeStatus(Request $request){
        $service = Service::find($request->id);
        $service->status = !$service->status;
        $service->save();

        return redirect()->back()->with('success', 'Service status updated successfully');
    }

    public function destroy(Request $request){
        $service = Service::find($request->id);
        $service->delete();

        return redirect()->back()->with('success', 'Service deleted successfully');
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
}
