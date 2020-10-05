@extends('layouts.layout')

@section('content')
<div class="container w-100">
  <h1 class="mt-5">Products</h1>

  @if (session('message'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
  </div>
  @endif

  <nav>
    <ul class="nav nav-tabs border-bottom-0">
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('products.index') }}">Index</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('products.create') }}">Create</a>
      </li>
    </ul>
  </nav>

  <table class="width-100 table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product</th>
        <th scope="col">Categorie</th>
        <th scope="col">Huidige prijs</th>
        <th scope="col">Product details</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
      <tr>
        <th class="font-weight-lighter" scope="row">{{ $product->id }}</th>
        <td>{{ $product->name }}</td>
        <td>{{ $product->category->name }}</td>
        <td>{{ $product->latest_price->price }}</td>
        <td><a href="{{ route('products.show', ['product' => $product->id]) }}">Details</a></td>
        <td><a href="{{ route('products.edit', ['product' => $product->id]) }}">Edit</a></td>
        <td><a href="{{ route('products.delete', ['product' => $product->id]) }}">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection