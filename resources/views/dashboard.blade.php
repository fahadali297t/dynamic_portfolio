@extends('layouts.app')


@section('content')
    @if (session('success'))
        <x-success :msg="session('success')" />
    @endif
    @if (session('error'))
        <x-error :msg="session('error')" />
    @endif


    <h1>Hello</h1>
@endsection
