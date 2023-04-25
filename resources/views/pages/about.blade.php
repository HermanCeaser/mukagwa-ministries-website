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
    <!-- About Area -->
    <section id="about_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about_area_img">
                        <img src="{{ asset('assets/img/common/aboutus.jpg') }}" alt="img">
                        <h3 class="mt-3">About Us</h3>
                        <p>Mukagwa Children and Women Ministries is a Christian Non Government Organization. It was
                            founded in 2018 with an aim of providing holistic education, health care, evangelism and
                            leadership to the less privileged communities.</p>
                        <p>We are people who know that we can't afford to lose an individual to illiteracy, disease and
                            spiritual poverty. We believe that when an individual is healthy, educated and spiritually
                            grown every one wins.</p>
                        <p>
                            In addition, we are particularly drawn to Community Bible Church in Namutumba District as a
                            joint initiative. The church's commitment to serving others
                            and spreading love and compassion to those in need. We believe that by working together, we
                            can create a stronger network of support and resources for those who are struggling or
                            facing challenges.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about_area_main_text">
                        <div class="about_area_heading">
                            <img src="assets/img/icon/about.png" alt="img">
                            <h3>Welcome to Mukagwa Ministries</h3>
                        </div>
                        <div class="about_area_heading_two">
                            <h2>We strive to promote quality Christian Education, <span class="color_big_heading">Health
                                    Care</span> <br />
                                & Economic Empowerment</h2>
                            <h3>Our Goal:</h3>
                            <p>To partner with organisations in Uganda and internationally to bring about
                                transformational change through quality Christian education, health care and community
                                development.</p>
                        </div>
                        <div class="about_area_para">
                            <h3>Mission</h3>
                            <p>Mukagwa ministries exists to impact the nation of Uganda through envagelism and
                                discipleship, education, health care and community development focused on service,
                                leadership and excellency to the glory of God.</p>

                        </div>
                        <div class="about_vedio_area">
                            <a href="#" class="btn btn_theme btn_md">Learn more</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="volunteer_area" class="section_after section_padding bg-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="section_heading">
                        <h3>Ready to help</h3>
                        <h2> Meet Our <span class="color_big_heading">Team</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper">
                        <div class="volunteer_img">
                            <img src="assets/img/volunteer/Mutunda_Betty.jpg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100091954598812&mibextid=ZbWKwL"><i
                                                class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/@Mukagwa2020"><i
                                                class="fab fa-twitter-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/mukagwa_ministries"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/mukagwa-ministries-18bb4b272/"><i
                                                class="fab fa-linkedin"></i></a>
                                    </li>
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
                    <div class="volunteer_wrapper">
                        <div class="volunteer_img">
                            <img src="assets/img/volunteer/volunteer-2.png" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100091954598812&mibextid=ZbWKwL"><i
                                                class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/@Mukagwa2020"><i
                                                class="fab fa-twitter-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/mukagwa_ministries"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/mukagwa-ministries-18bb4b272/"><i
                                                class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="volunteer_text">
                            <h3><a href="#!">Stephen Kuwereka</a></h3>
                            <p>Health Coordinator</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper">
                        <div class="volunteer_img">
                            <img src="assets/img/volunteer/volunteer-3.png" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100091954598812&mibextid=ZbWKwL"><i
                                                class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/@Mukagwa2020"><i
                                                class="fab fa-twitter-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/mukagwa_ministries"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/mukagwa-ministries-18bb4b272/"><i
                                                class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="volunteer_text">
                            <h3><a href="#!">Komodo Keneth</a></h3>
                            <p>Senior Pastor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper">
                        <div class="volunteer_img">
                            <img src="assets/img/volunteer/volunteer-4.png" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100091954598812&mibextid=ZbWKwL"><i
                                                class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/@Mukagwa2020"><i
                                                class="fab fa-twitter-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/mukagwa_ministries"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/mukagwa-ministries-18bb4b272/"><i
                                                class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="volunteer_text">
                            <h3><a href="#!">Muledu Micheal</a></h3>
                            <p>Elder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
