@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Experience" child="Add New" />
    <x-imagesgallery />
    <form action="{{ route('exp.add') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row ">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">

                        <div>
                            <label for="name" class="form-label">Job Title*:</label>
                            <input id="name" value="{{ old('name') }}" name="name" class="form-control mb-3"
                                type="text" placeholder="Enter Name of Job Title" aria-label="default input example">
                            @error('name')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="name" class="form-label">Company Name*:</label>
                            <input id="institute" value="{{ old('company') }}" name="company" class="form-control mb-3"
                                type="text" placeholder="Enter Company Name" aria-label="default input example">
                            @error('company')
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
                        <div class="d-flex justify-content-end align-items-center ">
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
