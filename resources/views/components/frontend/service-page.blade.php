<section class="section-service-list pt-120 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-lg-auto">
                <div class="text-center">
                    <div class="btn btn-gradient d-inline-block text-uppercase">My Services</div>
                    <h3 class="ds-3 mt-3 mb-4 text-dark">
                        Transforming
                        <span class="text-300"> every frame into a compelling visual experience</span>
                        that resonates and engages
                        <span class="text-300">Experiences</span>
                    </h3>
                    {{-- <p class="text-300 fs-5">
                        With expertise in mobile app and web design, I transform ideas into visually <br />
                        stunning and user-friendly interfaces that captivate and retain users. <br />
                        Explore my work and see design in action.
                    </p> --}}
                </div>
                <div class="card-scroll mt-8">
                    <div class="cards">
                        <!--prettier-ignore-->

                        @forelse ($services as $service)
                        <div class="card-custom" data-index="0">
                            <div class="card__inner bg-6 px-md-5 py-md-6 px-3 py-4">
                                <div class="card__title d-flex align-items-center mb-md-4 mb-3">
                                    <a href="{{ route('user.services.view', ['id' => $service->slug]) }}"
                                        class="card_title_link">
                                        <h3 class="fw-semibold mb-2">{{ $service->name }}</h3>
                                        <p class="mb-0">{{ $service->short_description }}</p>
                                    </a>
                                    <a href="#"
                                        class="card-icon border text-dark border-dark icon-shape ms-auto icon-md rounded-circle">
                                        <i class="ri-arrow-right-up-line"></i>
                                    </a>
                                </div>
                                <div class="card__image-container zoom-img position-relative">
                                    <img class="card__image" src="{{ asset($service->file_manager->public_path) }}"
                                        alt="service_image" />
                                    <a href="{{ route('user.services.view', ['id' => $service->slug]) }}"
                                        class="card-image-overlay position-absolute start-0 end-0 w-100 h-100"></a>
                                </div>

                            </div>
                        </div>
                        @empty

                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
