@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Skills" child="Add New" />
    <x-imagesgallery />
    <form action="{{ route('skill.update') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row ">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">

                        <div>
                            <label for="name" class="form-label">Name of Skill*:</label>
                            <input id="name" value="{{ $skill->name }}" name="name" class="form-control mb-3"
                                type="text" placeholder="Enter Name of Service" aria-label="default input example">
                            @error('name')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="experti" class="form-label">Experty in %*:</label>
                            <input id="experti" value="{{ $skill->experty }}" name="experti" class="form-control mb-3"
                                type="number" max="100" min="0" placeholder="Enter % of Skill Experience"
                                aria-label="default input example">
                            @error('experti')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>



                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <input type="hidden" name="image_id" value="{{ $skill->file_manager->id }}" id="image_id">
                    <input type="hidden" name="id" value="{{ $skill->id }}">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageModal">
                        Select Image
                    </button>
                    <div class="mt-3 text-center">
                        <h6>Please Select Image :</h6>
                        <img id="selectedImagePreview" src="{{ asset($skill->file_manager->public_path) }}"
                            class="img-thumbnail mb-3" style="max-width: 300px;">
                    </div>

                </div>
                @error('image_id')
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
        document.addEventListener("DOMContentLoaded", async function() {
            await fetchImageGallery();
        });

        function fetchImageGallery() {
            fetch(`/admin/images?q=add`)
                .then((response) => response.text()) // Blade returns HTML, so use .text()
                .then((html) => {
                    document.getElementById("imageModal").innerHTML = html;
                    // document.getElementById("imageModal").classList.toggle("d-none");
                })
                .catch((error) => console.error("Error loading preview:", error));
        }

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
