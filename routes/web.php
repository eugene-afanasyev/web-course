<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', 'MainController@index');
Route::get('/categories', 'MainController@categories');
Route::get('/mobiles/iphone', 'MainController@product');

