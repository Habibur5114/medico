

<section class="pt-40">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <p class="section-title h3">Meet Us At</p>
               <hr class="bottom-line">
            </div>
        </div>

        <div class="row">
            @foreach ($events as $row)
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="tile">
                            <div class="banner-img">
                                <img src="{{ asset($row->image) }}" alt="Africa Health Exhibition 2024 Narang Medical Exhibitions">
                            </div>

                            <div class="tile-box">
                                <h6>{{ $row->title }}</h6>
                                <p>{{ $row->address }}</p>
                            </div>

                            {{-- <div class="tile-box2">
                                <p>
                                    <a href=""><i class="far fa-calendar-check"></i> Fix Appointment</a>
                                </p>
                            </div> --}}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row" style="margin-top: 20px;" >
            <a href="{{ route('nml.exhibitions') }}" class="btn-narang-outline" style="margin:0 auto;">View All Exhibitions</a>
        </div>
    </div>
</section><!-- End Events Section -->
