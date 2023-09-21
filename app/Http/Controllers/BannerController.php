<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Traits\ImageHandling;

class BannerController extends Controller
{
    use ImageHandling;

    public function index(){
        $banners = Banner::all();
        return view('admin.pages.banners', [
            'banners' => $banners
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required | max:255',
            'description' => 'nullable',
            'image' => 'required | image | max:2048 | mimes:jpg,jpeg,png,webp',
            'video' => 'nullable | url | max:255'
        ]);

        $banner = new Banner();
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->image = $this->uploadImage('image', 'banner', 'default.jpg');
        $banner->video = $request->video;
        $banner->save();

        return redirect()->back()->with('success', 'Banner added successfully');
    }

    public function update(Request $request){
        $request->validate([
            'id' => 'required | exists:banners,id',
            'title' => 'required | max:255',
            'description' => 'nullable',
            'image' => 'nullable | image | max:2048 | mimes:jpg,jpeg,png,webp',
            'video' => 'nullable | url | max:255'
        ]);


        $banner = Banner::find($request->id);
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->image = $this->updateImage('image', 'banner', $banner->image, 'default.jpg');
        $banner->video = $request->video;
        $banner->save();

        return redirect()->back()->with('success', 'Banner updated successfully');
    }

    public function changeStatus(Request $request){
        $banner = Banner::find($request->id);
        $banner->status = !$banner->status;
        $banner->save();

        return redirect()->back()->with('success', 'Banner status updated successfully');
    }

    public function destroy(Request $request){
        $banner = Banner::find($request->id);
        $banner->delete();

        return redirect()->back()->with('success', 'Banner deleted successfully');
    }
}
