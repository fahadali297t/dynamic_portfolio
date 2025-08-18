@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Dashboard" child="Experience" />
    @if (session('success'))
        <x-success :msg="session('success')" />
    @endif
    @if (session('error'))
        <x-error :msg="session('error')" />
    @endif


    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Available Experiences</h5>
                <a href="{{ route('exp.new') }}" class="btn btn-main">
                    Add New Experience
                </a>

            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Job Title</th>
                            <th>Company</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @forelse ($exp as $item)
                            <tr>
                                <td>
                                    @php
                                        echo ++$i;
                                    @endphp

                                </td>

                                <td>
                                    <div class="">
                                        <p class="mb-0">{{ $item->name }}</p>
                                    </div>
                                </td>

                                <td>{{ $item->company }}</td>
                                <td>{{ $item->start ?? 'Not Provided' }}</td>
                                <td>{{ $item->end ?? 'Not Provided' }}</td>


                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                       

                                        {{-- for edit --}}
                                        <form action="{{ route('exp.edit') }}" method="GET">


                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <a class="text-warning cursor-pointer" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Edit"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                <i class="bi bi-pencil-fill"></i>

                                            </a>
                                        </form>
                                        {{-- for delete --}}
                                        <form action="{{ route('exp.del') }}" method="POST">
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
                                <td colspan="6" class="text-center ">No Experience Found</td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
