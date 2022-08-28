<header class="main_header_arae">
    <!-- Top Bar -->
    <div class="topbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-list">

                        <li><a href="#!"><i class="fa fa-envelope"></i><span>info@mukagwaministries.com</span></a>
                        </li>
                        <li><a href="#!"><i class="fa fa-phone"></i><span>+256 782 331 162 | +256 705 996 362</span></a></li>
                        <li><a href="#!"><span>Faqs</span></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-list-right">
                        <li>
                            <a href="#!"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-twitter-square"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Bar -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{Vite::asset('resources/img/logo.png')}}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{Vite::asset('resources/img/logo.png')}}" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('home')}}" @class([ 'nav-link', 'active'=>request()->routeIs('home')])>Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Causes
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Causes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Causes Details</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Events
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="events.html" class="nav-link">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="event-details.html" class="nav-link">Events Details</a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="nav-item" >
                                <a href="{{ route('gallery')}}" @class([ 'nav-link', 'active'=>request()->routeIs('gallery')])>
                                    Gallery
                                </a>
                                {{-- <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="gallery-grid.html" class="nav-link">Gallery One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="gallery-slider.html" class="nav-link">Gallery Two</a>
                                    </li>
                                </ul> --}}
                            </li>
                            {{-- <li class="nav-item">
                                <a href="#" class="nav-link">
                                    News
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="news.html" class="nav-link">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="news-details.html" class="nav-link">News Details</a>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Pages
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="make-donation.html" class="nav-link">Make Donation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="testimonials.html" class="nav-link">Testimonials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="volunter.html" class="nav-link">Volunter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="login.html" class="nav-link">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="registration.html" class="nav-link">Register</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faqs.html" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-service.html" class="nav-link">Terms Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="error.html" class="nav-link">404 Error</a>
                                    </li>
                                </ul>
                            </li> --}}

                            <li class="nav-item">
                                <a href="#" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="#" class="search-box"> <img src="assets/img/icon/search_icon.png"
                                        alt="icon"></a>
                            </div>
                            <div class="option-item">
                                <a href="#" class="btn btn_navber">Donate now</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="#" class="search-box"><i class="fas fa-search"></i></a>
                            </div>
                            <div class="option-item">
                                <a href="#" class="btn  btn_navber">Donate now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
