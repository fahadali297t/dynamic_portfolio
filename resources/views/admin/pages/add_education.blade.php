@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Education" child="Add New" />
    <x-imagesgallery />
    <form action="{{ route('edu.add') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row ">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">

                        <div>
                            <label for="name" class="form-label">Degree/Certification Name*:</label>
                            <input id="name" value="{{ old('name') }}" name="name" class="form-control mb-3"
                                type="text" placeholder="Enter Name of Degree/Certification"
                                aria-label="default input example">
                            @error('name')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="name" class="form-label">University/Institute Name*:</label>
                            <input id="institute" value="{{ old('institute') }}" name="institute" class="form-control mb-3"
                                type="text" placeholder="Enter institute of name" aria-label="default input example">
                            @error('institute')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="start" class="form-label">Degree Start Date*:</label>
                            <input id="start" value="{{ old('start') }}" name="start" class="form-control mb-3"
                                type="date">
                            @error('start')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="end" class="form-label">Degree End Date*:</label>
                            <input id="end" value="{{ old('end') }}" name="end" class="form-control mb-3"
                                type="date">
                            @error('end')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="btn btn-primary px-5">
                                Add
                            </button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection
