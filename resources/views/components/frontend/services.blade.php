<section class="section-service-1 pt-120 pb-120">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7 me-auto">
                <h3 class="ds-3 mt-3 mb-3 text-primary">What do I offer?</h3>
                <span class="fs-5 fw-medium text-200">My journey started with a fascination for design and
                    technology,
                    <br />
                    leading me to specialize in UI/UX design
                </span>
            </div>
            <div class="col-lg-auto">
                <a href="#contact" class="btn btn-gradient mt-lg-0 mt-5 ms-lg-auto">
                    Get a Quote
                    <i class="ri-arrow-right-up-line"></i>
                </a>
            </div>
        </div>
        <div class="row mt-6 justify-content-between">
            @php
                $i = 01;
            @endphp
            @forelse ($services as $service)
                <div class="col-12">
                    <div class="single-service-card-1 tg-img-reveal-item w-100 border-top border-900 p-3" data-fx="1"
                        data-img="{{ asset($service->file_manager->public_path) }}">
                        <div class="service-card-details d-lg-flex align-items-center">
                            <h3 class="service-card-title w-lg-50 w-100 mb-0">
                                <a href="{{ route('user.services.view', ['id' => $service->id]) }}">
                                    <span class="service-number">
                                        @php
                                            if ($i < 10) {
                                                echo '0' . $i++;
                                            } else {
                                                echo $i++;
                                            }
                                        @endphp
                                    </span>
                                    {{ $service->name }}
                                </a>
                            </h3>
                            <a href="{{ route('user.services.view', ['id' => $service->id]) }}"
                                class="d-md-flex d-block ps-lg-10 align-items-center justify-content-end w-100">
                                <p class="service-card-text my-3">
                                    {{ $service->short_description }}
                                </p>
                                <div class="service-card-icon icon-shape ms-auto icon-md rounded-circle border">
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse


        </div>
    </div>
</section>
