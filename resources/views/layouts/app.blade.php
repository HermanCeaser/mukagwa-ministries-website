<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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



        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
