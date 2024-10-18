<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Products extends Controller
{
    public function getAllProducts()
    {
        $query = "select * from products";
        $products = DB::select($query);
        return response()->json($products);
        // $products = DB::table('products')->get();
        // return response()->json($products);
    }
}
