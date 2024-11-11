@extends('frontend.layout.template')

@push('meta-title')
        Medico Bangladesh
@endpush

@push('add-css')

@endpush


@section('body-content')

  <!--==========================
  Breadcrumb Section
  ============================-->
  <div class="breadcrumb-image" style="background-image: url({{ asset('public/frontend/images/banner/product.jpg') }});">
    <div class="container text-left">
        <h1>Products</h1>
        <div class="breadcrumbs_path">
          <a href="index.php">Home</a>
          Products
        </div>
    </div>
    </div>

  <!--==========================
  Product Section
  ============================-->
  <section class="pt-80">
    <div class="container ">

    	<div class="row">
        <div class="col-md-12">
          <h3 class="section-title ">{{$ourproduct->name}}</h3>
          <p class="section-description">{!!$ourproduct->description!!}</p>
          <hr class="bottom-line">
        </div>
      </div>

        <!-- Hospital Medical Furniture Area Start -->

        @foreach ($Productdetalis as $Productdetali)


        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">
            <div class="row">
             	<div class="col-12">
                    <h4 class="mb-2 ">{{$Productdetali->name}}</h4>
                </div>
            </div>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset($Productdetali->image) }}" alt="Hospital Medical Furniture" class="img-fluid mt-4">

                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="single_product_desc mt-4">
<!-- Product Meta Data -->
<div class="col-md-12 product-txt">
    <div class="col-md-6 pull-left">
      <ul class="list-group" >


        <li class="list-group-item">{!! $Productdetali->description !!}</li>

      </ul>
    </div>
    <div class="col-md-6 pull-left">
        <ul class="list-group" >


          <li class="list-group-item">{!! $Productdetali->descriptiontwo !!}</li>

        </ul>
      </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-5 mb-5">
        @endforeach
        <!-- Hospital Medical Furniture Area End -->


<
    </div>
  </section>

<!--==========================
Testimonial Section
============================-->
@include('frontend.include.testimonial')

<!--==========================
Events Section
============================-->
   @include('frontend.include.event_section')

@endsection


@push('add-js')

@endpush
