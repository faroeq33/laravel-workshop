@extends('layouts.layout')

@section('content')
<div class="container w-100">
    <h1 class="mt-5">Categories</h1>

    @if (session('message'))
    <div class="alert alert-danger">
    </div>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
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

    <table class="width-100 table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Category details</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <th class="font-weight-lighter" scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td class="">
                    <a class="underline"
                        href="{{ route('categories.show', ['category' => $category->id]) }}">Details</a>
                </td>
                <td>
                    <a class="underline" href="{{ route('categories.edit', ['category' => $category->id]) }}">Edit</a>
                </td>
                <td>
                    <a class="underline" href="{{ route('categories.edit', ['category' => $category->id]) }}">
                        Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection