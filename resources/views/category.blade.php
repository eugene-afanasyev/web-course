@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <div class="container-fluid">
        <h1 class="text-center" style="margin: 20px">{{$category->name}}</h1>
        <p class="text-center" style="font-size: 20px">{{$category->description}}</p>
        <div class="row">
            @foreach($category->products as $product)
                @include('product_card', compact('product'))
            @endforeach
        </div>
    </div>
@endsection
