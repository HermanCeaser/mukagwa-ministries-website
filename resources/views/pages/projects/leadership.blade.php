<x-app-layout>
    <!-- Banner Area -->
    <section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                        <h2><span class="color_big_heading">Projects</span></h2>
                        <ul class="breadcrumb_wrapper">
                            <li class="breadcrumb_item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb_item"><img src="{{ asset('assets/img/icon/arrow.png') }}"
                                    alt="img"></li>
                            <li class="breadcrumb_item"><a href="">Projects</a></li>
                            <li class="breadcrumb_item"><img src="{{ asset('assets/img/icon/arrow.png') }}"
                                    alt="img"></li>
                            <li class="breadcrumb_item active">{{ ucfirst($title) ?? __('Details') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- causes details Area -->
    <section id="trending_causes_main" class="section_padding">
        <div class="container">
            <div class="row" id="counter">
                <div class="col-lg-10">
                    <div class="details_wrapper_area">
                        <div class="details_big_img">
                            <img src="{{ asset('assets/img/gallery/gallery12.jpg') }}" alt="img">
                            <span class="causes_badge bg-yellow">{{ ucfirst($title) ?? '' }}</span>
                        </div>
                        <div class="details_skill_area">
                            <div class="class-full causes_pro_bar_flex progress_bar">
                                {{-- <div class="class-full-bar-box">
                                    <h3 class="h3-title">Goal: <span>$11,000</span></h3>
                                    <div class="class-full-bar-percent">
                                        <h2><span class="counting-data" data-count="89">0</span>
                                            <span>%</span>
                                        </h2>
                                    </div>
                                    <div class="skill-bar class-bar" data-width="89%">
                                        <div class="skill-bar-inner class-bar-in"></div>
                                    </div>
                                </div> --}}
                                <div class="details_top_btn">
                                    {{-- <a href="{{ route('donation.index') }}" class="btn btn_md btn_theme">Donate now</a> --}}
                                    <a href="https://www.mchanga.africa/fundraiser/109416" target="_blank" class="btn btn_md btn_theme">Donate now</a>
                                </div>
                            </div>

                        </div>
                        <div class="details_text_wrapper">
                            <h2>Donate to Mentor and Empower Women and Families in society</h2>
                            <p>
                                Women empowerment is a most welcome project in this world. It helps women to live a
                                better life, who are missing the opportunity for education and proper health care. Women
                                empowerment gives them the motivation to strive for their rights and make sure that they
                                can afford food, clothing and shelter.
                            </p>

                            <h3>Women Empowerment;</h3>

                            <p>
                                Women are the most vulnerable people in our community. The ministry therefore took an
                                initiative to mentor them spiritually, socially and economically. We train and empower
                                women to take charge of their lives through equipping them with different skills like
                                sewing, poultry farming, making hand crafts, piggery, urban farming among others.
                                Through these they can earn some income which they can use to improve on their standards
                                of living
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="details_small_img">
                                        <img width="450" src="{{ asset('assets/img/gallery/gallery11.jpg') }}"
                                            alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="details_small_img">
                                        <img src="{{ asset('assets/img/gallery/gallery13.jpg') }}" alt="img">
                                    </div>
                                </div>
                            </div>

                        </div>

                        @isset($comments)
                            <div class="comment_area_details">
                                <h3>2 Comments</h3>
                                <div class="post_comment_wrapper">
                                    <div class="post_comment_item">
                                        <div class="post_comment_img">
                                            <img src="{{ asset('assets/img/common/post-1.png') }}" alt="img">
                                        </div>
                                        <div class="post_comment_text">
                                            <div class="post_names_replay">
                                                <h5>James martin</h5>
                                                <a href="#!"><i class="fas fa-reply"></i>Reply</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum. There are
                                                many variations of passages of Lorem Ipsum available but the majority.</p>
                                        </div>
                                    </div>
                                    <div class="post_comment_item">
                                        <div class="post_comment_img">
                                            <img src="{{ asset('assets/img/common/post-2.png') }}" alt="img">
                                        </div>
                                        <div class="post_comment_text">
                                            <div class="post_names_replay">
                                                <h5>James martin</h5>
                                                <a href="#!"><i class="fas fa-reply"></i>Reply</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum. There are
                                                many variations of passages of Lorem Ipsum available but the majority.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endisset
                        <div class="comment_form_area">
                            <h3>Leave a comment</h3>
                            <div class="comment_form">
                                <form action="#!" id="comment_form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Enter full name"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter email address" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea rows="5" placeholder="Write your comments" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="submit_btn">
                                                <button class="btn btn_theme btn_md">Submit comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="sidebar_first">
                        <!-- Project Organizer -->
                        <div class="project_organizer_wrapper sidebar_boxed">
                            <div class="project_organizer_img">
                                <img src="{{ asset('assets/img/sidebar/project_organizer.png') }}" alt="img" />
                            </div>
                            <div class="project_organizer_text">
                                <h5>Project organizer:</h5>
                                <h3>Polin sarika</h3>
                                <p>Manager at ABC company</p>
                                <ul>
                                    <li><img src="{{ asset('assets/img/icon/tag.png') }}" alt="icon"> Category: <span>Education</span>
                                    </li>
                                    <li><img src="{{ asset('assets/img/icon/map.png') }}" alt="icon"> Location: <span>Niger,
                                            Nigeria</span></li>
                                    <li><img src="{{ asset('assets/img/icon/cal.png') }}" alt="icon"> Date: <span>20 Dec, 2021</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Recent Donet -->
                        <div class="project_recentdonet_wrapper sidebar_boxed">
                            <div class="sidebar_heading_main">
                                <h3>Recent donations</h3>
                            </div>
                            <div class="recent_donet_item">
                                <div class="recent_donet_img">
                                    <a href="cause-details.html"><img src="{{ asset('assets/img/sidebar/rec-donet-1.png') }}"
                                            alt="img"></a>
                                </div>
                                <div class="recent_donet_text">
                                    <div class="sidebar_inner_heading">
                                        <h4><a href="cause-details.html">Mike richard</a></h4>
                                        <h5>$300.00</h5>
                                    </div>
                                    <p>Business man</p>
                                    <h6>2 hours ago</h6>
                                </div>
                            </div>
                            <div class="recent_donet_item">
                                <div class="recent_donet_img">
                                    <a href="cause-details.html"><img src="{{ asset('assets/img/sidebar/rec-donet-2.png') }}"
                                            alt="img"></a>
                                </div>
                                <div class="recent_donet_text">
                                    <div class="sidebar_inner_heading">
                                        <h4><a href="cause-details.html">Jenifar lawrence</a></h4>
                                        <h5>$400.00</h5>
                                    </div>
                                    <p>Entrepreneur</p>
                                    <h6>7 hours ago</h6>
                                </div>
                            </div>
                            <div class="recent_donet_item">
                                <div class="recent_donet_img">
                                    <a href="cause-details.html"><img src="{{ asset('assets/img/sidebar/rec-donet-3.png') }}"
                                            alt="img"></a>
                                </div>
                                <div class="recent_donet_text">
                                    <div class="sidebar_inner_heading">
                                        <h4><a href="cause-details.html">David jovan</a></h4>
                                        <h5>$250.00</h5>
                                    </div>
                                    <p>Manager</p>
                                    <h6>3 hours 25 min ago</h6>
                                </div>
                            </div>
                            <div class="recent_donet_item">
                                <div class="recent_donet_img">
                                    <a href="cause-details.html"><img src="{{ asset('assets/img/sidebar/rec-donet-4.png') }}"
                                            alt="img"></a>
                                </div>
                                <div class="recent_donet_text">
                                    <div class="sidebar_inner_heading">
                                        <h4><a href="cause-details.html">Calvin roy</a></h4>
                                        <h5>$100.00</h5>
                                    </div>
                                    <p>Student</p>
                                    <h6>4 hours ago</h6>
                                </div>
                            </div>
                            <div class="recent_donet_item">
                                <div class="recent_donet_img">
                                    <a href="cause-details.html"><img src="{{ asset('assets/img/sidebar/rec-donet-5.png') }}"
                                            alt="img"></a>
                                </div>
                                <div class="recent_donet_text">
                                    <div class="sidebar_inner_heading">
                                        <h4><a href="cause-details.html">Julia flora</a></h4>
                                        <h5>$300.00</h5>
                                    </div>
                                    <p>House wife</p>
                                    <h6>5 hours ago</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Recent Causes -->
                        <div class="recent_causes_wrapper sidebar_boxed">
                            <div class="sidebar_heading_main">
                                <h3>Recent causes</h3>
                            </div>
                            <div class="recent_donet_item">
                                <div class="recent_donet_img">
                                    <a href="cause-details.html"><img src="{{ asset('assets/img/sidebar/rec-cas-1.png') }}"
                                            alt="img"></a>
                                </div>
                                <div class="recent_donet_text">
                                    <div class="sidebar_inner_heading">
                                        <h4><a href="cause-details.html">Stop early marriage and educate
                                                your girl child</a></h4>
                                    </div>
                                    <h6>3rd January, 2022</h6>
                                </div>
                            </div>
                            <div class="recent_donet_item">
                                <div class="recent_donet_img">
                                    <a href="cause-details.html"><img src="{{ asset('assets/img/sidebar/rec-cas-2.png') }}"
                                            alt="img"></a>
                                </div>
                                <div class="recent_donet_text">
                                    <div class="sidebar_inner_heading">
                                        <h4><a href="cause-details.html">Ensure a secure and free life for
                                                the wild animal</a></h4>
                                    </div>
                                    <h6>10th January, 2022</h6>
                                </div>
                            </div>
                            <div class="recent_donet_item">
                                <div class="recent_donet_img">
                                    <a href="cause-details.html"><img src="{{ asset('assets/img/sidebar/rec-cas-3.png') }}"
                                            alt="img"></a>
                                </div>
                                <div class="recent_donet_text">
                                    <div class="sidebar_inner_heading">
                                        <h4><a href="cause-details.html">Ensure pure and mineral drinking
                                                water for rural people</a></h4>
                                    </div>
                                    <h6>15th January, 2022</h6>
                                </div>
                            </div>
                            <div class="recent_donet_item">
                                <div class="recent_donet_img">
                                    <a href="cause-details.html"><img src="{{ asset('assets/img/sidebar/rec-cas-4.png') }}"
                                            alt="img"></a>
                                </div>
                                <div class="recent_donet_text">
                                    <div class="sidebar_inner_heading">
                                        <h4><a href="cause-details.html"> Collect fund for drinking water &
                                                healthy food</a></h4>
                                    </div>
                                    <h6>30th Dec, 2021</h6>
                                </div>
                            </div>
                        </div>
                        <!-- share Causes -->
                        <div class="share_causes_wrapper sidebar_boxed">
                            <div class="sidebar_heading_main">
                                <h3>Share causes</h3>
                            </div>
                            <div class="social_icon_sidebar">
                                <ul>
                                    <li><a href="#!"><img src="{{ asset('assets/img/icon/facebook.png') }}" alt="icon"></a></li>
                                    <li><a href="#!"><img src="{{ asset('assets/img/icon/instagram.png') }}" alt="icon"></a></li>
                                    <li><a href="#!"><img src="{{ asset('assets/img/icon/twitter.png') }}" alt="icon"></a></li>
                                    <li><a href="#!"><img src="{{ asset('assets/img/icon/linkedin.png') }}" alt="icon"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

</x-app-layout>
