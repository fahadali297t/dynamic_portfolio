@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Projects" child="Edit" />
    <x-imagesgallery />
    <form action="{{ route('work.update') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row ">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">
                        {{-- title --}}
                        <div>
                            <label for="name" class="form-label">Title*:</label>
                            <input id="name" value="{{ $data->title }}" name="name" class="form-control mb-3"
                                type="text" placeholder="Enter Title" aria-label="default input example">
                            @error('name')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- short description --}}
                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description(Must Not more than 1
                                line.)*:</label>

                            <textarea name="short_description" id="short_description" class="form-control" rows="3"
                                aria-label="With textarea">{{ $data->short_description }}</textarea>
                            @error('short_description')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- client/company --}}
                        <div>
                            <label for="client" class="form-label">Client/Company:</label>
                            <input id="client" value="{{ $data->client }}" name="client" class="form-control mb-3"
                                type="text" placeholder="Enter Client or Company Name"
                                aria-label="default input example">
                            @error('client')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- Link  --}}
                        <div>
                            <label for="link" class="form-label">Link:</label>
                            <input id="link" value="{{ $data->link }}" name="link" class="form-control mb-3"
                                type="text" placeholder="Enter Link (Figma, Drive or Behance etc)"
                                aria-label="default input example">
                            @error('link')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- start Date --}}
                        <div class="mb-3">
                            <label for="start" class="form-label">Start Date:</label>
                            <input id="start" type="date" name="start" value="{{ $data->start }}"
                                class="form-control">
                        </div>
                        {{-- End Date --}}
                        <div class="mb-3">
                            <label for="end" class="form-label">End Date:</label>
                            <input id="end" type="date" name="end" value="{{ $data->complete }}"
                                class="form-control">
                        </div>
                        {{-- services --}}
                        <select name="service_id" class="form-select mb-3" aria-label="Default select example">
                            <option selected>Select Related Service</option>
                            @forelse ($services as $service)
                                <option {{ $data->services_id === $service->id ? 'selected' : '' }}
                                    value="{{ $service->id }}">{{ $service->name }}</option>
                            @empty
                            @endforelse

                        </select>
                        {{-- description --}}
                        <div>
                            <label for="description" class="form-label">Description*:</label>

                            <textarea name="description" id="description" class="form-control" rows="10" aria-label="With textarea">{{ $data->description }}</textarea>
                            @error('description')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    {{-- <label for="image_upload">
                        <div class="upload_image_container upload_image_container_landscape">
                            <div class="overlay_image_upload">
                                <i class="bi bi-card-image "></i>
                            </div>

                            <img class="upload_image upload_image_landscape" id="preview"
                                src="{{ asset('assets/images/image.png') }}" alt="Upload Image">


                        </div>
                        <p class="mt-2 ms-2" style="font-size: 12px">*Main Picture (Must Be Landscape)</p>

                    </label> --}}
                    <input type="hidden" name="image_id" value="{{ $data->file_manager->id }}" id="image_id">
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageModal">
                        Select Image
                    </button>
                    <div class="mt-3 text-center">
                        <h6>Please Select Image :</h6>
                        <img id="selectedImagePreview" src="{{ asset($data->file_manager->public_path) }}"
                            class="img-thumbnail mb-3" style="max-width: 300px;">
                    </div>

                </div>
                @error('image_id')
                    <p class="text-danger text-center" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary px-5">
                        Update
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
