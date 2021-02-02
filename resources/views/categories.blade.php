@extends('layouts.app')

@section('title',  "Categories")

@section('content')
{{--<div class="container">--}}
    @foreach(\App\Models\Category::all() as $category)
        <div class="card text-center" style="padding: 20px">
            <div class="card-body">
                <a href="{{ route('category', $category->name)}}">
                    <img height="128px" style="border-radius: 4px; border-color: #1b1e21" src={{ $category->image }}>
                    <h2>{{$category->name}}</h2>
                </a>
                <p>
                    {{$category->description}}
                </p>
            </div>
        </div>
    @endforeach
{{--</div>--}}
@endsection
