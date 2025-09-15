        <!-- Sidenav Menu Start -->
        <div class="sidebar" id="sidebar">

            <!-- Start Logo -->
            <div class="sidebar-logo">
                <div>
                    <!-- Logo Normal -->
                    <a href="index.html" class="logo logo-normal">
                        <img src="assets/img/logo.svg" alt="Logo">
                    </a>

                    <!-- Logo Small -->
                    <a href="index.html" class="logo-small">
                        <img src="assets/img/logo-small.svg" alt="Logo">
                    </a>

                    <!-- Logo Dark -->
                    <a href="index.html" class="dark-logo">
                        <img src="assets/img/logo-white.svg" alt="Logo">
                    </a>
                </div>
                <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn">
                    <i class="ti ti-arrow-left text-body"></i>
                </button>

                <!-- Sidebar Menu Close -->
                <button class="sidebar-close">
                    <i class="ti ti-x align-middle"></i>
                </button>
            </div>
            <!-- End Logo -->

            <!-- Sidenav Menu -->
            <div class="sidebar-inner" data-simplebar>
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title"><span>Main Menu</span></li>
                        <li>
                            <ul>
                                <li class="{{ Request::is('doctor-dashboard') ? 'active' : '' }}">
                                    <a href="{{ url('doctor-dashboard') }}">
                                        <i class="ti ti-layout-dashboard"></i><span>Tableau de bord</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('doctors-appointments') ? 'active subdrop' : '' }}
                                        {{ Request::is('online-consultations') ? 'active subdrop' : '' }}
                                        {{ Request::is('doctors-patient-details') ? 'active subdrop' : '' }}
                                         ">
                                        <i class="ti ti-calendar-check"></i><span>Rendez-vous</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('doctors-appointments') }}"
                                                class="{{ Request::is('doctors-appointments') ? 'active' : '' }}
                                                {{ Request::is('doctors-patient-details') ? 'active' : '' }}">Rendez-vous</a>
                                        </li>
                                        <li><a href="{{ url('online-consultations') }}"
                                                class="{{ Request::is('online-consultations') ? 'active' : '' }}">Consultations
                                                en ligne</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('doctors-schedules') ? 'active' : '' }}">
                                    <a href="{{ url('doctors-schedules') }}">
                                        <i class="ti ti-clock-check"></i><span>Mon emploi du temps</span>
                                    </a>
                                </li>
                                <li
                                    class="{{ Request::is('doctors-prescriptions') ? 'active' : '' }}
                                {{ Request::is('doctors-prescription-details') ? 'active' : '' }}">
                                    <a href="{{ url('doctors-prescriptions') }}">
                                        <i class="ti ti-prescription"></i><span>Ordonnances</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('doctors-leaves') ? 'active' : '' }}">
                                    <a href="{{ url('doctors-leaves') }}">
                                        <i class="ti ti-calendar-x"></i><span>Conges</span>
                                    </a>
                                </li>
                                <li class="{{ Request::is('doctors-reviews') ? 'active' : '' }}">
                                    <a href="{{ url('doctors-reviews') }}">
                                        <i class="ti ti-star"></i><span>Avis</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('doctors-profile-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('doctors-password-settings') ? 'active subdrop' : '' }}
                                         {{ Request::is('doctors-notification-settings') ? 'active subdrop' : '' }}">
                                        <i class="ti ti-settings"></i><span>Parametres</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('doctors-profile-settings') }}"
                                                class="{{ Request::is('doctors-profile-settings') ? 'active' : '' }}">Parametre
                                                du profil</a></li>
                                        <li><a href="{{ url('doctors-password-settings') }}"
                                                class="{{ Request::is('doctors-password-settings') ? 'active' : '' }}">Changer
                                                le mot de passe</a></li>
                                        <li><a href="{{ url('doctors-notification-settings') }}"
                                                class="{{ Request::is('doctors-notification-settings') ? 'active' : '' }}">Notifications</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
        <!-- Sidenav Menu End -->
