<section class="pt-80 testimonials_area">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <p class="section-title h3">What our Clients are Saying</p>
                <p class="section-description">The organic reviews not hoax.</p>
                <hr class="bottom-line">
            </div>
        </div>

       <div class="testi_slider owl-carousel">
            @foreach ($testimonials as $row)
                <div class="item">
                    <div class="testi_item">
                        <div class="wow fadeIn" data-wow-duration="1s">
                            <p>{{ $row->description }}</p>
                            <p style="font-size:13px;"><em>- {{ $row->title }}</em></p>
                        </div>
                    </div>
                 </div>
            @endforeach
        </div>
    </div>
</section><!-- End Testimonial Section -->
