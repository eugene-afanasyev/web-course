@extends('layouts.app')

@section('title',  "Categories")

@section('content')
<div class="starter-template">
    @foreach(\App\Models\Category::all() as $category)
        <div class="panel">
            <a href="{{ route('category', $category->name)}}">
            <img height="128px" src={{ $category->image }}>
            <h2>{{$category->name}}</h2>
            </a>
            <p>
                {{$category->description}}
            </p>
        </div>
    @endforeach
</div>
@endsection
