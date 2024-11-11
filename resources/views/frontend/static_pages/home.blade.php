
<!doctype html>
<html lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Medico Bangladesh</title>


<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('public/frontend/css/custom.css') }}">


<!-- Facebook -->
<style>
	#subscribeModal .modal-content{
	overflow:hidden;
}

a.h2{
    color:#007b5e;
    margin-bottom:0;
    text-decoration:none;
}
#subscribeModal .form-control {
    height: 56px;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
	padding-left:30px;
}
#subscribeModal .btn {
    border-top-right-radius: 30px;
    border-bottom-right-radius: 30px;
	padding-right:20px;
	background:#007b5e;
	border-color:#007b5e;
}
#subscribeModal .form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #007b5e;
    outline: 0;
    box-shadow: none;
}
#subscribeModal .top-strip{
	height: 155px;
    background: #007b5e;
    transform: rotate(141deg);
    margin-top: -94px;
    margin-right: 190px;
    margin-left: -130px;
    border-bottom: 65px solid #4CAF50;
    border-top: 10px solid #4caf50;
}
#subscribeModal .bottom-strip{
	height: 155px;
    background: #007b5e;
    transform: rotate(112deg);
    margin-top: -110px;
    margin-right: -215px;
    margin-left: 300px;
    border-bottom: 65px solid #4CAF50;
    border-top: 10px solid #4caf50;
}

/**************************/
/****** modal-lg stips *********/
/**************************/
#subscribeModal .modal-lg .top-strip {
    height: 155px;
    background: #007b5e;
    transform: rotate(141deg);
    margin-top: -106px;
    margin-right: 457px;
    margin-left: -130px;
    border-bottom: 65px solid #4CAF50;
    border-top: 10px solid #4caf50;
}
#subscribeModal .modal-lg .bottom-strip {
    height: 155px;
    background: #007b5e;
    transform: rotate(135deg);
    margin-top: -115px;
    margin-right: -339px;
    margin-left: 421px;
    border-bottom: 65px solid #4CAF50;
    border-top: 10px solid #4caf50;
}

/****** extra *******/
#Reloadpage{
    cursor:pointer;
}

</style>


</head>
<body>

<div class="sharethis-inline-share-buttons"></div>


    <div class="thetop"></div>
  <!--==========================
  Hero Section
  ============================-->





  <section id="hero" style="background-image: url('{{ asset($Banner->banner_img	) }}'); background-size: cover; background-position: center;">

    <div class="">

    <div class="wow fadeIn">
    <div class="hero-logo text-center">

      <img class="img-fluid pt-5" src="{{ $basicInfo->logo }}" alt="Manufacturer and suppliers of medical equipment, hospital equipment and supplies including hospital furniture, orthopedic implants, medical disposables, diagnostic equipment and other medical equipment." style="padding-top: 10px;">
    </div>
    </div>

    <div class="text-center">
      <ul class="list-inline header-circle">
        <li class="list-inline-item">
          <div class="counter">
          <p style="font-size: 2rem; margin-bottom:0.1rem;"><span class="timer count-title count-number" data-to="{{ $basicInfo->experience }}" data-speed="4500"></span>+</p>
          <p class="count-text">Years of Excellence</p>
        </div>
        </li>
        <li class="list-inline-item">
          <div class="counter">
          <p style="font-size: 2rem; margin-bottom:0.1rem;"><span class="timer count-title count-number" data-to="{{ $basicInfo->medical_product }}" data-speed="4500"></span>k+</p>
          <p class="count-text">Medical Products</p>
        </div>
        </li>
        <li class="list-inline-item">
          <div class="counter">
          <p style="font-size: 2rem; margin-bottom:0.1rem;"><span class="timer count-title count-number" data-to="{{ $basicInfo->client_satisfy }}" data-speed="4500" ></span>%</p>
          <p class="count-text">Satisfied Clients</p>
        </div>
        </li>
        <li class="list-inline-item">
          <div class="counter">
          <p style="font-size: 2rem; margin-bottom:0.1rem;"><span class="timer count-title count-number" data-to="{{ $basicInfo->country_product }}" data-speed="4500"></span>+</p>
          <p class="count-text">Countries using products</p>
        </div>
        </li>
      </ul>
    </div>
<div class="pb-5">
    <div class="mb-4 mt-5 pb-5 text-center"><a href="our-story.php" class="btn-services ">Get to Know Us</a></div>
</div>

    </div>
  </section>



<!-- Header Section start -->
    <header id="header">

    <!-- Mobile Header -->
    <div class="wsmobileheader clearfix ">
        <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        <span class="smllogo">
            <img src="{{ asset($basicInfo->logo) }}" width="220"  alt="Trust NET brand for quality Medical Equipment, Hospital Supplies and Surgical Instruments">
        </span>

    </div>
    <!-- Mobile Header -->



    <div class="wsmainfull clearfix">
        <div class="wsmainwp clearfix">


        <div class="desktoplogo">
            <a href="{{ url('/') }}"> <img src="{{ asset($basicInfo->logo) }}" alt=""></a>
        </div>
        <!--Main Menu HTML Code-->
        <nav class="wsmenu clearfix">
            <ul class="wsmenu-list">
            <li aria-haspopup="true"><a href="{{ route('home') }}" class="menuhomeicon"><i class="fas fa-home"></i><span class="hometext">
                    HOME</span></a></li>
            <li><a href="{{ route('abouts') }}" class="menuhomeicon">ABOUT</a></li>

            <li aria-haspopup="true"><span class="wsmenu-click"><i class="wsmenu-arrow"></i></span><a type="button">PRODUCTS <span class="wsarrow"></span></a>
                <div class="wsmegamenu clearfix">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($productCategories as $productCategory)
                            <ul class="col-lg-3 col-md-12 col-xs-12 link-list">
                                <li><a href="{{ route('sub-product.details', $productCategory->slug) }}">{{ $productCategory->title }}</a></li>
                            </ul>
                         @endforeach
                    </div>
                </div>
                </div>
            </li>

            <li><a href="{{ route('quality') }}" class="menuhomeicon">QUALITY</a></li>
            <li><a href="{{ route('price') }}" class="menuhomeicon">PRICING</a></li>



            <li aria-haspopup="true"><span class="wsmenu-click"><i class="wsmenu-arrow"></i></span><a href="#">CONTACT <span class="wsarrow"></span></a>
                <ul class="sub-menu">
                <li aria-haspopup="true"><a href="{{ route('distributor') }}">Become Our Distributor </a></li>
                <li aria-haspopup="true"><a href="{{ route('purchase.enquiry') }}">Purchase Enquiry</a></li>
                <li aria-haspopup="true"><a href="{{ route('address') }}">Our Address</a></li>
                <li aria-haspopup="true"><a href="{{ route('feedback') }}">Feedback</a></li>
                </ul>
            </li>
            </ul>
        </nav>
        <!--Menu HTML Code-->
        </div>
    </div>

    </header>
<!-- #header Section end -->



<!-- Products Section start -->
  <section class="pt-80">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="section-title">Our Products</p>
          <hr class="bottom-line">
        </div>
      </div>

    <div class="row">
        @foreach ($productCategories as $row)
            <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
                <div class="portfolio-item-new">
                    <a href="{{ route('sub-product.details', $row->slug ) }}">
                        <img src="{{ asset($row->main_img) }}" class="image img-fluid" alt="Hospital Furniture">
                        <div class="overlay-portfolio">
                            <div class="text">
                                <h5>{{ $row->title }}</h5>
                                <p>{{ Str::substr($row->description, 0, 80) }}.....</p>
                                <p class="mt-2"><strong>MORE...</strong></p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="products-text-area">
                    <p>
                        <a href="{{ route('sub-product.details', $row->slug ) }}">{{ $row->title }}</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>

      <div class="row" >

        <a href="{{route('products')}}" class="btn-narang-outline" style="margin:0 auto;">More Products</a>
      </div>

    </div>
  </section>

  <!--==========================
  About Section
  ============================-->
  <section class="pt-80">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="section-title">About Us</p>
          <p class="section-description">{{$abouts->title}}</p>
          <hr class="bottom-line">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-sm-12 col-xs-12">

          <div class="embed-responsive embed-responsive-4by3">

            <iframe width="560" height="315" src="{{$abouts->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>



          </div>

        </div>

        <div class="col-lg-6 col-sm-12 col-xs-12 about">
            <p>
                {!! Str::words($abouts->description, 100, '...') !!}
            </p>
            <a href="{{route('abouts')}}" class="btn-narang-outline" style="margin-left: 20px;">Learn More</a>
        </div>
      </div>
    </div>

  </section>

<!--==========================
Testimonial Section
============================-->

@include('frontend.include.testimonial')

<!--==========================
Countdown Events Section
============================-->
{{-- <section class="countdown-area pt-80">
        <div class="container">
          <div class="row align-items-center countdown-wrap no-gutters">
            <div class="col-lg-6 col-md-6 countdown-left">
              <p class="h1">Get ready for upcoming event</p>
              <p><b>Africa Health Exhibition 2024</b><br>
                  Booth: H2.D10<br>
              22<sup>nd</sup> - 24<sup>th</sup> Oct. 2024<br>
              Cape Town International Convention Centre, South Africa</p>

            </div>

            <div class="col-lg-6 col-md-6 countdown-right">
              <div class="count right-wrap">
                <div id="count" class="row no-gutters"></div>
              </div>
            </div>
          </div>
        </div>
</section><!-- End Countdown Events Section --> --}}

<!--==========================
Events Section
============================-->

@include('frontend.include.event_section')

<!--==========================
Footer Section
============================-->
<section class="footers-top mt-80">
  <div class="container">
      <div class="row ">
          <div class="col-md-12">
              <small>
                 <p>{!!$footers->description!!}</p>
             </small>
          </div>
      </div>
  </div>
</section>


<section class="footers">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 footers-one">
                 <h5>{{ env('APP_NAME') }}</h5>
                 <hr class="bottom-line-left">
                 <p>{{ $basicInfo->address }}</p>
                 <p>Mail Us: <a href="mailto:{{ $basicInfo->email }}">{{ $basicInfo->email }}</a></p>
                <div class="social-icons">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                        <a href="{{ $basicInfo->twitter }}" title="Twitter" target="_blank">
                            <img id="social-tw" src="{{ asset('public/frontend/images/twitter-icon.png') }}" alt="Twitter X" />
                                <!--    <i id="social-tw" class="fab fa-twitter fa-2x"></i>-->
                        </a>
                        </li>

                        <li class="list-inline-item">
                        <a href="{{ $basicInfo->facebook }}" title="Facebook" target="_blank">
                        <i id="social-fb" class="fab fa-facebook fa-2x"></i>
                        </a>
                        </li>


                        <li class="list-inline-item">
                        <a href="{{ $basicInfo->instagram }}" title="Instagram" target="_blank">
                        <i id="social-insta" class="fab fa-instagram fa-2x"></i>
                        </a>
                        </li>

                        <li class="list-inline-item">
                        <a href="{{ $basicInfo->youtube }}" title="Youtube" target="_blank">
                        <i id="social-yt" class="fab fa-youtube fa-2x"></i>
                        </a>
                        </li>

                        {{-- <li class="list-inline-item">
                        <a href="https://manufacturermedicalsupplies.blogspot.com/" title="Blog" target="_blank">
                        <i id="social-b" class="fab fa-blogger fa-2x"></i>
                        </a>
                        </li>


                        <li class="list-inline-item">
                        <a href="/web-stories/" title="Web Stoires" target="_blank">
                            <img id="social-ws" src="{{ asset('public/frontend/images/web-stories-icon.png') }}" alt="Products Web Stories" />
                        </a>
                        </li> --}}
                    </ul>
                </div>

                <div class="mb-3">
                   <div id="google_translate_element"></div>
                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                        }
                    </script>

                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 footers-two offset-md-1">
                <p class="h5">Products</p>
                <hr class="bottom-line-left">
                <ul class="list-unstyled">
                    @foreach ($productCategories as $productCategory)
                        <li><a href="{{ route('sub-product.details', $productCategory->slug) }}">{{ $productCategory->title }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-2 footers-five offset-md-2">
                <p class="h5">Company</p>
                <hr class="bottom-line-left">
                <ul class="list-unstyled">
                    <li><a href={{ route('abouts') }}>About us</a></li>
                    <li><a href={{ route('price') }}>Pricing</a></li>
                    <li><a href={{ route('quality') }}>Quality</a></li>
                    <li><a href={{ route('feedback') }}>Feedback</a></li>
                    <li><a href={{ route('address') }}>Address</a></li>
                    <li><a href={{ route('distributor') }}>Our Distributor</a></li>
                    <li><a href={{ route('purchase.enquiry') }}>Purchase Enquiry</a></li>
                </ul>
            </div>

        </div>

        <div class="row text-center border-top">
         <div class="col-md-12 pt-3">
             <p class="text-muted" style="font-size: 13px;"> © {{ env('APP_NAME') }}. All Rights Reserved</p>
         </div>
        </div>

    </div>


   <style>

 form.gsc-search-box,
 table.gsc-search-box {
     margin-bottom: 0 !important;
     width: 258px;
 }



 .gcse-search-box {
     border: 0 !important;
     background: #387deb !important;
 }
 .gcse-search-box-tools .gcse-search-box .gcse-input {
     padding-right: 0 !important;
 }
 #gs_tti50 {
     padding: 6px 0 !important;
 }
 #gsc-i-id1 {
     color: #000 !important;
     text-indent: 0 !important;
     font-size: 14px !important;
     line-height: 1 !important;
     background: none !important;
 }
 #gsc-i-id1::-webkit-input-placeholder {
     color: #000 !important;
 }
 #gsc-i-id1::-as-input-placeholder {
     color: #fff;
 }
 #gsc-i-id1::-moz-placeholder {
     color: #fff;
     opacity: 1;
 }
 #gsc-i-id1::-moz-placeholder {
     color: #fff;
     opacity: 1;
 }
 .gsib_b {
     display: none !important;
 }
 .gsc-search-button-v2 {
   font-size: 0;
   padding: 12px 12px;
   width: auto;
   vertical-align: middle;
   border-radius: 0px;
   border-color: white;
     background-size: 25px 25px!important;
 }

 .gsc-search-button-v2, .gsc-search-button-v2:hover, .gsc-search-button-v2:focus {
     border-color: white;
 border-color: #02c4eb;
     background-color: #02c4eb;
     filter: none;
       cursor: pointer; outline: none;
       }

       .gsc-input { padding-left: 5px; padding-right: 5px; border-color: white;}
       .gsc-input-box{border-color: white;}

       .gsc-search-button-v2,gsc-search-button-v2: hover {
     cursor: pointer; border-color: none; outline: none;
 }

 .gsc-search-button -v2:focus {
     outline: none !important;
     box-shadow: none !important;
     background-color: transparent !important;
     background-image: none !important;
 }
 .gsc-search-button -v2:focus {
     outline: none !important;
     box-shadow: none !important;
 }

       @media only screen and (max-width : 500px) {

           form.gsc-search-box,
 table.gsc-search-box {
     margin-bottom: 0 !important;
     width: 235px;
     background: #ECECEC;
 }


     .gsc-input { padding-left: 5px; padding-right: 5px; border-color: white;}
       .gsc-input-box{border-color:#2B2B2B; height: 39px; border-radius: 0px;}
       table.gsc-search-box td.gsc-input {
     padding-right: 0px;
 }
     #gs_tti50 {
     padding-left: 5px !important;
 }

       }

     </style>

</section><!-- End Footer Section -->


<!--==========================
Scroll to top
============================-->
<div class='scrolltop'>
<div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
</div>
<!-- End Scroll to top -->



   <!-- Navbar Dropdown -->
    <script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/sina-nav.js') }}"></script>


	<script src="{{ asset('public/frontend/js/jquery-2.2.4.min.js') }}"></script>

    <!-- Navbar JavaScript -->
    <script src="{{ asset('public/frontend/js/superfish.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('public/frontend/js/sticky.js') }}"></script>

    <!-- Header JavaScript -->
    <script src="{{ asset('public/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/morphext.min.js') }}"></script>

    <!-- Testimonial JavaScript -->
    <script src="{{ asset('public/frontend/js/owl.carousel.min.js') }}"></script>

    <!-- Optional JavaScript -->
    <script src="{{ asset('public/frontend/js/main.js') }}"></script>

    <!-- Siteseal JavaScript -->
    <span id="siteseal" class="SealGodday"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=DegaUWFIQGs6zdTNskKC84Xr9fkSh3vNSyVM8alzoLDekV77GyPm8ffcpGZR"></script></span>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>

    <!-- Files included for lightbox askforprice-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="{{ asset('public/frontend/js/ask-price.js') }}"></script>

    <!-- Files included for lightbox askforprice-->
        <!-- Include Below JS After Your jQuery.min File -->

  <!--Main Menu File-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


    <!-- ./subscribe Modal -->	<script type="text/javascript">
	$(window).on('load', function() {
	 setTimeout(function(){
	   $('#subscribeModal').modal('show');
   }, 5000);

   	 setTimeout(function(){
	   $('#subscribeModal').modal('hide');
   }, 12000);


});
$('#Reloadpage').click(function() {
    location.reload();
}); 	</script>






{{-- <script src="https://121chatagent.com/136708096"></script> --}}
{{-- <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5cc2e3522b7f3e001277cb95&product=inline-share-buttons"></script> --}}

</body></html>
