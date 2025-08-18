@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Dashboard" child="Services" />
    @if (session('success'))
        <x-success :msg="session('success')" />
    @endif
    @if (session('error'))
        <x-error :msg="session('error')" />
    @endif


    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Available Services</h5>
                <a href="{{ route('service.new') }}" class="btn btn-main">
                    Add New Service
                </a>

            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Short Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @forelse ($data as $item)
                            <tr>
                                <td>
                                    @php
                                        echo ++$i;
                                    @endphp

                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <img src="{{ asset($item->file_manager->public_path) }}" class="rounded-lg"
                                            width="100" height="50" alt="">

                                    </div>
                                </td>
                                <td>
                                    <div class="">
                                        <p class="mb-0">{{ $item->name }}</p>
                                    </div>
                                </td>

                                <td>{{ Str::words($item->short_description, 6, '...') }}</td>
                                <td>{{ $item->status }}</td>

                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{ route('user.services.view', ['id' => $item->id]) }}"
                                            class="text-primary" target="_blank" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i>
                                        </a>

                                        {{-- for edit --}}
                                        <form action="{{ route('service.edit') }}" method="GET">


                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <a class="text-warning cursor-pointer" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Edit"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                <i class="bi bi-pencil-fill"></i>

                                            </a>
                                        </form>
                                        {{-- for delete --}}
                                        <form action="{{ route('service.del') }}" method="POST">
                                            @method('DELETE')
                                            @csrf
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
                                    Please Add some Services
                                </td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
