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
                      <a href="{{ $user->facebook }}">
                          <i class="ri-facebook-circle-fill fs-18"></i>
                      </a>
                      <a href="{{ $user->instagram }}">
                          <i class="ri-instagram-line fs-18"></i>
                      </a>
                      <a href="{{ $user->linkedin }}">
                          <i class="ri-linkedin-fill fs-18"></i>
                      </a>
                      <a href="{{ $user->dribble }}">
                          <i class="ri-dribbble-fill fs-18"></i>
                      </a>
                      <a href="{{ $user->behance }}">
                          <i class="ri-behance-fill fs-18"></i>
                      </a>
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
                      <a href="{{ $user->facebook }}">
                          <i class="ri-facebook-circle-fill fs-18"></i>
                      </a>
                      <a href="{{ $user->instagram }}">
                          <i class="ri-instagram-line fs-18"></i>
                      </a>
                      <a href="{{ $user->linkedin }}">
                          <i class="ri-linkedin-fill fs-18"></i>
                      </a>
                      <a href="{{ $user->dribble }}">
                          <i class="ri-dribbble-fill fs-18"></i>
                      </a>
                      <a href="{{ $user->behance }}">
                          <i class="ri-behance-fill fs-18"></i>
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
