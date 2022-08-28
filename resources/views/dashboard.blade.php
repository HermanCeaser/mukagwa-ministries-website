<x-app-layout>
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


</x-app-layout>

@push('js')
    {{-- <script src="{{ asset('assets/js/custom.js') }}"></script> --}}
    <script src="{{ asset('assets/js/custom-progress-bar.js') }}"></script>
    <script src="{{ asset('assets/js/custom-scroll-count.js') }}"></script>
    <script src="{{ asset('assets/js/video.js') }}"></script>

@endpush
