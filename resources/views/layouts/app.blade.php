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
    
    <!-- HTML Meta Tags -->
    <title>Mukagwa children and women ministries</title>
    <meta name="description" content="Mukagwa Children and Women Ministries is a Christian NGO founded in 2018 to serve underprivileged communities through holistic education, healthcare, evangelism, and leadership. Committed to combating illiteracy, disease, and spiritual poverty, the organization believes that a healthy, educated, and spiritually enriched individual contributes to a thriving society.">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://mukagwaministries.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Mukagwa children and women ministries">
    <meta property="og:description" content="Mukagwa Children and Women Ministries is a Christian NGO founded in 2018 to serve underprivileged communities through holistic education, healthcare, evangelism, and leadership. Committed to combating illiteracy, disease, and spiritual poverty, the organization believes that a healthy, educated, and spiritually enriched individual contributes to a thriving society.">
    <meta property="og:image" content="https://ogcdn.net/c078a98b-9a33-4eaf-a5cf-e5ebf3ea450c/v1/mukagwaministries.com/Mukagwa%20children%20and%20women%20ministries/Mukagwa%20children%20and%20women%20ministries%20is%20a%20Christian%20Non%20Government%20Organisation.%20It%20was%20founded%20in%202018%20with%20an%20aim%20of%20providing%20holistic%20education%2C%20health%20care%2C%20envagelism%20and%20leadership%20to%20the%20less%20privileged%20communities.%20We%20are%20people%20who%20know%20that%20we%20can't%20afford%20to%20lose%20an%20individual%20to%20illiteracy%2C%20disease%20and%20spiritual%20poverty.%20We%20believe%20that%20when%20an%20individual%20is%20healthy%2C%20educated%20and%20spiritually%20grown%20every%20one%20wins./https%3A%2F%2Fopengraph.b-cdn.net%2Fproduction%2Fimages%2Ffce8ef16-d66c-421f-b4d8-3325415d779e.jpg%3Ftoken%3DfG-329Y2Plprd03JxlaFaOhDf75G2ZwLxZ3cnXkPZoI%26height%3D780%26width%3D1040%26expires%3D33267606300/og.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="mukagwaministries.com">
    <meta property="twitter:url" content="https://mukagwaministries.com">
    <meta name="twitter:title" content="Mukagwa children and women ministries">
    <meta name="twitter:description" content="Mukagwa Children and Women Ministries is a Christian NGO founded in 2018 to serve underprivileged communities through holistic education, healthcare, evangelism, and leadership. Committed to combating illiteracy, disease, and spiritual poverty, the organization believes that a healthy, educated, and spiritually enriched individual contributes to a thriving society.">
    <!--
    You can generate this image URL dynamically: https://ogcdn.net/c078a98b-9a33-4eaf-a5cf-e5ebf3ea450c/v1/{site_text}/{title_text}/{description_text}/{image_url}/og.png
    Replace the variables in the brackets with your own values and use this URL in the image tag below this comment. Ensure values are URL encoded.
    For more information, read: https://www.opengraph.xyz/blog/how-to-implement-dynamic-open-graph-images
    -->
    <meta name="twitter:image" content="https://ogcdn.net/c078a98b-9a33-4eaf-a5cf-e5ebf3ea450c/v1/mukagwaministries.com/Mukagwa%20children%20and%20women%20ministries/Mukagwa%20children%20and%20women%20ministries%20is%20a%20Christian%20Non%20Government%20Organisation.%20It%20was%20founded%20in%202018%20with%20an%20aim%20of%20providing%20holistic%20education%2C%20health%20care%2C%20envagelism%20and%20leadership%20to%20the%20less%20privileged%20communities.%20We%20are%20people%20who%20know%20that%20we%20can't%20afford%20to%20lose%20an%20individual%20to%20illiteracy%2C%20disease%20and%20spiritual%20poverty.%20We%20believe%20that%20when%20an%20individual%20is%20healthy%2C%20educated%20and%20spiritually%20grown%20every%20one%20wins./https%3A%2F%2Fopengraph.b-cdn.net%2Fproduction%2Fimages%2Ffce8ef16-d66c-421f-b4d8-3325415d779e.jpg%3Ftoken%3DfG-329Y2Plprd03JxlaFaOhDf75G2ZwLxZ3cnXkPZoI%26height%3D780%26width%3D1040%26expires%3D33267606300/og.png">

    <!-- Meta Tags Generated via https://www.opengraph.xyz -->

    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css'])

    @stack('css')
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
                                    <a href="https://www.facebook.com/profile.php?id=100091954598812"><i class="fab fa-facebook"></i></a>
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
