 <div class="col-12 col-lg-6 d-flex">
     <div class="card rounded-4 w-100">
         <div class="card-header bg-transparent border-0">
             <div class="row g-3 align-items-center">
                 <div class="col">
                     <h6 class="mb-0">Skills</h6>
                 </div>
                 <div class="col">
                     <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                         <div class="dropdown">
                             <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"
                                 aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                             </a>
                             <ul class="dropdown-menu">
                                 <li class="d-flex justify-content-center">
                                     <a href="">Add New</a>
                                 </li>

                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="card-body p-0">
             <div class="best-product p-2 mb-3">
                 @forelse ($skills as $skill)
                     <div class="best-product-item">
                         <div class="d-flex align-items-center gap-3">
                             <div class="product-box border">
                                 <img src="{{ asset($skill->file_manager->public_path) }}" alt="">
                             </div>
                             <div class="product-info flex-grow-1">
                                 <div class="progress-wrapper">
                                     <div class="progress" style="height: 5px;">
                                         <div class="progress-bar bg-primary" role="progressbar"
                                             style="width: {{ $skill->experty }}%;">
                                         </div>
                                     </div>
                                 </div>
                                 <p class="product-name mb-0 mt-2 fs-6">{{ $skill->name }}<span
                                         class="float-end">{{ $skill->experty }}%</span></p>
                             </div>
                         </div>
                     </div>
                 @empty
                 @endforelse

             </div>
         </div>
     </div>
 </div>
