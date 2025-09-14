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
                                            <a href="index#">Calls<span
                                                    class="menu-arrow inside-submenu"></span></a>
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
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-user-plus"></i><span>Médecins</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('doctors') }}">Médecins</a></li>
                                        <li><a href="{{ url('doctor-schedule') }}">Horaire du médecins</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-user-heart"></i><span>Patients</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="patients">Patients</a></li>
                                        <li><a href="patient-details">Patient Details</a></li>
                                        <li><a href="create-patient">Créer un patient</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-calendar-check"></i><span>Rendez-vous</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('appointments') }}">Rendez-vous</a></li>
                                        <li><a href="{{ url('appointment-calendar') }}">Calendrier</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="locations">
                                        <i class="ti ti-map-pin"></i><span>Emplacements</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="services">
                                        <i class="ti ti-user-cog"></i><span>Services</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="specializations">
                                        <i class="ti ti-user-shield"></i><span>Spécialisations</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="assets">
                                        <i class="ti ti-asset"></i><span>Assets</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="activities">
                                        <i class="ti ti-activity"></i><span>Activités</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="messages">
                                        <i class="ti ti-messages"></i><span>Messages</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>GRH</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="staffs">
                                        <i class="ti ti-users-group"></i><span>Staffs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="hrm-departments">
                                        <i class="ti ti-building-bank"></i><span>Départements</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="designation">
                                        <i class="ti ti-user-cog"></i><span>Désignation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="attendance">
                                        <i class="ti ti-user-check"></i><span>Présence</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-users-minus"></i><span>Congés</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="leaves">Congés</a></li>
                                        <li><a href="leave-type">Type de Congé</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="holidays">
                                        <i class="ti ti-home-exclamation"></i><span>Vacances</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="payroll">
                                        <i class="ti ti-coin"></i><span>Paie</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Finance & Comptabilité</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-credit-card"></i><span>Dépenses</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="expenses">Dépenses</a></li>
                                        <li><a href="expense-category">Catégorie de dépenses</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="income">
                                        <i class="ti ti-coins"></i><span>Revenu</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-file-invoice"></i><span>Factures</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="invoices">Factures</a></li>
                                        <li><a href="invoices-details">Détails factures</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="payments">
                                        <i class="ti ti-cards"></i><span>Paiements</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="transactions">
                                        <i class="ti ti-transition-right"></i><span>Transactions</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Administration</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-user"></i><span>Utilisateurs</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="roles-and-permissions">Roles & Permissions</a></li>
                                        <li><a href="delete-account-request">Demande de suppression de compte</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-report"></i><span>Rapports</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="income-report">Rapport de revenus</a></li>
                                        <li><a href="expense-report">Rapport de dépenses</a></li>
                                        <li><a href="profit-and-loss">Bénéfice & perte</a></li>
                                        <li><a href="appointment-report">Rapport de rendez-vous</a></li>
                                        <li><a href="patient-report">Rapport du patient</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Content</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-brand-blogger"></i><span>Blogs</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="add-blog">Ajouter un Blog</a></li>
                                        <li><a href="blogs">Blogs</a></li>
                                        <li><a href="blog-categories">Catégories de blogs</a></li>
                                        <li><a href="blog-comments">Commentaires du blog</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-map-pins"></i><span>Pays</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="countries">Pays</a></li>
                                        <li><a href="states">Etats</a></li>
                                        <li><a href="cities">Villes</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="testimonials">
                                        <i class="ti ti-brand-wechat"></i><span>Témoignages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="faq">
                                        <i class="ti ti-question-mark"></i><span>FAQ</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Support</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="contact-messages">
                                        <i class="ti ti-message-dots"></i><span>Message de contact</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tickets">
                                        <i class="ti ti-ticket"></i><span>Tickets</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="announcements">
                                        <i class="ti ti-speakerphone"></i><span>Annonces</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="newsletters">
                                        <i class="ti ti-mail-bolt"></i><span>Newsletters</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Pages</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="privacy-policy">
                                        <i class="ti ti-shield-check"></i><span>Politique de confidentialité</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="terms-and-conditions">
                                        <i class="ti ti-file-time"></i><span>Termes & Conditions</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Paramètres</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-user-cog"></i><span>Paramètres du compte</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="profile-settings">Profil</a></li>
                                        <li><a href="security-settings">Sécurité</a></li>
                                        <li><a href="notifications-settings">Notifications</a></li>
                                        <li><a href="integrations-settings">Intégrations</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-world-cog"></i><span>Paramètres du site web</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="organization-settings">Organisation</a></li>
                                        <li><a href="localization-settings">Localization</a></li>
                                        <li><a href="prefixes-settings">Préfixes</a></li>
                                        <li><a href="seo-setup-settings">Configuration SEO</a></li>
                                        <li><a href="language-settings">Langue</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-building-hospital"></i><span>Paramètres cliniques</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="appointment-settings">Rendez-vous</a></li>
                                        <li><a href="working-hours-settings">Horaires de travail</a></li>
                                        <li><a href="cancellation-reason-settings">Motif d'annulation</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-device-mobile-cog"></i><span>Paramètres de l'application</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="invoice-settings">Paramètres de facturation</a></li>
                                        <li><a href="invoice-templates-settings">Modèles de factures</a></li>
                                        <li><a href="signatures-settings">Signatures</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-device-desktop-cog"></i><span>Paramètres système</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="email-settings">Paramètres de messagerie</a></li>
                                        <li><a href="email-templates-settings">Modèles d'e-mails</a></li>
                                        <li><a href="sms-gateways-settings">Passerelles SMS</a></li>
                                        <li><a href="sms-templates-settings">Modèles de SMS</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-settings-dollar"></i><span>Finance & comptabilité</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="payment-methods-settings">Modes de paiement</a></li>
                                        <li><a href="bank-accounts-settings">Comptes bancaires</a></li>
                                        <li><a href="tax-rates-settings">Taux d'imposition</a></li>
                                        <li><a href="currencies-settings">Devises</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- Sidenav Menu End -->
