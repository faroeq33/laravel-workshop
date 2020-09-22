@extends('layouts.layout')

@section('content')
<h1 class="mt-5">Categories</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0 list-unstyled">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link " href="{{ route('categories.index') }}">Index</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('categories.create') }}">Create</a>
    </li>
    <li class="nav-item"><a href="{{ route('categories.delete', ['category' => $category->id]) }}"
            class="nav-link">Delete
            Category</a></li>
</ul>

<form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">
    @method('DELETE')
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1" class="mt-3">Category name</label>
        <input disabled="disabled" type="text" class="form-control" id="name" name="name"
            aria-describedby="categorynameHelp" placeholder="Enter category name..." value="{{ $category->name }}">
    </div>
    <button type="submit" class="btn btn-primary">Delete</button>
</form>
@endsection