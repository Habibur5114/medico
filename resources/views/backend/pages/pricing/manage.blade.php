@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Meet Us Section
@endpush

@push('add-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush


@section('body-content')

<a href="{{route('pricing.create')}}" class="btn btn-danger mb-3">Add pricing</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

@foreach ($pricing as $key=>$pricings)



      <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$pricings->name}}</td>

        <td style="width:500px">
            <img src="{{ asset($pricings->image) }}" alt="" style="width: 50px;">
        </td>

        <td>
            <a href="{{route('pricing.edit',$pricings->id)}}" class="btn btn-info">Edit</a>
            <a href="{{route('pricing.delete',$pricings->id)}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>

@endforeach
    </tbody>
  </table>

@endsection
