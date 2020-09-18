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
            <a href="{{ route('categories.edit', ['category' => $category->id])}}" class="nav-link active">Edit
                Category</a>
        </li>
    </ul>
</nav>

<form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="name">Category name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="categorienameHelp"
            value="{{ $category->name }}">
    </div>

    <button type="submit" name="name" class="btn btn-primary" id="name" aria-describedby="categorynameHelp"
        value="{{ $category->name }}">Update</button>
</form>

@endsection