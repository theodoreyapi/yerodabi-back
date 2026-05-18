        <!-- Topbar Start -->
        <header class="navbar-header">
            <div class="page-container topbar-menu">
                <div class="d-flex align-items-center gap-2">

                    <!-- Logo -->
                    <a href="#" class="logo">

                        <!-- Logo Normal -->
                        <span class="logo-light">
                            <span class="logo-lg"><img src="{{ URL::asset('') }}assets/img/logo.svg" alt="logo"></span>
                            <span class="logo-sm"><img src="{{ URL::asset('') }}assets/img/logo-small.svg"
                                    alt="small logo"></span>
                        </span>

                        <!-- Logo Dark -->
                        <span class="logo-dark">
                            <span class="logo-lg"><img src="{{ URL::asset('') }}assets/img/logo-white.svg"
                                    alt="dark logo"></span>
                        </span>
                    </a>

                    <!-- Sidebar Mobile Button -->
                    <a id="mobile_btn" class="mobile-btn" href="#sidebar">
                        <i class="ti ti-menu-deep fs-24"></i>
                    </a>

                    <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn2">
                        <i class="ti ti-arrow-right"></i>
                    </button>
                </div>

                <div class="d-flex align-items-center">

                    <!-- Light/Dark Mode Button -->
                    <div class="header-item d-none d-sm-flex me-2">
                        <button class="topbar-link btn btn-icon topbar-link" id="light-dark-mode" type="button">
                            <i class="ti ti-moon fs-16"></i>
                        </button>
                    </div>

                    <!-- User Dropdown -->
                    <div class="dropdown profile-dropdown d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0);"
                            class="topbar-link dropdown-toggle drop-arrow-none position-relative"
                            data-bs-toggle="dropdown" data-bs-offset="0,22" aria-haspopup="false"
                            aria-expanded="false">
                            <img src="{{ URL::asset('') }}assets/img/users/user-01.jpg" width="32"
                                class="rounded-circle d-flex" alt="user-image">
                            <span class="online text-success"><i
                                    class="ti ti-circle-filled d-flex bg-white rounded-circle border border-1 border-white"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">

                            <div class="d-flex align-items-center bg-light rounded-3 p-2 mb-2">
                                <img src="{{ URL::asset('') }}assets/img/users/user-01.jpg" class="rounded-circle"
                                    width="42" height="42" alt="">
                                <div class="ms-2">
                                    <p class="fw-medium text-dark mb-0">Jimmy Anderson</p>
                                    <span class="d-block fs-13">Administrator</span>
                                </div>
                            </div>

                            <!-- Item-->
                            <a href="profile-settings.html" class="dropdown-item">
                                <i class="ti ti-user-circle me-1 align-middle"></i>
                                <span class="align-middle">Mon profil</span>
                            </a>

                            <!-- Item-->
                            <div class="pt-2 mt-2 border-top">
                                <a href="login.html" class="dropdown-item text-danger">
                                    <i class="ti ti-logout me-1 fs-17 align-middle"></i>
                                    <span class="align-middle">Se deconnecter</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- Topbar End -->
