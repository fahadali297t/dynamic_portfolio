@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Testimonials" child="Edit" />
    <x-imagesgallery />
    <form action="{{ route('testimonial.update') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row ">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">

                        <div>
                            <label for="name" class="form-label">Name:</label>
                            <input id="name" name="name" class="form-control mb-3" type="text"
                                placeholder="Enter Name of Reviewer" value="{{ $data->name }}"
                                aria-label="default input example">
                            @error('name')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="position" class="form-label">Position:</label>
                            <input id="position" name="position" class="form-control mb-3" type="text"
                                placeholder="Enter Position of Reviewer" value="{{ $data->position }}">

                            @error('position')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-flex flex-column">
                            <label for="rating" class="form-label">Rating:</label>
                            <select class="select" name="rating" id="rating">
                                <option {{ $data->rating == 5 ? 'selected' : '' }} value="5">5</option>
                                <option {{ $data->rating == 4 ? 'selected' : '' }} value="4">4</option>
                                <option {{ $data->rating == 3 ? 'selected' : '' }} value="3">3</option>
                                <option {{ $data->rating == 2 ? 'selected' : '' }} value="2">2</option>
                                <option {{ $data->rating == 1 ? 'selected' : '' }} value="1">1</option>
                            </select>
                            @error('rating')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="editor" class="form-label">Review:</label>

                            <textarea name="review" id="editor" class="form-control" rows="10" aria-label="With textarea">
                                {!! $data->review !!}
                            </textarea>
                            @error('review')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="d-flex card-body  flex-column justify-content-center align-items-center">

                        <input type="hidden" name="file_manager_id" id="image_id">
                        <button id="selectImageBtn" type="button" class="btn btn-outline-primary">
                            Select Image
                        </button>


                        <div class="mt-3 text-center">
                            {{-- <h6>Please Select Image :</h6>
                        <img id="selectedImagePreview" src="" class="img-thumbnail mb-3" style="max-width: 300px;"> --}}
                            <div class="upload_image_container">
                                <div class="overlay_image_upload">
                                    <i class="bi bi-card-image "></i>
                                </div>

                                <img class="upload_image" id="selectedImagePreview"
                                    src="{{ asset($data->file_manager->public_path) }}" alt="Upload Image">


                            </div>
                            <p class="mt-2 ms-2" style="font-size: 12px">*Profile Picture of Reviewer</p>

                        </div>
                    </div>
                    @error('image')
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
