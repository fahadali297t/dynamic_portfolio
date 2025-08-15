    <footer>
        @php
            $user = \App\Models\Designer::first();
        @endphp
        <div class="section-footer position-relative pt-60 pb-60 bg-secondary-1">
            <div class="container position-relative z-1">
                <div class="text-center">
                    <a class="d-flex main-logo align-items-center d-inline-flex" href="index.html">
                        <img src="{{ asset('assets/imgs/footer-1/logo.svg') }}" alt="zelio" />
                        <span class="fs-4 ms-2 text-white-keep">{{ $user->name }}</span>
                    </a>
                    <div
                        class="navigation d-none d-md-flex align-items-center justify-content-center flex-wrap gap-4 my-4">
                        <a href="index.html" class="fs-5">
                            Home
                        </a>
                        <a href="services.html" class="fs-5">
                            Services
                        </a>
                        <a href="work.html" class="fs-5">
                            Portfolio
                        </a>
                        <a href="pricing.html" class="fs-5">
                            Pricing
                        </a>
                        <a href="blog-list.html" class="fs-5">
                            Blog
                        </a>
                        <a href="#contact" class="fs-5">
                            Contact
                        </a>
                    </div>
                </div>

                <div class="row text-center py-4">
                    <span class="fs-6 text-white-keep">© 2024 All Rights Reserved by <span><a href="#"
                                class="text-primary">{{ $user->name }}</a></span>
                </div>
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100 z-0"
                data-background="{{ asset('assets/imgs/footer-1/background.png ') }}"></div>
        </div>
    </footer>
