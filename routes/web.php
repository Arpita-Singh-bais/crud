<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);