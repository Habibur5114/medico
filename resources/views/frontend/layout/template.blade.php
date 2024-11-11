<!doctype html>
<html lang="en">
<head>

    @include('frontend.include.css')

</head>
<body>

<div class="sharethis-inline-share-buttons"></div>


    <div class="thetop"></div>

  <!--==========================
  Header Section
  ============================-->

  @include('frontend.include.header')


     @yield('body-content')


<!--==========================
Footer Section
============================-->
  @include('frontend.include.footer')


  @include('frontend.include.script')

</body></html>
