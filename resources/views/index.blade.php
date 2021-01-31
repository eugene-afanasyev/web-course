@extends('master')

@section('title', 'e-Shop')

@section('content')
<div class="starter-template">
    <h1>Все товары</h1>
    <div class="row">
        @foreach($products as $product)
            @include('product_card', compact('product'))
        @endforeach
    </div>
</div>
@endsection
