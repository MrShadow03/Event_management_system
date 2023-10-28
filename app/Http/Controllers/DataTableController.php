<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DataTableController extends Controller
{
    public function products(){
        
        $query = Product::select('products.id as id', 'products.name as name', 'product_code', 'rental_price', 'stock', 'dimension','products.status as status','categories.name as category')->join('categories', 'categories.id', '=', 'products.category_id');

        return datatables($query)->toJson();
    }
}
