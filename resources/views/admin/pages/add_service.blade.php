@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Services" child="Add New" />
    <button onclick="fetchImageGallery()"> Khul ja sim sim</button>

    <x-imagesgallery />
    <form action="{{ route('service.add') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row ">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">

                        <div>
                            <label for="name" class="form-label">Name of Service*:</label>
                            <input id="name" name="name" class="form-control mb-3" type="text"
                                placeholder="Enter Name of Service" aria-label="default input example">
                            @error('name')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description:</label>

                            <textarea name="short_description" id="short_description" class="form-control" rows="3"
                                aria-label="With textarea"></textarea>
                            @error('short_description')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="description" class="form-label">Description*:</label>

                            <textarea name="description" id="description" class="form-control" rows="10" aria-label="With textarea"></textarea>
                            @error('description')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex justify-content-center align-items-center">
                    <label for="image_upload">
                        <div class="upload_image_container upload_image_container_landscape">
                            <div class="overlay_image_upload">
                                <i class="bi bi-card-image "></i>
                            </div>

                            <img class="upload_image upload_image_landscape" id="preview"
                                src="{{ asset('assets/images/image.png') }}" alt="Upload Image">


                        </div>
                        <p class="mt-2 ms-2" style="font-size: 12px">*Main Picture (Must Be Landscape)</p>

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
