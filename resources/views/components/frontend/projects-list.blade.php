<section class="section-work pt-120 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-lg-auto">
                <div class="text-center">
                    <div class="btn btn-gradient d-inline-block text-uppercase">recent Work</div>
                    <h3 class="ds-3 mt-3 mb-4 text-dark">Explore <span class="text-300">My Latest Edits and Experience
                            the</span> Creativity Behind <span class="text-300">Each Frame</span></h3>
                    <p class="text-300 fs-5">
                        Explore my latest work and discover the artistry behind each edit: <br> a detailed look into how
                        I
                        bring
                        creativity and storytelling to life on screen.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="p-5">
        <div class="row">
            <div class="card-scroll mt-8">
                <div class="cards">
                    <!-- prettier-ignore -->

                    @forelse ($works as $work)

                    <div class="card-custom" data-index="0">
                        <div class="card__inner bg-6 p-lg-6 p-md-4 p-3">
                            <div class="project-list-container zoom-img position-relative">
                                {{-- <img class="card__image" src="{{ asset($work->file_manager->public_path) }}"
                                    alt="zelio" />
                                <a href="{{ route('user.projects.view', ['id' => $work->slug]) }}"
                                    class="card-image-overlay position-absolute start-0 end-0 w-100 h-100"></a> --}}
                                <iframe width="100%" height="100%" src="{{ $work->link }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="card__content px-md-4 px-3">
                                <div class="card__title d-md-flex align-items-center mb-0 mb-lg-2">
                                    <a href="{{ route('user.projects.view', ['id' => $work->slug]) }}"
                                        class="card_title_link">
                                        <p class="text-primary mb-0 mb-md-2">{{ $work->services->name }}</p>
                                        <h3 class="fw-semibold">{{ $work->title }}</h3>
                                    </a>
                                    <a href="{{ route('user.projects.view', ['id' => $work->slug]) }}"
                                        class="card-icon d-none d-md-inline-flex border text-dark border-dark icon-shape ms-auto icon-md rounded-circle">
                                        <i class="ri-arrow-right-up-line"></i>
                                    </a>
                                </div>
                                <p class="text-300 width_full  mb-lg-auto mb-md-4 mb-3">{{ $work->short_description }}
                                </p>
                                <div class="d-md-flex mt-5 content">
                                    <p class="mb-0 fs-7 text-dark text-uppercase w-40">Client</p>
                                    <p class="mb-0 card__description text-300 fs-6 mb-0">{{ $work->client }}</p>
                                </div>
                                <div class="d-md-flex content">
                                    <p class="mb-0 fs-7 text-dark text-uppercase w-40">Related Service</p>
                                    <p class="mb-0 card__description text-300 fs-6 mb-0">{{ $work->services->name }}</p>
                                </div>
                                <div class="d-md-flex content">
                                    <p class="mb-0 fs-7 text-dark text-uppercase w-40">Preview</p>
                                    <p class="mb-0 card__description text-300 fs-6 mb-0">
                                        <a href="{{ $work->link ?? '' }}" target="_blank">View</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty

                        @endforelse




                    </div>
                </div>
            </div>
        </div>
    </section>
