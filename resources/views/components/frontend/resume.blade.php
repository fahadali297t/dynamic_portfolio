<section id="resume" class="section-resume-1 pb-5 position-relative pt-150 overflow-hidden"
    data-background="assets/imgs/projects/projects-1/background.png">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7 me-auto">
                <h3 class="ds-3 mt-3 mb-3 text-primary">My Resume</h3>
                <span class="fs-5 fw-medium text-200">
                    I believe that consistent hard work and a commitment to learning every day <br> allow me to
                    continuously improve and deliver the best results for my clients.
                </span>
            </div>
            <div class="col-lg-auto">
                <a href="#contact" class="btn btn-gradient mt-lg-0 mt-5 ms-lg-auto">
                    Get in touch
                    <i class="ri-arrow-right-up-line"></i>
                </a>
            </div>
        </div>
        <div class="row mt-6">
            <div class="col-lg-6 col-12">
                <div class="resume-card p-lg-6 p-4 mb-lg-0 mb-6">
                    <div class="resume-card-header d-flex align-items-end">
                        <img class="border-linear-1 border-3 pb-2 pe-2" src="assets/imgs/resume/resume-1/icon-1.svg"
                            alt="zelio" />
                        <h3 class="fw-semibold mb-0 border-bottom border-600 border-3 pb-2 w-100">Education</h3>
                    </div>
                    <div class="resume-card-body">
                        @forelse ($edus as $edu)
                            <div class="resume-card-item px-4 py-3 mt-5">
                                <div class="d-flex align-items-end">
                                    <div class="">
                                        <p class="fw-extra-bold text-linear-1 mb-2">
                                            {{ \Carbon\Carbon::parse($edu->start)->format('Y') }} -
                                            {{ \Carbon\Carbon::parse($edu->end)->format('Y') }}</p>
                                        <h5 class="">{{ $edu->name }}</h5>
                                        <p class="text-300 mb-0">{{ $edu->institute }}</p>
                                    </div>

                                </div>
                            </div>
                        @empty
                        @endforelse


                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="resume-card p-lg-6 p-4 h-100">
                    <div class="resume-card-header d-flex align-items-end">
                        <img class="border-linear-1 border-3 pb-2 pe-2" src="assets/imgs/resume/resume-1/icon-2.svg"
                            alt="zelio" />
                        <h3 class="fw-semibold mb-0 border-bottom border-600 border-3 pb-2 w-100">Experience</h3>
                    </div>
                    <div class="resume-card-body">
                        @forelse ($exps as $item)
                            <div class="resume-card-item px-4 py-3 mt-5">
                                <p class="fw-extra-bold text-linear-1 mb-2">
                                    {{ \Carbon\Carbon::parse($item->start)->format('Y') }} -
                                    {{ \Carbon\Carbon::parse($item->end)->format('Y') }}</p>
                                <h5 class="">{{ $item->name }}</h5>
                                <p class="text-300 mb-0">{{ $item->company }}</p>
                            </div>
                        @empty
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="scroll-move-right position-relative pb-160 pt-lg-150">
        <div
            class="d-flex align-items-center gap-5 wow img-custom-anim-top position-absolute top-50 start-50 translate-middle">
            <h3 class="stroke fs-150 text-uppercase text-white">Editing. Story Telling</h3>
        </div>
    </div> --}}
</section>
