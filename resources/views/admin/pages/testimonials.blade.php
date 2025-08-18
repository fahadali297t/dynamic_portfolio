@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Dashboard" child="Testimonials" />
    @if (session('success'))
        <x-success :msg="session('success')" />
    @endif
    @if (session('error'))
        <x-error :msg="session('error')" />
    @endif

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Available Testimonials</h5>
                <a href="{{ route('testimonial.new') }}" class="btn btn-main">
                    Add New Testimonials
                </a>

            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Review</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($data as $item)
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <img src="{{ asset($item->file_manager->public_path) }}" class="rounded-circle"
                                            width="44" height="44" alt="">
                                        <div class="">
                                            <p class="mb-0">{{ $item->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <x-rating :rat="$item->rating" />
                                </td>
                                <td>{!! Str::words($item->review, 6, '...') !!}</td>

                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">

                                        {{-- for edit --}}
                                        <form action="{{ route('testimonial.edit') }}" method="GET">


                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <a class="text-warning cursor-pointer" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Edit"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                <i class="bi bi-pencil-fill"></i>

                                            </a>
                                        </form>
                                        {{-- for delete --}}
                                        <form action="{{ route('testimonial.del') }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" name="img" value="/photos/{{ $item->image }}">
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <a class="text-danger cursor-pointer" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Delete"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                <i class="bi bi-trash-fill"></i>

                                            </a>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @empty

                            <tr>
                                <td colspan="5" class="text-center">
                                    No Testimonial Found
                                </td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
