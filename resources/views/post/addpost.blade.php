@extends('layout.main')
@section('title','Add Post')
@section ('content')
<div class="container mt-4">
    <h1>Add New Post</h1>
    <form method='POST' action="{{url('/')}}/addpost" enctype="multipart/form-data">
      @csrf
      
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input type="text" name='title' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('title')
          <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Feature Image</label>
            <input class="form-control" name="image" type="file" id="formFile">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
            @error('content')
            <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Post</button>
      </form>
</div>
@endsection
