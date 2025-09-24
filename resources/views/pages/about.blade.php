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
                        <img src="{{ asset('assets/img/common/about2.png') }}" alt="img">
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about_area_main_text pt-0">
                        <div class="about_area_heading">
                            <img src="assets/img/icon/about.png" height="392" alt="img">
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
                            <a href="https://youtu.be/QvNEkZGL-v4" class="vedio_btn popup-vimeo"><i class="fa fa-play"></i>Birth of Mukagwa Ministries</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="newletter_banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="newletter_text">
                        <h4><img src="assets/img/icon/about.png" alt="img">Where we came from</h4>
                        <h2>About <span class="color_big_heading">Us</span></h2>
                       
                    </div>
                </div>
                <div class="col-lg-8">
                    <p>Mukagwa Children and Women Ministries is a Christian Non Government Organization. It was
                        founded in 2018 with an aim of providing holistic education, health care, evangelism and
                        leadership to the less privileged communities.</p><br>
                    <p>We are people who know that we can't afford to lose an individual to illiteracy, disease and
                        spiritual poverty. We believe that when an individual is healthy, educated and spiritually
                        grown every one wins.</p><br>
                    <p>
                        In addition, we are particularly drawn to Community Bible Church in Namutumba District as a
                        joint initiative. The church's commitment to serving others
                        and spreading love and compassion to those in need. We believe that by working together, we
                        can create a stronger network of support and resources for those who are struggling or
                        facing challenges.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial_area" class="section_after section_padding">
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
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/Mutunda_Betty.jpg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/Stephen Kuwereka2.jpg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <p>CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/Komodo Keneth1.jpg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <p> Department of Planning & Administration</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/muledu-micheal.jpg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <p>Department of Consume, Religious & Life Stance</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/Ssenyange_Samson.jpg" alt="Ssenyange Samson - General Secretary">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Ssenyange Samson</a></h3>
                            <p>General Secretary</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/volunteer-2.png" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Kaigo Julius</a></h3>
                            <p>Cheif Financial Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/volunteer-3.png" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Musibika Lillian</a></h3>
                            <p>Operations Manager</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/Abasa_Wandega.jpg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Abasa Wandega</a></h3>
                            <p>Head ICT & Communication Department</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/Nangobi Linda Eunice2.jpg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Nangobi Linda Eunice</a></h3>
                            <p>Project Manager</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/namugga-linda.jpg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Namugga Linda</a></h3>
                            <p>Department of Development & planning</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/Daniel Mugabi.jpg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Daniel Mugabi</a></h3>
                            <p>Project Moblizer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/stella-grace.jpg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Stella Grace Zalwango </a></h3>
                            <p>Program Coordinator</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/volunteer-4.png" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Nakitende Christine</a></h3>
                            <p>Promotions Manager</p>
                        </div>
                    </div>
                </div> --}}
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/volunteer-6.png" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Sarah Buwule Ndimwibo</a></h3>
                            <p>Welfare Department</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/stella-birunji.jpeg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Stella Birungi</a></h3>
                            <p>Department of Childhood & Family Affairs</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/birungi-phiona.jpg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Birungi Phionah</a></h3>
                            <p>Department of Youth Affairs</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/kemigisa-brenda.jpg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Kemigisa Brenda</a></h3>
                            <p>Publicity & Media</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</x-app-layout>
