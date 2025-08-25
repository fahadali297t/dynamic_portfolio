 <section class="section-hero-1 position-relative pt-200 pb-120 overflow-hidden">
     <div class="container position-relative z-3">
         <div class="row">
             <div class="col-lg-8  col-md-12">
                 <span class="text-dark">👋 Hi there, I'm {{ $user->name }}</span>
                 <h1 class="ds-2 mb-3">Your Vision, My Editing <br> <span class="text-primary">Let’s Create Something
                         Remarkable
                     </span>
                 </h1>
                 <p class="text-300 col-12 col-md-8  mb-6">“Ever watched your videos and thought, ‘It’s fine… but it
                     could be
                     better’? Let’s change that. I’m here to
                     transform your raw footage into engaging, high-quality videos that truly stand out. From YouTube
                     content,
                     documentaries, talking head videos, faceless cash cow content, business promos, reels, and
                     more—I’ve
                     got you covered. A full-time video editor, ready to bring your vision to life!”
                 </p>
                 @if ($resume)
                     <a href="{{ asset($resume) }}" download="resume.pdf" class="btn btn-gradient me-2">
                         Download CV
                         <i class="ri-download-line ms-2"></i>
                     </a>
                 @else
                     <a class="btn btn-gradient me-2">
                         Download CV
                         <i class="ri-download-line ms-2"></i>
                     </a>
                 @endif
                 <a href="#contact" class="btn btn-outline-secondary d-inline-flex align-items-center">
                     <span>Hire me</span>
                     <i class="ri-arrow-right-line ms-2"></i>
                 </a>
                 <p class="text-400 mt-6 mb-3">+ 5 years of professional video editing.</p>
                 <div class="d-flex gap-3">
                     @forelse ($skills as $item)
                         <div class="brand-logo icon-xl icon-shape rounded-3 bg-900">
                             <img src="{{ asset($item->file_manager->public_path) }}" alt="brand" />
                         </div>
                     @empty
                         <div class="brand-logo icon-xl icon-shape rounded-3 bg-900">
                             <img src="assets/imgs/hero/hero-1/brand-1.png" alt="brand" />
                         </div>
                         <div class="brand-logo icon-xl icon-shape rounded-3 bg-900">
                             <img src="assets/imgs/hero/hero-1/brand-2.png" alt="brand" />
                         </div>
                         <div class="brand-logo icon-xl icon-shape rounded-3 bg-900">
                             <img src="assets/imgs/hero/hero-1/brand-3.png" alt="brand" />
                         </div>
                         <div class="brand-logo icon-xl icon-shape rounded-3 bg-900">
                             <img src="assets/imgs/hero/hero-1/brand-4.png" alt="brand" />
                         </div>
                         <div class="brand-logo icon-xl icon-shape rounded-3 bg-900">
                             <img src="assets/imgs/hero/hero-1/brand-5.png" alt="brand" />
                         </div>
                         <div class="brand-logo icon-xl icon-shape rounded-3 bg-900 d-none d-md-flex">
                             <img src=" assets/imgs/hero/hero-1/brand-6.png" alt="brand" />
                         </div>
                     @endforelse
                 </div>
             </div>
         </div>
     </div>
     <div class="shape-1 position-absolute bottom-0 start-50 z-1 ms-10 d-none d-md-block">
         @if ($user->primaryImage)
             <img class="position-relative z-1 filter-gray" src="{{ asset($user->primaryImage) }}" alt="man" />
         @else
             <img class="position-relative z-1 filter-gray" src="assets/imgs/hero/hero-1/man.png" alt="man" />
         @endif
         <div class="position-absolute top-50 start-0 translate-middle z-0 mt-8 ms-10 ps-8">
             <img class="ribbonRotate" src="assets/imgs/hero/hero-1/decorate.png" alt="zelio" />
         </div>
     </div>
     <div class="position-absolute top-0 start-0 w-100 h-100 filter-invert"
         data-background="assets/imgs/hero/hero-1/background.png"></div>
 </section>
