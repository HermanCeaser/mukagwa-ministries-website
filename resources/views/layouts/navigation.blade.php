<header class="main_header_arae">
    <!-- Top Bar -->
    <div class="topbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-list">

                        <li><a href="#!"><i class="fa fa-envelope"></i><span>info@mukagwaministries.com</span></a>
                        </li>
                        <li><a href="#!"><i class="fa fa-phone"></i><span>+256 782 331 162 | +256 705 996
                                    362</span></a></li>
                        <li><a href="#!"><span>Faqs</span></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-list-right">
                        <li>
                            <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i
                                    class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=61568646977146"><i
                                    class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/@Mukagwa2020"><i class="fab fa-twitter-square"></i></a>
                        </li>
                        <li>
                            <a href="https://instagram.com/mukagwa_ministries"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/mukagwa-ministries-18bb4b272/"><i
                                    class="fab fa-linkedin"></i></a>
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
                        <a href="{{ route('home') }}">
                            <div class="responsive-logo-wrapper">
                                <img src="{{ Vite::asset('resources/img/logo-new.png') }}" alt="logo">
                                <div class="logo-name"> Mukagwa Children & Women Ministries 
                                    <small class="motto">We Strive for quality Christian Leadership</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <div class="responsive-logo-wrapper">
                            <img src="{{ Vite::asset('resources/img/logo-new.png') }}" alt="logo">
                            <div class="logo-name"> Mukagwa Ministries 
                                <small class="motto">We Strive for quality Christian Leadership</small>
                            </div>
                        </div>
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" @class(['nav-link', 'active' => request()->routeIs('home')])>Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Causes
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('projects.health') }}" @class([
                                            'nav-link',
                                            'active' => request()->routeIs('projects.health'),
                                        ])>Health</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('projects.education') }}"
                                            @class([
                                                'nav-link',
                                                'active' => request()->routeIs('projects.education'),
                                            ])>Education</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('projects.evangelism') }}"
                                            @class([
                                                'nav-link',
                                                'active' => request()->routeIs('projects.evangelism'),
                                            ])>Evangelism</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('projects.leadership') }}"
                                            @class([
                                                'nav-link',
                                                'active' => request()->routeIs('projects.leadership'),
                                            ])>Leadership</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('projects.leadership') }}" class="nav-link">Women
                                            Empowerment</a>
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
                            <li class="nav-item">
                                <a href="{{ route('gallery') }}" @class(['nav-link', 'active' => request()->routeIs('gallery')])>
                                    Gallery
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutus') }}" @class(['nav-link', 'active' => request()->routeIs('aboutus')])>About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact-us.index') }}" @class([
                                    'nav-link',
                                    'active' => request()->routeIs('contact-us.index'),
                                ])>Contact</a>
                            </li>

                        </ul>
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="#" class="search-box"> <img
                                        src="{{ asset('assets/img/icon/search_icon.png') }}" alt="icon"></a>
                            </div>
                            <div class="option-item">
                                <a href="{{ route('donation.index') }}" class="btn btn_navber">Donate now</a>
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
                                <a href="{{ route('donation.index') }}" class="btn  btn_navber">Donate now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
