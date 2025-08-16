 <div class="col-12 col-lg-6 d-flex">
     <div class="card rounded-4 w-100 overflow-hidden">
         <div class="card-body">
             <div class="d-flex align-items-center">
                 <h6 class="mb-5">Resume</h6>

             </div>
             <div
                 class="d-flex flex-column align-items-center gap-5 justify-content-center mt-0 p-2 bg-light radius-10 border">
                 <div class="text-center pdf-card-full">

                     @if (!empty($resume))
                         <div class="col-12 cursor-pointer   pdf-item pdf-card-full" data-title="Annual Report 2024">
                             <div class="pdf-card pdf-card-full">
                                 <div class="pdf-header">
                                     <h6 class="pdf-title">
                                         <i class="bi bi-file-earmark-text"></i>
                                         {{ $resume->name }}
                                     </h6>
                                 </div>
                                 <div class="pdf-preview">
                                     <div class="pdf-placeholder">
                                         <i class="bi bi-file-earmark-pdf"></i>
                                         <p class="mb-1 fw-semibold">{{ $resume->name }}</p>

                                     </div>
                                 </div>
                                 <div class="pdf-actions">
                                     <button class="btn  btn-view " onclick="viewPDF('{{ $resume->public_path }}')">
                                         <i class="bi bi-eye me-1"></i>View
                                     </button>
                                     <button class="btn  btn-download "
                                         onclick="downloadPDF('{{ $resume->public_path }}')">
                                         <i class="bi bi-download me-1"></i>Download
                                     </button>
                                     <button type="button" id="fetchPdfBtn" class="btn trigger-btn">
                                         <i class="bi bi-file-earmark-pdf me-2"></i>
                                         Select
                                     </button>


                                 </div>
                             </div>
                         </div>
                     @else
                         <button type="button" id="fetchPdfBtn" class="btn trigger-btn">
                             <i class="bi bi-file-earmark-pdf me-2"></i>
                             Select
                         </button>
                     @endif

                 </div>
                 {{-- <div class="border-end sepration"></div> --}}

             </div>
         </div>
     </div>
 </div>



 <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">

 </div>


