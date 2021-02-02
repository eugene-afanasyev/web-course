<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('index', compact('products'));
    }

    public function categories() {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function product($category, $code = null) {
        $product = Product::where('code', $code)->first();
        return view('product', ['product' => $product]);
    }

    public function category($name) {
        $category = Category::where('name', $name)->first();
        return view('category', compact('category'));
    }

    public function basket() {
        return view('basket');
    }

}
