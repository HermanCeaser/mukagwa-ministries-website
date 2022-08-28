<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mukagwa children and women ministries') }}</title>
    <meta name="description" content="Mukagwa children and women ministries is a Christian Non Government Organisation. It was founded in 2018 with an aim of providing holistic education, health care, envagelism and leadership to the less privileged communities.We are people who know that we can't afford to lose an individual to illiteracy, disease and spiritual poverty. We believe that when an individual is healthy, educated and spiritually grown every one wins." />
    <meta property="og:title" content="Mukagwa children and women ministries" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://mukagwaministries.com" />
    {{-- <meta property="og:image" content="https://github.com/HermanCeaser" /> --}}
    <meta property="og:description"
        content="Mukagwa children and women ministries is a Christian Non Government Organisation. It was founded in 2018 with an aim of providing holistic education, health care, envagelism and leadership to the less privileged communities. We are people who know that we can't afford to lose an individual to illiteracy, disease and spiritual poverty. We believe that when an individual is healthy, educated and spiritually grown every one wins." />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- preloader Area -->
        {{-- @include('layouts.partials.preloader') --}}

        <!-- Header Area -->
        @include('layouts.navigation')

        <!-- Search  -->
        @include('layouts.partials.search')

        <!-- Banner Area -->
        @include('layouts.partials.hero')

        <!-- About Projects Area -->
        @include('layouts.partials.projects')

        <!-- About Us area -->
        @include('layouts.partials.aboutus')

        <!-- Trending causes Area -->
        @include('layouts.partials.causes')

        <!-- Donate Area -->
        @include('layouts.partials.donate')

        <!-- Counter  Area -->
        @include('layouts.partials.counter')

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
        </div>

        <!-- Top To Bottom Area -->
        <div class="go-top">
            <i class="fas fa-chevron-up"></i>
            <i class="fas fa-chevron-up"></i>
        </div>



        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
