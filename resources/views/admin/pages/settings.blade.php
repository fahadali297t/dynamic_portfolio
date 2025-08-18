@extends('layouts.app')

@section('content')
    <x-breadcrumb parent="User" child="Update Email & Password" />
    @if (session('success'))
        <x-success :msg="session('success')" />
    @endif
    @if (session('error'))
        <x-error :msg="session('error')" />
    @endif
    <form action="{{ route('setting.update') }}" method="POST">
        @csrf
        @method('PUT') {{-- for update requests --}}

        <div class="row">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">

                        <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                        {{-- Email --}}
                        <div>
                            <label for="email" class="form-label">Email Address*:</label>
                            <input id="email" value="{{ old('email', auth()->user()->email) }}" name="email"
                                class="form-control mb-3" type="email" placeholder="Enter your email">
                            @error('email')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Current Password --}}

                        {{-- New Password --}}
                        <div>
                            <label for="password" class="form-label">New Password*:</label>
                            <input id="password" name="password" class="form-control mb-3" type="password"
                                placeholder="Enter new password">
                            @error('password')
                                <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="btn btn-primary px-5">
                                Update
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
