<section class="section-work-single section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-lg-auto mb-lg-0">
                <div class="text-center">
                    <div class="btn btn-gradient d-inline-block text-uppercase">Project details</div>
                    <h3 class="ds-3 mt-3 mb-4 text-dark">{{ $project->title }}</h3>
                    <p class="text-300 fs-5 mb-0">{{ $project->short_description }}</p>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-4 py-8">
                <div class="bg-6 px-5 py-3 rounded-2">
                    <p class="text-300 mb-0">Client</p>
                    <h6>{{ $project->client ?? 'Self-Work' }}</h6>
                </div>
                <div class="bg-6 px-5 py-3 rounded-2">
                    <p class="text-300 mb-0">Start</p>
                    <h6>{{ $project->start ?? 'Not Specified' }}</h6>
                </div>
                <div class="bg-6 px-5 py-3 rounded-2">
                    <p class="text-300 mb-0">Complete</p>
                    <h6>{{ $project->end ?? 'Not Specified' }}</h6>
                </div>
                <div class="bg-6 px-5 py-3 rounded-2">
                    <p class="text-300 mb-0">Services</p>
                    <h6>{{ $project->services->name }}</h6>
                </div>
                <div class="bg-6 px-5 py-3 rounded-2">
                    <p class="text-300 mb-0">Preview</p>
                    <h6><a href="{{ $project->link ?? '' }}" target="_blank">Click</a></h6>
                </div>
            </div>
            <img src="{{ asset($project->file_manager->public_path) }}" alt="zelio" />
            <div class="col-lg-8 mx-lg-auto mt-8">
                <h5 class="fs-5 fw-medium">Description</h5>
                <p class="text-300">
                    {{ $project->description }}
                </p>
            </div>
        </div>
    </div>
</section>
