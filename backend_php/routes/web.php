<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Stores;
use App\Http\Controllers\Products;
use App\Http\Controllers\StoreProducts;

Route::get('/products', [Products::class, 'getAllProducts']);
Route::get('/stores', [Stores::class, 'getAllStores']);
Route::get('/stores-products', [StoreProducts::class, 'getAllStoreProducts']);

Route::get('/', function () {
    return view('welcome');
});
