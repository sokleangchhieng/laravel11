<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/product',function(){
//   return view('product');
// });


// Route::get('/product/create',function(){
//     return view('create');
// });

// Route::get('/product/edit',function(){
//   return view('edit');
// });

///Router with controller

Route::get('/product',[ProductController::class,'index']);

Route::get('/product/create',[ProductController::class,'create']);

Route::get('/product/edit',[ProductController::class,'edit']);
