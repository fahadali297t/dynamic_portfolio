 <div class="modal-dialog modal-xl modal-dialog-centered">
     <div class="modal-content">
         <div class="modal-header border-0">
             <h5 class="modal-title">Select an Image</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
         </div>

         <div class="modal-body">
             <div class="row g-3">
                 @forelse ($files as $file)
                     <div class="col-6 col-md-4 col-lg-3">
                         <div class="card h-100 shadow-sm image-card"
                             onclick="selectImage('{{ asset($file->public_path) }}')">
                             <img src="{{ asset($file->public_path) }}" class="card-img-top img-fluid gallery-img"
                                 alt="Image">
                         </div>
                     </div>
                 @empty
                     <p class="text-muted text-center">No images available</p>
                 @endforelse
             </div>
         </div>
     </div>
 </div>
