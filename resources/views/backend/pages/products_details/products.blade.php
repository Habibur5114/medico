@extends('backend.layout.master')

 @push('meta-title')
        Dashboard | product_detalis Us Section
@endpush

@push('add-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush


@section('body-content')


<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
           @csrf
            <h2 class="mt-5 mb-5"> Added our product </h2>

            <div class="group-form">
            <label for="" class="m-2">Name</label>
            <input type="text" class="form-control" name="name" value="">
            </div>

            <div class="group-form">
                <label for="" class="m-2">Image</label>
                <input type="file" class="form-control" name="image" value="">
            </div>

            <div class="group-form">
                <label for="" class="m-2">Description</label>
                 <textarea class="form-control" id="editor" name="description" ></textarea>
            </div>
            <div class="group-form">
                <label for="" class="m-2">Description</label>
                 <textarea class="form-control" id="editor1" name="descriptiontwo" ></textarea>
            </div>

             <div class="group-form mt-3">
                <input type="submit" class="btn btn-success">
             </div>

            </form>
        </div>
    </div>
</div>
@endsection
