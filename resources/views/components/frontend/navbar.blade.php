  <header>
      <nav class="navbar navbar-expand-lg navbar-light w-100 flex-nowrap z-999 p-0">
          <a href="#" class="navbar-menu p-4 text-center square-100 menu-tigger icon_80 icon-shape d-none d-md-flex"
              data-bs-target=".offCanvas__info" aria-controls="offCanvas__info">
              <i class="ri-menu-2-line"></i>
          </a>
          <div class="container py-3 px-0">
              <a class="navbar-brand d-flex main-logo align-items-center ms-lg-0 ms-md-5 ms-3" href="{{ route('home') }}">
                  @php
                      $icon = \App\Models\Setting::first()->icon;
                  @endphp
                  <img style="width: 40px ; height: 40px;" src="{{ asset($icon ?? 'assets/imgs/template/favicon.svg') }}"
                      alt="zelio" />
                  <span class="fs-4 ms-2 text-uppercase">{{ $user->name }}</span>
              </a>
              <div class="d-none d-lg-flex">
                  <div class="main-menu">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item has-children">
                              <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}
"
                                  href="{{ route('home') }}">Home</a>

                          </li>

                          <li class="nav-item">
                              <a class="nav-link {{ request()->routeIs('user.services') ? 'active' : '' }}
"
                                  href="{{ route('user.services') }}">Services</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link {{ request()->routeIs('user.projects') ? 'active' : '' }}
"
                                  href="{{ route('user.projects') }}">Portfolio</a>
                          </li>


                          {{-- 
                          <li class="nav-item">
                              <a class="nav-link" href="blog-list.html">Blog</a>
                          </li> --}}
                          <li class="nav-item">
                              <a class="nav-link {{ request()->routeIs('user.contact') ? 'active' : '' }}"
                                  href="{{ route('user.contact') }}">Contact</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="navbar-social d-flex align-items-center pe-5 pe-lg-0 me-5 me-lg-0">
                  <div class="d-md-flex d-none gap-3">
                      <a target="_blank" href="{{ $user->facebook }}">
                          <i class="ri-facebook-circle-fill fs-18"></i>
                      </a>
                      <a target="_blank" href="{{ $user->instagram }}">
                          <i class="ri-instagram-line fs-18"></i>
                      </a>
                      <a target="_blank" href="{{ $user->linkedin }}">
                          <i class="ri-linkedin-fill fs-18"></i>
                      </a>
                      <a target="_blank" href="{{ $user->youtube }}">
                          <i class="ri-youtube-fill fs-18"></i>
                      </a>

                      <a target="_blank" href="{{ $user->fiverr }}">
                          <svg id="fiverr-nav" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="20px"
                              height="20px" viewBox="-2.5 -2 24 24" preserveAspectRatio="xMinYMin"
                              class="jam jam-fiverr">
                              <path
                                  d="M16.25 16.25v-10h-10v-.625c0-1.034.841-1.875 1.875-1.875H10V0H8.125A5.632 5.632 0 0 0 2.5 5.625v.625H0V10h2.5v6.25H0V20h8.75v-3.75h-2.5V10h6.285v6.25H10V20h8.75v-3.75h-2.5z" />
                              <circle cx="14.375" cy="1.875" r="1.875" />
                          </svg>
                      </a>
                      <a target="_blank" href="{{ $user->upwork }}">
                          <svg id="upwork-nav" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="20px"
                              height="20px" viewBox="0 0 32 32">
                              <path
                                  d="M24.75 17.542c-1.469 0-2.849-0.62-4.099-1.635l0.302-1.432 0.010-0.057c0.276-1.521 1.13-4.078 3.786-4.078 1.99 0 3.604 1.615 3.604 3.604 0 1.984-1.615 3.599-3.604 3.599zM24.75 6.693c-3.385 0-6.016 2.198-7.083 5.818-1.625-2.443-2.865-5.38-3.583-7.854h-3.646v9.484c-0.005 1.875-1.521 3.391-3.396 3.396-1.875-0.005-3.391-1.526-3.396-3.396v-9.484h-3.646v9.484c0 3.885 3.161 7.068 7.042 7.068 3.885 0 7.042-3.182 7.042-7.068v-1.589c0.708 1.474 1.578 2.974 2.635 4.297l-2.234 10.495h3.729l1.62-7.615c1.417 0.906 3.047 1.479 4.917 1.479 4 0 7.25-3.271 7.25-7.266 0-4-3.25-7.25-7.25-7.25z" />
                          </svg> </a>
                  </div>
                  <div class="burger-icon burger-icon-white border rounded-3">
                      <span class="burger-icon-top"></span>
                      <span class="burger-icon-mid"></span>
                      <span class="burger-icon-bottom"></span>
                  </div>
              </div>
          </div>
          <div
              class="dark-light-switcher pe-10 pe-lg-0 pe-0 ps-md-5 ps-0 ps-lg-4 pe-lg-4 d-flex justify-content-center align-items-center icon_80 @@classList">
              <i class="ri-sun-fill text-warning"></i>
              <i class="ri-contrast-2-line text-white"></i>
          </div>

      </nav>
      <!-- offCanvas-menu -->
      <div class="offCanvas__info">
          <div class="offCanvas__close-icon menu-close">
              <button><i class="ri-close-line"></i></button>
          </div>
          <div class="offCanvas__logo mb-5">
              <h3 class="mb-0">Get in touch</h3>
          </div>
          <div class="offCanvas__side-info mb-30">
              <div class="contact-list mb-30">
                  <p class="fs-6 fw-medium text-200 mb-5">I'm always excited to take on new projects and collaborate
                      with innovative minds.</p>
                  <div class="mb-3">
                      <span class="text-400 fs-5">Phone Number</span>
                      <p class="mb-0">{{ $user->phone_number }}</p>
                  </div>
                  <div class="mb-3">
                      <span class="text-400 fs-5">Email</span>
                      <p class="mb-0">{{ $user->email }}</p>
                  </div>
                  <div class="mb-3">
                      <span class="text-400 fs-5">Linkedin</span>
                      <p class="mb-0">{{ $user->linkedin }}</p>
                  </div>
                  <div class="mb-3">
                      <span class="text-400 fs-5">Address</span>
                      <p class="mb-0">{{ $user->address }}</p>
                  </div>
              </div>

              <div class="contact-list">
                  <p class="text-400 fs-5 mb-2">Social</p>
                  <div class="d-md-flex d-none gap-3">
                      <a target="_blank" href="{{ $user->facebook }}">
                          <i class="ri-facebook-circle-fill fs-18"></i>
                      </a>
                      <a target="_blank" href="{{ $user->instagram }}">
                          <i class="ri-instagram-line fs-18"></i>
                      </a>
                      <a target="_blank" href="{{ $user->linkedin }}">
                          <i class="ri-linkedin-fill fs-18"></i>
                      </a>
                      <a target="_blank" href="{{ $user->youtube }}">
                          <i class="ri-youtube-fill"></i> </a>
                      <a target="_blank" href="{{ $user->fiverr }}">
                          <svg id="fiverr" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="20px"
                              height="20px" viewBox="-2.5 -2 24 24" preserveAspectRatio="xMinYMin"
                              class="jam jam-fiverr">
                              <path
                                  d="M16.25 16.25v-10h-10v-.625c0-1.034.841-1.875 1.875-1.875H10V0H8.125A5.632 5.632 0 0 0 2.5 5.625v.625H0V10h2.5v6.25H0V20h8.75v-3.75h-2.5V10h6.285v6.25H10V20h8.75v-3.75h-2.5z" />
                              <circle cx="14.375" cy="1.875" r="1.875" />
                          </svg>
                      </a>

                      <a target="_blank" href="{{ $user->upwork }}">
                          <svg id="upwork" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="20px"
                              height="20px" viewBox="0 0 32 32">
                              <path
                                  d="M24.75 17.542c-1.469 0-2.849-0.62-4.099-1.635l0.302-1.432 0.010-0.057c0.276-1.521 1.13-4.078 3.786-4.078 1.99 0 3.604 1.615 3.604 3.604 0 1.984-1.615 3.599-3.604 3.599zM24.75 6.693c-3.385 0-6.016 2.198-7.083 5.818-1.625-2.443-2.865-5.38-3.583-7.854h-3.646v9.484c-0.005 1.875-1.521 3.391-3.396 3.396-1.875-0.005-3.391-1.526-3.396-3.396v-9.484h-3.646v9.484c0 3.885 3.161 7.068 7.042 7.068 3.885 0 7.042-3.182 7.042-7.068v-1.589c0.708 1.474 1.578 2.974 2.635 4.297l-2.234 10.495h3.729l1.62-7.615c1.417 0.906 3.047 1.479 4.917 1.479 4 0 7.25-3.271 7.25-7.266 0-4-3.25-7.25-7.25-7.25z" />
                          </svg>
                      </a>
                  </div>
              </div>
          </div>
      </div>
      <div class="offCanvas__overly"></div>
      <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar button-bg-2">
          <div class="mobile-header-wrapper-inner">
              <div class="mobile-header-logo">
                  <a class="d-flex main-logo align-items-center d-inline-flex" href="index.html">
                      <img src="{{ asset('assets/imgs/footer-1/logo.svg') }}" alt="zelio" />
                      <span class="fs-4 ms-2 text-dark">william.design</span>
                  </a>
                  <div class="burger-icon burger-icon-white border rounded-3">
                      <span class="burger-icon-top"></span>
                      <span class="burger-icon-mid"></span>
                      <span class="burger-icon-bottom"></span>
                  </div>
              </div>
              <div class="mobile-header-content-area">
                  <div class="perfect-scroll">
                      <div class="mobile-menu-wrap mobile-header-border">
                          <nav>
                              <ul class="mobile-menu font-heading ps-0">
                                  <li class="nav-item ">
                                      <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} "
                                          href="{{ route('home') }}">Home</a>
                                  </li>

                                  <li class="nav-item ">
                                      <a class="nav-link {{ request()->routeIs('user.services') ? 'active' : '' }} "
                                          href="{{ route('user.services') }}">Services</a>
                                  </li>
                                  <li class="nav-item ">
                                      <a class="nav-link {{ request()->routeIs('user.projects') ? 'active' : '' }} "
                                          href="{{ route('user.projects') }}">Portfolio</a>
                                  </li>
                                  <li class="nav-item ">
                                      <a class="nav-link {{ request()->routeIs('user.contact') ? 'active' : '' }} "
                                          href="{{ route('user.contact') }}">Contact Us</a>
                                  </li>
                              </ul>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </header>
