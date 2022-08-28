<x-app-layout>
    <!-- Banner Area -->
    <section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                        <h2><span class="color_big_heading">Our</span>Gallery</h2>
                        <ul class="breadcrumb_wrapper">
                            <li class="breadcrumb_item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb_item"><img src="assets/img/icon/arrow.png" alt="img"></li>
                            <li class="breadcrumb_item active">Gallery Slider</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Grid Area -->
    <section id="gallery_grid_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="section_heading">
                        <h3>Gallery</h3>
                        <h2> Explore our <span class="color_big_heading">gallery</span> to know
                            how we work</h2>
                    </div>
                </div>
            </div>
            <div class="row popup-gallery">
                <div class="col-lg-12 co-md-12 col-sm-12 col-12">
                    <div class="gallery_slider_area owl-theme owl-carousel slider_dots">
                        @for ($i=1; $i<18; $i++)
                        <div class="gallery_item">
                            <img src="{{asset('assets/img/gallery/gallery' . $i  . '.jpg')}}" alt="gallery images">
                            <div class="gallery_overlay">
                                <a href="{{asset('assets/img/gallery/gallery' . $i  . '.jpg')}}" title="FoodCamp"><img
                                        src="assets/img/icon/arrow-round.png" alt="icon"></a>
                            </div>
                        </div>
                        @endfor


                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>

@push('js')
<script src="{{ asset('assets/js/gallery-popup.js')}}"></script>
@endpush

