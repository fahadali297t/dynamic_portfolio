@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Dashboard" child="Contact Request" />
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Subject</th>
                            {{-- <th>Message</th> --}}
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
                                    <div class="">
                                        <p class="mb-0">{{ $item->name }}</p>
                                    </div>
                                </td>

                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ Str::words($item->subject, 7, '...') }}</td>
                                {{-- <td>{{ $item->message }}</td> --}}
                                {{-- <td><a href="">View</a></td> --}}

                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{ route('contact.view', ['id' => $item->id]) }}" class="text-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i
                                                class="bi bi-eye-fill"></i>
                                        </a>

                                        {{-- for delete --}}
                                        <form action="{{ route('contact.del') }}" method="POST">
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
                                    No Contact Request
                                </td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
