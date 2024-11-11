@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Management
@endpush

@push('add-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush


@section('body-content')


<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <form action="{{route('managementteam.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h2 class="mt-5 mb-5">Management team Update</h2>
            <div class="group-form">
            <label for="" class="m-2">Name</label>
            <input type="text" class="form-control" name="name" value="{{$managementtexts->name}}">
            </div>

            <div class="group-form">
                <label for="" class="m-2">Description</label>
                 <textarea class="form-control" id="editor" name="description" >{!!$managementtexts->description!!}</textarea>
            </div>

             <div class="group-form mt-3">
                <input type="submit" class="btn btn-success" value="update">
             </div>

            </form>
        </div>
    </div>
</div>


@endsection
