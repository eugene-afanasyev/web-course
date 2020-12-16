<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', ['products' => $products]);
    }

    public function rawShow() {
        $products = Product::all();
        foreach ($products as $prod) {
            echo $prod->title, '<br>',
            '<img src="' . $prod->image_path . '">',
            '<br>';
        }
    }
}
