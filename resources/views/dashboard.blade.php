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
        <x-skills-crud :skills="$skills" />
        {{-- for resume --}}
        <x-resume-crud />
    </div><!--end row-->
@endsection
