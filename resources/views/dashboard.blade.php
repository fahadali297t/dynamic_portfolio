@extends('layouts.app')


@section('content')
    @if (session('success'))
        <x-success :msg="session('success')" />
    @endif
    @if (session('error'))
        <x-error :msg="session('error')" />
    @endif

    <x-imagesgallery />
    <x-frontend.skill-form />



    <div class="row">
        {{-- skills --}}
        <x-personal-details :details="$details" />
        {{-- for resume --}}
        <x-resume-crud :resume="$resume" />
    </div><!--end row-->

    <div class="row">
        {{-- skills --}}
        <x-primary-img />
        {{-- for resume --}}
        <x-secondary-img />
    </div><!--end row-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/fetchpdf.js') }}"></script>
@endsection
