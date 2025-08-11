<div class="card-body">
    <div class="ms-auto position-relative">
        <div class="position-absolute top-50 translate-middle-y search-icon fs-5 px-3">
            <i class="bi bi-search"></i>
        </div>
        <input class="form-control form-control-lg ps-5" type="text" placeholder="Search the files" />
    </div>
    <div class="row mt-3">


        <div class="col-12 col-lg-4">
            <div class="card shadow-none border radius-15">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <img src="{{ $path }}" alt="image" srcset="">
                        {{-- image --}}
                    </div>
                    <h5 class="mt-3 mb-0 one_line text-primary">{{ $file->name }}</h5>

                </div>
            </div>
        </div>



    </div>
    <!--end row-->

</div>
