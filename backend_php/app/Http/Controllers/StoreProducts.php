<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class StoreProducts extends Controller
{
    public function getAllStoreProducts()
    {
        $query = "Select * from storeproducts";
        $storeProduct = DB::select($query);
        return response()->json($storeProduct)->header("Access-Control-Allow-Origin",  "*");;
    }
}
