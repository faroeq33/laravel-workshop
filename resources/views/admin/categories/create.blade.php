@extends('layouts.layout')

@section('content')
<h1 class="mt-5">Categories</h1>

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

<form method="POST" action="{{ route('categories.store') }}">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1" class="mt-3">Category name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="categorynameHelp"
            placeholder="Enter category name...">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection