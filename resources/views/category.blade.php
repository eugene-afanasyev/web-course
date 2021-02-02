@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <div class="starter-template">
        <div class="row">
            <h1>{{$category->name}}</h1>
            <p>{{$category->description}}</p>
            @foreach($category->products as $product)
                @include('product_card', compact('product'))
            @endforeach
        </div>
    </div>
@endsection
