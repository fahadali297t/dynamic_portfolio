@extends('layouts.app')


@section('content')
    <x-breadcrumb parent="Dashboard" child="File Manager" />
    <x-image />

    @if (session('success'))
        <x-success :msg="session('success')" />
    @endif
    @if (session('error'))
        <x-error :msg="session('error')" />
    @endif



    <div class="row">
        <div class="col-12 col-xl-3">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="d-grid">
                        <form id="uploadFileForm" action="{{ route('file.submit') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <label for="files" class="btn btn-primary">
                                <i class="bi bi-plus-lg"></i> Add File
                            </label>

                            <input class="d-none" type="file" id="files" name="uploads[]" multiple>

                        </form>

                    </div>
                </div>
                <div class="fm-menu">
                    <div class="list-group list-group-flush m-3">
                        <a href="{{ route('file.view') }}" class="list-group-item py-1"><i
                                class="bx bx-folder me-2 text-primary"></i><span>All Files</span></a>


                        <a href="javascript:;" class="list-group-item py-1"><i
                                class="bi bi-file-earmark-image-fill me-2 text-warning"></i><span>Images</span></a>
                        <a href="javascript:;" class="list-group-item py-1"><i
                                class="bi bi-camera-reels-fill me-2 text-primary"></i><span>Videos</span></a>
                        <a href="javascript:;" class="list-group-item py-1"><i
                                class="bi bi-file-earmark-break-fill me-2 text-info"></i><span>Documents</span></a>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-xl-9 ">
            <div class="card " id="file_card_content">
                <div class="card-body">

                    <div class="row mt-3">

                        @forelse ($files as $file)
                            <div class="col-12 col-lg-4">
                                <div class="card shadow-none border radius-15">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="fm-icon-box radius-15 bg-light-primary text-primary">
                                                @if ($file->type === 'image')
                                                    <i class="bi bi-card-image"></i>
                                                @elseif ($file->type === 'video')
                                                    <i class="bi bi-camera-video"></i>
                                                @else
                                                    <i class="bi bi-file-earmark"></i>
                                                @endif
                                            </div>
                                            <div class="fs-5 ms-auto dropdown">
                                                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                                    data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item">View All Files</a></li>
                                                    <li>
                                                        <form method="post" action="{{ route('file.delete') }}">
                                                            @method('DELETE');
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $file->id }}">
                                                            <input type="hidden" name="public_path"
                                                                value="{{ $file->public_path }}">
                                                            <button class="dropdown-item" type="submit">Delete</button>

                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <x-filename :name="$file->name" :path="$file->public_path" :type="$file->type" />

                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse


                    </div>
                    <!--end row-->

                </div>
            </div>


        </div>
    </div>
@endsection
