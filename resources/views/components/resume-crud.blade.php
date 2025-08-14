 <div class="col-12 col-lg-6 d-flex">
     <div class="card rounded-4 w-100 overflow-hidden">
         <div class="card-body">
             <div class="d-flex align-items-center">
                 <h6 class="mb-5">Resume</h6>

             </div>
             <div
                 class="d-flex flex-column align-items-center gap-5 justify-content-center mt-0 p-2 bg-light radius-10 border">
                 <div class="text-center">

                     @if (!empty($resume))
                         <div class="col-12 cursor-pointer  pdf-item" data-title="Annual Report 2024">
                             <div class="pdf-card">
                                 <div class="pdf-header">
                                     <h6 class="pdf-title">
                                         <i class="bi bi-file-earmark-text"></i>
                                         {{ $resume->name }}
                                     </h6>
                                     <span class="pdf-size">2.4 MB</span>
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
                                     <button type="button" class="btn trigger-btn" data-bs-toggle="modal"
                                         data-bs-target="#pdfModal">
                                         <i class="bi bi-file-earmark-pdf me-2"></i>
                                         Select
                                     </button>


                                 </div>
                             </div>
                         </div>
                     @else
                         <button type="button" class="btn trigger-btn" data-bs-toggle="modal"
                             data-bs-target="#pdfModal">
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


 <script>
     // View PDF function
     function viewPDF(filename) {
         window.open('/' + filename, "_blank");
     }

     // Download PDF function
     function downloadPDF(filename) {
         const pdfPath = '/' + filename;
         const link = document.createElement("a");
         link.href = pdfPath;
         link.download = "fahadaliresume.pdf"; // optional custom filename
         document.body.appendChild(link);
         link.click();
         document.body.removeChild(link);
     }

     function selectPdf(path) {
         document.getElementById('resume').value = path;
         document.getElementById('selectPdf').submit();
     }
 </script>
