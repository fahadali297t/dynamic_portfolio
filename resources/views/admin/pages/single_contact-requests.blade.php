@extends('layouts.app')

@section('content')
    <x-breadcrumb parent="Dashboard" child="Contact Request" />


    <div class="row w_full justify-content-center">
        <div class="col-12 ">
            <div class="card  border-0">
                <div class="card-header  text-white ">
                    <h5 class="mb-0">📩 Contact Request Details</h5>
                </div>
                <div class="card-body p-4">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class=" fw-bold">Name</label>
                            <p class="fs-6 mb-0">{{ $data->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <label class=" fw-bold">Email</label>
                            <p class="fs-6 mb-0">{{ $data->email }}</p>
                        </div>
                        <div class="col-md-6">
                            <label class=" fw-bold">Phone</label>
                            <p class="fs-6 mb-0">{{ $data->phone }}</p>
                        </div>
                        <div class="col-md-6">
                            <label class=" fw-bold">Subject</label>
                            <p class="fs-6 mb-0">{{ $data->subject }}</p>
                        </div>
                        <div class="col-12">
                            <label class=" fw-bold">Message</label>
                            <div class="p-3 bg-light rounded border">
                                <p class="mb-0">{{ $data->message }}</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-flex justify-content-end align-items-center">
                                <form action="{{ route('contact.del') }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
