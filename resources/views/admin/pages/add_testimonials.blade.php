@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Testimonials" child="Add New" />
    <form action="{{ route('testimonial.add') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row ">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">

                        <div>
                            <label for="name" class="form-label">Name:</label>
                            <input id="name" name="name" class="form-control mb-3" type="text"
                                placeholder="Enter Name of Reviewer" aria-label="default input example">
                            @error('name')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="position" class="form-label">Position:</label>
                            <input id="position" name="position" class="form-control mb-3" type="text"
                                placeholder="Enter Position of Reviewer" aria-label="default input example">

                            @error('position')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-flex flex-column">
                            <label for="rating" class="form-label">Rating:</label>
                            <select class="select" name="rating" id="rating">
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                            @error('rating')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="editor" class="form-label">Review:</label>

                            <textarea name="review" id="editor" class="form-control" rows="10" aria-label="With textarea"></textarea>
                            @error('review')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex justify-content-center align-items-center">
                    <label for="image_upload">
                        <div class="upload_image_container">
                            <div class="overlay_image_upload">
                                <i class="bi bi-card-image "></i>
                            </div>

                            <img class="upload_image" id="preview"
                                src="{{ asset('assets/images/gray-user-profile-icon-png-fP8Q1P.png') }}" alt="Upload Image">


                        </div>
                        <p class="mt-2 ms-2" style="font-size: 12px">*Profile Picture of Reviewer</p>

                    </label>
                    <input class='d-none' id="image_upload" name="image" type="file" accept="image/*">
                </div>
                @error('image')
                    <p class="text-danger text-center" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary px-5">
                        Publish
                    </button>
                </div>
            </div>
        </div>
    </form>


    <script>
        document.getElementById('image_upload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('preview');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result; // set img src
                    preview.style.display = 'block'; // make visible
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = '{{ asset('assets/images/gray-user-profile-icon-png-fP8Q1P.png') }}';
                // preview.style.display = 'none';
            }
        });
    </script>
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
@endsection
