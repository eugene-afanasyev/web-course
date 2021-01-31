<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = findOrFail($orderId);
        }
        return view('basket');
    }

    public function basketPlace()
    {
        return view('order');
    }

    public function addItem($productId)
    {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        $order->products()->attach($productId);

        return view('basket', compact('order'));
    }
}
