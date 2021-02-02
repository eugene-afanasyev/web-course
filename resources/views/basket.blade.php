@extends('layouts.app')

@section('title', 'Basket')

@section('content')
<div class="starter-template">
    <h1>Basket</h1>
    <p>Checkout</p>
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
                        <a href={{ route('product', [$product->category->code, $product->code]) }}>
                            <img height="56px" src={{ $product->image }}>
                            {{ $product->title }}
                        </a>
                    </td>
                    <td><span class="badge"> {{ $product->pivot->count }} </span>
                        <div class="btn-group">
                            <form action="{{ route('basket-remove', $product) }}" method="POST">
                                <button type="submit" class="btn btn-danger"><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
                            <form action="{{ route('basket-add', $product) }}" method="POST">
                                <button type="submit" class="btn btn-success"><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
                        </div>
                    </td>
                    <td>{{ $product->price }} $</td>
                    <td> {{ $product->getPriceForCount($product->pivot->count) }} $</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3">The total cost:</td>
                <td>{{ $order->getFullPrice() }} $</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="http://laravel-diplom-1.rdavydov.ru/basket/place">Checkout</a>
        </div>
    </div>
</div>
@endsection
