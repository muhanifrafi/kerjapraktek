<?php
// require_once "./x-admin/cmslibs_pg/tmslideServices/tmslideServices.php" ;
?>



<!-- ======= Intro Section ======= -->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                @php $i = 0; @endphp
                @foreach($sliders as $slider)
                <div class="carousel-item {{ $i == '0' ? 'active':'' }}"
                    style="background-image: url({{ url('frontend/images_slide/'.$slider->n_image)}})">
                    @php $i++; @endphp
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">{{$slider->n_title}}</h2>
                            <!--p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p-->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="owl-nav">
                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>
</section><!-- End Intro Section -->
