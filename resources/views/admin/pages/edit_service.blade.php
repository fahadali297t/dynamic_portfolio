@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Services" child="Edit Service" />
    <x-imagesgallery />
    <form action="{{ route('service.update') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row ">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">

                        <div>
                            <label for="name" class="form-label">Name of Service*:</label>
                            <input id="name" value="{{ $data->name }}" name="name" class="form-control mb-3"
                                type="text" placeholder="Enter Name of Service" aria-label="default input example">
                            @error('name')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description:</label>

                            <textarea name="short_description" id="short_description" class="form-control" rows="3"
                                aria-label="With textarea">{{ $data->short_description }}</textarea>
                            @error('short_description')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="editor" class="form-label">Description*:</label>

                            <textarea name="description" id="editor" class="form-control" rows="10" aria-label="With textarea">{!! $data->description !!}</textarea>
                            @error('description')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="d-flex card-body  flex-column justify-content-center align-items-center">

                        <input type="hidden" value="{{ $data->file_manager_id }}" name="image_id" id="image_id">
                        <button id="selectImageBtn" type="button" class="btn btn-outline-primary">
                            Select Image
                        </button>


                        <div class="mt-3 text-center">
                            <div class="upload_image_container">
                                <div class="overlay_image_upload">
                                    <i class="bi bi-card-image "></i>
                                </div>

                                <img class="upload_image" id="selectedImagePreview"
                                    src="{{ asset($data->file_manager->public_path) }}" alt="Upload Image">


                            </div>

                        </div>
                    </div>
                    @error('image_id')
                        <p class="text-danger text-center" style="font-size: 14px">{{ $message }}</p>
                    @enderror
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="d-flex mb-5 justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary px-5">
                            Update
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
