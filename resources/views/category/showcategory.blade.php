@extends('layout.main')
@section('title','Category List')
@section('content')
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>Id</th>
            <th>Category Name</th>
            <th>Created At</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($categories as $data)
            <tr>
                <td scope="row">{{$data->id}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->created_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        </tbody>
</table>
@endsection