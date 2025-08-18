{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


@include('layouts.admin.head')

@include('layouts.preloader')

<!--start wrapper-->
<div class="wrapper" id="mainContent">
    <!--start top header-->
    @include('layouts.admin.top_header')
    <!--end top header-->

    <!--start sidebar -->
    @include('layouts.admin.sidebar')
    <!--end sidebar -->

    <!--start content-->
    <main class="page-content">




        @yield('content')


    </main>
    <!--end page main-->

    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--start footer-->
    {{-- <footer class="footer">
        <div class="footer-text">
            Copyright © 2022. All right reserved.
        </div>
    </footer> --}}
    <!--end footer-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->



</div>
<!--end wrapper-->


@yield('scripts')


@include('layouts.admin.foot')
