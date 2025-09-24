<x-app-layout>
    <section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                        <h2><span class="color_big_heading">{{ $aboutPage ? $aboutPage->title : $title }}</span></h2>
                        <ul class="breadcrumb_wrapper">
                            <li class="breadcrumb_item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb_item"><img src="{{ asset('assets/img/icon/arrow.png') }}"
                                    alt="img"></li>
                            <li class="breadcrumb_item active">{{ $aboutPage ? $aboutPage->title : $title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area -->
    <section id="about_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about_area_img">
                        @if($aboutPage && $aboutPage->about_image)
                            <img src="{{ $aboutPage->about_image }}" alt="About Us">
                        @else
                            <img src="{{ asset('assets/img/common/about2.png') }}" alt="img">
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about_area_main_text pt-0">
                        <div class="about_area_heading">
                            <img src="assets/img/icon/about.png" height="392" alt="img">
                            <h3>{{ $aboutPage && $aboutPage->welcome_title ? $aboutPage->welcome_title : 'Welcome to Mukagwa Ministries' }}</h3>
                        </div>
                        <div class="about_area_heading_two">
                            <h2>{{ $aboutPage && $aboutPage->welcome_subtitle ? $aboutPage->welcome_subtitle : 'We strive to promote quality Christian Education, Health Care & Economic Empowerment' }}</h2>
                            <h3>{{ $aboutPage && $aboutPage->goal_title ? $aboutPage->goal_title : 'Our Goal:' }}</h3>
                            @if($aboutPage && $aboutPage->goal_content)
                                <div>{!! $aboutPage->goal_content !!}</div>
                            @else
                                <p>To partner with organisations in Uganda and internationally to bring about
                                    transformational change through quality Christian education, health care and community
                                    development.</p>
                            @endif
                        </div>
                        <div class="about_area_para">
                            <h3>{{ $aboutPage && $aboutPage->mission_title ? $aboutPage->mission_title : 'Mission' }}</h3>
                            @if($aboutPage && $aboutPage->mission_content)
                                <div>{!! $aboutPage->mission_content !!}</div>
                            @else
                                <p>Mukagwa ministries exists to impact the nation of Uganda through envagelism and
                                    discipleship, education, health care and community development focused on service,
                                    leadership and excellency to the glory of God.</p>
                            @endif
                        </div>
                        <div class="about_vedio_area">
                            <a href="#" class="btn btn_theme btn_md">Learn more</a>
                            <a href="https://youtu.be/QvNEkZGL-v4" class="vedio_btn popup-vimeo"><i class="fa fa-play"></i>Birth of Mukagwa Ministries</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="newletter_banner"></section>

    <section id="service_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if($aboutPage && $aboutPage->content)
                        <div>{!! $aboutPage->content !!}</div>
                    @else
                        <p>Our mission is to bring hope and healing to communities in need through compassionate service,
                            education, and spiritual guidance. We are committed to building bridges between different
                            cultures, religions, and backgrounds, fostering understanding and unity among all people.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial_area" class="section_after section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="section_heading">
                        <h3>{{ $aboutPage && $aboutPage->team_section_subtitle ? $aboutPage->team_section_subtitle : 'Ready to help' }}</h3>
                        <h2>{{ $aboutPage && $aboutPage->team_section_title ? $aboutPage->team_section_title : 'Meet Our Team' }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($teamMembers as $member)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="volunteer_wrapper h-100">
                            <div class="volunteer_img">
                                @if($member->image)
                                    <img loading="lazy" width="330" height="345" src="{{ $member->image }}" alt="{{ $member->title }}">
                                @else
                                    <img loading="lazy" width="330" height="345" src="assets/img/volunteer/default.jpg" alt="{{ $member->title }}">
                                @endif
                                @if($member->social_links)
                                    <div class="volunteer_icon">
                                        <ul>
                                            @foreach($member->social_links as $social)
                                                @php
                                                    $iconClass = match($social['platform']) {
                                                        'facebook' => 'fab fa-facebook',
                                                        'twitter' => 'fab fa-twitter-square',
                                                        'instagram' => 'fab fa-instagram',
                                                        'linkedin' => 'fab fa-linkedin',
                                                        'youtube' => 'fab fa-youtube-square',
                                                        default => 'fas fa-link'
                                                    };
                                                @endphp
                                                <li>
                                                    <a href="{{ $social['url'] }}"><i class="{{ $iconClass }}"></i></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

                            <div class="volunteer_text">
                                <h3><a href="#!">{{ $member->title }}</a></h3>
                                <p>{{ $member->position }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Fallback to static team members if no Statamic data -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="volunteer_wrapper h-100">
                            <div class="volunteer_img">
                                <img loading="lazy" width="330" height="345" src="assets/img/volunteer/Mutunda_Betty.jpg" alt="img">
                                <div class="volunteer_icon">
                                    <ul>
                                        <li><a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i class="fab fa-youtube-square"></i></a></li>
                                        <li><a href="https://www.facebook.com/profile.php?id=100092540853639"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/@Mukagwa2020"><i class="fab fa-twitter-square"></i></a></li>
                                        <li><a href="https://instagram.com/mukagwa_ministries"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/mukagwa-ministries-18bb4b272/"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="volunteer_text">
                                <h3><a href="#!">Betty Mutunda</a></h3>
                                <p>Director</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="volunteer_wrapper h-100">
                            <div class="volunteer_img">
                                <img loading="lazy" width="330" height="345" src="assets/img/volunteer/Stephen Kuwereka2.jpg" alt="img">
                                <div class="volunteer_icon">
                                    <ul>
                                        <li><a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i class="fab fa-youtube-square"></i></a></li>
                                        <li><a href="https://www.facebook.com/profile.php?id=100092540853639"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/@Mukagwa2020"><i class="fab fa-twitter-square"></i></a></li>
                                        <li><a href="https://instagram.com/mukagwa_ministries"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/mukagwa-ministries-18bb4b272/"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="volunteer_text">
                                <h3><a href="#!">Stephen Kuwereka</a></h3>
                                <p>General Secretary</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="volunteer_wrapper h-100">
                            <div class="volunteer_img">
                                <img loading="lazy" width="330" height="345" src="assets/img/volunteer/stella-birunji.jpeg" alt="img">
                                <div class="volunteer_icon">
                                    <ul>
                                        <li><a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i class="fab fa-youtube-square"></i></a></li>
                                        <li><a href="https://www.facebook.com/profile.php?id=100092540853639"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/@Mukagwa2020"><i class="fab fa-twitter-square"></i></a></li>
                                        <li><a href="https://instagram.com/mukagwa_ministries"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/mukagwa-ministries-18bb4b272/"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="volunteer_text">
                                <h3><a href="#!">Stella Birungi</a></h3>
                                <p>Department of Childhood & Family Affairs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="volunteer_wrapper h-100">
                            <div class="volunteer_img">
                                <img loading="lazy" width="330" height="345" src="assets/img/volunteer/Saraht_ndimwibo.jpg" alt="img">
                                <div class="volunteer_icon">
                                    <ul>
                                        <li><a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i class="fab fa-youtube-square"></i></a></li>
                                        <li><a href="https://www.facebook.com/profile.php?id=100092540853639"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/@Mukagwa2020"><i class="fab fa-twitter-square"></i></a></li>
                                        <li><a href="https://instagram.com/mukagwa_ministries"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/mukagwa-ministries-18bb4b272/"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="volunteer_text">
                                <h3><a href="#!">Sarah Buwule Ndimwibo</a></h3>
                                <p>Welfare Department</p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-app-layout>