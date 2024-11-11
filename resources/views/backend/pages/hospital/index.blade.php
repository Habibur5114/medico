@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Meet Us Section
@endpush

@push('add-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush


@section('body-content')

<a href="{{route('hospital.create')}}" class="btn btn-danger mb-3">Add Hospital History</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">Description</th>
        <th scope="col">status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($hospitals as $key => $hospital)


      <tr>
        <th scope="row">{{ ++$key}}</th>
        <td>{{$hospital->title}}</td>
        <td style="width:500px">{{$hospital->description}}</td>
        <td>
            @if($hospital->status == 1)
            <a href="{{route('hospital.status',$hospital->id)}}" class="btn btn-success">active</a>
        @else
            <a href="{{route('hospital.status',$hospital->id)}}" class="btn btn-danger">inactive</a>
        @endif
        </td>
        <td>
            <a href="{{route('hospital.edit',$hospital->id)}}" class="btn btn-info">Edit</a>
            <a href="{{route('hospital.delete',$hospital->id)}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>

@endsection
