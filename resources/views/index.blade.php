@extends('layouts.app')

@section('title', 'e-commerce')

@section('content')
<div class="starter-template">
    <h1>All Goods</h1>
    <div class="row">
        @foreach($products as $product)
            @include('product_card', compact('product'))
        @endforeach
    </div>
</div>
@endsection
