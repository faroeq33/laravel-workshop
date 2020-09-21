@extends('layouts.layout')

@section('content')
<h1 class="mt-5">Categories</h1>

<nav class="nav">
    <ul class="nav nav-tabs border-bottom-0">
        <li class="nav-item border-bottom-0">
            <a href="{{ route('categories.index')}}" class="nav-link">Index</a>
        </li>
        <li class="nav-item mb-0">
            <a href="{{ route('categories.create')}}" class="nav-link">Create</a>
        </li>
        <li class="nav-item border-bottom-0">
            <a href="{{ route('categories.show', ['category' => $category->id])}}" class="nav-link active">Category
                Details</a>
        </li>
    </ul>
</nav>

<div class="card">
    <div class="card-header">
        Categories
    </div>
    <div class="card-body">
        <h2 class="card-title">{{ $category->name }}</h2>
    </div>
</div>
@endsection