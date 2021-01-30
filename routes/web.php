<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', 'MainController@index');
Route::get('/categories', 'MainController@categories');
Route::get('/{category}', 'MainController@category');
Route::get('/mobiles/{product}', 'MainController@product');

