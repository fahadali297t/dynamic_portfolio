 <section class="section-testimonials-1 position-relative pt-120 pb-120 bg-900 overflow-hidden">
     <div class="container">
         <div class="row">
             <div class="col-lg-8">
                 <h3 class="ds-3 mt-3 mb-3 text-primary">Client's Testimonials</h3>
                 <span class="fs-5 fw-medium text-200">
                     I believe that working hard and trying to learn every day will make me
                     <br />
                     improve in satisfying my customers.
                 </span>
                 <div class="row mt-8">
                     <div class="swiper slider-2 pt-2 pb-3">
                         <div class="swiper-wrapper">
                             @forelse ($testimonial as $item)
                                 <div class="swiper-slide">
                                     <div
                                         class="bg-white card-testimonial-1 p-lg-7 p-md-5 mx-3 mx-md-0 p-4 border-2 rounded-4 position-relative">

                                         <div class="d-flex mb-5">
                                             <i class="ri-star-fill fs-7 text-primary"></i>
                                             <i class="ri-star-fill fs-7 text-primary"></i>
                                             <i class="ri-star-fill fs-7 text-primary"></i>
                                             <i class="ri-star-fill fs-7 text-primary"></i>
                                             <i class="ri-star-fill fs-7 text-500 text-primary"></i>
                                         </div>
                                         <h6 class="mb-7">{!! $item->review !!}</h6>
                                         <p class="d-flex align-items-center">
                                             <img class="icon_65 avatar" src="{{ $item->file_manager->public_path }}"
                                                 alt="zelio" />
                                         <h6 class="ms-2 mb-0">{{ $item->name }} <span class="fs-6 fw-regular">
                                                 -{{ $item->position }}</span></h6>
                                         </p>
                                         <div class="position-absolute top-0 end-0 m-5">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52"
                                                 viewBox="0 0 52 52" fill="none">
                                                 <g clip-path="url(#clip0_551_13914)">
                                                     <path
                                                         d="M0 29.7144H11.1428L3.71422 44.5715H14.8571L22.2857 29.7144V7.42871H0V29.7144Z"
                                                         fill="#D1D5DB" />
                                                     <path
                                                         d="M29.7148 7.42871V29.7144H40.8577L33.4291 44.5715H44.5719L52.0005 29.7144V7.42871H29.7148Z"
                                                         fill="#D1D5DB" />
                                                 </g>
                                                 <defs>
                                                     <clipPath>
                                                         <rect width="52" height="52" fill="white" />
                                                     </clipPath>
                                                 </defs>
                                             </svg>
                                         </div>
                                     </div>
                                 </div>
                             @empty
                             @endforelse

                         </div>
                         <div class="swiper-pagination"></div>
                         <div class="text-center mt-8 position-relative z-3"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="shape-1 position-absolute bottom-0 start-50 z-1 ms-10 ps-10 d-none d-md-block">
         @if ($user->secondaryImage)
             <img class="position-relative z-1" src="{{ asset($user->secondaryImage) }}" alt="man" />
         @else
             <img class="position-relative z-1" src="assets/imgs/testimonials/testimonials-1/man.png" alt="man" />
         @endif
         <div class="position-absolute top-50 start-50 translate-middle z-0 mt-5">
             <img class="ribbonRotate" src="assets/imgs/testimonials/testimonials-1/decorate.png" alt="zelio" />
         </div>
     </div>
 </section>
