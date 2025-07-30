<x-app-layout>
    <!-- Banner Area -->
    <section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                        <h2><span class="color_big_heading">Our</span>Gallery</h2>
                        <ul class="breadcrumb_wrapper">
                            <li class="breadcrumb_item"><a href="{{ route('home') }}">Home</a></li>
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
            <h2> All Africa Conference <span class="color_big_heading">of</span> Churches</h2>
            <div class="row popup-gallery">
                {{-- <div class="col-lg-12 co-md-12 col-sm-12 col-12"> --}}
                    {{-- <div class="gallery_slider_area owl-theme owl-carousel slider_dots"> --}}
                        @for ($i = 37; $i < 42; $i++)
                            <div class="col-lg-4 co-md-6 col-sm-12 col-12">
                                <div class="gallery_item">
                                    <img width="450" height="400" loading="lazy"
                                        src="{{ asset('assets/img/gallery/gallery' . $i . '.jpg') }}" alt="gallery images">
                                    <div class="gallery_overlay">
                                        <a href="{{ asset('assets/img/gallery/gallery' . $i . '.jpg') }}"
                                            title="FoodCamp"><img src="assets/img/icon/arrow-round.png" alt="icon"></a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        {{--
                    </div> --}}
                    {{-- </div> --}}

            </div>
            <h2> Our General <span class="color_big_heading">Gallery</span></h2>
            <div class="row popup-gallery">
                {{-- <div class="col-lg-12 co-md-12 col-sm-12 col-12"> --}}
                    {{-- <div class="gallery_slider_area owl-theme owl-carousel slider_dots"> --}}
                        @for ($i = 1; $i < 18; $i++)
                            <div class="col-lg-4 co-md-6 col-sm-12 col-12">
                                <div class="gallery_item">
                                    <img width="450" height="400" loading="lazy"
                                        src="{{ asset('assets/img/gallery/gallery' . $i . '.jpg') }}" alt="gallery images">
                                    <div class="gallery_overlay">
                                        <a href="{{ asset('assets/img/gallery/gallery' . $i . '.jpg') }}"
                                            title="FoodCamp"><img src="assets/img/icon/arrow-round.png" alt="icon"></a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        {{--
                    </div> --}}
                    {{-- </div> --}}

            </div>
            <h2> Meeting Pastors <span class="color_big_heading">in </span> Luwero-District
            </h2>
            <div class="row popup-gallery">
                {{-- <div class="col-lg-12 co-md-12 col-sm-12 col-12"> --}}
                    {{-- <div class="gallery_slider_area owl-theme owl-carousel slider_dots"> --}}
                        @for ($i = 18; $i < 20; $i++)
                            <div class="col-lg-4 co-md-6 col-sm-12 col-12">
                                <div class="gallery_item">
                                    <img width="450" height="400" loading="lazy"
                                        src="{{ asset('assets/img/gallery/gallery' . $i . '.jpg') }}" alt="gallery images">
                                    <div class="gallery_overlay">
                                        <a href="{{ asset('assets/img/gallery/gallery' . $i . '.jpg') }}"
                                            title="FoodCamp"><img src="assets/img/icon/arrow-round.png" alt="icon"></a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        {{--
                    </div> --}}
                    {{-- </div> --}}

            </div>

            <h2> Advocating & Explaining our Projects <span class="color_big_heading">to</span> Women in Masuliita
                (Wakiso-District)
            </h2>
            <div class="row popup-gallery">
                {{-- <div class="col-lg-12 co-md-12 col-sm-12 col-12"> --}}
                    {{-- <div class="gallery_slider_area owl-theme owl-carousel slider_dots"> --}}
                        @for ($i = 20; $i < 33; $i++)
                            <div class="col-lg-4 co-md-6 col-sm-12 col-12">
                                <div class="gallery_item">
                                    <img width="450" height="400" loading="lazy"
                                        src="{{ asset('assets/img/gallery/gallery' . $i . '.jpg') }}" alt="gallery images">
                                    <div class="gallery_overlay">
                                        <a href="{{ asset('assets/img/gallery/gallery' . $i . '.jpg') }}"
                                            title="FoodCamp"><img src="assets/img/icon/arrow-round.png" alt="icon"></a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        {{--
                    </div> --}}
                    {{-- </div> --}}

            </div>

            <h2> Children's Orphanage <span class="color_big_heading">in</span> Namutumba-District
            </h2>
            <div class="row popup-gallery">
                {{-- <div class="col-lg-12 co-md-12 col-sm-12 col-12"> --}}
                    {{-- <div class="gallery_slider_area owl-theme owl-carousel slider_dots"> --}}
                        @for ($i = 33; $i < 36; $i++)
                            <div class="col-lg-4 co-md-6 col-sm-12 col-12">
                                <div class="gallery_item">
                                    <img width="450" height="400" loading="lazy"
                                        src="{{ asset('assets/img/gallery/gallery' . $i . '.jpg') }}" alt="gallery images">
                                    <div class="gallery_overlay">
                                        <a href="{{ asset('assets/img/gallery/gallery' . $i . '.jpg') }}"
                                            title="FoodCamp"><img src="assets/img/icon/arrow-round.png" alt="icon"></a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        {{--
                    </div> --}}
                    {{-- </div> --}}

            </div>

            <h2> Women's Conference <span class="color_big_heading">in</span> Kampala
            </h2>
            <div class="row popup-gallery">
                {{-- <div class="col-lg-12 co-md-12 col-sm-12 col-12"> --}}
                    {{-- <div class="gallery_slider_area owl-theme owl-carousel slider_dots"> --}}
                        @for ($i = 36; $i < 37; $i++)
                            <div class="col-lg-4 co-md-6 col-sm-12 col-12">
                                <div class="gallery_item">
                                    <img width="450" height="400" loading="lazy"
                                        src="{{ asset('assets/img/gallery/gallery' . $i . '.jpg') }}" alt="gallery images">
                                    <div class="gallery_overlay">
                                        <a href="{{ asset('assets/img/gallery/gallery' . $i . '.jpg') }}"
                                            title="FoodCamp"><img src="assets/img/icon/arrow-round.png" alt="icon"></a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        {{--
                    </div> --}}
                    {{-- </div> --}}

            </div>
        </div>
    </section>

</x-app-layout>

@push('js')
    <script src="{{ asset('assets/js/gallery-popup.js') }}"></script>
@endpush