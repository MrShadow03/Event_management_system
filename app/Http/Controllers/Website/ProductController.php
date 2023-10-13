<?php

namespace App\Http\Controllers\website;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(Request $request){
        $products = Product::query();

        $category_id = $request->id;
        if($category_id){
            $products->where('category_id', $category_id);
        }

        // Filter by max price
        if($request->has('max_price')){
            $products->where('rental_price', '<=', $request->max_price);
        }

        // Filter by min price
        if($request->has('min_price')){
            $products->where('rental_price', '>=', $request->min_price);
        }

        // Order products
        if($request->has('order_by')){
            if($request->order_by == 'price-asc'){
                $products->orderBy('rental_price', 'asc');
            }elseif($request->order_by == 'price-desc'){
                $products->orderBy('rental_price', 'desc');
            }
        }

        // Pagination
        $limit = 12;
        if($request->has('limit')){
            $limit = $request->limit;
        }


        $products = $products->where('status', 1)->paginate($limit);
        $max_price = Product::where('category_id', $category_id)->orderBy('rental_price', 'desc')->first()->rental_price ?? 100;
        $categories = Category::all();
        $currentCategory = Category::where('id', $request->id)->first();
        return view('website.pages.products',[
            'products' => $products,
            'max_price' => $max_price,
            'categories' => $categories,
            'currentCategory' => $currentCategory,
            'queries' => [
                'max_price' => $request->max_price,
                'min_price' => $request->min_price,
                'order_by' => $request->order_by,
                'limit' => $request->limit,
            ]
        ]);
    }
}
