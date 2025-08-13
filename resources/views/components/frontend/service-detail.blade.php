<section class="section-work-single section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-lg-auto mb-lg-0">
                <div class="text-center">
                    <div class="btn btn-gradient d-inline-block text-uppercase">service details</div>
                    <h3 class="ds-3 mt-3 mb-4 text-dark">{{ $service->name }}</h3>
                    <p class="text-300 fs-5 mb-5">{{ $service->short_description }}</p>
                </div>
            </div>

            <img src="{{ asset($service->file_manager->public_path) }}" alt="zelio" />
            <div class="col-lg-8 mx-lg-auto mt-8 ">
                <h5 class="fs-5 fw-medium">Description</h5>
                <p class="text-300">{{ $service->description }}</p>
            </div>
        </div>
    </div>
</section>
