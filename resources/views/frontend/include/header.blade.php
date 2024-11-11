<header id="header">

    <!-- Mobile Header -->
    <div class="wsmobileheader clearfix ">
      <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
      <span class="smllogo"><img src="{{ asset('public/frontend/images/net-logo-small.png') }}" width="190" height="16"  alt="Trust NET brand for quality Medical Equipment, Hospital Supplies and Surgical Instruments"></span>

    </div>
    <!-- Mobile Header -->



    <div class="wsmainfull clearfix">
      <div class="wsmainwp clearfix">


        <div class="desktoplogo"><a href="{{ route('home') }}"><img src="{{ asset( $basicInfo->logo ) }}" alt="Narang Medical Ltd. is manufacturer &amp; suppliers of Medical Equipment, Hospital Supplies and Hospital Medical Supplies."></a></div>
        <!--Main Menu HTML Code-->
        <nav class="wsmenu clearfix">
          <ul class="wsmenu-list">
            <li aria-haspopup="true" class="rightmenu" style="background:#FFFFFF;">
            </li>
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
