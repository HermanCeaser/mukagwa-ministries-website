<x-app-layout>
    <section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                        <h2><span class="color_big_heading">{{ __($title) }}</span></h2>
                        <ul class="breadcrumb_wrapper">
                            <li class="breadcrumb_item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb_item"><img src="{{ asset('assets/img/icon/arrow.png') }}" alt="img">
                            </li>
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
                        {{-- <img src="{{ asset('assets/img/common/about2.png') }}" alt="img"> --}}
                        <div class="responsive-video-container">
                            <iframe
                                src="https://www.youtube.com/embed/Xu9am1wh5GU?si=UQkAobilyZheE0_w&amp;start=22&autoplay=1&mute=1&controls=1"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
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
                            <p>To empower women, girls and communities through faith-based action, advocacy, and
                                education to prevent gender-based violence and promote equality and build safe,
                                resilient and inclusive communities where every woman and girl can thrive in dignity and
                                freedom.</p>

                        </div>
                        <div class="about_vedio_area">
                            <a href="#" class="btn btn_theme btn_md">Learn more</a>
                            <a href="https://youtu.be/QvNEkZGL-v4" class="vedio_btn popup-vimeo"><i
                                    class="fa fa-play"></i>Birth of Mukagwa Ministries</a>
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
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/Mutunda_Betty.jpg"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <img loading="lazy" width="330" height="345"
                                src="assets/img/volunteer/Stephen Kuwereka2.jpg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <p>Director of Health Department</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345"
                                src="assets/img/volunteer/Nangobi Linda Eunice2.jpg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <p>Chief Finance Officer</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/muledu-micheal.jpg"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/Abasa_Wandega.jpg"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/lule-fatah.jpeg"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Lule Fatah</a></h3>
                            <p>Head of Media Department</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/volunteer-6.png"
                                alt="Kalajja Mercy - General Secretary">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Kalajja Mercy</a></h3>
                            <p>General Secretary</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/volunteer-6.png"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Katalo Juliet</a></h3>
                            <p> Department of Planning & Administration</p>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div class="row">


                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/namugga-linda.jpg"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <p>Operations Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/volunteer-6.png"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Mugala Deborah</a></h3>
                            <p>Project Moblizer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/stella-grace.jpg"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/stella-birunji.jpeg"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/volunteer-4.png"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/birungi-phiona.jpg"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/kemigisa-brenda.jpg"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <p>Publicity Department</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/baluka-franzi.jpg"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Baluka Franzi</a></h3>
                            <p>Front Desk Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/musibika-lillian.jpg"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <p>Project Manager</p>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/nankya-sandra.jpeg"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Nankya Sandra</a></h3>
                            <p>Monitoring and Evaluation Department</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345"
                                src="assets/img/volunteer/tawomerawo-sylvia.jpeg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Tawomerawo Slyvia</a></h3>
                            <p>Head of Welfare Department</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/volunteer-6.png"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <p>Head of Gender and Women Affairs Department</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345" src="assets/img/volunteer/volunteer-6.png"
                                alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Ssembusi Allan Mayengo</a></h3>
                            <p>Head of Research Department</p>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper h-100">
                        <div class="volunteer_img">
                            <img loading="lazy" width="330" height="345"
                                src="assets/img/volunteer/luganda-lenon-jonny.jpeg" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                                class="fab fa-youtube-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092540853639"><i
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
                            <h3><a href="#!">Luganda Lenono Jonny</a></h3>
                            <p>Associate Researcher</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>