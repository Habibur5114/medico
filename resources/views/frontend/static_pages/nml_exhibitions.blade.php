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
        <h1>Medical Exhibitions & Events</h1>
        <div class="breadcrumbs_path">
          <a href="index.php">Home</a>
          Medical Exhibitions & Events
        </div>
    </div>
    </div>


  <!--==========================
    Events Section
    ============================-->
    <section class="pt-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h3 class="section-title">Medical Exhibitions &amp; Events</h3>
                <p class="section-description">Forthcoming Events/Exhibitions we shall be participating in.</p>
                <hr class="bottom-line">
                </div>
            </div>

            <div class="row">
                @foreach ( App\Models\MeetUs::where('status', 1)->get() as $row )
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="tile">
                            <div class="banner-img">
                                <img src="{{ $row->image }}" alt="">
                            </div>

                            <div class="tile-box">
                                <h6>{{ $row->title }}</h6>
                                <p>{{ $row->address }}</p>
                            </div>
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
@endsection


@push('add-js')

@endpush
