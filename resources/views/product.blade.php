@extends('layouts.app')

@section('title', $product->title)

@section('content')
<div class="starter-template">
    <img height="256px" src={{ $product->image }}>
    <h1>{{ $product->title }}</h1>
    <p>Price: <b>{{ $product->price }} $</b></p>
    <p>{{ $product->description }}</p>
    <a class="btn btn-success" href="/basket/1/add">Добавить в корзину</a>
</div>
@endsection
