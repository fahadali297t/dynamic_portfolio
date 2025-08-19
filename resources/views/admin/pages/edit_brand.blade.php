@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Projects" child="Add New" />
    <x-imagesgallery />
    <form action="{{ route('brand.update') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row ">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">
                        {{-- title --}}
                        <div>
                            <label for="name" class="form-label">Brand Name*:</label>
                            <input id="name" value="{{ $brand->name }}" name="name" class="form-control mb-3"
                                type="text" placeholder="Enter Title" aria-label="default input example">
                            @error('name')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="d-flex card-body  flex-column justify-content-center align-items-center">

                        <input type="hidden" name="image_id" id="image_id">
                        <button id="selectImageBtn" type="button" class="btn btn-outline-primary">
                            Select Image
                        </button>


                        <div class="mt-3 text-center">
                            <div class="upload_image_container">
                                <div class="overlay_image_upload">
                                    <i class="bi bi-card-image "></i>
                                </div>

                                <input type="hidden" name="id" value="{{ $brand->id }}">
                                <img class="upload_image" id="selectedImagePreview"
                                    src="{{ asset($brand->file_manager->public_path) }}" alt="Upload Image">


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
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="{{ asset('assets/fetch.js') }}"></script>
@endsection
