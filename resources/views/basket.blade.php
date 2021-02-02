@extends('layouts.app')

@section('title', 'Basket')

@section('content')
<div class="container">
    <h1 class="text-center" style="margin: 20px">Basket</h1>
    <p class="text-center" style="font-size: 20px">Checkout</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Title</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>The cost</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a class="h4" style="margin: 5px" href={{ route('product', [$product->category->code, $product->code]) }}>
                            <img height="128px" src={{ $product->image }}>
                            {{ $product->title }}
                        </a>
                    </td>
                    <td>
                        <span class="badge badge-pill badge-info" style="font-size: 18px">
                            {{ $product->pivot->count }}
                        </span>
                        <div class="btn-group">
                            <form action="{{ route('basket-remove', $product) }}" method="POST" >
                                <button type="submit" class="btn btn-danger" aria-label="Left Align">
                                    <span class="input-group-addon"
                                          style="font-size: medium; font-weight: bold">-</span>
                                </button>
                                @csrf
                            </form>
                            <form action="{{ route('basket-add', $product) }}" method="POST">
                                <button type="submit" class="btn btn-success">
                                    <span class="input-group-addon"
                                          style="font-size: medium; font-weight: bold">+</span>
                                </button>
                                @csrf
                            </form>
                        </div>
                    </td>
                    <td>{{ $product->price }} $</td>
                    <td> {{ $product->getPriceForCount($product->pivot->count) }} $</td>
                </tr>
            @endforeach

            </tbody>

        </table>
        <br>
        <div class="row">
            <h2 style="font-weight: bold; margin-left: 20px; margin-right: 10px">The total cost:</h2>
            <span class="badge badge-light text-center" style="font-size: 18px; padding: 10px"> {{ $order->getFullPrice() }} $ </span>
        </div>
        <div class="btn-group float-right" role="group">
            <a type="button" class="btn btn-success" href="http://laravel-diplom-1.rdavydov.ru/basket/place">Checkout</a>
        </div>
    </div>
</div>
@endsection
