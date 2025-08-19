<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    @php
        $user = \App\Models\Designer::first();
    @endphp
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ $user->name }} - Crafting Intuitive Digital Experiences</title>
    <script src="{{ asset('assets/js/vendors/color-modes.js') }}"></script>
    <!-- Favicon icon-->
    @php
        $icon = \App\Models\Setting::first()->icon;
    @endphp
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset($icon ?? 'assets/imgs/template/favicon-gradient.svg') }}" />
    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/bootstrap.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/swiper-bundle.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/aos.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/odometer.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/carouselTicker.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/magnific-popup.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/fonts/remixicon/remixicon.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/fonts/satoshi/satoshi.css') }} " />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300;400;500&family=Playfair+Display:wght@400..900&family=Urbanist:wght@100..900&display=swap"
        rel="stylesheet" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/user.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/preloader.css') }}" />

</head>

<body>
    <!-- prettier-ignore -->
        <!--Preloader-->
    {{-- <x-frontend.preloader /> --}}
    <!--Preloader-end -->

    <!-- Navbar -->
    @php
        $user = \App\Models\Designer::first();
    @endphp
    <x-frontend.navbar :user="$user" />

    @include('layouts.preloader')
