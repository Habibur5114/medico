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
<div class="breadcrumb-image-test">
    <img src="{{ asset($productCategory->banner_img) }}" alt="orthopedic implants">
</div>

<!--====================================
  Jump to Previous/Next categories Section
  =====================================-->
<div class="clearfix"></div>
<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-7 col-sm-8">
                <div class="breadcrumbs_path-test">
                    <a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
                    <a type="button">{{ $productCategory->title }}</a>
                </div>

                <div class="breadcrumbs_path-test-m">
                    <a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
                    <a href="{{ url('/') }}"><i class="fas fa-backward"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==========================
  Product Section
  ============================-->
<section class="pt-40">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h5 class="section-title">{{ $productCategory->sub_title }}</h5>
                <p class="section-description">{{ $productCategory->description }}</p>
            </div>
            <!-- Watch Video -->
            <a href="{{ $productCategory->youtube_url	 }}" class="btn-narang-outline iframe cboxElement" style="margin:0 auto;"><i class="fas fa-video"></i>Watch Video</a>
        </div>

        <div class="row pt-80">
            @foreach ($productSubCategories as $row)
                <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
                    <div class="portfolio-item-new">
                        <a href="{{ route('sub-product.details', $row->slug) }}" target="_blank">
                        <img src="{{ asset($row->main_img) }}" class="image img-fluid" alt="Small Fragment - Locking">
                            <div class="overlay-portfolio">
                                <div class="text">
                                    <h5>{{ $row->title }}</h5>
                                    <p>{{ Str::substr($row->description, 1, 80) }}</p>
                                    <p class="mt-2"><strong>MORE...</strong></p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="products-text-area">
                       <p><a href="{{ route('child-product.details', $row->slug) }}">{{ $row->title }}</a></p>
                    </div>
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
