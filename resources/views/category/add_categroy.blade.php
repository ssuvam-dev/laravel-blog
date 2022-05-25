@extends('layout.main')
@section('title',"Home")
@section('content')
<h1>Add Category....</h1>
<form action="{{url('/')}}/addCategory" method="post">
    @csrf
    <div class="form-group ">
      <label for="category">Category Name</label>
      <input type="text" class="form-control" name="categoryname" id="category" aria-describedby="helpId" placeholder="">
      @error('categoryname')
      <small id="helpId" class="form-text text-muted">{{$message}}</small>
      @enderror
    </div>
    <input type="submit" class="btn btn-primary" value="Add Category">
</form>
@endsection