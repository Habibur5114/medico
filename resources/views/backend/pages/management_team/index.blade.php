
@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Meet Us Section
@endpush

@push('add-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush


@section('body-content')

<a href="{{route('management.create')}}" class="btn btn-danger mb-3">Add Management Team</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">image</th>
        <th scope="col">Description</th>
        <th scope="col">status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

@foreach ($managements as $key => $management)



      <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$management->name}}</td>
        <td >
            <img src="{{ asset($management->image) }}" alt="" style="width: 50px;">
        </td>
        <td style="width:500px">{!!$management->description!!}</td>
        <td>
             @if($management->status == 1)
            <a href="{{route('management.status',$management->id)}}" class="btn btn-success">active</a>
        @else
            <a href="{{route('management.status',$management->id)}}" class="btn btn-danger">inactive</a>
        @endif
        </td>
        <td>
            <a href="{{route('management.edit',$management->id)}}" class="btn btn-info">Edit</a>
            <a href="{{route('management.delete',$management->id)}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
@endsection



