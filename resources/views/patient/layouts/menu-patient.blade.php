        <!-- Sidenav Menu Start -->
        <div class="sidebar" id="sidebar">

            <!-- Start Logo -->
            <div class="sidebar-logo">
                <div>
                    <!-- Logo Normal -->
                    <a href="index.html" class="logo logo-normal">
                        <img src="{{ URL::asset('') }}assets/img/logo.svg" alt="Logo">
                    </a>

                    <!-- Logo Small -->
                    <a href="index.html" class="logo-small">
                        <img src="{{ URL::asset('') }}assets/img/logo-small.svg" alt="Logo">
                    </a>

                    <!-- Logo Dark -->
                    <a href="index.html" class="dark-logo">
                        <img src="{{ URL::asset('') }}assets/img/logo-white.svg" alt="Logo">
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
                                <li
                                    class="{{ Request::is('patient-dashboard') ? 'active' : '' }}
                                    {{ Request::is('patient') ? 'active' : '' }}">
                                    <a href="{{ url('patient-dashboard') }}">
                                        <i class="ti ti-layout-dashboard"></i><span>Tableau de bord</span>
                                    </a>
                                </li>
                                <li
                                    class="{{ Request::is('patient-appointments') ? 'active' : '' }}
                                {{ Request::is('patient-appointment-details') ? 'active' : '' }}
                                 ">
                                    <a href="{{ url('patient-appointments') }}">
                                        <i class="ti ti-calendar-check"></i><span>Rendez-vous</span>
                                    </a>
                                </li>
                                <li
                                    class="{{ Request::is('patient-doctors') ? 'active' : '' }}
                                {{ Request::is('patients-doctor-details') ? 'active' : '' }}">
                                    <a href="{{ url('patient-doctors') }}">
                                        <i class="ti ti-stethoscope"></i><span>Médecins</span>
                                    </a>
                                </li>
                                <li
                                    class="{{ Request::is('patient-prescriptions') ? 'active' : '' }}
                                {{ Request::is('patient-prescription-details') ? 'active' : '' }}">
                                    <a href="{{ url('patient-prescriptions') }}">
                                        <i class="ti ti-prescription"></i><span>Ordonnances</span>
                                    </a>
                                </li>
                                <li
                                    class="{{ Request::is('patient-invoices') ? 'active' : '' }}
                                {{ Request::is('patient-invoice-details') ? 'active' : '' }}">
                                    <a href="{{ url('patient-invoices') }}">
                                        <i class="ti ti-star"></i><span>Facture</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('patient-profile-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('patient-password-settings') ? 'active subdrop' : '' }}
                                         {{ Request::is('patient-notifications-settings') ? 'active subdrop' : '' }}">
                                        <i class="ti ti-settings"></i><span>Parametres</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('patient-profile-settings') }}"
                                                class="{{ Request::is('patient-profile-settings') ? 'active' : '' }}">Parametre
                                                du profil</a></li>
                                        <li><a href="{{ url('patient-password-settings') }}"
                                                class="{{ Request::is('patient-password-settings') ? 'active' : '' }}">Changer
                                                le mot de passe</a></li>
                                        <li><a href="{{ url('patient-notifications-settings') }}"
                                                class="{{ Request::is('patient-notifications-settings') ? 'active' : '' }}">Notifications</a>
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
