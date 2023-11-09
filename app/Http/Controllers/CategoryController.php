<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Traits\ImageHandling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller{
    use ImageHandling;
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'name_bangla' => 'nullable|string|max:255',
            'image' => 'nullable | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);

        // if the category name already exists then return error
        $category = Category::where('name', $request->name)->first();
        if($category){
            return redirect()->back()->with('error', 'Category already exists');
        }

        $category = new Category();
        $category->name = $request->name;
        $category->name_bangla = $request->name_bangla;
        $category->image = $this->uploadImage('image', 'category', 'default.png');
        $category->save();

        return redirect()->back()->with('success', 'Category created');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $request->validate([
            'id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'name_bangla'=> 'nullable|string|max:255',
            'image' => 'nullable | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);

        // if the category name already exists then return error
        $category = Category::where('name', $request->name)->first();
        if($category && $category->id != $request->id){
            return redirect()->back()->with('error', 'Category already exists');
        }

        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->name_bangla = $request->name_bangla;
        $category->image = $this->updateImage('image', 'category', $category->image, 'default.png');
        $category->save();

        return redirect()->back()->with('success', 'Category updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request){
        //check if category has products
        $category = Category::find($request->id);
        
        $hasProduct = $category->products()->count();
        $isDefault = $category->id == 1;

        if($hasProduct || $isDefault){
            return redirect()->back()->with('error', 'Category cannot be deleted');
        }

        $category->delete();
        //delete image
        $hasImage = Storage::disk('public')->exists($category->image);
        if($hasImage){
            Storage::disk('public')->delete($category->image);
        }

        return redirect()->back()->with('success', 'Category deleted');
    }

    public function createCategories(){
        $categoryNames = ['Artificial Tree', 'Centerpieces', 'Chair', 'Chair Ribbon', 'Chandelier', 'Cloth', 'Extra', 'Flower Vase', 'Fountain', 'Hanging', 'Head Table', 'Lighting', 'Metal', 'Platform', 'Showpiece', 'Sofa', 'Table & Tools', 'Table Runner', 'Table Top', 'Umbrella', 'Walkway', 'Wood Design'];

        foreach($categoryNames as $categoryName){
            $category = new Category();
            $category->name = $categoryName;
            $category->image = 'category/default.png';
            $category->save();
        }
    }
}