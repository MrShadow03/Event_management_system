<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Section;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\ImageHandling;

class ProductController extends Controller
{
    use ImageHandling;
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $products = Product::with('category')->latest()->get();
        $categories = Category::all();
        $sectionData = Section::where('name', 'products')->first();
        $lastProduct = Product::with('category')->orderBy('id', 'desc')->first() ?? null;

        //include product count for each category
        foreach ($categories as $category) {
            $category->product_count = Product::where('category_id', $category->id)->count();
        }
        return view('admin.pages.products', [
            'products' => $products,
            'categories' => $categories,
            'sectionData' => $sectionData,
            'lastProduct' => $lastProduct,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'category_id' => 'required | exists:categories,id',
            'product_code' => 'required',
            'dimension' => 'nullable',
            'color' => 'nullable',
            'stock' => 'nullable',
            'rental_price' => 'nullable',
            'image' => 'nullable | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);

        // if the product code already exists then return error
        $product = Product::where('product_code', $request->product_code)->first();
        if($product){
            return redirect()->back()->with('error', 'Product code already exists');
        }

        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->product_code = $request->product_code;
        $product->dimension = $request->dimension;
        $product->color = $request->color;
        $product->stock = $request->stock;
        $product->rental_price = $request->rental_price;
        $product->image = $this->uploadImage('image', 'product');
        $product->save();

        return redirect()->back()->with('success', 'Product added successfully');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product){
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $request->validate([
            'id' => 'required | exists:products,id',
            'name' => 'required',
            'category_id' => 'required | exists:categories,id',
            'product_code' => 'required | unique:products,product_code,'.$request->id,
            'dimension' => 'nullable',
            'color' => 'nullable',
            'stock' => 'nullable',
            'rental_price' => 'nullable',
            'image' => 'nullable | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);

        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->product_code = $request->product_code;
        $product->dimension = $request->dimension;
        $product->color = $request->color;
        $product->stock = $request->stock;
        $product->rental_price = $request->rental_price;
        $product->image = $this->updateImage('image', 'product', $product->image);
        $product->save();

        return redirect()->back()->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function archive(){
        $product = Product::find(request()->id);
        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }

    public function changeStatus(Request $request){
        $product = Product::find($request->id);
        $product->status = !$product->status;
        $product->save();

        return redirect()->back()->with('success', 'Product status updated successfully');
    }
}
