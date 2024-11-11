@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Meet Us Section
@endpush

@push('add-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush


@section('body-content')

<a href="{{route('product.save')}}" class="btn btn-danger mb-3">Add Products</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">image</th>
        <th scope="col">status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

@foreach ($productDetails as $key => $productDetail)



      <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$productDetail->name}}</td>

        <td >
            <img src="{{asset($productDetail->image)}}" style="width:40px" alt="">
        </td>
        <td>
            @if($productDetail->status == 1)
            <a href="{{route('product.status',$productDetail->id)}}" class="btn btn-success">active</a>
        @else
            <a href="{{route('product.status',$productDetail->id)}}" class="btn btn-danger">inactive</a>
        @endif
        </td>
        <td>
            <a href="{{route('product.show',$productDetail->id)}}" class="btn btn-info">Edit</a>
            <a href="{{route('product.delete',$productDetail->id)}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>

@endsection


