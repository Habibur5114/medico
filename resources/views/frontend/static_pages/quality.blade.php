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
            <h1>Quality Certificates</h1>
            <div class="breadcrumbs_path">
            <a href="index.php">Home</a>
            Quality Certificates
            </div>
        </div>
    </div>

  <!--==========================
  Product Section
  ============================-->
  <section class="pt-40">
  	<div class="container">

        <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">{{$qualitytext->name}}</h3>
          <p class="section-description">{!!$qualitytext->description!!}</p>
          <hr class="bottom-line">
        </div>
      </div>

        <div class="row pt-40">
@foreach ($quality as $qualitys)


			<div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
			<a href="certificates/images/1-USFDA-India-510k.pdf" target="_blank">
			<img class="img-fluid" src="{{ asset($qualitys->image) }}" alt="USFDA 510(k)">
			</a>
			<figcaption class="mt-3">{{$qualitys->name}}</figcaption>
			</div>

            @endforeach

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
