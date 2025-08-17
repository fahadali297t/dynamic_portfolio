@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Skills" child="Add New" />
    <x-imagesgallery />
    <form action="{{ route('skill.add') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row ">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">

                        <div>
                            <label for="name" class="form-label">Name of Skill*:</label>
                            <input id="name" value="{{ old('name') }}" name="name" class="form-control mb-3"
                                type="text" placeholder="Enter Name of Service" aria-label="default input example">
                            @error('name')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="experti" class="form-label">Experty in %*:</label>
                            <input id="experti" value="{{ old('experty') }}" name="experti" class="form-control mb-3"
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

                                <img class="upload_image" id="selectedImagePreview"
                                    src="{{ asset('assets/images/image.jpg') }}" alt="Upload Image">


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
    <script src="{{ asset('assets/fetch.js') }}"></script>
@endsection
