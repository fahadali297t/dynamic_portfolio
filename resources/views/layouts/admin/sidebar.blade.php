 <aside class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
         <div>
             <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
         </div>
         <div>
             <h4 class="logo-text">Onedash</h4>
         </div>
         <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
         </div>
     </div>
     <!--navigation-->
     <ul class="metismenu" id="menu">

         <li>
             <a href="{{ route('dashboard') }}">
                 <div class="parent-icon"><i class="bi bi-speedometer"></i>
                 </div>
                 <div class="menu-title">Dashboard</div>
             </a>
         </li>

         {{-- testimonial --}}
         <li>
             <a href="{{ route('testimonial.list') }}">
                 <div class="parent-icon"><i class="bi bi-star-fill"></i>
                 </div>
                 <div class="menu-title">Testimonials</div>
             </a>
         </li>

         <li>
             <a href="{{ route('services.list') }}">
                 <div class="parent-icon"><i class="bi bi-briefcase"></i>
                 </div>
                 <div class="menu-title">Services</div>
             </a>
         </li>
         <li>
             <a href="{{ route('work.list') }}">
                 <div class="parent-icon"><i class="bi bi-collection"></i>
                 </div>
                 <div class="menu-title">Projects</div>
             </a>
         </li>
         <li>
             <a href="{{ route('edu.list') }}">
                 <div class="parent-icon"><i class="bi bi-pen"></i>
                 </div>
                 <div class="menu-title">Education</div>
             </a>
         </li>
         <li>
             <a href="{{ route('exp.list') }}">
                 <div class="parent-icon"><i class="bi bi-hourglass-split"></i>
                 </div>
                 <div class="menu-title">Experience</div>
             </a>
         </li>
         <li>
             <a href="{{ route('skill.list') }}">
                 <div class="parent-icon"><i class="bi bi-brush"></i>
                 </div>
                 <div class="menu-title">Skills</div>
             </a>
         </li>
         <li>
             <a href="{{ route('file.view') }}">
                 <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                 </div>
                 <div class="menu-title">Media</div>
             </a>
         </li>
         {{-- ends  --}}
         <li>
             <a class="has-arrow" href="javascript:;">
                 <div class="parent-icon"><i class="bi bi-music-note-list"></i>
                 </div>
                 <div class="menu-title">Menu Levels</div>
             </a>
             <ul>
                 <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level One</a>
                     <ul>
                         <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level
                                 Two</a>
                             <ul>
                                 <li> <a href="javascript:;"><i class="bi bi-circle"></i>Level Three</a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>
             </ul>
         </li>

     </ul>
     <!--end navigation-->
 </aside>
