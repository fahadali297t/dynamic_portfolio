<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="pdfModalLabel">
                <i class="bi bi-collection"></i>
                Document Collection
                <span class="pdf-count">
                    @php
                        echo count($files);
                    @endphp
                </span>
            </h5>
            <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <div class="modal-body">

            <!-- PDF Grid -->
            <div class="row g-3" id="pdfGrid">
                <!-- PDF Card 1 -->

                @forelse ($files as $file)
                    <div @if ($q !== 'a') onclick="selectPdf('{{ $file->id }}')" @endif
                        class="col-lg-6 cursor-pointer col-xl-4 
                        {{ $id == $file->id ? 'active' : '' }} pdf-item"
                        data-title="Annual Report 2024">
                        <div class="pdf-card">
                            <div class="pdf-header">
                                <h6 class="pdf-title">
                                    <i class="bi bi-file-earmark-text"></i>
                                    {{ $file->name }}
                                </h6>
                                <span class="pdf-size">{{ $id == $file->id ? 'selected' : '' }}</span>
                            </div>
                            <div class="pdf-preview">
                                <div class="pdf-placeholder">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    <p class="mb-1 fw-semibold">{{ $file->name }}</p>

                                </div>
                            </div>
                            <div class="pdf-actions">
                                <button class="btn btn-view " onclick="viewPDF('{{ $file->public_path }}')">
                                    <i class="bi bi-eye me-1"></i>View
                                </button>
                                <button class="btn btn-download " onclick="downloadPDF('{{ $file->public_path }}')">
                                    <i class="bi bi-download me-1"></i>Download
                                </button>
                                @if ($q == 'a')
                                    <form method="post" action="{{ route('file.delete') }}">
                                        @method('DELETE');
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $file->id }}">
                                        <input type="hidden" name="public_path" value="{{ $file->public_path }}">
                                        <button class="btn btn-download" style="background-color: red; border: none"
                                            type="submit">
                                            <i class="bi bi-trash me-1"></i>Delete
                                        </button>
                                    </form>
                                @endif

                                @if ($q != 'a')
                                    <form action="{{ route('resume.add') }}" id="selectPdf" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                        <input id="resume" type="hidden" name="resume" value="">
                                    </form>
                                @endif


                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>

        </div>
    </div>
</div>
