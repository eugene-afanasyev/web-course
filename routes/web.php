<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BasketController;

Route::get('/', 'MainController@index')->name('index');

Route::get('/basket', 'BasketController@basket')->name('basket');
Route::get('/basket/place', 'BasketController@basketPlace')->name('basket-place ');
Route::post('basket/add/{id}', 'BasketController@addItem')->name('basket-add');
Route::post('basket/remove/{id}', 'BasketController@removeItem')->name('basket-remove');

Route::get('/categories', 'MainController@categories')->name('categories');
Route::get('/{category}', 'MainController@category')->name('category');
Route::get('/{category}/{product}', 'MainController@product')->name('product');


