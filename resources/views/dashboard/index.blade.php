<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="26b2e45dc0ca1ca6190772fa-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css" id="app-style">

</head>

<body>

    <!-- Begin Wrapper -->
    <div class="main-wrapper">

        <!-- Topbar Start -->
        <header class="navbar-header">
            <div class="page-container topbar-menu">
                <div class="d-flex align-items-center gap-2">

                    <!-- Logo -->
                    <a href="index.html" class="logo">

                        <!-- Logo Normal -->
                        <span class="logo-light">
                            <span class="logo-lg"><img src="{{ URL::asset('') }}assets/img/logo.svg"
                                    alt="logo"></span>
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
                    <a id="mobile_btn" class="mobile-btn" href="index.html#sidebar">
                        <i class="ti ti-menu-deep fs-24"></i>
                    </a>

                    <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn2">
                        <i class="ti ti-arrow-right"></i>
                    </button>

                    <!-- Search -->
                    <div class="me-auto d-flex align-items-center header-search d-lg-flex d-none">
                        <!-- Search -->
                        <div class="input-icon-start position-relative me-2">
                            <span class="input-icon-addon">
                                <i class="ti ti-search"></i>
                            </span>
                            <input type="text" class="form-control shadow-sm" placeholder="Search">
                            <span
                                class="input-icon-addon text-dark shadow fs-18 d-inline-flex p-0 header-search-icon"><i
                                    class="ti ti-command"></i></span>
                        </div>
                        <!-- /Search -->
                    </div>

                </div>

                <div class="d-flex align-items-center">

                    <!-- Search for Mobile -->
                    <div class="header-item d-flex d-lg-none me-2">
                        <button class="topbar-link btn btn-icon" data-bs-toggle="modal" data-bs-target="#searchModal"
                            type="button">
                            <i class="ti ti-search fs-16"></i>
                        </button>
                    </div>

                    <!-- AI Assistance -->
                    <a href="javascript:void(0);" class="btn btn-liner-gradient me-3 d-lg-flex d-none">AI Assistance<i
                            class="ti ti-chart-bubble-filled ms-1"></i></a>
                    <!-- AI Assistance -->

                    <!-- Appointment -->
                    <div class="header-item">
                        <div class="dropdown me-2">
                            <a href="new-appointment.html" class="btn topbar-link"><i
                                    class="ti ti-calendar-due"></i></a>
                        </div>
                    </div>
                    <!-- Appointment -->

                    <!-- Settings -->
                    <div class="header-item">
                        <div class="dropdown me-2">
                            <a href="profile-settings.html" class="btn topbar-link"><i class="ti ti-settings-2"></i></a>
                        </div>
                    </div>
                    <!-- Settings -->

                    <!-- Light/Dark Mode Button -->
                    <div class="header-item d-none d-sm-flex me-2">
                        <button class="topbar-link btn btn-icon topbar-link" id="light-dark-mode" type="button">
                            <i class="ti ti-moon fs-16"></i>
                        </button>
                    </div>


                    <!-- Notification Dropdown -->
                    <div class="header-item">
                        <div class="dropdown me-3">

                            <button class="topbar-link btn btn-icon topbar-link dropdown-toggle drop-arrow-none"
                                data-bs-toggle="dropdown" data-bs-offset="0,24" type="button" aria-haspopup="false"
                                aria-expanded="false">
                                <i class="ti ti-bell-check fs-16 animate-ring"></i>
                                <span class="notification-badge"></span>
                            </button>

                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg"
                                style="min-height: 300px;">

                                <div class="p-2 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                        </div>
                                    </div>
                                </div>

                                <!-- Notification Body -->
                                <div class="notification-body position-relative z-2 rounded-0" data-simplebar>

                                    <!-- Item-->
                                    <div class="dropdown-item notification-item py-3 text-wrap border-bottom"
                                        id="notification-1">
                                        <div class="d-flex">
                                            <div class="me-2 position-relative flex-shrink-0">
                                                <img src="{{ URL::asset('') }}assets/img/doctors/doctor-01.jpg"
                                                    class="avatar-md rounded-circle" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-medium text-dark">Dr. Smith</p>
                                                <p class="mb-1 text-wrap">
                                                    updated the <span class="fw-medium text-dark">surgery</span>
                                                    schedule.
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fs-12"><i class="ti ti-clock me-1"></i>4 min
                                                        ago</span>
                                                    <div
                                                        class="notification-action d-flex align-items-center float-end gap-2">
                                                        <a href="javascript:void(0);"
                                                            class="notification-read rounded-circle bg-danger"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Make as Read"
                                                            aria-label="Make as Read"></a>
                                                        <button class="btn rounded-circle p-0"
                                                            data-dismissible="#notification-1">
                                                            <i class="ti ti-x"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item-->
                                    <div class="dropdown-item notification-item py-3 text-wrap border-bottom"
                                        id="notification-2">
                                        <div class="d-flex">
                                            <div class="me-2 position-relative flex-shrink-0">
                                                <img src="{{ URL::asset('') }}assets/img/doctors/doctor-06.jpg"
                                                    class="avatar-md rounded-circle" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-medium text-dark">Dr. Patel</p>
                                                <p class="mb-1 text-wrap">
                                                    completed a <span class="fw-medium text-dark">follow-up</span>
                                                    report for patient <span class="fw-medium text-dark">Emily</span>.
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fs-12"><i class="ti ti-clock me-1"></i>8 min
                                                        ago</span>
                                                    <div
                                                        class="notification-action d-flex align-items-center float-end gap-2">
                                                        <a href="javascript:void(0);"
                                                            class="notification-read rounded-circle bg-danger"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Make as Read"
                                                            aria-label="Make as Read"></a>
                                                        <button class="btn rounded-circle p-0"
                                                            data-dismissible="#notification-2">
                                                            <i class="ti ti-x"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item-->
                                    <div class="dropdown-item notification-item py-3 text-wrap border-bottom"
                                        id="notification-3">
                                        <div class="d-flex">
                                            <div class="me-2 position-relative flex-shrink-0">
                                                <img src="{{ URL::asset('') }}assets/img/doctors/doctor-02.jpg"
                                                    class="avatar-md rounded-circle" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-medium text-dark">Emily</p>
                                                <p class="mb-1 text-wrap">
                                                    booked an appointment with <span class="fw-medium text-dark">Dr.
                                                        Patel</span> for <span class="fw-medium text-dark">April
                                                        15</span>
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fs-12"><i class="ti ti-clock me-1"></i>15 min
                                                        ago</span>
                                                    <div
                                                        class="notification-action d-flex align-items-center float-end gap-2">
                                                        <a href="javascript:void(0);"
                                                            class="notification-read rounded-circle bg-danger"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Make as Read"
                                                            aria-label="Make as Read"></a>
                                                        <button class="btn rounded-circle p-0"
                                                            data-dismissible="#notification-3">
                                                            <i class="ti ti-x"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item-->
                                    <div class="dropdown-item notification-item py-3 text-wrap" id="notification-4">
                                        <div class="d-flex">
                                            <div class="me-2 position-relative flex-shrink-0">
                                                <img src="{{ URL::asset('') }}assets/img/doctors/doctor-07.jpg"
                                                    class="avatar-md rounded-circle" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-medium text-dark">Amelia</p>
                                                <p class="mb-1 text-wrap">
                                                    completed the <span class="fw-medium text-dark">pre-visit</span>
                                                    health questionnaire.
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fs-12"><i class="ti ti-clock me-1"></i>20 min
                                                        ago</span>
                                                    <div
                                                        class="notification-action d-flex align-items-center float-end gap-2">
                                                        <a href="javascript:void(0);"
                                                            class="notification-read rounded-circle bg-danger"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Make as Read"
                                                            aria-label="Make as Read"></a>
                                                        <button class="btn rounded-circle p-0"
                                                            data-dismissible="#notification-4">
                                                            <i class="ti ti-x"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- View All-->
                                <div class="p-2 rounded-bottom border-top text-center">
                                    <a href="notifications.html"
                                        class="text-center text-decoration-underline fs-14 mb-0">
                                        View All Notifications
                                    </a>
                                </div>

                            </div>
                        </div>
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
                                <span class="align-middle">Profile Settings</span>
                            </a>

                            <!-- Item-->
                            <a href="https://preclinic.dreamstechnologies.com/html/template/account-settings.html"
                                class="dropdown-item">
                                <i class="ti ti-settings me-1 align-middle"></i>
                                <span class="align-middle">Account Settings</span>
                            </a>

                            <!-- item -->
                            <div
                                class="form-check form-switch form-check-reverse d-flex align-items-center justify-content-between dropdown-item mb-0">
                                <label class="form-check-label" for="notify"><i
                                        class="ti ti-bell me-1"></i>Notifications</label>
                                <input class="form-check-input me-0" type="checkbox" role="switch" id="notify">
                            </div>

                            <!-- Item-->
                            <a href="transactions.html" class="dropdown-item">
                                <i class="ti ti-transition-right me-1 align-middle"></i>
                                <span class="align-middle">Transactions</span>
                            </a>



                            <!-- Item-->
                            <div class="pt-2 mt-2 border-top">
                                <a href="login.html" class="dropdown-item text-danger">
                                    <i class="ti ti-logout me-1 fs-17 align-middle"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- Topbar End -->

        <!-- Search Modal -->
        <div class="modal fade" id="searchModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-transparent">
                    <div class="card shadow-none mb-0">
                        <div class="px-3 py-2 d-flex flex-row align-items-center" id="search-top">
                            <i class="ti ti-search fs-22"></i>
                            <input type="search" class="form-control border-0" placeholder="Search">
                            <button type="button" class="btn p-0" data-bs-dismiss="modal" aria-label="Close"><i
                                    class="ti ti-x fs-22"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                    <a href="javascript:void(0);" class="active subdrop">
                                        <i class="ti ti-layout-dashboard"></i><span>Dashboard</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="index.html" class="active">Admin Dashboard</a></li>
                                        <li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
                                        <li><a href="patient-dashboard.html">Patient Dashboard</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-apps"></i><span>Applications</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="chat.html">Chat</a></li>
                                        <li class="submenu submenu-two">
                                            <a href="index.html#">Calls<span
                                                    class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="voice-call.html">Voice Call</a></li>
                                                <li><a href="video-call.html">Video Call</a></li>
                                                <li><a href="outgoing-call.html">Outgoing Call</a></li>
                                                <li><a href="incoming-call.html">Incoming Call</a></li>
                                                <li><a href="call-history.html">Call History</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="calendar.html">Calendar</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                        <li><a href="email.html">Email</a></li>
                                        <li class="submenu submenu-two">
                                            <a href="index.html#">Invoices<span
                                                    class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="invoice.html">Invoices</a></li>
                                                <li><a href="invoice-details.html">Invoice Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="todo.html">To Do</a></li>
                                        <li><a href="notes.html">Notes</a></li>
                                        <li><a href="kanban-view.html">Kanban Board</a></li>
                                        <li><a href="file-manager.html">File Manager</a></li>
                                        <li><a href="social-feed.html">Social Feed</a></li>
                                        <li><a href="search-list.html">Search Result</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-layout-sidebar"></i><span>Layouts</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="index.html">Default</a></li>
                                        <li><a href="layout-mini.html">Mini</a></li>
                                        <li><a href="layout-hover-view.html">Hover View</a></li>
                                        <li><a href="layout-hidden.html">Hidden</a></li>
                                        <li><a href="layout-full-width.html">Full Width</a></li>
                                        <li><a href="layout-rtl.html">RTL</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Clinic</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-user-plus"></i><span>Doctors</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="doctors.html">Doctors</a></li>
                                        <li><a href="doctor-details.html">Doctor Details</a></li>
                                        <li><a href="add-doctor.html">Add Doctor</a></li>
                                        <li><a href="doctor-schedule.html">Doctor Schedule</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-user-heart"></i><span>Patients</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="patients.html">Patients</a></li>
                                        <li><a href="patient-details.html">Patient Details</a></li>
                                        <li><a href="create-patient.html">Create Patient</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-calendar-check"></i><span>Appointments</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="appointments.html">Appointments</a></li>
                                        <li><a href="new-appointment.html">New Appointment</a></li>
                                        <li><a href="appointment-calendar.html">Calendar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="locations.html">
                                        <i class="ti ti-map-pin"></i><span>Locations</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="services.html">
                                        <i class="ti ti-user-cog"></i><span>Services</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="specializations.html">
                                        <i class="ti ti-user-shield"></i><span>Specializations</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="assets.html">
                                        <i class="ti ti-asset"></i><span>Assets</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="activities.html">
                                        <i class="ti ti-activity"></i><span>Activities</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="messages.html">
                                        <i class="ti ti-messages"></i><span>Messages</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>HRM</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="staffs.html">
                                        <i class="ti ti-users-group"></i><span>Staffs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="hrm-departments.html">
                                        <i class="ti ti-building-bank"></i><span>Departments</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="designation.html">
                                        <i class="ti ti-user-cog"></i><span>Designation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="attendance.html">
                                        <i class="ti ti-user-check"></i><span>Attendance</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-users-minus"></i><span>Leaves</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="leaves.html">Leaves</a></li>
                                        <li><a href="leave-type.html">Leave Type</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="holidays.html">
                                        <i class="ti ti-home-exclamation"></i><span>Holidays</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="payroll.html">
                                        <i class="ti ti-coin"></i><span>Payroll</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Finance & Accounts</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-credit-card"></i><span>Expenses</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="expenses.html">Expenses</a></li>
                                        <li><a href="expense-category.html">Expense Category</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="income.html">
                                        <i class="ti ti-coins"></i><span>Income</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-file-invoice"></i><span>Invoices</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="invoices.html">Invoices</a></li>
                                        <li><a href="invoices-details.html">Invoice Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="payments.html">
                                        <i class="ti ti-cards"></i><span>Payments</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="transactions.html">
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
                                        <i class="ti ti-user"></i><span>Users</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="roles-and-permissions.html">Roles & Permissions</a></li>
                                        <li><a href="delete-account-request.html">Delete Account Request</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-report"></i><span>Reports</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="income-report.html">Income Report</a></li>
                                        <li><a href="expense-report.html">Expense Report</a></li>
                                        <li><a href="profit-and-loss.html">Profit & Loss</a></li>
                                        <li><a href="appointment-report.html">Appointment Report</a></li>
                                        <li><a href="patient-report.html">Patient Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Content</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="pages.html">
                                        <i class="ti ti-brand-pagekit"></i><span>Pages</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-brand-blogger"></i><span>Blogs</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="add-blog.html">Add Blog</a></li>
                                        <li><a href="blogs.html">Blogs</a></li>
                                        <li><a href="blog-categories.html">Blog Categories</a></li>
                                        <li><a href="blog-comments.html">Blog Comments</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-map-pins"></i><span>Location</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="countries.html">Countries</a></li>
                                        <li><a href="states.html">States</a></li>
                                        <li><a href="cities.html">Cities</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="testimonials.html">
                                        <i class="ti ti-brand-wechat"></i><span>Testimonials</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html">
                                        <i class="ti ti-question-mark"></i><span>FAQ</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Support</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="contact-messages.html">
                                        <i class="ti ti-message-dots"></i><span>Contact Messages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tickets.html">
                                        <i class="ti ti-ticket"></i><span>Tickets</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="announcements.html">
                                        <i class="ti ti-speakerphone"></i><span>Announcements</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="newsletters.html">
                                        <i class="ti ti-mail-bolt"></i><span>Newsletters</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Pages</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="starter.html">
                                        <i class="ti ti-player-play"></i><span>Starter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="profile.html">
                                        <i class="ti ti-user-circle"></i><span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html">
                                        <i class="ti ti-photo"></i><span>Gallery</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="timeline.html">
                                        <i class="ti ti-timeline-event-text"></i><span>Timeline</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="pricing.html">
                                        <i class="ti ti-tag"></i><span>Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="coming-soon.html">
                                        <i class="ti ti-sparkles"></i><span>Coming Soon</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="under-maintenance.html">
                                        <i class="ti ti-settings-down"></i><span>Under Maintenance</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">
                                        <i class="ti ti-shield-check"></i><span>Privacy Policy</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="terms-and-conditions.html">
                                        <i class="ti ti-file-time"></i><span>Terms & Conditions</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Authentication</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-login"></i><span>Login</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="login-cover.html">Cover</a></li>
                                        <li><a href="login-illustration.html">Illustration</a></li>
                                        <li><a href="login-basic.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-file-pencil"></i><span>Register</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="register-cover.html">Cover</a></li>
                                        <li><a href="register-illustration.html">Illustration</a></li>
                                        <li><a href="register-basic.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-lock-exclamation"></i><span>Forgot Password</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="forgot-password-cover.html">Cover</a></li>
                                        <li><a href="forgot-password-illustration.html">Illustration</a></li>
                                        <li><a href="forgot-password-basic.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-restore"></i><span>Reset Password</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="reset-password-cover.html">Cover</a></li>
                                        <li><a href="reset-password-illustration.html">Illustration</a></li>
                                        <li><a href="reset-password-basic.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-mail-check"></i><span>Email Verification</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="email-verification-cover.html">Cover</a></li>
                                        <li><a href="email-verification-illustration.html">Illustration</a></li>
                                        <li><a href="email-verification-basic.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-discount-check"></i><span>2 Step Verification</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="two-step-verification-cover.html">Cover</a></li>
                                        <li><a href="two-step-verification-illustration.html">Illustration</a></li>
                                        <li><a href="two-step-verification-basic.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="lock-screen.html">
                                        <i class="ti ti-lock"></i><span>Lock Screen</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-exclamation-mark-off"></i><span>Error Pages</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="error-404.html">404 Error</a></li>
                                        <li><a href="error-500.html">500 Error</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Settings</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-user-cog"></i><span>Account Settings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="profile-settings.html">Profile</a></li>
                                        <li><a href="security-settings.html">Security</a></li>
                                        <li><a href="notifications-settings.html">Notifications</a></li>
                                        <li><a href="integrations-settings.html">Integrations</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-world-cog"></i><span>Website Settings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="organization-settings.html">Organization</a></li>
                                        <li><a href="localization-settings.html">Localization</a></li>
                                        <li><a href="prefixes-settings.html">Prefixes</a></li>
                                        <li><a href="seo-setup-settings.html">SEO Setup</a></li>
                                        <li><a href="language-settings.html">Language</a></li>
                                        <li><a href="maintenance-mode-settings.html">Maintenance Mode</a></li>
                                        <li><a href="login-and-register-settings.html">Login & Register</a></li>
                                        <li><a href="preferences-settings.html">Preferences</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-building-hospital"></i><span>Clinic Settings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="appointment-settings.html">Appointment</a></li>
                                        <li><a href="working-hours-settings.html">Working Hours</a></li>
                                        <li><a href="cancellation-reason-settings.html">Cancellation Reason</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-device-mobile-cog"></i><span>App Settings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="invoice-settings.html">Invoice Settings</a></li>
                                        <li><a href="invoice-templates-settings.html">Invoice Templates</a></li>
                                        <li><a href="signatures-settings.html">Signatures</a></li>
                                        <li><a href="custom-fields-settings.html">Custom Fields</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-device-desktop-cog"></i><span>System Settings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="email-settings.html">Email Settings</a></li>
                                        <li><a href="email-templates-settings.html">Email Templates</a></li>
                                        <li><a href="sms-gateways-settings.html">SMS Gateways</a></li>
                                        <li><a href="sms-templates-settings.html">SMS Templates</a></li>
                                        <li><a href="gdpr-cookies-settings.html">GDPR Cookies</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-settings-dollar"></i><span>Finance & Accounts</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="payment-methods-settings.html">Payment Methods</a></li>
                                        <li><a href="bank-accounts-settings.html">Bank Accounts</a></li>
                                        <li><a href="tax-rates-settings.html">Tax Rates</a></li>
                                        <li><a href="currencies-settings.html">Currencies</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-settings-2"></i><span>Other Settings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="sitemap-settings.html">Sitemap</a></li>
                                        <li><a href="clear-cache-settings.html">Clear Cache</a></li>
                                        <li><a href="storage-settings.html">Storage</a></li>
                                        <li><a href="cronjob-settings.html">Cronjob</a></li>
                                        <li><a href="ban-ip-address-settings.html">Ban IP Address</a></li>
                                        <li><a href="system-backup-settings.html">System Backup</a></li>
                                        <li><a href="database-backup-settings.html">Database Backup</a></li>
                                        <li><a href="system-update.html">System Update</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>UI Interface</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-chart-pie"></i><span>Base UI</span><span
                                            class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="ui-accordion.html">Accordion</a></li>
                                        <li><a href="ui-alerts.html">Alerts</a></li>
                                        <li><a href="ui-avatar.html">Avatar</a></li>
                                        <li><a href="ui-badges.html">Badges</a></li>
                                        <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                                        <li><a href="ui-buttons.html">Buttons</a></li>
                                        <li><a href="ui-buttons-group.html">Button Group</a></li>
                                        <li><a href="ui-cards.html">Card</a></li>
                                        <li><a href="ui-carousel.html">Carousel</a></li>
                                        <li><a href="ui-collapse.html">Collapse</a></li>
                                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                        <li><a href="ui-ratio.html">Ratio</a></li>
                                        <li><a href="ui-grid.html">Grid</a></li>
                                        <li><a href="ui-images.html">Images</a></li>
                                        <li><a href="ui-links.html">Links</a></li>
                                        <li><a href="ui-list-group.html">List Group</a></li>
                                        <li><a href="ui-modals.html">Modals</a></li>
                                        <li><a href="ui-offcanvas.html">Offcanvas</a></li>
                                        <li><a href="ui-pagination.html">Pagination</a></li>
                                        <li><a href="ui-placeholders.html">Placeholders</a></li>
                                        <li><a href="ui-popovers.html">Popovers</a></li>
                                        <li><a href="ui-progress.html">Progress</a></li>
                                        <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                                        <li><a href="ui-spinner.html">Spinner</a></li>
                                        <li><a href="ui-nav-tabs.html">Tabs</a></li>
                                        <li><a href="ui-toasts.html">Toasts</a></li>
                                        <li><a href="ui-tooltips.html">Tooltips</a></li>
                                        <li><a href="ui-typography.html">Typography</a></li>
                                        <li><a href="ui-utilities.html">Utilities</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-radar"></i><span>Advanced UI</span><span
                                            class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="extended-dragula.html">Dragula</a></li>
                                        <li><a href="ui-clipboard.html">Clipboard</a></li>
                                        <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                        <li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
                                        <li><a href="ui-lightbox.html">Lightbox</a></li>
                                        <li><a href="ui-rating.html">Rating</a></li>
                                        <li><a href="ui-scrollbar.html">Scrollbar</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-forms"></i><span>Forms</span><span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);">Form Elements<span
                                                    class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="form-basic-inputs.html">Basic Inputs</a></li>
                                                <li><a href="form-checkbox-radios.html">Checkbox & Radios</a></li>
                                                <li><a href="form-input-groups.html">Input Groups</a></li>
                                                <li><a href="form-grid-gutters.html">Grid & Gutters</a></li>
                                                <li><a href="form-mask.html">Input Masks</a></li>
                                                <li><a href="form-fileupload.html">File Uploads</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);">Layouts<span
                                                    class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="form-horizontal.html">Horizontal Form</a></li>
                                                <li><a href="form-vertical.html">Vertical Form</a></li>
                                                <li><a href="form-floating-labels.html">Floating Labels</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="form-validation.html">Form Validation</a></li>
                                        <li><a href="form-select2.html">Select2</a></li>
                                        <li><a href="form-wizard.html">Form Wizard</a></li>
                                        <li><a href="form-pickers.html">Form Picker</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-table-row"></i><span>Tables</span><span
                                            class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="tables-basic.html">Basic Tables </a></li>
                                        <li><a href="data-tables.html">Data Table </a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-chart-donut"></i>
                                        <span>Charts</span><span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="chart-apex.html">Apex Charts</a></li>
                                        <li><a href="chart-c3.html">Chart C3</a></li>
                                        <li><a href="chart-js.html">Chart Js</a></li>
                                        <li><a href="chart-morris.html">Morris Charts</a></li>
                                        <li><a href="chart-flot.html">Flot Charts</a></li>
                                        <li><a href="chart-peity.html">Peity Charts</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-icons"></i>
                                        <span>Icons</span><span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                        <li><a href="icon-tabler.html">Tabler Icons</a></li>
                                        <li><a href="icon-bootstrap.html">Bootstrap Icons</a></li>
                                        <li><a href="icon-remix.html">Remix Icons</a></li>
                                        <li><a href="icon-feather.html">Feather Icons</a></li>
                                        <li><a href="icon-ionic.html">Ionic Icons</a></li>
                                        <li><a href="icon-material.html">Material Icons</a></li>
                                        <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                                        <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                                        <li><a href="icon-themify.html">Themify Icons</a></li>
                                        <li><a href="icon-weather.html">Weather Icons</a></li>
                                        <li><a href="icon-typicons.html">Typicons Icons</a></li>
                                        <li><a href="icon-flag.html">Flag Icons</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Help</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="javascript:void(0);"><i
                                            class="ti ti-file-dots"></i><span>Documentation</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i
                                            class="ti ti-status-change"></i><span>Changelog</span><span
                                            class="badge bg-danger ms-2 badge-md rounded-2 fs-12 fw-medium">v1.6.8</span></a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-versions"></i><span>Multi Level</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Multilevel 1</a></li>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);">Multilevel 2<span
                                                    class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="javascript:void(0);">Multilevel 2.1</a></li>
                                                <li class="submenu submenu-two submenu-three">
                                                    <a href="javascript:void(0);">Multilevel 2.2<span
                                                            class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                                    <ul>
                                                        <li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
                                                        <li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);">Multilevel 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-footer border-top mt-3">
                    <div class="trial-item mt-0 p-3 text-center">
                        <div class="trial-item-icon rounded-4 mb-3 p-2 text-center shadow-sm d-inline-flex">
                            <img src="{{ URL::asset('') }}assets/img/icons/sidebar-icon.svg" alt="img">
                        </div>
                        <div>
                            <h6 class="fs-14 fw-semibold mb-1">Upgrade To Pro</h6>
                            <p class="fs-13 mb-0">Check 1 min video and begin use Preclinic like a pro</p>
                        </div>
                        <a href="javascript:void(0);" class="close-icon shadow-sm"><i class="ti ti-x"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Sidenav Menu End -->

        <!-- ========================
   Start Page Content
  ========================= -->

        <div class="page-wrapper">

            <!-- Start Content -->
            <div class="content pb-0">

                <!-- Page Header -->
                <div class="d-flex align-items-sm-center justify-content-between flex-wrap gap-2 mb-4">
                    <div>
                        <h4 class="fw-bold mb-0">Admin Dashboard </h4>
                    </div>
                    <div class="d-flex align-items-center flex-wrap gap-2">
                        <a href="new-appointment.html" class="btn btn-primary d-inline-flex align-items-center"><i
                                class="ti ti-plus me-1"></i>New Appointment</a>
                        <a href="doctor-schedule.html"
                            class="btn btn-outline-white bg-white d-inline-flex align-items-center"><i
                                class="ti ti-calendar-time me-1"></i>Schedule Availability</a>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- start row -->
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="{{ URL::asset('') }}assets/img/bg/bg-01.svg" alt="img"
                                class="position-absolute start-0 top-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2 justify-content-between">
                                    <span class="avatar bg-primary rounded-circle"><i
                                            class="ti ti-calendar-heart fs-24"></i></span>
                                    <div class="text-end">
                                        <span
                                            class="badge px-2 py-1 fs-12 fw-medium d-inline-flex mb-1 bg-success">+95%</span>
                                        <p class="fs-13 mb-0">in last 7 Days </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-1">Doctors</p>
                                        <h3 class="fw-bold mb-0">247</h3>
                                    </div>
                                    <div>
                                        <div id="s-col" class="chart-set"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="{{ URL::asset('') }}assets/img/bg/bg-02.svg" alt="img"
                                class="position-absolute start-0 top-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2 justify-content-between">
                                    <span class="avatar bg-danger rounded-circle"><i
                                            class="ti ti-calendar-heart fs-24"></i></span>
                                    <div class="text-end">
                                        <span
                                            class="badge px-2 py-1 fs-12 fw-medium d-inline-flex mb-1 bg-success">+25%</span>
                                        <p class="fs-13 mb-0">in last 7 Days </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-1">Patients</p>
                                        <h3 class="fw-bold mb-0">4178</h3>
                                    </div>
                                    <div>
                                        <div id="s-col-2" class="chart-set"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="{{ URL::asset('') }}assets/img/bg/bg-03.svg" alt="img"
                                class="position-absolute start-0 top-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2 justify-content-between">
                                    <span class="avatar bg-info rounded-circle"><i
                                            class="ti ti-calendar-heart fs-24"></i></span>
                                    <div class="text-end">
                                        <span
                                            class="badge px-2 py-1 fs-12 fw-medium d-inline-flex mb-1 bg-danger">-15%</span>
                                        <p class="fs-13 mb-0">in last 7 Days </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-1">Appointment</p>
                                        <h3 class="fw-bold mb-0">12178</h3>
                                    </div>
                                    <div>
                                        <div id="s-col-3" class="chart-set"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="{{ URL::asset('') }}assets/img/bg/bg-04.svg" alt="img"
                                class="position-absolute start-0 top-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2 justify-content-between">
                                    <span class="avatar bg-success rounded-circle"><i
                                            class="ti ti-calendar-heart fs-24"></i></span>
                                    <div class="text-end">
                                        <span
                                            class="badge px-2 py-1 fs-12 fw-medium d-inline-flex mb-1 bg-success">+25%</span>
                                        <p class="fs-13 mb-0">in last 7 Days </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between overflow-hidden">
                                    <div>
                                        <p class="mb-1">Revenue</p>
                                        <h3 class="fw-bold mb-0 text-truncate">$55,1240</h3>
                                    </div>
                                    <div>
                                        <div id="s-col-4" class="chart-set"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-xl-8">

                        <!-- card start -->
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Appointment Statistics</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center"
                                        data-bs-toggle="dropdown">
                                        Monthly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="row row-gap-3 mb-2">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="bg-light border p-2 text-center rounded-2">
                                            <p class="mb-1 text-body text-truncate"><i
                                                    class="ti ti-point-filled me-1 text-primary"></i>All Appointments
                                            </p>
                                            <h5 class="fw-bold mb-0">6314</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="bg-light border p-2 text-center rounded-2">
                                            <p class="mb-1 text-body"><i
                                                    class="ti ti-point-filled me-1 text-danger"></i>Cancelled</p>
                                            <h5 class="fw-bold mb-0">456</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="bg-light border p-2 text-center rounded-2">
                                            <p class="mb-1 text-body"><i
                                                    class="ti ti-point-filled me-1 text-warning"></i>Reschedule</p>
                                            <h5 class="fw-bold mb-0">745</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="bg-light border p-2 text-center rounded-2">
                                            <p class="mb-1 text-body"><i
                                                    class="ti ti-point-filled me-1 text-success"></i>Completed</p>
                                            <h5 class="fw-bold mb-0">4578</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="chart-set" id="s-col-19"></div>
                            </div>
                        </div>
                        <!-- card end -->

                        <!-- card start -->
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Popular Doctors</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center"
                                        data-bs-toggle="dropdown">
                                        Weekly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row row-gap-3">
                                    <div class="col-md-4">
                                        <div class="border shadow-sm p-3 rounded-2">
                                            <div class="d-flex align-items-center mb-3">
                                                <a href="doctor-details.html"
                                                    class="avatar me-2 flex-shrink-0 position-relative">
                                                    <span
                                                        class="online text-success position-absolute end-0 bottom-0 pe-1"><i
                                                            class="ti ti-circle-filled d-flex bg-white fs-6 rounded-circle border border-1 border-white"></i></span>
                                                    <img src="{{ URL::asset('') }}assets/img/doctors/doctor-01.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1 text-truncate"><a href="doctor-details.html"
                                                            class="fw-semibold">Dr. Alex Morgan</a></h6>
                                                    <p class="mb-0 fs-13">Cardiologist</p>
                                                </div>
                                            </div>
                                            <p class="mb-0"><span class="text-dark fw-semibold">258</span> Bookings
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="border shadow-sm p-3 rounded-2">
                                            <div class="d-flex align-items-center mb-3">
                                                <a href="doctor-details.html"
                                                    class="avatar me-2 flex-shrink-0 position-relative">
                                                    <span
                                                        class="online text-success position-absolute end-0 bottom-0 pe-1"><i
                                                            class="ti ti-circle-filled d-flex bg-white fs-6 rounded-circle border border-1 border-white"></i></span>
                                                    <img src="{{ URL::asset('') }}assets/img/doctors/doctor-03.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1 text-truncate"><a href="doctor-details.html"
                                                            class="fw-semibold">Dr. Emily Carter</a></h6>
                                                    <p class="mb-0 fs-13">Pediatrician</p>
                                                </div>
                                            </div>
                                            <p class="mb-0"><span class="text-dark fw-semibold">125</span> Bookings
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="border shadow-sm p-3 rounded-2">
                                            <div class="d-flex align-items-center mb-3">
                                                <a href="doctor-details.html"
                                                    class="avatar me-2 flex-shrink-0 position-relative">
                                                    <img src="{{ URL::asset('') }}assets/img/doctors/doctor-04.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1 text-truncate"><a href="doctor-details.html"
                                                            class="fw-semibold">Dr. David Lee</a></h6>
                                                    <p class="mb-0 fs-13">Gynecologist</p>
                                                </div>
                                            </div>
                                            <p class="mb-0"><span class="text-dark fw-semibold">115</span> Bookings
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->

                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4">
                        <div class="card shadow-sm">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0 text-truncate">Appointments</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center"
                                        data-bs-toggle="dropdown">
                                        All Type <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">In Person</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:void(0);">Online</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="datepic mb-1"></div>
                                <div
                                    class="mb-3 bg-light p-3 rounded-2 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fs-14 fw-semibold mb-1">General Visit</h6>
                                        <p class="mb-0 text-body text-truncate"><i
                                                class="ti ti-calendar-time me-1 text-body"></i> Wed, 05 Apr 2025, 06:30
                                            PM </p>
                                    </div>
                                    <div class="avatar-list-stacked avatar-group-sm event flex-shrink-0">
                                        <span class="avatar avatar-lg rounded-circle border-0"><img
                                                src="{{ URL::asset('') }}assets/img/profiles/avatar-26.jpg"
                                                class="img-fluid rounded-circle border border-white"
                                                alt="Img"></span>
                                        <span class="avatar avatar-lg rounded-circle border-0"><img
                                                src="{{ URL::asset('') }}assets/img/doctors/doctor-05.jpg"
                                                class="img-fluid rounded-circle border border-white"
                                                alt="Img"></span>
                                    </div>
                                </div>
                                <div
                                    class="mb-3 bg-soft-danger p-3 rounded-2 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fs-14 fw-semibold mb-1">General Visit</h6>
                                        <p class="mb-0 text-truncate"><i
                                                class="ti ti-calendar-time me-1 text-dark"></i> Wed, 05 Apr 2025, 04:10
                                            PM </p>
                                    </div>
                                    <div class="avatar-list-stacked avatar-group-sm event flex-shrink-0">
                                        <span class="avatar avatar-lg rounded-circle border-0"><img
                                                src="{{ URL::asset('') }}assets/img/users/user-17.jpg"
                                                class="img-fluid rounded-circle border border-white"
                                                alt="Img"></span>
                                        <span class="avatar avatar-lg rounded-circle border-0"><img
                                                src="{{ URL::asset('') }}assets/img/doctors/doctor-10.jpg"
                                                class="img-fluid rounded-circle border border-white"
                                                alt="Img"></span>
                                    </div>
                                </div>
                                <div
                                    class="mb-3 bg-soft-info p-3 rounded-2 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fs-14 fw-semibold mb-1">General Visit</h6>
                                        <p class="mb-0 text-truncate"><i
                                                class="ti ti-calendar-time me-1 text-dark"></i> Wed, 05 Apr 2025,
                                            10:00 AM </p>
                                    </div>
                                    <div class="avatar-list-stacked avatar-group-sm event flex-shrink-0">
                                        <span class="avatar avatar-lg rounded-circle border-0"><img
                                                src="{{ URL::asset('') }}assets/img/users/user-16.jpg"
                                                class="img-fluid rounded-circle border border-white"
                                                alt="Img"></span>
                                        <span class="avatar avatar-lg rounded-circle border-0"><img
                                                src="{{ URL::asset('') }}assets/img/doctors/doctor-09.jpg"
                                                class="img-fluid rounded-circle border border-white"
                                                alt="Img"></span>
                                    </div>
                                </div>
                                <a href="appointments.html" class="btn btn-light w-100">View All Appointments</a>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->
                </div>
                <!-- end row -->

                <!-- start row -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-xl-4 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Top 3 Departments</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center"
                                        data-bs-toggle="dropdown">
                                        Weekly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="circle-chart" class="chart-set"></div>
                                <div class="d-flex align-items-center flex-wrap justify-content-center gap-2 mt-3">
                                    <p class="d-flex align-items-center mb-0 fs-13"><i
                                            class="ti ti-circle-filled text-info fs-10 me-1"></i><span
                                            class="text-dark fw-semibold me-1">214</span> Cardiology</p>
                                    <p class="d-flex align-items-center mb-0 fs-13"><i
                                            class="ti ti-circle-filled text-purple fs-10 me-1"></i><span
                                            class="text-dark fw-semibold me-1">150</span> Dental</p>
                                    <p class="d-flex align-items-center mb-0 fs-13"><i
                                            class="ti ti-circle-filled text-primary fs-10 me-1"></i><span
                                            class="text-dark fw-semibold me-1">121</span> Neurolgy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 col-lg-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Doctors Schedule</h5>
                                <a href="doctor-schedule.html" class="btn fw-normal btn-outline-white">View All</a>
                            </div>
                            <div class="card-body">
                                <div class="row g-2 mb-4">
                                    <div class="col d-flex border-end">
                                        <div class="text-center flex-fill">
                                            <p class="mb-1">Available</p>
                                            <h3 class="fw-bold mb-0">48</h3>
                                        </div>
                                    </div>
                                    <div class="col d-flex border-end">
                                        <div class="text-center flex-fill">
                                            <p class="mb-1">Unavailable</p>
                                            <h3 class="fw-bold mb-0">28</h3>
                                        </div>
                                    </div>
                                    <div class="col d-flex">
                                        <div class="text-center flex-fill">
                                            <p class="mb-1">Leave</p>
                                            <h3 class="fw-bold mb-0">12</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-auto">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center flex-shrink-0">
                                            <a href="doctor-details.html" class="avatar flex-shrink-0">
                                                <img src="{{ URL::asset('') }}assets/img/doctors/doctor-02.jpg"
                                                    class="rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2 flex-shrink-0">
                                                <div>
                                                    <h6 class="fw-semibold fs-14 text-truncate mb-1"><a
                                                            href="doctor-details.html">Dr. Sarah Johnson</a></h6>
                                                    <p class="fs-13">Orthopedic Surgeon</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <a href="index.html#"
                                                class="btn btn-primary btn-sm py-1 flex-shrink-0">Book Now</a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center flex-shrink-0">
                                            <a href="doctor-details.html" class="avatar flex-shrink-0">
                                                <img src="{{ URL::asset('') }}assets/img/doctors/doctor-03.jpg"
                                                    class="rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2 flex-shrink-0">
                                                <div>
                                                    <h6 class="fw-semibold fs-14 text-truncate mb-1"><a
                                                            href="doctor-details.html">Dr. Emily Carter</a></h6>
                                                    <p class="fs-13">Pediatrician</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <a href="index.html#" class="btn btn-primary btn-sm py-1">Book Now</a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center flex-shrink-0">
                                            <a href="doctor-details.html" class="avatar flex-shrink-0">
                                                <img src="{{ URL::asset('') }}assets/img/doctors/doctor-04.jpg"
                                                    class="rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2 flex-shrink-0">
                                                <div>
                                                    <h6 class="fw-semibold fs-14 text-truncate mb-1"><a
                                                            href="doctor-details.html">Dr. David Lee</a></h6>
                                                    <p class="fs-13">Gynecologist</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <a href="index.html#" class="btn btn-primary btn-sm py-1">Book Now</a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-0">
                                        <div class="d-flex align-items-center flex-shrink-0">
                                            <a href="doctor-details.html" class="avatar flex-shrink-0">
                                                <img src="{{ URL::asset('') }}assets/img/doctors/doctor-14.jpg"
                                                    class="rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2 flex-shrink-0">
                                                <div>
                                                    <h6 class="fw-semibold fs-14 text-truncate mb-1"><a
                                                            href="doctor-details.html">Dr. Michael Smith</a></h6>
                                                    <p class="fs-13">Cardiologist</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <a href="index.html#" class="btn btn-primary btn-sm py-1">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 col-lg-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Income By Treatment</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center"
                                        data-bs-toggle="dropdown">
                                        Weekly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div>
                                        <p class="fw-semibold mb-1 text-dark">Cardiology</p>
                                        <p class="mb-0">4,556 Apointments</p>
                                    </div>
                                    <h6 class="fw-bold mb-0">$5,985</h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div>
                                        <p class="fw-semibold mb-1 text-dark">Radiology</p>
                                        <p class="mb-0">4,125 Apointments</p>
                                    </div>
                                    <h6 class="fw-bold mb-0">$5,194</h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div>
                                        <p class="fw-semibold mb-1 text-dark">Dental Surgery</p>
                                        <p class="mb-0">1,796 Apointments</p>
                                    </div>
                                    <h6 class="fw-bold mb-0">$2,716</h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div>
                                        <p class="fw-semibold mb-1 text-dark">Orthopaedics</p>
                                        <p class="mb-0">3,827 Apointments</p>
                                    </div>
                                    <h6 class="fw-bold mb-0">$4,682</h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-0">
                                    <div>
                                        <p class="fw-semibold mb-1 text-dark">General Medicine</p>
                                        <p class="mb-0">9,894 Apointments</p>
                                    </div>
                                    <h6 class="fw-bold mb-0">$9,450</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->
                </div>
                <!-- end row -->

                <!-- row start -->
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">All Appointments</h5>
                                <a href="appointments.html" class="btn fw-normal btn-outline-white">View All</a>
                            </div>
                            <div class="card-body">
                                <!-- Table start -->
                                <div class="table-responsive table-nowrap">
                                    <table class="table border">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Doctor</th>
                                                <th>Patient</th>
                                                <th>Date & Time</th>
                                                <th>Mode</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-06.jpg"
                                                                alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                            <h6 class="fs-14 mb-1"><a href="doctor-details.html"
                                                                    class="fw-semibold">Dr. John Smith</a></h6>
                                                            <p class="mb-0 fs-13">Neurosurgeon</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/profiles/avatar-02.jpg"
                                                                alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                            <h6 class="fs-14 mb-1"><a href="patient-details.html"
                                                                    class="fw-medium">Jesus Adams</a></h6>
                                                            <p class="mb-0 fs-13">+1 41254 45214</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>28 May 2025 - 11:15 AM</td>
                                                <td>Online</td>
                                                <td><span
                                                        class="badge fs-13 py-1 badge-soft-success border border-success rounded text-success fw-medium">Confirmed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-07.jpg"
                                                                alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                            <h6 class="fs-14 mb-1"><a href="doctor-details.html"
                                                                    class="fw-semibold">Dr. Lisa White</a></h6>
                                                            <p class="mb-0 fs-13">Oncologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/profiles/avatar-27.jpg"
                                                                alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                            <h6 class="fs-14 mb-1"><a href="patient-details.html"
                                                                    class="fw-medium">Ezra Belcher</a></h6>
                                                            <p class="mb-0 fs-13">+1 65895 41247</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>29 May 2025 - 11:30 AM</td>
                                                <td>In-Person</td>
                                                <td><span
                                                        class="badge fs-13 py-1 badge-soft-danger border border-danger rounded fw-medium">Cancelled</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-10.jpg"
                                                                alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                            <h6 class="fs-14 mb-1"><a href="doctor-details.html"
                                                                    class="fw-semibold">Dr. Patricia Brown</a></h6>
                                                            <p class="mb-0 fs-13">Pulmonologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/profiles/avatar-20.jpg"
                                                                alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                            <h6 class="fs-14 mb-1"><a href="patient-details.html"
                                                                    class="fw-medium">Glen Lentz</a></h6>
                                                            <p class="mb-0 fs-13">+1 62458 45845</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>30 May 2025 - 09:30 AM </td>
                                                <td>Online</td>
                                                <td><span
                                                        class="badge fs-13 py-1 badge-soft-success border border-success rounded text-success fw-medium">Confirmed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-11.jpg"
                                                                alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                            <h6 class="fs-14 mb-1"><a href="doctor-details.html"
                                                                    class="fw-semibold">Dr. Rachel Green</a></h6>
                                                            <p class="mb-0 fs-13">Urologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/profiles/avatar-06.jpg"
                                                                alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                            <h6 class="fs-14 mb-1"><a href="patient-details.html"
                                                                    class="fw-medium">Bernard Griffith</a></h6>
                                                            <p class="mb-0 fs-13">+1 61422 45214</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>30 May 2025 - 10:00 AM</td>
                                                <td>Online</td>
                                                <td><span
                                                        class="badge fs-13 py-1 badge-soft-secondary border border-secondary rounded fw-medium">Checked
                                                        Out</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="doctor-details.html" class="avatar me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-14.jpg"
                                                                alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                            <h6 class="fs-14 mb-1"><a href="doctor-details.html"
                                                                    class="fw-semibold">Dr. Michael Smith</a></h6>
                                                            <p class="mb-0 fs-13">Cardiologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="patient-details.html" class="avatar me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/profiles/avatar-25.jpg"
                                                                alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                            <h6 class="fs-14 mb-1"><a href="patient-details.html"
                                                                    class="fw-medium">John Elsass</a></h6>
                                                            <p class="mb-0 fs-13">+1 47851 26371</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>30 May 2025 - 11:00 AM</td>
                                                <td>Online</td>
                                                <td><span
                                                        class="badge fs-13 py-1 badge-soft-info border border-info rounded fw-medium">Schedule</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Table end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-xl-4 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Top 5 Patients</h5>
                                <a href="patients.html" class="btn fw-normal btn-outline-white">View All</a>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/profiles/avatar-02.jpg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1 text-truncate"><a href="patient-details.html"
                                                    class="fw-medium">Jesus Adams</a></h6>
                                            <p class="mb-0 fs-13 text-truncate">Total Paid : $6589</p>
                                        </div>
                                    </div>
                                    <span
                                        class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">80
                                        Appointments</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/profiles/avatar-27.jpg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1 text-truncate"><a href="patient-details.html"
                                                    class="fw-medium">Ezra Belcher</a></h6>
                                            <p class="mb-0 fs-13 text-truncate">Total Paid : $5632</p>
                                        </div>
                                    </div>
                                    <span
                                        class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">60
                                        Appointments</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/profiles/avatar-20.jpg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1 text-truncate"><a href="patient-details.html"
                                                    class="fw-medium">Glen Lentz</a></h6>
                                            <p class="mb-0 fs-13 text-truncate">Total Paid : $4125</p>
                                        </div>
                                    </div>
                                    <span
                                        class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">40
                                        Appointments</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/profiles/avatar-06.jpg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1 text-truncate"><a href="patient-details.html"
                                                    class="fw-medium">Bernard Griffith</a></h6>
                                            <p class="mb-0 fs-13 text-truncate">Total Paid : $3140</p>
                                        </div>
                                    </div>
                                    <span
                                        class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">25
                                        Appointments</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-0">
                                    <div class="d-flex align-items-center">
                                        <a href="patient-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/profiles/avatar-25.jpg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1 text-truncate"><a href="patient-details.html"
                                                    class="fw-medium">John Elsass</a></h6>
                                            <p class="mb-0 fs-13 text-truncate">Total Paid : $2654</p>
                                        </div>
                                    </div>
                                    <span
                                        class="badge fw-medium badge-soft-primary border border-primary flex-shrink-0">25
                                        Appointments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 col-lg-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Recent Transactions</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center"
                                        data-bs-toggle="dropdown">
                                        Weekly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/icons/stripe.svg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                                    class="fw-semibold">General Check-up</a></h6>
                                            <p class="mb-0 fs-13 text-truncate"><a href="javascript:void(0);"
                                                    class="link-primary">#INV5889</a></p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium bg-success flex-shrink-0">+ $234</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/icons/paypal.svg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                                    class="fw-semibold">Online Consultation</a></h6>
                                            <p class="mb-0 fs-13 text-truncate"><a href="javascript:void(0);"
                                                    class="link-primary">#INV7874</a></p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium bg-success flex-shrink-0">+ $234</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/icons/stripe.svg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                                    class="fw-semibold">Purchase Product</a></h6>
                                            <p class="mb-0 fs-13 text-truncate"><a href="javascript:void(0);"
                                                    class="link-primary">#INV4458</a></p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium bg-danger flex-shrink-0">- $69</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/icons/paypal.svg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                                    class="fw-semibold">Online Consultation</a></h6>
                                            <p class="mb-0 fs-13 text-truncate"><a href="javascript:void(0);"
                                                    class="link-primary">#INV5456</a></p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium bg-success flex-shrink-0">+ $234</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-0">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/icons/stripe.svg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);"
                                                    class="fw-semibold">Online Consultation</a></h6>
                                            <p class="mb-0 fs-13 text-truncate"><a href="javascript:void(0);"
                                                    class="link-primary">#INV4557</a></p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium bg-success flex-shrink-0">+ $234</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 col-lg-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Leave Requests</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center"
                                        data-bs-toggle="dropdown">
                                        Today <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="index.html#">Today</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">This Week</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.html#">This Month</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/profiles/avatar-16.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <div>
                                                <h6 class="fw-semibold text-truncate mb-1 fs-14"><a
                                                        href="doctor-details.html">James Allaire</a></h6>
                                                <p class="fs-13 mb-0 text-truncate">4 Days - Personal Reason</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="d-inline-flex bg-soft-danger text-danger p-2 rounded-circle"><i
                                                class="ti ti-x fw-bold"></i></a>
                                        <a href="javascript:void(0);"
                                            class="d-inline-flex ms-2 text-success p-2 bg-soft-success rounded-circle"><i
                                                class="ti ti-check fw-bold"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/profiles/avatar-21.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <div>
                                                <h6 class="fw-semibold text-truncate mb-1 fs-14"><a
                                                        href="doctor-details.html">Esther Schmidt</a></h6>
                                                <p class="fs-13 mb-0 text-truncate">2 Days - Going to Hospital</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="d-inline-flex bg-soft-danger text-danger p-2 rounded-circle"><i
                                                class="ti ti-x fw-bold"></i></a>
                                        <a href="javascript:void(0);"
                                            class="d-inline-flex ms-2 text-success p-2 bg-soft-success rounded-circle"><i
                                                class="ti ti-check fw-bold"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-03.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <div>
                                                <h6 class="fw-semibold text-truncate mb-1 fs-14"><a
                                                        href="doctor-details.html">Valerie Padgett</a></h6>
                                                <p class="fs-13 mb-0 text-truncate">1 Day - Changing Account</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="d-inline-flex bg-soft-danger text-danger p-2 rounded-circle"><i
                                                class="ti ti-x fw-bold"></i></a>
                                        <a href="javascript:void(0);"
                                            class="d-inline-flex ms-2 text-success p-2 bg-soft-success rounded-circle"><i
                                                class="ti ti-check fw-bold"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-02.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <div>
                                                <h6 class="fw-semibold text-truncate mb-1 fs-14"><a
                                                        href="doctor-details.html">Diane Nash</a></h6>
                                                <p class="fs-13 mb-0 text-truncate">1 Day - Not Well</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="d-inline-flex bg-soft-danger text-danger p-2 rounded-circle"><i
                                                class="ti ti-x fw-bold"></i></a>
                                        <a href="javascript:void(0);"
                                            class="d-inline-flex ms-2 text-success p-2 bg-soft-success rounded-circle"><i
                                                class="ti ti-check fw-bold"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mb-0">
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-09.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div class="ms-2">
                                            <div>
                                                <h6 class="fw-semibold text-truncate mb-1 fs-14"><a
                                                        href="doctor-details.html">Sally Cavazos</a></h6>
                                                <p class="fs-13 mb-0 text-truncate">2 Days - Going to Checkup</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="d-inline-flex bg-soft-danger text-danger p-2 rounded-circle"><i
                                                class="ti ti-x fw-bold"></i></a>
                                        <a href="javascript:void(0);"
                                            class="d-inline-flex ms-2 text-success p-2 bg-soft-success rounded-circle"><i
                                                class="ti ti-check fw-bold"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                </div>
                <!-- row end -->

            </div>
            <!-- End Content -->

            <!-- Footer Start -->
            <div class="footer text-center bg-white p-2 border-top">
                <p class="text-dark mb-0">2025 &copy; <a href="javascript:void(0);"
                        class="link-primary">Preclinic</a>, All Rights Reserved</p>
            </div>
            <!-- Footer End -->

        </div>

        <!-- ========================
   End Page Content
  ========================= -->

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="26b2e45dc0ca1ca6190772fa-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="26b2e45dc0ca1ca6190772fa-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="26b2e45dc0ca1ca6190772fa-text/javascript"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/apexcharts.min.js" type="26b2e45dc0ca1ca6190772fa-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/chart-data.js" type="26b2e45dc0ca1ca6190772fa-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="26b2e45dc0ca1ca6190772fa-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="26b2e45dc0ca1ca6190772fa-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="26b2e45dc0ca1ca6190772fa-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="26b2e45dc0ca1ca6190772fa-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js"
        data-cf-settings="26b2e45dc0ca1ca6190772fa-|49" defer></script>
</body>

</html>
