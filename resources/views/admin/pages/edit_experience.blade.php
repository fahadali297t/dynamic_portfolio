@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Experience" child="Edit" />
    <x-imagesgallery />
    <form action="{{ route('exp.update') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row ">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">

                        <div>
                            <label for="name" class="form-label">Job Title:</label>
                            <input id="name" value="{{ $exp->name }}" name="name" class="form-control mb-3"
                                type="text" placeholder="Enter Name of Degree/Certification"
                                aria-label="default input example">
                            @error('name')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="institute" class="form-label">Company Name*:</label>
                            <input id="institute" value="{{ $exp->company }}" name="company" class="form-control mb-3"
                                type="text" placeholder="Enter Name of Company" aria-label="default input example">
                            @error('company')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="start" class="form-label">Start Date*:</label>
                            <input id="start" value="{{ $exp->start }}" name="start" class="form-control mb-3"
                                type="date">
                            @error('start')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="end" class="form-label">End Date:</label>
                            <input id="end" value="{{ $exp->end }}" name="end" class="form-control mb-3"
                                type="date">
                            @error('end')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                        <input type="hidden" name="id" value="{{ $exp->id }}">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">

                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary px-5">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
