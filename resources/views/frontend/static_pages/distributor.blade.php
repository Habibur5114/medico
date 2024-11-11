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
        <h1>Distributorship Application Form</h1>
        <div class="breadcrumbs_path">
          <a href="index.php">Home</a>
         Distributorship Application Form
        </div>
    </div>
    </div>

  <!--==========================
  Product Section
  ============================-->
<section class="pt-80"  style="background:#ebeaea;">
    <div class="container">
        <div class="row justify-content-center">
        <!--Form with header-->
            <iframe id="gform" src="https://docs.google.com/forms/d/e/1FAIpQLSfB6Ntn2IgG8BG4nIf3ubQspNAcBxwN7mdnErjGdFcvbhKhKQ/viewform?embedded=true" class="iframeContact"  frameborder="0" width="100%" height="920" marginheight="0" marginwidth="0">Loading…</iframe>
        </div>

        <script type="text/javascript">
            var load = 0;

            document.getElementById('gform').onload = function(){
                load++;
                if(load > 1){
                document.location = "https://www.narang.com/thanks.php";
                }
            }
        </script>
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
