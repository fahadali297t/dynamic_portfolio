<header class="top-header">
    <nav class="navbar navbar-expand gap-3">
        <div class="mobile-toggle-icon fs-3 d-flex d-lg-none">
            <i class="bi bi-list"></i>
        </div>
        <form class="searchbar">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i>
            </div>
            <input class="form-control" type="text" placeholder="Type here to search">
            <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i>
            </div>
        </form>
        <div class="top-navbar-right ms-auto">
            <ul class="navbar-nav align-items-center gap-1">

                <li class="nav-item search-toggle-icon d-flex d-lg-none">
                    <a class="nav-link" href="javascript:;">
                        <div class="">
                            <i class="bi bi-search"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item dark-mode d-flex d-sm-none">
                    <a class="nav-link dark-mode-icon" href="javascript:;">
                        <div class="">
                            <i class="bi bi-moon-fill"></i>
                        </div>
                    </a>
                </li>
                {{-- dark mode --}}
                <li class="nav-item dark-mode d-none d-sm-flex">
                    <a class="nav-link dark-mode-icon" href="javascript:;">
                        <div class="">
                            <i class="bi bi-moon-fill"></i>
                        </div>
                    </a>
                </li>


            </ul>
        </div>
        <div class="dropdown dropdown-user-setting">

            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="user-setting d-flex align-items-center gap-3">
                    <img src="assets/images/avatars/avatar-1.png" class="user-img" alt="">
                    <div class="d-none d-sm-block">
                        <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                        <small class="mb-0 dropdown-user-designation">Designer</small>
                    </div>
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="pages-user-profile.html">
                        <div class="d-flex align-items-center">
                            <div class=""><i class="bi bi-person-fill"></i></div>
                            <div class="ms-3"><span>Profile</span></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                            <div class=""><i class="bi bi-gear-fill"></i></div>
                            <div class="ms-3"><span>Setting</span></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="index2.html">
                        <div class="d-flex align-items-center">
                            <div class=""><i class="bi bi-speedometer"></i></div>
                            <div class="ms-3"><span>Dashboard</span></div>
                        </div>
                    </a>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>


                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="dropdown-item" href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            <div class="d-flex align-items-center">
                                <div class=""><i class="bi bi-lock-fill"></i></div>
                                <div class="ms-3"><span>Logout</span></div>
                            </div>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>
