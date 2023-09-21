<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::create([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Category created');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $request->validate([
            'id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
        ]);

        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->save();

        return redirect()->back()->with('success', 'Category updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request){
        //check if category has projects
        $category = Category::find($request->id);
        
        $hasProjects = $category->projects()->count();
        $isDefault = $category->id == 1;

        if($hasProjects || $isDefault){
            return redirect()->back()->with('error', 'Category cannot be deleted');
        }

        $category->delete();

        return redirect()->back()->with('success', 'Category deleted');
    }
}
