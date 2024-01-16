<?php

namespace App\Http\Controllers\Reporting;

use App\Models\Rental;
use App\Models\Product;
use App\Models\Section;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller{
    public function index(){
        $products = Product::with('category')->get();
        $categories = Category::all();

        
        // Get the total product count
        /**
         * @var \App\Models\Product $products
         */
        foreach ($products as $product){
            $product->available = $product->stock;
            $stock = $product->stock;
            $rental_count = Rental::where('product_id', $product->id)->whereIn('status', ['approved', 'rented'])->sum('quantity');
            $product->stock = $stock + $rental_count;
            $product->times_rented = Rental::where('product_id', $product->id)->whereIn('status', ['approved', 'rented', 'returned'])->count();
            $rents = Rental::where('product_id', $product->id)->whereIn('status', ['approved', 'rented', 'returned'])->with('product')->get();
            $product->in_rental = Rental::where('product_id', $product->id)->whereIn('status', ['approved', 'rented'])->sum('quantity');
            $product->total_rented_quantity = Rental::where('product_id', $product->id)->whereIn('status', ['approved', 'rented', 'returned'])->sum('quantity');

            $product->total_revenue = 0;
            foreach ($rents as $rent){
                $product->total_revenue += $rent->product->rental_price * $rent->quantity * $rent->number_of_days;
            }

            $product->average_duration = $product->times_rented ? (Rental::where('product_id', $product->id)->whereIn('status', ['approved', 'rented', 'returned'])->sum('number_of_days') / $product->times_rented) : 0;

            $product->latest_rental = Rental::where('product_id', $product->id)->whereIn('status', ['approved', 'rented', 'returned'])->orderBy('created_at', 'desc')->first() ? Rental::where('product_id', $product->id)->whereIn('status', ['approved', 'rented', 'returned'])->orderBy('created_at', 'desc')->first()->created_at : null;
        }

        $products = $products->sortByDesc('total_revenue');

        return view('admin.pages.reporting.products', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
