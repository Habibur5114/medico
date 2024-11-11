@extends('frontend.layout.template')

@push('meta-title')
        Medico Bangladesh
@endpush

@push('add-css')

@endpush


@section('body-content')

  <!--==========================
  Main Section
  ============================-->
  <section class="pt-80 abt-video">
    <div class="container">
          <div class="row">
              <div class="offset-2 col-8">
            <div class="embed-responsive embed-responsive-16by9">

                <iframe width="560" height="315" src="{{$abouts->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            </div>
          </div>
    </div>
</section>


<!--==========================
Story Section
============================-->
<section class="pt-80">
<div class="container">

  <div class="row">
    <div class="col-md-12">
      <p class="section-title h3">{{$abouts->title}}</p>
      <p class="section-description">It started with a simple idea &amp; our mission remains the same.</p>
      <hr class="bottom-line">
    </div>
  </div>

  <div class="row border-bottom pb-4">
  <div class="col-md-12">
      <p>{!!$abouts->description!!}</p>
  </div>
  </div>

  <div class="row pt-4">
    @foreach ($hospital as $hospitals)
    <div class="col-md-6">
        <div class="abt-box">
            <p class="h5">{{ $hospitals->title }}</p>
            <p>{{$hospitals->description}}</p>
        </div>
    </div>
@endforeach
  </div>
</section>

<!--==========================
Management Team Section
============================-->
<section class="abt-management our-webcoderskull">
<div class="container">

  <div class="row">

    <div class="col-md-12">
      <p class="section-title h3">{{$managementtext->name}}</p>
      <p class="section-description">{!!$managementtext->description!!}</p>
      <hr class="bottom-line">
    </div>
  </div>

<div class="row">
    @foreach ($management as $managements)
    <div class="col-lg-4 col-md-4 col-xs-12">

      <div class="cnt-block equal-hight">
        <figure><img src="{{ asset($managements->image) }}" class="img-fluid" alt=""></figure>
        <h3>{{$managements->name}}</h3>
        <p>{!!$managements->description!!}</p>
      </div>

    </div>
    @endforeach
  </div>
 </div>
 </section>


<!--==========================
Story Section
============================-->
<section class="pt-80">
<div class="container">
@foreach ($qualitytext as $qualitytexts)


  <div class="row">
    <div class="col-md-12">
      <p class="section-title h3">{{$qualitytexts->name}}</p>
      <hr class="bottom-line">
    </div>
  </div>

  <div class="row pb-4">
  <div class="col-md-12">
      <p>{!!$qualitytexts->description!!}</p>
  </div>

@endforeach

  </div>


    <div class="row pb-4">
          @foreach ($quality as $qualitys)


        <div class="col-md-3 col-sm-6 col-xs-12 mr-btn-45">
        <a href="certificates/images/1-quality-policy.pdf"  target="_blank">
        <img class="img-fluid" src="{{ asset ($qualitys->image) }}" alt="QUALITY POLICY">

        </a>
        <figcaption class="mt-3"><strong><a href="certificates/images/1-quality-policy.pdf"  target="_blank">{{$qualitys->name}}</a></strong></figcaption>
        </div>

        @endforeach



    </div>
    <div class="col-md-12" align="center"><a href="{{route('quality')}}" class="btn-narang-outline" style="margin: 0px auto;">View Quality Certificates</a></div>


</div>
</section>

<!--==========================
Shipping Section
============================-->
<section class="abt-management our-webcoderskull">
<div class="container">
@foreach ($shipcountry as $shipcountrys)


  <div class="row">
   <div class="col-md-12">
    <p class="h3 section-title">{{$shipcountrys->name}}</p>
    <p class="section-description">{!!$shipcountrys->title!!}</p>
    <hr class="bottom-line">
   </div>
  </div>

<div class="row">

    <div class="offset-2 col-8">
      <img src="{{ asset($shipcountrys->image) }}" class="img-fluid" width="100%" alt="Worldwide Distributors Network of Medico Bangladesh">
      <p align="center" class="mt-3"><strong>{!!$shipcountrys->short_title!!}</strong></p>
    </div>

  </div>

  @endforeach
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
