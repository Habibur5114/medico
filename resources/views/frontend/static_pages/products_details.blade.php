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
  <div class="breadcrumb-image-test"><img src="{{ asset($singleProduct->banner_img) }}" alt="infant care-baby care equipments"></div>

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
    <a href="../products.php">Products</a>
       {{ $singleProduct->slug }}
    </div>

    <div class="breadcrumbs_path-test-m">
    <a href="../index.php"><i class="fas fa-home"></i></a>
    <a href="../products.php"><i class="fas fa-backward"></i></a>
    </div>


    </div>

    <div class="col-5 col-sm-4">
    <ul class="list-inline pull-right">
    <li class="list-inline-item disabled">
    <a href="../hospital-holloware/index.php" class="np-btn-narang" title="Hospital Holloware"><i class="fas fa-backward"></i></a>
    </li>
    <li class="list-inline-item cate">CATEGORY</li>
    <li class="list-inline-item">
    <a href="../laryngoscope-set-spares/index.php" class="np-btn-narang" title="Laryngoscope Set and Spares"><i class="fas fa-forward"></i> </a>
    </li>
    </ul>

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
                <h5 class="section-title">{{ $singleProduct->title }}</h5>
                <p class="section-description">{{ $singleProduct->description }}</p>
            </div>
            <!-- Watch Video -->
            <a href="{{ $singleProduct->youtube_url }}" class="btn-narang-outline iframe"  style="margin:0 auto;" ><i class="fas fa-video"></i>   Watch Video</a>

        </div>

        <div class="row pt-80">
            <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
                <div class="portfolio-item-new">
                <a href="infant-radiant-warmer-open-care-system-apple-series/index.php">
                <div class="apple-tag">Apple Series</div>
                <img src="{{ asset('public/frontend/images/thumbnails/infant-radiant-warmer-open-care-system-apple-series-ce-certified.jpg') }}" class="image img-fluid" alt="Infant Radiant Warmer, Open Care System">
                    <div class="overlay-portfolio">
                    <div class="text">
                    <h5>Infant Radiant Warmer, Open Care System</h5>
                    <p>NET brand Infant Radiant Warmer - Manufacturer...</p>
                    <p class="mt-2"><strong>MORE...</strong></p>
                    </div>
                    </div>
                </a>
                </div>
                <div class="products-text-area">
                <p><a href="infant-radiant-warmer-open-care-system-apple-series/index.php">Infant Radiant Warmer, Open Care System</a></p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
                <div class="portfolio-item-new">
                <a href="infant-resuscitation-trolley-baby-bassinet-apple-series/index.php">
                <div class="apple-tag">Apple Series</div>
                <img src="{{ asset('public/frontend/images/thumbnails/infant-resuscitation-trolley-baby-bassinet-apple-series.jpg') }}" class="image img-fluid" alt="Infant Resuscitation Trolley, Baby Bassinet">
                    <div class="overlay-portfolio">
                    <div class="text">
                    <h5>Infant Resuscitation Trolley, Baby Bassinet</h5>
                    <p>NET brand Baby Bassinet are high quality...</p>
                    <p class="mt-2"><strong>MORE...</strong></p>
                    </div>
                    </div>
                </a>
                </div>
                <div class="products-text-area">
                <p><a href="infant-resuscitation-trolley-baby-bassinet-apple-series/index.php">Infant Resuscitation Trolley, Baby Bassinet</a></p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
                <div class="portfolio-item-new">
                <a href="baby-incubator-apple-series/index.php">
                <div class="apple-tag">Apple Series</div>
                <img src="{{ asset('public/frontend/images/thumbnails/baby-incubator-apple-series.jpg') }}" class="image img-fluid" alt="Baby Incubator">
                    <div class="overlay-portfolio">
                    <div class="text">
                    <h5>Baby Incubator</h5>
                    <p>We are manufacturer & supplier of Baby Incubator...</p>
                    <p class="mt-2"><strong>MORE...</strong></p>
                    </div>
                    </div>
                </a>
                </div>
                <div class="products-text-area">
                <p><a href="baby-incubator-apple-series/index.php">Baby Incubator</a></p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
                <div class="portfolio-item-new">
                <a href="phototherapy-units-apple-series/index.php">
                <div class="apple-tag">Apple Series</div>
                <img src="{{ asset('public/frontend/images/thumbnails/phototherapy-units-apple-series-ce-certified.jpg') }}" class="image img-fluid" alt="Phototherapy Units">
                    <div class="overlay-portfolio">
                    <div class="text">
                    <h5>Phototherapy Units</h5>
                    <p>NET brand Phototherapy Units - Manufacturer & supplier...</p>
                    <p class="mt-2"><strong>MORE...</strong></p>
                    </div>
                    </div>
                </a>
                </div>
                <div class="products-text-area">
                <p><a href="phototherapy-units-apple-series/index.php">Phototherapy Units</a></p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
                <div class="portfolio-item-new">
                <a href="infant-radiant-warmer-open-care-system-orange-series/index.php">
                <div class="orange-tag">Orange Series</div>
                <img src="{{ asset('public/frontend/images/thumbnails/infant-radiant-warmer-open-care-system-orange-series.jpg') }}" class="image img-fluid" alt="Infant Radiant Warmer, Open Care System">
                    <div class="overlay-portfolio">
                    <div class="text">
                    <h5>Infant Radiant Warmer, Open Care System</h5>
                    <p>NET brand Infant Radiant Warmer are high quality...</p>
                    <p class="mt-2"><strong>MORE...</strong></p>
                    </div>
                    </div>
                </a>
                </div>
                <div class="products-text-area">
                <p><a href="infant-radiant-warmer-open-care-system-orange-series/index.php">Infant Radiant Warmer, Open Care System</a></p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
                <div class="portfolio-item-new">
                <a href="infant-resuscitation-trolley-baby-bassinet-orange-series/index.php">
                <div class="orange-tag">Orange Series</div>
                <img src="{{ asset('public/frontend/images/thumbnails/infant-resuscitation-trolley-baby-bassinet-orange-series.jpg') }}" class="image img-fluid" alt="Infant Resuscitation Trolley, Baby Bassinet">
                    <div class="overlay-portfolio">
                    <div class="text">
                    <h5>Infant Resuscitation Trolley, Baby Bassinet</h5>
                    <p>Manufacturer & supplier of Infant Resuscitation Trolley...</p>
                    <p class="mt-2"><strong>MORE...</strong></p>
                    </div>
                    </div>
                </a>
                </div>
                <div class="products-text-area">
                <p><a href="infant-resuscitation-trolley-baby-bassinet-orange-series/index.php">Infant Resuscitation Trolley, Baby Bassinet</a></p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
                <div class="portfolio-item-new">
                <a href="baby-incubator-orange-series/index.php">
                <div class="orange-tag">Orange Series</div>
                <img src="{{ asset('public/frontend/images/thumbnails/baby-incubator-orange-series.jpg') }}" class="image img-fluid" alt="Baby Incubator">
                    <div class="overlay-portfolio">
                    <div class="text">
                    <h5>Baby Incubator</h5>
                    <p>NET brand Baby Incubator - Manufacturer & supplier...</p>
                    <p class="mt-2"><strong>MORE...</strong></p>
                    </div>
                    </div>
                </a>
                </div>
                <div class="products-text-area">
                <p><a href="baby-incubator-orange-series/index.php">Baby Incubator</a></p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
                <div class="portfolio-item-new">
                <a href="phototherapy-units-orange-series/index.php">
                <div class="orange-tag">Orange Series</div>
                <img src="{{ asset('public/frontend/images/thumbnails/phototherapy-units-orange-series.jpg') }}" class="image img-fluid" alt="Phototherapy Units">
                    <div class="overlay-portfolio">
                    <div class="text">
                    <h5>Phototherapy Units</h5>
                    <p>NET brand Phototherapy Units are high quality...</p>
                    <p class="mt-2"><strong>MORE...</strong></p>
                    </div>
                    </div>
                </a>
                </div>
                <div class="products-text-area">
                <p><a href="phototherapy-units-orange-series/index.php">Phototherapy Units</a></p>
                </div>
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
