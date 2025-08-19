 <section class="section-brands-1 section-padding">
     <div class="container">
         <div class="text-center">
             <h2>Trusted by industry leaders</h2>
             <p class="text-300">
                 I have collaborated with many large corporations, companies, and agencies around
                 <br />
                 the world in many fields of design and consulting
             </p>
         </div>
     </div>
     <div class="container-fluid">
         <!-- Carausel Scroll -->
         <div class="carouselTicker carouselTicker-right mt-5 position-relative z-1">
             <ul class="carouselTicker__list">
                 @forelse ($brands as $item)
                     <li class="carouselTicker__item">
                         <img src="{{ asset($item->file_manager->public_path) }}" alt="zelio" />
                     </li>
                 @empty
                 @endforelse
             </ul>
         </div>
     </div>
 </section>
