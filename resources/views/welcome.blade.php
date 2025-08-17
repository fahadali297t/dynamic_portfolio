<x-frontend.top />

<main id="mainContent">
    <!-- prettier-ignore -->
            <!--Home 1 Section 1-->
    <x-frontend.hero :resume="$resume" :user="$user" />

    <!--Static 1-->
    <x-frontend.stats />


    <!-- service 1 -->
    <x-frontend.services :services="$services" />

    <!-- projects 1 -->
    <x-frontend.projects :works="$works" :services="$services" />


    <!-- resume 1 -->
    <x-frontend.resume :edus="$educations" :exps="$experiences" />

    <!-- Skills 1 -->
    <x-frontend.skills :skills="$skills" />

    <!-- brands 1 -->
    <x-frontend.brands />

    <!-- testimonials 1 -->
    <x-frontend.testimonials :testimonial="$testimonial" />
    <!-- blog 1 -->
    {{-- <x-frontend.blogs /> --}}

    <!-- Contact 1-->
    <x-frontend.contact />

</main>
<!-- prettier-ignore -->
        <!-- Footer -->
<x-frontend.footer />
<!-- Scroll top -->
<x-frontend.scroll-top />



<x-frontend.bottom />
