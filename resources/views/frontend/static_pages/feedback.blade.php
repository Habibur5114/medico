
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
        <h1>Feedback</h1>
        <div class="breadcrumbs_path">
          <a href="../index.php">Home</a>
          Feedback
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
          <h3 class="section-title">Feedback</h3>
          <p class="section-description">Your feedback is important to us. It allows us to continue developing products and features that fulfill users' requirements/expectations. We welcome any complaints/suggestions you have for enhancements to our existing product range. Please provide us with as much information as possible.</p>
          <hr class="bottom-line">
        </div>
      </div>

      <div class="row">
               <div class="col-md-6">
                   <a href="client-feedback.php"class="btn-narang-outline" style="margin: 0px auto; text-align:center;">
                   User of our Products give feedback here...
                   </a>
               </div>
               <div class="col-md-6">
                   <a href="product-feedback.php"class="btn-narang-outline" style="margin: 0px auto; text-align:center;">
                   User of our Products complain here...
                   </a>
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
