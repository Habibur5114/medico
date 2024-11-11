
@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Quality
@endpush

@push('add-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush


@section('body-content')

<a href="{{route('quality.create')}}" class="btn btn-danger mb-3">Add Qulity Image</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">image</th>
        <th scope="col">status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
     <tbody>

@foreach ($quality as $key => $qualitys)



      <tr>
        <th scope="row">{{++$key}}</th>
        <th scope="row">{{$qualitys->name}}</th>
        <td >
            <img src="{{ asset($qualitys->image) }}" alt="" style="width: 50px;">
        </td>

        <td>
             @if($qualitys->status == 1)
            <a href="{{route('quality.status',$qualitys->id)}}" class="btn btn-success">active</a>
        @else
            <a href="{{route('quality.status',$qualitys->id)}}" class="btn btn-danger">inactive</a>
        @endif
        </td>
        <td>
            <a href="{{route('quality.edit',$qualitys->id)}}" class="btn btn-info">Edit</a>
            <a href="{{route('quality.delete',$qualitys->id)}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
@endsection



