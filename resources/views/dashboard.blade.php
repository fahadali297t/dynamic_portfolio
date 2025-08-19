@extends('layouts.app')


@section('content')
    @if (session('success'))
        <x-success :msg="session('success')" />
    @endif
    @if (session('error'))
        <x-error :msg="session('error')" />
    @endif
    <x-imagesgallery />

    <div class="row">
        <div class="col-12 col-md-6 ">
            <form action="{{ route('icon.update') }}" method="post">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="mt-3 ms-3">
                        <h6 class="text-start width_full">Update Website Logo</h6>
                    </div>

                    <div class="d-flex card-body  flex-column justify-content-center align-items-center">

                        <input type="hidden" name="image_id" id="image_id">
                        <button id="selectImageBtn" type="button" class="btn btn-outline-primary">
                            Select Image
                        </button>


                        <div class="mt-3 text-center">
                            <div class="upload_image_container" style="background-color: transparent ; box-shadow: none">
                                <div class="overlay_image_upload">
                                    <i class="bi bi-card-image "></i>
                                </div>
                                @php
                                    $icon = \App\Models\Setting::first()->icon;
                                @endphp
                                <img class="upload_image" id="selectedImagePreview"
                                    src="{{ asset($icon ?? 'assets/imgs/template/favicon-gradient.svg') }}"
                                    alt="Upload Image">


                            </div>

                        </div>
                    </div>
                    @error('image_id')
                        <p class="text-danger text-center" style="font-size: 14px">{{ $message }}</p>
                    @enderror
                    <div class="d-flex mb-5 justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary px-5">
                            Publish
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        {{-- skills --}}
        <x-personal-details :details="$details" />
        {{-- for resume --}}
        <x-resume-crud :resume="$resume" />
    </div><!--end row-->
    {{-- For Images --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1>UserImage</h1>

                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h6>Select Your Images Like the below One</h6>
                        <div class="row w-full ">
                            <div class="col-12  col-md-6">
                                <div class="w-full  ">
                                    <form id="uploadFileForm" action="{{ route('userImg') }}" method="post"
                                        class="d-flex flex-column uploadFileForm justify-content-center align-items-center"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <p>
                                            <label for="file" class="btn btn-outline-primary">Selct Image</label>
                                        </p>
                                        <input type="hidden" name="purpose" value="primary">
                                        <input type="file" name="image" class="d-none " id="file">

                                        @if ($designer->primaryImage)
                                            <img class="UserImage" src="{{ asset($designer->primaryImage) }}" alt=""
                                                srcset="">
                                        @else
                                            <img class="UserImage" src="{{ asset('assets/imgs/hero/hero-1/man.png') }}"
                                                alt="" srcset="">
                                        @endif
                                    </form>
                                </div>
                            </div>
                            <div class="col-12  col-md-6">
                                <div class="w-full  ">
                                    <form id="uploadFileForm1" action="{{ route('userImg') }}" method="post"
                                        class="d-flex flex-column uploadFileForm justify-content-center align-items-center"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <p>
                                            <label for="file1" class="btn btn-outline-primary">Selct Image</label>
                                        </p>
                                        <input type="file" id="file1" name="image" class="d-none ">
                                        <input type="hidden" name="purpose" value="secondary">
                                        @if ($designer->secondaryImage)
                                            <img class="UserImage" src="{{ asset($designer->secondaryImage) }}"
                                                alt="" srcset="">
                                        @else
                                            <img class="UserImage"
                                                src="{{ asset('assets/imgs/testimonials/testimonials-1/man.png') }}"
                                                alt="" srcset="">
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->
@endsection

@section('scripts')
    <script>
        document.querySelectorAll("form.uploadFileForm").forEach((form) => {
            const input = form.querySelector("input[type='file']");
            input.addEventListener("change", () => {
                if (input.files.length > 0) {
                    form.submit();
                    input.disabled = true;
                }
            });
        });
    </script>
    <script src="{{ asset('assets/fetch.js') }}"></script>
    <script src="{{ asset('assets/fetchpdf.js') }}"></script>
@endsection
