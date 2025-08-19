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
            <div class="row">
                <div class="col-12">
                    <h1 class="bg-danger">Upload Brands Images</h1>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card bg-secondary image_card">
                                <div class="card-body image_card">
                                    <img class="card_image" src="{{ asset('assets/images/gallery/12.png') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card bg-secondary image_card">
                                <div class="card-body image_card">
                                    <img class="card_image" src="{{ asset('assets/images/gallery/12.png') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div><div class="col-12 col-md-6 col-lg-4">
                            <div class="card bg-secondary image_card">
                                <div class="card-body image_card">
                                    <img class="card_image" src="{{ asset('assets/images/gallery/12.png') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div><div class="col-12 col-md-6 col-lg-4">
                            <div class="card bg-secondary image_card">
                                <div class="card-body image_card">
                                    <img class="card_image" src="{{ asset('assets/images/gallery/12.png') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div><div class="col-12 col-md-6 col-lg-4">
                            <div class="card bg-secondary image_card">
                                <div class="card-body image_card">
                                    <img class="card_image" src="{{ asset('assets/images/gallery/12.png') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div><div class="col-12 col-md-6 col-lg-4">
                            <div class="card bg-secondary image_card">
                                <div class="card-body image_card">
                                    <img class="card_image" src="{{ asset('assets/images/gallery/12.png') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div><div class="col-12 col-md-6 col-lg-4">
                            <div class="card bg-secondary image_card">
                                <div class="card-body image_card">
                                    <img class="card_image" src="{{ asset('assets/images/gallery/12.png') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div><div class="col-12 col-md-6 col-lg-4">
                            <div class="card bg-secondary image_card">
                                <div class="card-body image_card">
                                    <img class="card_image" src="{{ asset('assets/images/gallery/12.png') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div><div class="col-12 col-md-6 col-lg-4">
                            <div class="card bg-secondary image_card">
                                <div class="card-body image_card">
                                    <img class="card_image" src="{{ asset('assets/images/gallery/12.png') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div><div class="col-12 col-md-6 col-lg-4">
                            <div class="card bg-secondary image_card">
                                <div class="card-body image_card">
                                    <img class="card_image" src="{{ asset('assets/images/gallery/12.png') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div><div class="col-12 col-md-6 col-lg-4">
                            <div class="card bg-secondary image_card">
                                <div class="card-body image_card">
                                    <img class="card_image" src="{{ asset('assets/images/gallery/12.png') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div><div class="col-12 col-md-6 col-lg-4">
                            <div class="card bg-secondary image_card">
                                <div class="card-body image_card">
                                    <img class="card_image" src="{{ asset('assets/images/gallery/12.png') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div><div class="col-12 col-md-6 col-lg-4">
                            <div class="card bg-secondary image_card">
                                <div class="card-body image_card">
                                    <img class="card_image" src="{{ asset('assets/images/gallery/12.png') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div><div class="col-12 col-md-6 col-lg-4">
                            <div class="card bg-secondary image_card">
                                <div class="card-body image_card">
                                    <img class="card_image" src="{{ asset('assets/images/gallery/12.png') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
