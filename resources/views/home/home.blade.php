@extends('layout.main')
@section('title','HOme Page')
@section('content')
    <div class="container mt-4">
      <div class="row g-3">
        @foreach ($posts as $post)
          <div class="col-lg-3 col-md-4 col-sm-1">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('images/featureimage/'.$post->image)}}" alt="Post Image">
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p class="card-text">{{$post->content}}</p>
                  <a href="#" class="btn btn-primary"> Read More</a>
                </div>
              </div>
          </div>
          @endforeach
          
      </div>
  </div>
@endsection