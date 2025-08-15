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
    <x-frontend.testimonials />
    <!-- blog 1 -->
    <x-frontend.blogs />

    <!-- Contact 1-->
    <x-frontend.contact />

</main>
<!-- prettier-ignore -->
        <!-- Footer -->
<x-frontend.footer />
<!-- Scroll top -->
<x-frontend.scroll-top />

<script>
    function downloadPDF(filename) {
        const pdfPath = '/' + filename;
        const link = document.createElement("a");
        link.href = pdfPath;
        link.download = "fahadaliresume.pdf"; // optional custom filename
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
</script>


<x-frontend.bottom />
