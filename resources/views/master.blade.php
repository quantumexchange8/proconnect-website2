<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Proconnect Solution helps businesses grow online with expert services in SEO, web design, content creation, data solutions, social media, media strategy, and company formation">
    <meta name="keywords" content="Proconnect Solution, digital marketing, SEO services, web design, content creation, data solutions, media strategy, social media management, company formation">
    @if (App::environment('production') || App::environment('staging'))
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @endif
        <title>@yield('title',config('app.name', 'Laravel'))</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- favicon -->
    <link rel="icon" href="{{ asset('assets/image/favicon.ico') }}">
    <!-- Apple Touch Icon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/image/apple-touch-icon.png') }}">
</head>
<body>
    <div id="top"></div>

    <!-- header -->
    <div id="header" class="sticky-top">
        @include('includes.header')
    </div>
    <!-- header -->

    <main class="flew-glow">
        @yield('contents')
    </main>

    <!-- Footer -->
    <div id="footer">
        @include('includes.footer')
    </div>
    <!-- Footer -->

    <!-- Back to top -->
        <a href="#top" id="back-to-top" class="back-to-top">
            <i class="fa fa-arrow-up"></i>
        </a>
    <!-- Back to top -->

    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-script.js') }}"></script>
    <script src="{{ asset('assets/js/submit-form.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/video_embedded.js') }}"></script>
</body>
</html>