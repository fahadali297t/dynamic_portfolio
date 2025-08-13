@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Dashboard" child="Projects" />
    @if (session('success'))
        <x-success :msg="session('success')" />
    @endif
    @if (session('error'))
        <x-error :msg="session('error')" />
    @endif


    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Available Projects</h5>
                <a href="{{ route('work.new') }}" class="btn btn-main">
                    Add New Project
                </a>

            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Main Image</th>
                            <th>Title</th>
                            <th>Company/Client</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Service</th>
                            <th>Link</th>
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
                                        <p class="mb-0">{{ $item->title }}</p>
                                    </div>
                                </td>

                                <td>{{ $item->client }}</td>
                                <td>{{ $item->start ?? 'Not Specified' }}</td>
                                <td>{{ $item->complete ?? 'Not Specified' }}</td>
                                <td>{{ $item->services->name }}</td>
                                <td><a href="{{ $item->link ?? '' }}" target="_Blank">View</a></td>

                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i>
                                        </a>

                                        {{-- for edit --}}
                                        <form action="{{ route('work.edit') }}" method="GET">


                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <a class="text-warning cursor-pointer" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Edit"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                <i class="bi bi-pencil-fill"></i>

                                            </a>
                                        </form>
                                        {{-- for delete --}}
                                        <form action="{{ route('work.del') }}" method="POST">
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
                                <td colspan="9" class="text-center">
                                    Please Add some Wok
                                </td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
