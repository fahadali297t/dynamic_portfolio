 <section class="section-skills-1 position-relative section-padding bg-900">
     <div class="container">
         <div class="row">
             <div class="text-center mb-7">
                 <h3 class="ds-3 mt-3 mb-3 text-primary">My Skills</h3>
                 <span class="fs-5 fw-medium text-200">
                     I thrive on transforming raw footage into engaging, polished videos that not only tell a story
                     <br class="d-md-block d-none" />
                     but also captivate and satisfy the audience. </span>
             </div>
             <div class="d-flex flex-wrap flex-lg-nowrap justify-content-center gap-3 mb-7 px-6">
                 @forelse ($skills as $skill)
                     <div class="skills d-flex justify-content-center align-items-center flex-column">
                         <div class="skills-icon mb-5">
                             <img src="{{ asset($skill->file_manager->public_path) }}" alt="zelio" />
                         </div>
                         <div class="skills-ratio text-center">
                             <h3 class="count fw-semibold my-0"><span class="odometer fw-semibold"
                                     data-count="{{ $skill->experty }}"></span>%
                             </h3>
                             <p class="text-400 fw-medium text-uppercase">{{ $skill->name }}</p>
                         </div>
                     </div>
                 @empty
                     <div class="skills">
                         <div class="skills-icon mb-5">
                             <img src="assets/imgs/skills/skills-1/icon-1.png" alt="zelio" />
                         </div>
                         <div class="skills-ratio text-center">
                             <h3 class="count fw-semibold my-0"><span class="odometer fw-semibold"
                                     data-count="98"></span>%
                             </h3>
                             <p class="text-400 fw-medium text-uppercase">Figma</p>
                         </div>
                     </div>
                     <div class="skills">
                         <div class="skills-icon mb-5">
                             <img src="assets/imgs/skills/skills-1/icon-2.png" alt="zelio" />
                         </div>
                         <div class="skills-ratio text-center">
                             <h3 class="count fw-semibold my-0"><span class="odometer fw-semibold"
                                     data-count="82"></span>%
                             </h3>
                             <p class="text-400 fw-medium text-uppercase">Adobe XD</p>
                         </div>
                     </div>
                     <div class="skills">
                         <div class="skills-icon mb-5">
                             <img src="assets/imgs/skills/skills-1/icon-3.png" alt="zelio" />
                         </div>
                         <div class="skills-ratio text-center">
                             <h3 class="count fw-semibold my-0"><span class="odometer fw-semibold"
                                     data-count="76"></span>%
                             </h3>
                             <p class="text-400 fw-medium text-uppercase">Illustrator</p>
                         </div>
                     </div>
                     <div class="skills">
                         <div class="skills-icon mb-5">
                             <img src="assets/imgs/skills/skills-1/icon-4.png" alt="zelio" />
                         </div>
                         <div class="skills-ratio text-center">
                             <h3 class="count fw-semibold my-0"><span class="odometer fw-semibold"
                                     data-count="58"></span>%
                             </h3>
                             <p class="text-400 fw-medium text-uppercase">Sketch</p>
                         </div>
                     </div>
                     <div class="skills">
                         <div class="skills-icon mb-5">
                             <img src="assets/imgs/skills/skills-1/icon-5.png" alt="zelio" />
                         </div>
                         <div class="skills-ratio text-center">
                             <h3 class="count fw-semibold my-0"><span class="odometer fw-semibold"
                                     data-count="60"></span>%
                             </h3>
                             <p class="text-400 fw-medium text-uppercase">Photoshop</p>
                         </div>
                     </div>
                     <div class="skills">
                         <div class="skills-icon mb-5">
                             <img src="assets/imgs/skills/skills-1/icon-6.png" alt="zelio" />
                         </div>
                         <div class="skills-ratio text-center">
                             <h3 class="count fw-semibold my-0"><span class="odometer fw-semibold"
                                     data-count="72"></span>%
                             </h3>
                             <p class="text-400 fw-medium text-uppercase">Webflow</p>
                         </div>
                     </div>
                     <div class="skills">
                         <div class="skills-icon mb-5">
                             <img src="assets/imgs/skills/skills-1/icon-7.png" alt="zelio" />
                         </div>
                         <div class="skills-ratio text-center">
                             <h3 class="count fw-semibold my-0"><span class="odometer fw-semibold"
                                     data-count="93"></span>%
                             </h3>
                             <p class="text-400 fw-medium text-uppercase">Framer</p>
                         </div>
                     </div>
                 @endforelse

             </div>

         </div>
     </div>
 </section>
