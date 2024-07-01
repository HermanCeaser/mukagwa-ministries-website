<x-app-layout>
    <section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                        <h2><span class="color_big_heading">{{ __($title) }}</span></h2>
                        <ul class="breadcrumb_wrapper">
                            <li class="breadcrumb_item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb_item"><img src="{{ asset('assets/img/icon/arrow.png') }}"
                                    alt="img"></li>
                            <li class="breadcrumb_item active">{{ ucfirst($title) ?? __('Make a Donation') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Area -->
    <section id="main_blog_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="section_heading">
                        <h3>Our latest news</h3>
                        <h2>Read and <span class="color_big_heading">explore</span> your
                            knowledge through our news
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($posts as $post)
                    <div class="col-lg-4 mt-30">
                        <x-post-card :post="$post" />
                    </div>
                @empty
                    <div class="col-lg-6 offset-lg-3 col-sm-12 col-12">
                        <div class="about_top_boxed bg_one">
                            <div class="about_top_boxed_icon">
                                <img src="assets/img/icon/money.png" alt="img">
                            </div>
                            <div class="about_top_boxed_text">
                                <p>No News Published</p>
                                <h3>Check back later!</h3>
                                <a href="{{ route('aboutus') }}">Learn more...</a>
                            </div>
                            <div class="about_top_boxed_vector">
                                <img src="assets/img/icon/round.png" alt="img">
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
            {{-- <div class="row">
                <div class="col-lg-4">
                    <x-post-card :post="$posts[0]" />
                    <div class="blog_two_wrapper mt-30">
                        <a href="news-details.html"><img src="assets/img/blog/blog-1-long.png" alt="img"></a>
                        <div class="news_two_text">
                            <a href="news-details.html">#Work</a>
                            <h3><a href="news-details.html">“Work for food” programme for
                                    the elder people</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_two_wrapper">
                        <a href="news-details.html"><img src="assets/img/blog/blog_small-1.png" alt="img"></a>
                        <div class="news_two_text">
                            <a href="news-details.html">#WomenRights</a>
                            <h3><a href="news-details.html">Stop early marriage and educate your girl child</a></h3>
                        </div>
                    </div>
                    <div class="blog_card_wrapper mt-30">
                        <div class="blog_card_img">
                            <a href="news-details.html"><img src="assets/img/blog/blog-2.png" alt="img"></a>
                        </div>
                        <div class="blog_card_text">
                            <div class="blog_card_tags">
                                <a href="news.html">#Habitation</a>
                            </div>
                            <div class="blog_card_heading">
                                <h3><a href="news-details.html">Arrange rehabitation facility for the homeless
                                        people</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod...</p>
                            </div>
                            <div class="blog_boxed_bottom_wrapper ">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="blog_bottom_boxed">
                                            <div class="blog_bottom_icon">
                                                <img src="assets/img/icon/cal.png" alt="icon">
                                            </div>
                                            <div class="blog_bottom_content">
                                                <h5>Date:</h5>
                                                <p>20 Dec, 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="blog_bottom_boxed blog_left_padding">
                                            <div class="blog_bottom_icon">
                                                <img src="assets/img/icon/user.png" alt="icon">
                                            </div>
                                            <div class="blog_bottom_content">
                                                <h5>By:</h5>
                                                <p>Admin</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog_two_wrapper mt-30">
                        <a href="news-details.html"><img src="assets/img/blog/blog_small-2.png" alt="img"></a>
                        <div class="news_two_text">
                            <a href="news-details.html">#Education</a>
                            <h3><a href="news-details.html">Give children a good education
                                    & better life</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_card_wrapper">
                        <div class="blog_card_img">
                            <a href="news-details.html"><img src="assets/img/blog/blog-3.png" alt="img"></a>
                        </div>
                        <div class="blog_card_text">
                            <div class="blog_card_tags">
                                <a href="news.html">#Water</a>
                            </div>
                            <div class="blog_card_heading">
                                <h3><a href="news-details.html">Ensure pure and mineral drinking
                                        water for rural people</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod...</p>
                            </div>
                            <div class="blog_boxed_bottom_wrapper">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="blog_bottom_boxed">
                                            <div class="blog_bottom_icon">
                                                <img src="assets/img/icon/cal.png" alt="icon">
                                            </div>
                                            <div class="blog_bottom_content">
                                                <h5>Date:</h5>
                                                <p>20 Dec, 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="blog_bottom_boxed blog_left_padding">
                                            <div class="blog_bottom_icon">
                                                <img src="assets/img/icon/user.png" alt="icon">
                                            </div>
                                            <div class="blog_bottom_content">
                                                <h5>By:</h5>
                                                <p>Admin</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog_two_wrapper mt-30">
                        <a href="news-details.html"><img src="assets/img/blog/blog-2-long.png" alt="img"></a>
                        <div class="news_two_text">
                            <a href="news-details.html">#Cloths</a>
                            <h3><a href="news-details.html">Give 10,000+ cloths to the street
                                    children</a></h3>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-md-12 mt-3">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>

    </section>


</x-app-layout>
