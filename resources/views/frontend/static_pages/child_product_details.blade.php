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
  <div class="clearfix"></div>
    <div class="container mt-4">
        <div class="row">
           <div class="col-md-9 col-12">
                <div class="breadcrumbs_patha">
                    <a href="{{ url('/') }}">Home</a>
                    {{-- <a href="{{ url('/') }}">Products</a> --}}
                    <a href="{{ route('sub-product.details', $productSubCategory->cat_slug) }}">{{ $productSubCategory->cat_titles }}</a>
                    {{ $productSubCategory->slug }}
                </div>
            </div>

            <!--====================================
            Related Products Section
            =====================================-->
            {{-- <div class="col-md-3 col-12">
                <div class="dropdown pull-right">
                    <button class="dropbtn"><i class="fas fa-caret-down"></i> Related Products</button>
                    <div class="dropdown-content">
                        <a href="../infant-radiant-warmer-open-care-system-apple-series/index.php">Infant Radiant Warmer, Open Care System with CE Certified</a>
                        <a href="../infant-resuscitation-trolley-baby-bassinet-apple-series/index.php">Infant Resuscitation Trolley, Baby Bassinet</a>
                        <a href="../infant-resuscitation-trolley-baby-bassinet-apple-series/index.php">Infant Resuscitation Trolley, Baby Bassinet with CE Certified</a>
                        <a href="../baby-incubator-apple-series/index.php">Baby Incubator</a>
                        <a href="../phototherapy-units-apple-series/index.php">Phototherapy Units with CE Certified</a>
                        <a href="../infant-radiant-warmer-open-care-system-orange-series/index.php">Infant Radiant Warmer, Open Care System</a>
                        <a href="../infant-resuscitation-trolley-baby-bassinet-orange-series/index.php">Infant Resuscitation Trolley, Baby Bassinet</a>
                        <a href="../baby-incubator-orange-series/index.php">Baby Incubator</a>
                        <a href="../phototherapy-units-orange-series/index.php">Phototherapy Units</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <hr class="mt-4">
  <!-- End Breadcrumb Section -->


  <!--==========================
  Product Section
  ============================-->
<section class="pt-40">
  	<div class="container">

        <div class="row">
            <div class="col-md-12">
                <h5 class="section-title">{{ $productSubCategory->title }}</h5>
                <hr class="bottom-line">
                <!--<p class="section-description">&nbsp;</p>-->
            </div>
            <!-- Watch Video -->
        </div>

        <div class="row">
            @foreach ($productChildCategories as $row)
                <div class="col-12"><hr class="mb-5"></div>

                <div class="col-12">
                    <div class="col-12 col-md-3 pull-left">
                        <div class="mb-4">
                            <a class="gallery_img" href="images/nic201a.jpg">
                                <img class="img-fluid" src="{{ asset($row->main_img) }}" alt="{{ $row->title }}">
                            </a>
                        </div>
                    </div>

                    <!-- Start -->
                    <div class="col-12 col-md-9 pull-right description">
                        {!! $row->description !!}
                    </div>
                    <!-- End -->
                </div>
            @endforeach
        </div>
  	</div>
</section>


<!--===============================
Categories Slider Scrollbar Section
=================================-->
{{--
<section class="pt-80">
<div class="container">

  <div class="row">
    <div class="col-md-12">
      <p class="section-title h3">Categories</p>
      <hr class="bottom-line">
    </div>
  </div>

  <div class="row">
  	<div class="col-md-12">
        <div class="customer-logos slider">

            <div class="slide slide-link">
                <a href="/hospital-medical-furniture/index.php" >
                <img src="{{ asset('public/frontend/images/thumbnails/hospital-medical-furniture.jpg') }}" alt="Hospital Furniture">
                <p class="mt-3">Hospital Furniture</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/orthopedic-implants-manufacturers-india/index.php" >
                <img src="{{ asset('public/frontend/images/thumbnails/orthopedic-implants-manufacturers-india.jpg') }}" alt="Orthopedic Implants">
                <p class="mt-3">Orthopedic Implants</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/medical-disposables/index.php" >
                <img src="{{ asset('public/frontend/images/thumbnails/medical-disposables.jpg') }}" alt="Medical Disposables">
                <p class="mt-3">Medical Disposables</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/diagnostic-equipments-products/index.php" >
                <img src="{{ asset('public/frontend/images/thumbnails/diagnostic_equipments.jpg') }}" alt="Diagnostic Equipments">
                <p class="mt-3">Diagnostic Equipments</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/anaesthesia-equipments-products/index.php" >
                <img src="{{ asset('public/frontend/images/thumbnails/anaesthesia-equipments-products.jpg') }}" alt="Anaesthesia Equipments">
                <p class="mt-3">Anaesthesia Equipments</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/autoclave-sterilizers/index.php" >
                <img src="{{ asset('public/frontend/') }}/images/thumbnails/autoclave-sterilizers.jpg" alt="Autoclave &amp; Sterilizers">
                <p class="mt-3">Autoclave &amp; Sterilizers</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/laboratory-products/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/laboratory-products.jpg') }}" alt="Laboratory Products">
                <p class="mt-3">Laboratory Products</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/height-weight-scales/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/height_weight_scales.jpg') }}" alt="Height &amp; Weight Scales">
                <p class="mt-3">Height &amp; Weight Scales</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/ob-gyn-gynecological-products/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/ob-gyn-gynecological-products.jpg') }}" alt="OB GYN Products">
                <p class="mt-3">OB GYN Products</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/operation-theatre-lights/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/operation-theatre-lights.jpg') }}" alt="OT &amp; Examination Lights">
                <p class="mt-3">OT &amp; Examination Lights</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/medical-rubber-products/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/medical-rubber-products.jpg') }}" alt="Medical Rubber Products">
                <p class="mt-3">Medical Rubber Products</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/hospital-holloware/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/hospital-holloware.jpg') }}" alt="Hospital Holloware">
                <p class="mt-3">Hospital Holloware</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/infant-care-baby-care-equipments/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/infant-baby-care-equipments.jpg') }}" alt="Infant Care Equipments">
                <p class="mt-3">Infant Care Equipments</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/laryngoscope-set-spares/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/laryngoscope-set-spares.jpg') }}" alt="Laryngoscope Set">
                <p class="mt-3">Laryngoscope Set</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/cold-chain-equipments/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/cold-chain-equipments.jpg') }}" alt="Cold Chain Equipments">
                <p class="mt-3">Cold Chain Equipments</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/emergency-medical-products-supplies/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/emergency-medical-products-supplies.jpg') }}" alt="Emergency Products">
                <p class="mt-3">Emergency Products</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/misc-surgical-medical-products/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/misc-surgical-medical-products.jpg') }}" alt="Miscellaneous Products">
                <p class="mt-3">Miscellaneous Products</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/hospital-scrubs-linens-manufacturers/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/hospital-scrubs-linens-manufacturers.jpg') }}" alt="Scrubs &amp; Linens">
                <p class="mt-3">Scrubs &amp; Linens</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/operation-theatre-tables/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/operation-theatre-tables.jpg') }}" alt="OT Tables">
                <p class="mt-3">OT Tables</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/rehabilitation-products-aids/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/rehabilitation-products-aids.jpg') }}" alt="Rehabilitation Products &amp; Aids">
                <p class="mt-3">Rehabilitation Products &amp; Aids</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/laboratory-products/clinical-lab-devices/index.php">
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/clinical.jpg') }}" alt="Clinical Lab Devices">
                <p class="mt-3">Clinical Lab Devices</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/dental-equipments-products/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/dental-equipments-products.jpg') }}" alt="Dental Equipments">
                <p class="mt-3">Dental Equipments</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/blood-collection-tubes/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/blood-collection-tubes.jpg') }}" alt="Blood Collection Tubes">
                <p class="mt-3">Blood Collection Tubes</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/medical-imaging/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/medical-imaging.jpg') }}" alt="Medical Imaging Equipment">
                <p class="mt-3">Medical Imaging Equipment</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/icu-equipments/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/icu-equipment.jpg') }}" alt="ICU Equipment">
                <p class="mt-3">ICU Equipment</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/ot-equipments/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/ot-equipment.jpg') }}" alt="OT Equipment">
                <p class="mt-3">OT Equipment</p>
                </a>
            </div>

            <div class="slide slide-link">
                <a href="/medical-freezers-refrigerators/index.php" >
                <img loading="lazy" src="{{ asset('public/frontend/images/thumbnails/medical-freezers-refrigerators.jpg') }}" alt="Medical Refrigerators &amp; Freezers">
                <p class="mt-3">Medical Refrigerators &amp; Freezers</p>
                </a>
            </div>

        </div>
    </div>
  </div>

  <hr>
</div>
</section><!-- End Categories Slider Scrollbar Section --> --}}


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
