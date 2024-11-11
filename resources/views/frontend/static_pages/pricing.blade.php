

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
        <h1>Pricing</h1>
        <div class="breadcrumbs_path">
          <a href="index.php">Home</a>
          Pricing
        </div>
    </div>
    </div>

  <!--==========================
  Product Section
  ============================-->
  <section class="pt-80">
    <div class="container">

    	<div class="row">
        <div class="col-md-12">
          <h3 class="section-title">{{$Pricing->name}}</h3>
          <p class="section-description">{!!$Pricing->description!!}</p>
          <hr class="bottom-line">
        </div>
      </div>



      <div class="row">
      @foreach ($managepricings as $managepricing)
      <div class="col-lg-2 col-6">
        <div class="card" style=" border:none;">
            <img class="card-img-top img-fluid" src="{{ asset($managepricing->image) }}" alt="Step 1 - Select Products">
            <div class="card-body">
                <h5 class="quote-heading">{{$managepricing->name}}</h5>
            </div>
        </div>
        </div>
        @endforeach
      </div>

      <div class="row">
      	<div class="col-md-12 mt-5" align="center">
        <a href="{{route('purchase.enquiry')}}" class="btn-narang-outline" style="margin: 0px auto;">Request Quote</a>
        </div>
      </div>

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
