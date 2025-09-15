        <!-- Sidenav Menu Start -->
        <div class="sidebar" id="sidebar">

            <!-- Start Logo -->
            <div class="sidebar-logo">
                <div>
                    <!-- Logo Normal -->
                    <a href="index" class="logo logo-normal">
                        <img src="{{ URL::asset('') }}assets/img/logo.svg" alt="Logo">
                    </a>

                    <!-- Logo Small -->
                    <a href="index" class="logo-small">
                        <img src="{{ URL::asset('') }}assets/img/logo-small.svg" alt="Logo">
                    </a>

                    <!-- Logo Dark -->
                    <a href="index" class="dark-logo">
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
                    <div class="sidebar-top shadow-sm p-2 rounded-1 mb-3 dropend">
                        <a href="javascript:void(0);" class="drop-arrow-none" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" data-bs-offset="0,22" aria-haspopup="false"
                            aria-expanded="false">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <span class="avatar rounded-circle flex-shrink-0 p-2"><img
                                            src="{{ URL::asset('') }}assets/img/icons/trustcare.svg"
                                            alt="img"></span>
                                    <div class="ms-2">
                                        <h6 class="fs-14 fw-semibold mb-0">Trustcare Clinic</h6>
                                        <p class="fs-13 mb-0">Lasvegas</p>
                                    </div>
                                </div>
                                <i class="ti ti-arrows-transfer-up"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg">
                            <div class="p-2">
                                <label class="dropdown-item d-flex align-items-center justify-content-between p-1">
                                    <span class="d-flex align-items-center">
                                        <span class="me-2"><img
                                                src="{{ URL::asset('') }}assets/img/icons/clinic-01.svg"
                                                alt=""></span>
                                        <span class="fw-semibold text-dark">CureWell Medical Hub<small
                                                class="d-block text-muted fw-normal fs-13">Ohio</small></span>
                                    </span>
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                </label>
                                <label class="dropdown-item d-flex align-items-center justify-content-between p-1">
                                    <span class="d-flex align-items-center">
                                        <span class="me-2"><img
                                                src="{{ URL::asset('') }}assets/img/icons/clinic-02.svg"
                                                alt=""></span>
                                        <span class="fw-semibold text-dark">Trustcare Clinic<small
                                                class="d-block text-muted fw-normal fs-13">Lasvegas</small></span>
                                    </span>
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                </label>
                                <label class="dropdown-item d-flex align-items-center justify-content-between p-1">
                                    <span class="d-flex align-items-center">
                                        <span class="me-2"><img
                                                src="{{ URL::asset('') }}assets/img/icons/clinic-03.svg"
                                                alt=""></span>
                                        <span class="fw-semibold text-dark">NovaCare Medical<small
                                                class="d-block text-muted fw-normal fs-13">Washington</small></span>
                                    </span>
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                </label>
                                <label class="dropdown-item d-flex align-items-center justify-content-between p-1">
                                    <span class="d-flex align-items-center">
                                        <span class="me-2"><img
                                                src="{{ URL::asset('') }}assets/img/icons/clinic-04.svg"
                                                alt=""></span>
                                        <span class="fw-semibold text-dark">Greeny Medical Clinic<small
                                                class="d-block text-muted fw-normal fs-13">Illinios</small></span>
                                    </span>
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                </label>
                            </div>
                        </div>
                    </div>
                    <ul>
                        <li class="menu-title"><span>Main Menu</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('index') ? 'active subdrop' : '' }}">
                                        <i class="ti ti-layout-dashboard"></i><span>Tableau de bord</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('index') }}"
                                                class="{{ Request::is('index') ? 'active' : '' }}">Admin Dashboard</a>
                                        </li>
                                        <li><a href="{{ url('doctor') }}"
                                                class="{{ Request::is('doctor') ? 'active' : '' }}">Docteur
                                                Dashboard</a></li>
                                        <li><a href="{{ url('patient') }}"
                                                class="{{ Request::is('patient') ? 'active' : '' }}">Patient
                                                Dashboard</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-apps"></i><span>Applications</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="chat">Chat</a></li>
                                        <li class="submenu submenu-two">
                                            <a href="index#">Calls<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="voice-call">Voice Call</a></li>
                                                <li><a href="video-call">Video Call</a></li>
                                                <li><a href="outgoing-call">Outgoing Call</a></li>
                                                <li><a href="incoming-call">Incoming Call</a></li>
                                                <li><a href="call-history">Call History</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="calendar">Calendar</a></li>
                                        <li><a href="contacts">Contacts</a></li>
                                        <li><a href="email">Email</a></li>
                                        <li class="submenu submenu-two">
                                            <a href="index#">Invoices<span
                                                    class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="invoice">Invoices</a></li>
                                                <li><a href="invoice-details">Invoice Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="todo">To Do</a></li>
                                        <li><a href="notes">Notes</a></li>
                                        <li><a href="kanban-view">Kanban Board</a></li>
                                        <li><a href="file-manager">File Manager</a></li>
                                        <li><a href="social-feed">Social Feed</a></li>
                                        <li><a href="search-list">Search Result</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Clinique</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('doctors') ? 'active subdrop' : '' }}
                                        {{ Request::is('add-doctor') ? 'active subdrop' : '' }}
                                        {{ Request::is('edit-doctor') ? 'active subdrop' : '' }}
                                        {{ Request::is('doctor-details') ? 'active subdrop' : '' }}
                                        {{ Request::is('doctor-schedule') ? 'active subdrop' : '' }}
                                         ">
                                        <i class="ti ti-user-plus"></i><span>Médecins</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('doctors') }}"
                                                class="{{ Request::is('doctors') ? 'active' : '' }}
                                            {{ Request::is('add-doctor') ? 'active' : '' }}
                                            {{ Request::is('edit-doctor') ? 'active' : '' }}
                                            {{ Request::is('doctor-details') ? 'active' : '' }}
                                             ">Médecins</a>
                                        </li>
                                        <li><a href="{{ url('doctor-schedule') }}"
                                                class="{{ Request::is('doctor-schedule') ? 'active' : '' }}">Horaire
                                                du médecins</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('patients') ? 'active subdrop' : '' }}
                                    {{ Request::is('patient-details') ? 'active subdrop' : '' }}
                                    {{ Request::is('edit-patient') ? 'active subdrop' : '' }}
                                    {{ Request::is('create-patient') ? 'active subdrop' : '' }}">
                                        <i class="ti ti-user-heart"></i><span>Patients</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="patients"
                                                class="{{ Request::is('patients') ? 'active' : '' }}
                                            {{ Request::is('patient-details') ? 'active' : '' }}
                                            {{ Request::is('create-patient') ? 'active' : '' }}
                                            {{ Request::is('edit-patient') ? 'active' : '' }}
                                             ">Patients</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('appointments') ? 'active subdrop' : '' }}
                                    {{ Request::is('appointment-calendar') ? 'active subdrop' : '' }}
                                     {{ Request::is('new-appointment') ? 'active subdrop' : '' }}">
                                        <i class="ti ti-calendar-check"></i><span>Rendez-vous</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('appointments') }}"
                                                class="{{ Request::is('appointments') ? 'active' : '' }}
                                            {{ Request::is('new-appointment') ? 'active' : '' }}">Rendez-vous</a>
                                        </li>
                                        <li><a href="{{ url('appointment-calendar') }}"
                                                class="{{ Request::is('appointment-calendar') ? 'active' : '' }}">Calendrier</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('locations') }}"
                                        class="{{ Request::is('locations') ? 'active' : '' }}">
                                        <i class="ti ti-map-pin"></i><span>Emplacements</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('services') }}"
                                        class="{{ Request::is('services') ? 'active' : '' }}">
                                        <i class="ti ti-user-cog"></i><span>Services</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('specializations') }}"
                                        class="{{ Request::is('specializations') ? 'active' : '' }}">
                                        <i class="ti ti-user-shield"></i><span>Spécialisations</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('assetss') }}"
                                        class="{{ Request::is('assetss') ? 'active' : '' }}">
                                        <i class="ti ti-asset"></i><span>Assets</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('activities') }}"
                                        class="{{ Request::is('activities') ? 'active' : '' }}">
                                        <i class="ti ti-activity"></i><span>Activités</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('messages') }}"
                                        class="{{ Request::is('messages') ? 'active' : '' }}">
                                        <i class="ti ti-messages"></i><span>Messages</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>GRH</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="{{ url('staffs') }}"
                                        class="{{ Request::is('staffs') ? 'active' : '' }}">
                                        <i class="ti ti-users-group"></i><span>Staffs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('hrm-departments') }}"
                                        class="{{ Request::is('hrm-departments') ? 'active' : '' }}">
                                        <i class="ti ti-building-bank"></i><span>Départements</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('designation') }}"
                                        class="{{ Request::is('designation') ? 'active' : '' }}">
                                        <i class="ti ti-user-cog"></i><span>Désignation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('attendance') }}"
                                        class="{{ Request::is('attendance') ? 'active' : '' }}">
                                        <i class="ti ti-user-check"></i><span>Présence</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('leaves') ? 'active subdrop' : '' }}
                                    {{ Request::is('leave-type') ? 'active subdrop' : '' }}">
                                        <i class="ti ti-users-minus"></i><span>Congés</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('leaves') }}"
                                                class="{{ Request::is('leaves') ? 'active' : '' }}">Congés</a></li>
                                        <li><a href="{{ url('leave-type') }}"
                                                class="{{ Request::is('leave-type') ? 'active' : '' }}">Type de
                                                Congé</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('holidays') }}"
                                        class="{{ Request::is('holidays') ? 'active' : '' }}">
                                        <i class="ti ti-home-exclamation"></i><span>Vacances</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('payroll') }}"
                                        class="{{ Request::is('payroll') ? 'active' : '' }}
                                    {{ Request::is('payroll-2') ? 'active' : '' }}">
                                        <i class="ti ti-coin"></i><span>Paie</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Finance & Comptabilité</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('expenses') ? 'active subdrop' : '' }}
                                    {{ Request::is('expense-category') ? 'active subdrop' : '' }}">
                                        <i class="ti ti-credit-card"></i><span>Dépenses</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('expenses') }}"
                                                class="{{ Request::is('expenses') ? 'active' : '' }}">Dépenses</a>
                                        </li>
                                        <li><a href="{{ url('expense-category') }}"
                                                class="{{ Request::is('expense-category') ? 'active' : '' }}">Catégorie
                                                de
                                                dépenses</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('income') }}"
                                        class="{{ Request::is('income') ? 'active' : '' }}">
                                        <i class="ti ti-coins"></i><span>Revenu</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('invoices') ? 'active subdrop' : '' }}
                                        {{ Request::is('add-invoices') ? 'active subdrop' : '' }}
                                        {{ Request::is('edit-invoices') ? 'active subdrop' : '' }}
                                        {{ Request::is('invoices-details') ? 'active subdrop' : '' }}
                                         ">
                                        <i class="ti ti-file-invoice"></i><span>Factures</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('invoices') }}"
                                                class="{{ Request::is('invoices') ? 'active' : '' }}">Factures</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('payments') }}"
                                        class="{{ Request::is('payments') ? 'active' : '' }}">
                                        <i class="ti ti-cards"></i><span>Paiements</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('transactions') }}"
                                        class="{{ Request::is('transactions') ? 'active' : '' }}">
                                        <i class="ti ti-transition-right"></i><span>Transactions</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Administration</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('roles-and-permissions') ? 'active subdrop' : '' }}
                                        {{ Request::is('delete-account-request') ? 'active subdrop' : '' }}
                                        {{ Request::is('permissions') ? 'active subdrop' : '' }}
                                         ">
                                        <i class="ti ti-user"></i><span>Utilisateurs</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('roles-and-permissions') }}"
                                                class="{{ Request::is('roles-and-permissions') ? 'active' : '' }}
                                                {{ Request::is('permissions') ? 'active' : '' }}">Roles
                                                &
                                                Permissions</a></li>
                                        <li><a href="{{ url('delete-account-request') }}"
                                                class="{{ Request::is('delete-account-request') ? 'active' : '' }}">Demande
                                                de
                                                suppression de compte</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('income-report') ? 'active subdrop' : '' }}
                                        {{ Request::is('expense-report') ? 'active subdrop' : '' }}
                                        {{ Request::is('profit-and-loss') ? 'active subdrop' : '' }}
                                        {{ Request::is('patient-report') ? 'active subdrop' : '' }}
                                        {{ Request::is('appointment-report') ? 'active subdrop' : '' }}
                                         ">
                                        <i class="ti ti-report"></i><span>Rapports</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('income-report') }}"
                                                class="{{ Request::is('income-report') ? 'active' : '' }}">Rapport de
                                                revenus</a></li>
                                        <li><a href="{{ url('expense-report') }}"
                                                class="{{ Request::is('expense-report') ? 'active' : '' }}">Rapport
                                                de
                                                dépenses</a></li>
                                        <li><a href="{{ url('profit-and-loss') }}"
                                                class="{{ Request::is('profit-and-loss') ? 'active' : '' }}">Bénéfice
                                                &
                                                perte</a></li>
                                        <li><a href="{{ url('appointment-report') }}"
                                                class="{{ Request::is('appointment-report') ? 'active' : '' }}">Rapport
                                                de
                                                rendez-vous</a></li>
                                        <li><a href="{{ url('patient-report') }}"
                                                class="{{ Request::is('patient-report') ? 'active' : '' }}">Rapport
                                                du
                                                patient</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Content</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('add-blog') ? 'active subdrop' : '' }}
                                        {{ Request::is('edit-blog') ? 'active subdrop' : '' }}
                                        {{ Request::is('blogs') ? 'active subdrop' : '' }}
                                        {{ Request::is('blog-details') ? 'active subdrop' : '' }}
                                        {{ Request::is('blog-categories') ? 'active subdrop' : '' }}
                                        {{ Request::is('blog-comments') ? 'active subdrop' : '' }}
                                         ">
                                        <i class="ti ti-brand-blogger"></i><span>Blogs</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('blogs') }}"
                                                class="{{ Request::is('blogs') ? 'active' : '' }}
                                                {{ Request::is('edit-blog') ? 'active' : '' }}
                                                {{ Request::is('add-blog') ? 'active' : '' }}
                                                {{ Request::is('blog-details') ? 'active' : '' }}
                                                 ">Blogs</a>
                                        </li>
                                        <li><a href="{{ url('blog-categories') }}"
                                                class="{{ Request::is('blog-categories') ? 'active' : '' }}">Catégories
                                                de
                                                blogs</a></li>
                                        <li><a href="{{ url('blog-comments') }}"
                                                class="{{ Request::is('blog-comments') ? 'active' : '' }}">Commentaires
                                                du blog</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('countries') ? 'active subdrop' : '' }}
                                        {{ Request::is('states') ? 'active subdrop' : '' }}
                                        {{ Request::is('cities') ? 'active subdrop' : '' }}
                                         ">
                                        <i class="ti ti-map-pins"></i><span>Pays</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('countries') }}"
                                                class="{{ Request::is('countries') ? 'active' : '' }}">Pays</a></li>
                                        <li><a href="{{ url('states') }}"
                                                class="{{ Request::is('states') ? 'active' : '' }}">Etats</a>
                                        </li>
                                        <li><a href="{{ url('cities') }}"
                                                class="{{ Request::is('cities') ? 'active' : '' }}">Villes</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('testimonials') }}"
                                        class="{{ Request::is('testimonials') ? 'active' : '' }}">
                                        <i class="ti ti-brand-wechat"></i><span>Témoignages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('faq') }}"
                                        class="{{ Request::is('faq') ? 'active' : '' }}">
                                        <i class="ti ti-question-mark"></i><span>FAQ</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Support</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="{{ url('contact-messages') }}"
                                        class="{{ Request::is('contact-messages') ? 'active' : '' }}">
                                        <i class="ti ti-message-dots"></i><span>Message de contact</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('tickets') }}"
                                        class="{{ Request::is('tickets') ? 'active' : '' }}
                                        {{ Request::is('ticket-details') ? 'active' : '' }}">
                                        <i class="ti ti-ticket"></i><span>Tickets</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('announcements') }}"
                                        class="{{ Request::is('announcements') ? 'active' : '' }}">
                                        <i class="ti ti-speakerphone"></i><span>Annonces</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('newsletters') }}"
                                        class="{{ Request::is('newsletters') ? 'active' : '' }}">
                                        <i class="ti ti-mail-bolt"></i><span>Newsletters</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Pages</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="{{ url('privacy-policy') }}"
                                        class="{{ Request::is('privacy-policy') ? 'active' : '' }}">
                                        <i class="ti ti-shield-check"></i><span>Politique de confidentialité</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('terms-and-conditions') }}"
                                        class="{{ Request::is('terms-and-conditions') ? 'active' : '' }}">
                                        <i class="ti ti-file-time"></i><span>Termes & Conditions</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Paramètres</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('profile-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('security-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('notifications-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('integrations-settings') ? 'active subdrop' : '' }}
                                         ">
                                        <i class="ti ti-user-cog"></i><span>Paramètres du compte</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('profile-settings') }}"
                                                class="{{ Request::is('profile-settings') ? 'active' : '' }}">Profil</a>
                                        </li>
                                        <li><a href="{{ url('security-settings') }}"
                                                class="{{ Request::is('security-settings') ? 'active' : '' }}">Sécurité</a>
                                        </li>
                                        <li><a href="{{ url('notifications-settings') }}"
                                                class="{{ Request::is('notifications-settings') ? 'active' : '' }}">Notifications</a>
                                        </li>
                                        <li><a href="{{ url('integrations-settings') }}"
                                                class="{{ Request::is('integrations-settings') ? 'active' : '' }}">Intégrations</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('organization-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('localization-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('prefixes-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('seo-setup-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('language-settings') ? 'active subdrop' : '' }}
                                         ">
                                        <i class="ti ti-world-cog"></i><span>Paramètres du site web</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('organization-settings') }}"
                                                class="{{ Request::is('organization-settings') ? 'active' : '' }}">Organisation</a>
                                        </li>
                                        <li><a href="{{ url('localization-settings') }}"
                                                class="{{ Request::is('localization-settings') ? 'active' : '' }}">Localization</a>
                                        </li>
                                        <li><a href="{{ url('prefixes-settings') }}"
                                                class="{{ Request::is('prefixes-settings') ? 'active' : '' }}">Préfixes</a>
                                        </li>
                                        <li><a href="{{ url('seo-setup-settings') }}"
                                                class="{{ Request::is('seo-setup-settings') ? 'active' : '' }}">Configuration
                                                SEO</a></li>
                                        <li><a href="{{ url('language-settings') }}"
                                                class="{{ Request::is('language-settings') ? 'active' : '' }}">Langue</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('appointment-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('working-hours-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('cancellation-reason-settings') ? 'active subdrop' : '' }}
                                         ">
                                        <i class="ti ti-building-hospital"></i><span>Paramètres cliniques</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('appointment-settings') }}"
                                                class="{{ Request::is('appointment-settings') ? 'active' : '' }}">Rendez-vous</a>
                                        </li>
                                        <li><a href="{{ url('working-hours-settings') }}"
                                                class="{{ Request::is('working-hours-settings') ? 'active' : '' }}">Horaires
                                                de
                                                travail</a></li>
                                        <li><a href="{{ url('cancellation-reason-settings') }}"
                                                class="{{ Request::is('cancellation-reason-settings') ? 'active' : '' }}">Motif
                                                d'annulation</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('invoice-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('invoice-templates-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('signatures-settings') ? 'active subdrop' : '' }}
                                         ">
                                        <i class="ti ti-device-mobile-cog"></i><span>Paramètres de l'application</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('invoice-settings') }}"
                                                class="{{ Request::is('invoice-settings') ? 'active' : '' }}">Paramètres
                                                de facturation</a></li>
                                        <li><a href="{{ url('invoice-templates-settings') }}"
                                                class="{{ Request::is('invoice-templates-settings') ? 'active' : '' }}">Modèles
                                                de
                                                factures</a></li>
                                        <li><a href="{{ url('signatures-settings') }}"
                                                class="{{ Request::is('signatures-settings') ? 'active' : '' }}">Signatures</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('email-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('email-templates-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('sms-gateways-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('sms-templates-settings') ? 'active subdrop' : '' }}
                                         ">
                                        <i class="ti ti-device-desktop-cog"></i><span>Paramètres système</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('email-settings') }}"
                                                class="{{ Request::is('email-settings') ? 'active' : '' }}">Paramètres
                                                de messagerie</a></li>
                                        <li><a href="{{ url('email-templates-settings') }}"
                                                class="{{ Request::is('email-templates-settings') ? 'active' : '' }}">Modèles
                                                d'e-mails</a></li>
                                        <li><a href="{{ url('sms-gateways-settings') }}"
                                                class="{{ Request::is('sms-gateways-settings') ? 'active' : '' }}">Passerelles
                                                SMS</a></li>
                                        <li><a href="{{ url('sms-templates-settings') }}"
                                                class="{{ Request::is('sms-templates-settings') ? 'active' : '' }}">Modèles
                                                de
                                                SMS</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"
                                        class="{{ Request::is('payment-methods-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('bank-accounts-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('tax-rates-settings') ? 'active subdrop' : '' }}
                                        {{ Request::is('currencies-settings') ? 'active subdrop' : '' }}
                                         ">
                                        <i class="ti ti-settings-dollar"></i><span>Finance & comptabilité</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('payment-methods-settings') }}"
                                                class="{{ Request::is('payment-methods-settings') ? 'active' : '' }}">Modes
                                                de
                                                paiement</a></li>
                                        <li><a href="{{ url('bank-accounts-settings') }}"
                                                class="{{ Request::is('bank-accounts-settings') ? 'active' : '' }}">Comptes
                                                bancaires</a></li>
                                        <li><a href="{{ url('tax-rates-settings') }}"
                                                class="{{ Request::is('tax-rates-settings') ? 'active' : '' }}">Taux
                                                d'imposition</a></li>
                                        <li><a href="{{ url('currencies-settings') }}"
                                                class="{{ Request::is('currencies-settings') ? 'active' : '' }}">Devises</a>
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
