<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
});

//Route::get('users/', [UserController::class, 'show']);

//Route::get('products/', [ProductController::class, 'rawShow']);

Route::get('categories/', function () {
    return view('categories');
});
