@extends('layouts.layout')todo: bekijk of dit klopt

@section('content')
    <h1 class="mt-5">Categories</h1>

<form method="POST" action="{{ route('categories.store') }}">
    @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Category name</label>
          <input type="text" class="form-control" id="name" aria-describedby="categorynameHelp" placeholder="Enter category name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>    
@endsection