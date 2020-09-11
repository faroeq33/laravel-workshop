@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Categories</h1>

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