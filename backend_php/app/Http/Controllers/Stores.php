<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Stores extends Controller
{
    public function getAllStores()
    {
        $query = "select * from stores";
        $stores = DB::select($query);
        return response()->json($stores);
    }
}
