@extends('layouts.layout')

@section('content')
<h1 class="mt-5">Categories</h1>

@if (session('message'))
<div class="alert-alert-danger">
    {{ session('message') }}
</div>
@endif

<ul class="nav nav-tabs border-bottom-0">
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('categories.index') }}">Index</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('categories.create') }}">Create</a>
    </li>
</ul>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{ $category->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection