<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HMEL4YS757"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-HMEL4YS757');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mukagwa children and women ministries') }}</title>
    <meta name="description"
        content="Mukagwa children and women ministries is a Christian Non Government Organisation. It was founded in 2018 with an aim of providing holistic education, health care, envagelism and leadership to the less privileged communities.We are people who know that we can't afford to lose an individual to illiteracy, disease and spiritual poverty. We believe that when an individual is healthy, educated and spiritually grown every one wins." />
    <meta property="og:title" content="Mukagwa children and women ministries" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://mukagwaministries.com" />
    {{-- <meta property="og:image" content="https://github.com/HermanCeaser" /> --}}
    <meta property="og:description"
        content="Mukagwa children and women ministries is a Christian Non Government Organisation. It was founded in 2018 with an aim of providing holistic education, health care, envagelism and leadership to the less privileged communities. We are people who know that we can't afford to lose an individual to illiteracy, disease and spiritual poverty. We believe that when an individual is healthy, educated and spiritually grown every one wins." />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- preloader Area -->
        @include('layouts.partials.preloader')

        <!-- Header Area -->
        @include('layouts.navigation')

        <!-- Search  -->
        @include('layouts.partials.search')


        <!-- Page Content -->
        <main>
            @if (session()->has('success'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="d-flex w-auto card-body"
                    style="position:fixed; top: 16px; right: 0; z-index: 1030;">
                    <span class="alert alert-success ">{{ session('success') }}</span>
                </div>
            @elseif(session()->has('error'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="d-flex w-auto card-body"
                    style="position:fixed; top: 16px; right: 0; z-index: 1030;">
                    <span class="alert alert-danger ">{{ session('error') }}</span>
                </div>
            @endif
            {{ $slot }}
        </main>

        <!-- Subscribe Area -->
        @include('layouts.partials.subscribe');

        <!-- Footer Area -->
        @include('layouts.partials.footer')

        <!-- Copyright Area -->
        <div class="copyright_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="copyright_left">
                            <p>Copyright © {{ now()->format('Y') }} All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="copyright_right">
                            <ul>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCurriVT-sKF0NQ5yU4gDCpw"><i class="fab fa-youtube-square"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100091954598812&mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/@Mukagwa2020"><i class="fab fa-twitter-square"></i></a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/mukagwa_ministries"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/mukagwa-ministries-18bb4b272/"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top To Bottom Area -->
        <div class="go-top">
            <i class="fas fa-chevron-up"></i>
            <i class="fas fa-chevron-up"></i>
        </div>

    </div>
    {{-- <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script> --}}
    @vite(['resources/js/app.js'])
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/custom-progress-bar.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/custom-scroll-count.js') }}"></script> --}}


    @stack('js')
</body>

</html>
