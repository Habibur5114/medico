<div class="pt-80"></div>

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
