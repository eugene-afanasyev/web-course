@extends('layouts.app')

@section('content')
    <?php
    use App\Http\Controllers\CategoryController;
    $cc = new CategoryController();
    $cc->showAll();
    ?>
@endsection
