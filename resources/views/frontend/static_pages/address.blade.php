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
  <div class="breadcrumb-image" style="background-image: url({{ asset('public/frontend/images/banner/contact.jpg') }});">
    <div class="container text-left">
        <h1>Contact Information</h1>
            <div class="breadcrumbs_path">
                <a href="../index.php">Home</a>
                Contact Information
            </div>
    </div>
</div>

<!--==========================
Address Section
============================-->
<section class="minus-20">
<div class="container">
  <div class="row">

    {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="box-part text-center">
          <div><img src="{{ asset('public/frontend/images/flag-for-india.png') }}" width="80" height="80" alt=""/></div>

        <div><h4>India</h4></div>
        <div class="box-part-text">
          <span><strong>NARANG MEDICAL LIMITED</strong><br>
              Narang Tower, 46 Community Centre,<br>
              Naraina Ph-I, New Delhi - 110028 Delhi, India.
          <br><br>
          Phone: +91-11-45554000 (100 Lines)</span>
        </div>
        <img src="{{ asset('public/frontend/images/narang.com_QR-Code.png') }}" height="150" width="150">
          <div><h4>General Contacts</h4></div>
        <div class="box-part-text">
      <span>
      Phone: +91-11-45554000 (100 Lines)<br>
      Fax: +91-11-45554001<br>
      WhatsApp: +919958598621 (For International Buyers Only)<br>
      Email: <a href="mailto:NET@narang.com">NET@narang.com</a>
      </span>

        </div>

          <div><h4>Factory</h4></div>
        <div class="box-part-text">
          <span>Plot No. D4, Sector A2, Tronica City,<br>
            Loni, Ghaziabad- 201102, India.</span>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="box-part text-center">
        <div><img src="{{ asset('public/frontend/images/flag-for-united-states.png') }}" width="80" height="80" alt=""/></div>
        <div><h4>USA</h4></div>
        <div class="box-part-text">
      <span>
      <strong>NARANG MEDICAL USA CORPORATION</strong><br>

        3190 Willow ln, Weston,<br>
        Florida 33331, USA.<br>
        Tel.: +1 (754) 900 3330<br>
        Email: USoffice@narang.com<br>
      </span>

        </div>
      </div>
    </div> --}}
</div>
</div>

</section>

<!--==========================
Form Section
============================-->
{{-- <section class="pt-80">
  <div class="container">
      <div class="row">
           <div class="col-md-6">
               <a href="distributorship-enquiry-form.php"class="btn-narang-outline" style="margin: 0px auto; text-align:center;">
               Excellent Business Opportunity.<br> Become our Distributor / Reseller. Apply here.
               </a>
           </div>
           <div class="col-md-6">
               <a href="purchase-enquiry-form.php"class="btn-narang-outline" style="margin: 0px auto; text-align:center;">
               I want to buy your products. <br>Ask your local distributor to contact me.
               </a>
           </div>
      </div>
 </div>
</section> --}}
<!-- End Form Section -->

<!--==========================
Form Section
============================-->
<section class="pt-80">
  {{-- <div class="container">

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h4>Narang INDIA - Follow these steps to reach us very easily</h4>
            <p>
                1. Open Google Maps on your smart phone<br>
                2. Copy these numbers only 28.632068,77.137895 and paste in the search box. These numbers are our geolocation. Hit Search button.<br>
                3. Follow the driving directions. You will precisely reach at our door step without asking anyone.<br>
                4. You're Welcome :)
            </p>
        </div>
      </div>

      <div class="row pt-40">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <iframe src="https://www.google.com/maps/d/embed?mid=1S-eSfIpKKOzYYChI8OHQugVBB3Y&hl=en" width="100%" height="480" frameborder="0"></iframe>
        </div>
       </div>

 </div> --}}

    <br>
    <br>

  <div class="container">

      <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h4>Medico Bangladesh - Follow these steps to reach us very easily</h4>
       </div>
      </div>

      <div class="row pt-40">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

       <iframe width="100%" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=480&amp;hl=en&amp;q=3190%20Willow%20ln,%20Weston,%20Florida%2033331,%20USA.%20+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

        </div>
       </div>

 </div>

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

