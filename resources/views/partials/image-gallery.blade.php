 {{-- <div class="modal-dialog modal-xl modal-dialog-centered">
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
                             onclick="selectImage('{{ asset($file->public_path) }}' , {{ $file->id }})">
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
 </div> --}}

 <div class="modal-dialog modal-xl">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="imageModalLabel">
                 <i class="bi bi-collection"></i>
                 Image Gallery
                 <span class="image-count">{{ count($files) }}</span>
             </h5>
             <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">
                 <i class="bi bi-x-lg"></i>
             </button>
         </div>
         <div class="modal-body">

             <!-- Image Grid -->
             <div class="row g-3" id="imageGrid">
                 <!-- Image Card 1 -->
                 @forelse ($files as $item)
                     <div class="col-lg-4 col-md-6 image-item" data-title="Mountain Landscape" data-type="jpg">
                         <div class="image-card">
                             <div class="image-header">
                                 <h6 class="image-title">
                                     <i class="bi bi-image"></i>
                                     {{ $item->name }}
                                 </h6>
                             </div>
                             <div class="image-preview">
                                 <img src="{{ asset($item->public_path) }}" alt="{{ $item->name }}"
                                     class="image-thumbnail" onclick="openImageViewer(this, '{{ $item->name }}')">
                             </div>
                             <div class="image-actions">
                                 <button class="btn btn-view btn-action"
                                     onclick="openImageViewer(document.querySelector('[alt=&quot;{{ $item->name }}&quot;]'), '{{ $item->name }}')">
                                     <i class="bi bi-eye"></i> View
                                 </button>
                                 <button class="btn btn-download btn-action"
                                     onclick="downloadImage('{{ $item->public_path }}')">
                                     <i class="bi bi-download"></i> Save
                                 </button>
                                 @if ($q == 'a')
                                     <form action="{{ route('file.delete') }}" method="post">
                                         @method('DELETE')
                                         @csrf
                                         <input type="hidden" name="id" value="{{ $item->id }}">
                                         <button type="submit" class="btn btn-delete btn-action">
                                             <i class="bi bi-trash"></i> Del
                                         </button>
                                     </form>
                                 @else
                                     <button
                                         onclick="selectImage('{{ asset($item->public_path) }}' , {{ $item->id }})"
                                         type="button" class="btn btn-primary btn-action">
                                         Select
                                     </button>
                                 @endif

                             </div>
                         </div>
                     </div>
                 @empty
                 @endforelse


             </div>
             <!-- End Image Grid -->
         </div>
     </div>
 </div>
