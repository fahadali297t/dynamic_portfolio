@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Dashboard" child="Education" />
    @if (session('success'))
        <x-success :msg="session('success')" />
    @endif
    @if (session('error'))
        <x-error :msg="session('error')" />
    @endif


    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Available Education</h5>
                <a href="{{ route('edu.new') }}" class="btn btn-main">
                    Add New Education
                </a>

            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>University/Institute</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @forelse ($edu as $item)
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

                                <td>{{ $item->institute }}</td>
                                <td>{{ $item->start ?? 'Not Provided' }}</td>
                                <td>{{ $item->end ?? 'Not Provided' }}</td>


                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i>
                                        </a>

                                        {{-- for edit --}}
                                        <form action="{{ route('edu.edit') }}" method="GET">


                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <a class="text-warning cursor-pointer" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Edit"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                <i class="bi bi-pencil-fill"></i>

                                            </a>
                                        </form>
                                        {{-- for delete --}}
                                        <form action="{{ route('edu.del') }}" method="POST">
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
                                <td colspan="6" class="text-center ">No Education Found</td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
