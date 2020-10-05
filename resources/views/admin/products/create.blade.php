@extends('layouts.layout')

@section('content')
<h1 class="mt-5">Products</h1>

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul class="mb-0 list-unstyled">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link " href="{{ route('categories.index') }}">Index</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('categories.create') }}">Create</a>
    </li>
</ul>

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1" class="mt-3">Product</label>
        <input type="text" class="form-control" id="name" price="name" aria-describedby="nameHelp"
            placeholder="Enter productname">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="mt-3">Price</label>
        <input type="text" class="form-control" id="price" name="price" aria-describedby="priceHelp"
            placeholder="Enter price...">
    </div>
    <div class="form-group">
        <label for="category_id" class="mt-3">Category</label>
        <Select name="category_id" id="category_id" class="mt-3 form-control">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </Select>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection