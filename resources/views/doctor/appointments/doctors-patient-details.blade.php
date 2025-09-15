<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctors | Yerodabie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="a3677d3be43b1a84cb72937a-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Font Awosome Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css" id="app-style">

</head>

<body>

    <!-- Begin Wrapper -->
    <div class="main-wrapper">

        @include('admin.layouts.header')

        @include('doctor.layouts.menu-doctor')

        <div class="page-wrapper">

            <!-- Start Content -->
            <div class="content">

                <!-- Start Page Header -->
                <div
                    class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 pb-3 mb-3 border-1 border-bottom">
                    <div class="flex-grow-1">
                        <h4 class="fw-bold mb-0"> Patient Details </h4>
                    </div>
                    <div class="text-end d-flex">
                        <!-- dropdown-->
                        <div class="dropdown me-1">
                            <a href="javascript:void(0);"
                                class="btn btn-md fs-14 fw-normal border bg-white rounded text-dark d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                Export<i class="ti ti-chevron-down ms-2"></i>
                            </a>
                            <ul class="dropdown-menu p-2">
                                <li>
                                    <a class="dropdown-item" href="doctors-patient-details.html#">Download as PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="doctors-patient-details.html#">Download as
                                        Excel</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- End Page Header -->

                <!-- card start -->
                <div class="card">
                    <div class="row align-items-end">
                        <div class="col-xl-9 col-lg-8">
                            <div class="d-sm-flex align-items-center position-relative z-0 overflow-hidden p-3">
                                <img src="{{ URL::asset('') }}assets/img/icons/shape-01.svg" alt="img"
                                    class="z-n1 position-absolute end-0 top-0 d-none d-lg-flex">
                                <a href="javascript:void(0);"
                                    class="avatar avatar-xxxl patient-avatar me-2 flex-shrink-0">
                                    <img src="{{ URL::asset('') }}assets/img/users/user-08.jpg" alt="product"
                                        class="rounded">
                                </a>
                                <div>
                                    <p class="text-primary mb-1">#PT0025</p>
                                    <h5 class="mb-1"><a href="javascript:void(0);" class="fw-bold">Alberto
                                            Ripley</a></h5>
                                    <p class="mb-3">4150 Hiney Road, Las Vegas, NV 89109</p>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <p class="mb-0 d-inline-flex align-items-center"><i
                                                class="ti ti-phone me-1 text-dark"></i>Phone : <span
                                                class="text-dark ms-1">+1 54546 45648</span></p>
                                        <span class="mx-2 text-light">|</span>
                                        <p class="mb-0 d-inline-flex align-items-center"><i
                                                class="ti ti-calendar-time me-1 text-dark"></i>Last Visited : <span
                                                class="text-dark ms-1">30 Apr 2025</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <div class="p-3 text-lg-end">
                                <div class="mb-4">
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-white shadow-sm rounded-circle d-inline-flex align-items-center p-2 fs-14 me-2"><i
                                            class="ti ti-phone"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-white shadow-sm rounded-circle d-inline-flex align-items-center p-2 fs-14 me-2"><i
                                            class="ti ti-message-circle"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-white shadow-sm rounded-circle d-inline-flex align-items-center p-2 fs-14"><i
                                            class="ti ti-video"></i></a>
                                </div>
                                <a href="patient-appointment-details.html" class="btn btn-primary"><i
                                        class="ti ti-calendar-event me-1"></i>Book Apppointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card end -->

                <!-- row start -->
                <div class="row">
                    <div class="col-xl-5 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header">
                                <h5 class="fw-bold mb-0"><i class="ti ti-user-star me-1"></i>About</h5>
                            </div>
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="d-flex align-items-center mb-3">
                                            <span
                                                class="avatar rounded-circle bg-light text-dark flex-shrink-0 me-2"><i
                                                    class="ti ti-calendar-event fs-16"></i></span>
                                            <div>
                                                <h6 class="fs-13 fw-bold mb-1">DOB</h6>
                                                <p class="mb-0">25 Jan 1990</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="d-flex align-items-center mb-3">
                                            <span
                                                class="avatar rounded-circle bg-light text-dark flex-shrink-0 me-2"><i
                                                    class="ti ti-droplet fs-16"></i></span>
                                            <div>
                                                <h6 class="fs-13 fw-bold mb-1">Blood Group</h6>
                                                <p class="mb-0">O +ve</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="d-flex align-items-center mb-3">
                                            <span
                                                class="avatar rounded-circle bg-light text-dark flex-shrink-0 me-2"><i
                                                    class="ti ti-gender-male fs-16"></i></span>
                                            <div>
                                                <h6 class="fs-13 fw-bold mb-1">Gender</h6>
                                                <p class="mb-0">Male</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="d-flex align-items-center mb-3">
                                            <span
                                                class="avatar rounded-circle bg-light text-dark flex-shrink-0 me-2"><i
                                                    class="ti ti-mail fs-16"></i></span>
                                            <div>
                                                <h6 class="fs-13 fw-bold mb-1">Email</h6>
                                                <p class="mb-0 text-break"><a
                                                        href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="7f1e131d1a0d0b103f1a071e120f131a511c1012">[email&#160;protected]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header">
                                <h5 class="fw-bold mb-0"><i class="ti ti-book me-1"></i>Vital Signs</h5>
                            </div>
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <span
                                                class="avatar rounded-2 bg-light text-dark flex-shrink-0 me-2 border"><i
                                                    class="ti ti-droplet fs-16"></i></span>
                                            <div>
                                                <h6 class="fs-13 fw-bold mb-1 text-truncate">Blood Pressure</h6>
                                                <p class="mb-0 d-inline-flex align-items-center text-truncate"><i
                                                        class="ti ti-point-filled me-1 text-success fs-18"></i>100/67
                                                    mmHg</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <span
                                                class="avatar rounded-2 bg-light text-dark flex-shrink-0 me-2 border"><i
                                                    class="ti ti-heart-rate-monitor fs-16"></i></span>
                                            <div>
                                                <h6 class="fs-13 fw-bold mb-1 text-truncate">Heart Rate</h6>
                                                <p class="mb-0 d-inline-flex align-items-center text-truncate"><i
                                                        class="ti ti-point-filled me-1 text-danger fs-18"></i>89 Bpm
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <span
                                                class="avatar rounded-2 bg-light text-dark flex-shrink-0 me-2 border"><i
                                                    class="ti ti-hexagons fs-16"></i></span>
                                            <div>
                                                <h6 class="fs-13 fw-bold mb-1">SPO2</h6>
                                                <p class="mb-0 d-inline-flex align-items-center text-truncate"><i
                                                        class="ti ti-point-filled me-1 text-success fs-18"></i>98 %</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <span
                                                class="avatar rounded-2 bg-light text-dark flex-shrink-0 me-2 border"><i
                                                    class="ti ti-temperature fs-16"></i></span>
                                            <div>
                                                <h6 class="fs-13 fw-bold mb-1 text-truncate">Temperature</h6>
                                                <p class="mb-0 d-inline-flex align-items-center text-truncate"><i
                                                        class="ti ti-point-filled me-1 text-success fs-18"></i>101 C
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <span
                                                class="avatar rounded-2 bg-light text-dark flex-shrink-0 me-2 border"><i
                                                    class="ti ti-activity fs-16"></i></span>
                                            <div>
                                                <h6 class="fs-13 fw-bold mb-1 text-truncate">Respiratory Rate</h6>
                                                <p class="mb-0 d-inline-flex align-items-center text-truncate"><i
                                                        class="ti ti-point-filled me-1 text-danger fs-18"></i>24 rpm
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <span
                                                class="avatar rounded-2 bg-light text-dark flex-shrink-0 me-2 border"><i
                                                    class="ti ti-weight fs-16"></i></span>
                                            <div>
                                                <h6 class="fs-13 fw-bold mb-1 text-truncate">Weight</h6>
                                                <p class="mb-0 d-inline-flex align-items-center text-truncate"><i
                                                        class="ti ti-point-filled me-1 text-success fs-18"></i>100 kg
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->

                <!-- tab start -->
                <ul class="nav nav-tabs nav-bordered mb-3">
                    <li class="nav-item">
                        <a href="doctors-patient-details.html#appointments" data-bs-toggle="tab"
                            aria-expanded="false" class="nav-link active bg-transparent">
                            <span>Appointments</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="doctors-patient-details.html#transactions" data-bs-toggle="tab" aria-expanded="true"
                            class="nav-link bg-transparent">
                            <span>Transactions</span>
                        </a>
                    </li>
                </ul>
                <!-- tab end -->

                <!-- tab content start -->
                <div class="tab-content">
                    <div class="tab-pane show active" id="appointments">

                        <!--  Start Filter -->
                        <div class=" d-flex align-items-center justify-content-between flex-wrap">
                            <div class="d-flex align-items-center gap-2">
                                <div class="search-set mb-3">
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <div class="table-search d-flex align-items-center mb-0">
                                            <div class="search-input">
                                                <a href="javascript:void(0);" class="btn-searchset"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex right-content align-items-center flex-wrap mb-3">
                                    <div class="reportrange-picker d-flex align-items-center reportrange">
                                        <i class="ti ti-calendar text-gray-5 fs-14 me-1"></i><span
                                            class="reportrange-picker-field">16 Apr 25 - 16 Apr 25</span>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="d-flex table-dropdown mb-3 right-content align-items-center flex-wrap row-gap-3">
                                <div class="dropdown me-2">
                                    <a href="javascript:void(0);"
                                        class="bg-white border rounded btn btn-md text-dark fs-14 py-1 align-items-center d-flex fw-normal"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <i class="ti ti-filter text-gray-5 me-1"></i>Filters
                                    </a>
                                    <div class="dropdown-menu dropdown-lg dropdown-menu-end filter-dropdown p-0">
                                        <div
                                            class="d-flex align-items-center justify-content-between border-bottom filter-header">
                                            <h4 class="mb-0 fw-bold">Filter</h4>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);"
                                                    class="link-danger text-decoration-underline">Clear All</a>
                                            </div>
                                        </div>
                                        <form action="doctors-patient-details.html#">
                                            <div class="filter-body pb-0">
                                                <div class="mb-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-label">Doctor</label>
                                                        <a href="javascript:void(0);"
                                                            class="link-primary mb-1">Reset</a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-toggle btn bg-white  d-flex align-items-center justify-content-start fs-13 p-2 fw-normal border"
                                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="true">
                                                            Select <i class="ti ti-chevron-down ms-auto"></i>
                                                        </a>
                                                        <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                            <div class="mb-3">
                                                                <div
                                                                    class="input-icon-start input-icon position-relative">
                                                                    <span class="input-icon-addon fs-12">
                                                                        <i class="ti ti-search"></i>
                                                                    </span>
                                                                    <input type="text"
                                                                        class="form-control form-control-md"
                                                                        placeholder="Search">
                                                                </div>
                                                            </div>
                                                            <ul class="mb-3">
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        <span
                                                                            class="avatar avatar-xs rounded-circle me-2"><img
                                                                                src="{{ URL::asset('') }}assets/img/doctors/doctor-01.jpg"
                                                                                class="flex-shrink-0 rounded-circle"
                                                                                alt="img"></span>Dr. Mick Thompson
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        <span
                                                                            class="avatar avatar-xs rounded-circle me-2"><img
                                                                                src="{{ URL::asset('') }}assets/img/doctors/doctor-02.jpg"
                                                                                class="flex-shrink-0 rounded-circle"
                                                                                alt="img"></span>Dr. Sarah Johnson
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        <span
                                                                            class="avatar avatar-xs rounded-circle me-2"><img
                                                                                src="{{ URL::asset('') }}assets/img/doctors/doctor-03.jpg"
                                                                                class="flex-shrink-0 rounded-circle"
                                                                                alt="img"></span>Dr. Emily Carter
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        <span
                                                                            class="avatar avatar-xs rounded-circle me-2"><img
                                                                                src="{{ URL::asset('') }}assets/img/doctors/doctor-04.jpg"
                                                                                class="flex-shrink-0 rounded-circle"
                                                                                alt="img"></span>Dr. David Lee
                                                                    </label>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        <span
                                                                            class="avatar avatar-xs rounded-circle me-2"><img
                                                                                src="{{ URL::asset('') }}assets/img/doctors/doctor-05.jpg"
                                                                                class="flex-shrink-0 rounded-circle"
                                                                                alt="img"></span>Dr. Anna Kim
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                            <div class="row g-2">
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-outline-white w-100 close-filter">Cancel</a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary w-100">Select</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-label">Designation</label>
                                                        <a href="javascript:void(0);"
                                                            class="link-primary mb-1">Reset</a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-toggle btn bg-white  d-flex align-items-center justify-content-start fs-13 p-2 fw-normal border"
                                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="true">
                                                            Select <i class="ti ti-chevron-down ms-auto"></i>
                                                        </a>
                                                        <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                            <div class="mb-3">
                                                                <div
                                                                    class="input-icon-start input-icon position-relative">
                                                                    <span class="input-icon-addon fs-12">
                                                                        <i class="ti ti-search"></i>
                                                                    </span>
                                                                    <input type="text"
                                                                        class="form-control form-control-md"
                                                                        placeholder="Search">
                                                                </div>
                                                            </div>
                                                            <ul class="mb-3">
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Cardiologist
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Orthopedic Surgeon
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Pediatrician
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Gynecologist
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Psychiatrist
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Neurosurgeon
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Oncologist
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Pulmonologist
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Urologist
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Dermatologist
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                            <div class="row g-2">
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-outline-white w-100 close-filter">Cancel</a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary w-100">Select</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-label">Mode</label>
                                                        <a href="javascript:void(0);"
                                                            class="link-primary mb-1">Reset</a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-toggle btn bg-white  d-flex align-items-center justify-content-start fs-13 p-2 fw-normal border"
                                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="true">
                                                            Select <i class="ti ti-chevron-down ms-auto"></i>
                                                        </a>
                                                        <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                            <div class="mb-3">
                                                                <div
                                                                    class="input-icon-start input-icon position-relative">
                                                                    <span class="input-icon-addon fs-12">
                                                                        <i class="ti ti-search"></i>
                                                                    </span>
                                                                    <input type="text"
                                                                        class="form-control form-control-md"
                                                                        placeholder="Search">
                                                                </div>
                                                            </div>
                                                            <ul class="mb-3">
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        In Person
                                                                    </label>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Online
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                            <div class="row g-2">
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-outline-white w-100 close-filter">Cancel</a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary w-100">Select</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Date<span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-icon-end position-relative">
                                                        <input type="text" class="form-control bookingrange"
                                                            placeholder="dd/mm/yyyy">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-label">Status</label>
                                                        <a href="javascript:void(0);"
                                                            class="link-primary mb-1">Reset</a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-toggle btn bg-white  d-flex align-items-center justify-content-start fs-13 p-2 fw-normal border"
                                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="true">
                                                            Select <i class="ti ti-chevron-down ms-auto"></i>
                                                        </a>
                                                        <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                            <div class="mb-3">
                                                                <div
                                                                    class="input-icon-start input-icon position-relative">
                                                                    <span class="input-icon-addon fs-12">
                                                                        <i class="ti ti-search"></i>
                                                                    </span>
                                                                    <input type="text"
                                                                        class="form-control form-control-md"
                                                                        placeholder="Search">
                                                                </div>
                                                            </div>
                                                            <ul class="mb-3">
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Checked Out
                                                                    </label>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Checked In
                                                                    </label>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Cancelled
                                                                    </label>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Schedule
                                                                    </label>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Confirmed
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                            <div class="row g-2">
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-outline-white w-100 close-filter">Cancel</a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary w-100">Select</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="filter-footer d-flex align-items-center justify-content-end border-top">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-light btn-md me-2 fw-medium close-filter">Close</a>
                                                <button type="submit"
                                                    class="btn btn-primary btn-md fw-medium">Filter</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  End Filter -->

                        <!--  Start Table -->
                        <div class="table-responsive">
                            <table class="table datatable table-nowrap">
                                <thead class="">
                                    <tr>
                                        <th class="no-sort">
                                            Date & Time
                                        </th>
                                        <th>Doctor Name</th>
                                        <th>Mode</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>30 Apr 2025 - 09:30 AM</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="patient-doctors.html" class="avatar me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('') }}assets/img/doctors/doctor-01.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1 text-truncate"><a
                                                            href="patient-doctors.html" class="fw-semibold">Dr. Mick
                                                            Thompson</a></h6>
                                                    <p class="mb-0 fs-13 text-truncate">Cardiologist</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            In-person
                                        </td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-info rounded text-info fw-medium">Checked
                                                Out</span> </td>
                                        <td class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#view_details">View</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>15 Apr 2025 - 11:20 AM</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="patient-doctors.html" class="avatar me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('') }}assets/img/doctors/doctor-02.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1 text-truncate"><a
                                                            href="patient-doctors.html" class="fw-semibold">Dr. Sarah
                                                            Johnson</a></h6>
                                                    <p class="mb-0 fs-13 text-truncate">Orthopedic Surgeon</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Online
                                        </td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-warning rounded text-warning fw-medium">Checked
                                                In</span> </td>
                                        <td class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#view_details">View</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>02 Apr 2025 - 08:15 AM</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="patient-doctors.html" class="avatar me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('') }}assets/img/doctors/doctor-03.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1 text-truncate"><a
                                                            href="patient-doctors.html" class="fw-semibold">Dr. Emily
                                                            Carter</a></h6>
                                                    <p class="mb-0 fs-13 text-truncate">Pediatrician</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            In-Person
                                        </td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-danger rounded text-danger fw-medium">Cancelled</span>
                                        </td>
                                        <td class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#view_details">View</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>27 Mar 2025 - 02:00 PM</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="patient-doctors.html" class="avatar me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('') }}assets/img/doctors/doctor-04.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1 text-truncate"><a
                                                            href="patient-doctors.html" class="fw-semibold">Dr. David
                                                            Lee</a></h6>
                                                    <p class="mb-0 fs-13 text-truncate">Gynecologist</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            30 Apr 2025
                                        </td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-info rounded text-info fw-medium">Schedule</span>
                                        </td>
                                        <td class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#view_details">View</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>12 Mar 2025 - 05:40 PM</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="patient-doctors.html" class="avatar me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('') }}assets/img/doctors/doctor-05.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1 text-truncate"><a
                                                            href="patient-doctors.html" class="fw-semibold">Dr. Anna
                                                            Kim</a></h6>
                                                    <p class="mb-0 fs-13 text-truncate">Psychiatrist</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Online
                                        </td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-success rounded text-success fw-medium">Confirmed</span>
                                        </td>
                                        <td class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#view_details">View</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>24 Feb 2025 - 09:20 AM</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="patient-doctors.html" class="avatar me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('') }}assets/img/doctors/doctor-06.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1 text-truncate"><a
                                                            href="patient-doctors.html" class="fw-semibold">Dr. John
                                                            Smith</a></h6>
                                                    <p class="mb-0 fs-13 text-truncate">Neurosurgeon</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            In-Person
                                        </td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-danger rounded text-danger fw-medium">Cancelled</span>
                                        </td>
                                        <td class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#view_details">View</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>16 Feb 2025 - 11:40 AM</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="patient-doctors.html" class="avatar me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('') }}assets/img/doctors/doctor-07.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1 text-truncate"><a
                                                            href="patient-doctors.html" class="fw-semibold">Dr. Lisa
                                                            White</a></h6>
                                                    <p class="mb-0 fs-13 text-truncate">Oncologist</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Online
                                        </td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-success rounded text-success fw-medium">Confirmed</span>
                                        </td>
                                        <td class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#view_details">View</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>01 Feb 2025 - 04:00 PM</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="patient-doctors.html" class="avatar me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('') }}assets/img/doctors/doctor-08.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1 text-truncate"><a
                                                            href="patient-doctors.html" class="fw-semibold">Dr.
                                                            Patricia Brown</a></h6>
                                                    <p class="mb-0 fs-13 text-truncate">Pulmonologist</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Online
                                        </td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-info rounded text-info fw-medium">Checked
                                                Out</span> </td>
                                        <td class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#view_details">View</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>25 Jan 2025 - 03:10 PM</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="patient-doctors.html" class="avatar me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('') }}assets/img/doctors/doctor-09.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1 text-truncate"><a
                                                            href="patient-doctors.html" class="fw-semibold">Dr. Rachel
                                                            Green</a></h6>
                                                    <p class="mb-0 fs-13 text-truncate">Urologist</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Online
                                        </td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-primary rounded text-primary fw-medium">Schedule</span>
                                        </td>
                                        <td class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#view_details">View</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>12 Jan 2025 - 03:10 PM</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="patient-doctors.html" class="avatar me-2 flex-shrink-0">
                                                    <img src="{{ URL::asset('') }}assets/img/doctors/doctor-10.jpg"
                                                        alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                    <h6 class="fs-14 mb-1 text-truncate"><a
                                                            href="patient-doctors.html" class="fw-semibold">Dr.
                                                            Michael Smith</a></h6>
                                                    <p class="mb-0 fs-13 text-truncate">Cardiologist</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            In-Person
                                        </td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-danger rounded text-danger fw-medium">cancelled</span>
                                        </td>
                                        <td class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="offcanvas"
                                                        data-bs-target="#view_details">View</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_modal">Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--  End Table -->

                    </div>
                    <div class="tab-pane" id="transactions">

                        <!--  Start Filter -->
                        <div class=" d-flex align-items-center justify-content-between flex-wrap">
                            <div class="d-flex align-items-center gap-2">
                                <div class="search-set mb-3">
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <div class="table-search d-flex align-items-center mb-0">
                                            <div class="search-input">
                                                <a href="javascript:void(0);" class="btn-searchset"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex right-content align-items-center flex-wrap mb-3">
                                    <div class="reportrange-picker d-flex align-items-center reportrange">
                                        <i class="ti ti-calendar text-gray-5 fs-14 me-1"></i><span
                                            class="reportrange-picker-field">16 Apr 25 - 16 Apr 25</span>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="d-flex table-dropdown mb-3 right-content align-items-center flex-wrap row-gap-3">
                                <div class="dropdown me-2">
                                    <a href="javascript:void(0);"
                                        class="bg-white border rounded btn btn-md text-dark fs-14 py-1 align-items-center d-flex fw-normal"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                        <i class="ti ti-filter text-gray-5 me-1"></i>Filters
                                    </a>
                                    <div class="dropdown-menu dropdown-lg dropdown-menu-end filter-dropdown p-0">
                                        <div
                                            class="d-flex align-items-center justify-content-between border-bottom filter-header">
                                            <h4 class="mb-0 fw-bold">Filter</h4>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);"
                                                    class="link-danger text-decoration-underline">Clear All</a>
                                            </div>
                                        </div>
                                        <form action="doctors-patient-details.html#">
                                            <div class="filter-body pb-0">
                                                <div class="mb-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-label">Transaction ID</label>
                                                        <a href="javascript:void(0);"
                                                            class="link-primary mb-1">Reset</a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-toggle btn bg-white  d-flex align-items-center justify-content-start fs-13 p-2 fw-normal border"
                                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="true">
                                                            Select <i class="ti ti-chevron-down ms-auto"></i>
                                                        </a>
                                                        <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                            <div class="mb-3">
                                                                <div
                                                                    class="input-icon-start input-icon position-relative">
                                                                    <span class="input-icon-addon fs-12">
                                                                        <i class="ti ti-search"></i>
                                                                    </span>
                                                                    <input type="text"
                                                                        class="form-control form-control-md"
                                                                        placeholder="Search">
                                                                </div>
                                                            </div>
                                                            <ul class="mb-3">
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        #TNX0025
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        #TNX0024
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        #TNX0023
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        #TNX0022
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        #TNX0021
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        #TNX0020
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        #TNX0019
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                            <div class="row g-2">
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-outline-white w-100 close-filter">Cancel</a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary w-100">Select</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-label">Description</label>
                                                        <a href="javascript:void(0);"
                                                            class="link-primary mb-1">Reset</a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-toggle btn bg-white  d-flex align-items-center justify-content-start fs-13 p-2 fw-normal border"
                                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="true">
                                                            Select <i class="ti ti-chevron-down ms-auto"></i>
                                                        </a>
                                                        <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                            <div class="mb-3">
                                                                <div
                                                                    class="input-icon-start input-icon position-relative">
                                                                    <span class="input-icon-addon fs-12">
                                                                        <i class="ti ti-search"></i>
                                                                    </span>
                                                                    <input type="text"
                                                                        class="form-control form-control-md"
                                                                        placeholder="Search">
                                                                </div>
                                                            </div>
                                                            <ul class="mb-3">
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        General Consultation
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Dental Cleaning
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Eye Checkup
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        X-Ray
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Physiotherapy Session
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Cardiac Screening
                                                                    </label>
                                                                </li>
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Skin Allergy Test
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                            <div class="row g-2">
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-outline-white w-100 close-filter">Cancel</a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary w-100">Select</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Date<span
                                                            class="text-danger">*</span></label>
                                                    <div class="input-icon-end position-relative">
                                                        <input type="text" class="form-control datetimepicker"
                                                            placeholder="dd/mm/yyyy">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-label">Payment Method</label>
                                                        <a href="javascript:void(0);"
                                                            class="link-primary mb-1">Reset</a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-toggle btn bg-white  d-flex align-items-center justify-content-start fs-13 p-2 fw-normal border"
                                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="true">
                                                            Select <i class="ti ti-chevron-down ms-auto"></i>
                                                        </a>
                                                        <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                            <div class="mb-3">
                                                                <div
                                                                    class="input-icon-start input-icon position-relative">
                                                                    <span class="input-icon-addon fs-12">
                                                                        <i class="ti ti-search"></i>
                                                                    </span>
                                                                    <input type="text"
                                                                        class="form-control form-control-md"
                                                                        placeholder="Search">
                                                                </div>
                                                            </div>
                                                            <ul class="mb-3">
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        PayPal
                                                                    </label>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Debit Card
                                                                    </label>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Cheque
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                            <div class="row g-2">
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-outline-white w-100 close-filter">Cancel</a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary w-100">Select</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Amount</label>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-toggle form-control"
                                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="true">
                                                            Select
                                                        </a>
                                                        <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                            <div class="filter-range">
                                                                <input type="text" id="range_03">
                                                                <p>Range : <span class="text-gray-9">$200 -
                                                                        $5695</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="form-label">Status</label>
                                                        <a href="javascript:void(0);"
                                                            class="link-primary mb-1">Reset</a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-toggle btn bg-white  d-flex align-items-center justify-content-start fs-13 p-2 fw-normal border"
                                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="true">
                                                            Select <i class="ti ti-chevron-down ms-auto"></i>
                                                        </a>
                                                        <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                            <div class="mb-3">
                                                                <div
                                                                    class="input-icon-start input-icon position-relative">
                                                                    <span class="input-icon-addon fs-12">
                                                                        <i class="ti ti-search"></i>
                                                                    </span>
                                                                    <input type="text"
                                                                        class="form-control form-control-md"
                                                                        placeholder="Search">
                                                                </div>
                                                            </div>
                                                            <ul class="mb-3">
                                                                <li class="mb-1">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Completed
                                                                    </label>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <label
                                                                        class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                        <input class="form-check-input m-0 me-2"
                                                                            type="checkbox">
                                                                        Pending
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                            <div class="row g-2">
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-outline-white w-100 filter-close">Cancel</a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-primary w-100">Select</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="filter-footer d-flex align-items-center justify-content-end border-top">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-light btn-md me-2 fw-medium close-filter">Close</a>
                                                <button type="submit"
                                                    class="btn btn-primary btn-md fw-medium">Filter</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  End Filter -->

                        <!--  Start Table -->
                        <div class="table-responsive">
                            <table class="table table-nowrap datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="no-sort">
                                            Transaction ID
                                        </th>
                                        <th>Description</th>
                                        <th>Paid Date</th>
                                        <th>Payment Method</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <a href="javascript:void(0);">#TNX0025</a></td>
                                        <td class="text-dark"> General Consultation </td>
                                        <td class="text-dark"> 30 Apr 2025</td>
                                        <td class="text-dark"> PayPal</td>
                                        <td class="text-dark"> $800</td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-success rounded text-success fw-medium border border-success">Completed</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <a href="javascript:void(0);">#TNX0024</a></td>
                                        <td class="text-dark">Dental Cleaning</td>
                                        <td class="text-dark"> 15 Apr 2025</td>
                                        <td class="text-dark"> Debit Card </td>
                                        <td class="text-dark"> $930</td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-info rounded text-info fw-medium border border-info">Pending</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <a href="javascript:void(0);">#TNX0023</a></td>
                                        <td class="text-dark"> Eye Checkup </td>
                                        <td class="text-dark"> 02 Apr 2025 </td>
                                        <td class="text-dark"> Cheque </td>
                                        <td class="text-dark"> $850</td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-success rounded text-success fw-medium border border-success">Completed</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <a href="javascript:void(0);">#TNX0022</a></td>
                                        <td class="text-dark"> X-Ray </td>
                                        <td class="text-dark"> 27 Mar 2025 </td>
                                        <td class="text-dark"> Debit Card</td>
                                        <td class="text-dark"> $80</td>

                                        <td> <span
                                                class="badge fs-13 badge-soft-success rounded text-success fw-medium border border-success">Completed</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <a href="javascript:void(0);">#TNX0021</a></td>
                                        <td class="text-dark">
                                            Physiotherapy Session
                                        </td>
                                        <td class="text-dark"> 12 Mar 2025</td>
                                        <td class="text-dark"> PayPal</td>
                                        <td class="text-dark"> $650</td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-success rounded text-success fw-medium border border-success">Completed</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <a href="javascript:void(0);">#TNX0020</a></td>
                                        <td class="text-dark">
                                            Cardiac Screening
                                        </td>
                                        <td class="text-dark"> 05 Mar 2025 </td>
                                        <td class="text-dark"> Cheque </td>
                                        <td class="text-dark"> $430 </td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-success rounded text-success fw-medium border border-success">Completed</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <a href="javascript:void(0);">#TNX0019</a></td>
                                        <td class="text-dark">
                                            Skin Allergy Test
                                        </td>
                                        <td class="text-dark"> 24 Feb 2025 </td>
                                        <td class="text-dark"> Debit Card </td>
                                        <td class="text-dark"> $300</td>

                                        <td> <span
                                                class="badge fs-13 badge-soft-info rounded text-info fw-medium border border-info">Pending</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <a href="javascript:void(0);">#TNX0018</a></td>
                                        <td class="text-dark">
                                            Blood Test
                                        </td>
                                        <td class="text-dark"> 16 Feb 2025 </td>
                                        <td class="text-dark"> Cheque </td>
                                        <td class="text-dark"> $450</td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-success rounded text-success fw-medium border border-success">Completed</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <a href="javascript:void(0);">#TNX0017</a></td>
                                        <td class="text-dark">
                                            ENT Consultation
                                        </td>
                                        <td class="text-dark"> 01 Feb 2025 </td>
                                        <td class="text-dark"> Debit Card </td>
                                        <td class="fw-semibold text-dark"> $570</td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-success rounded text-success fw-medium border border-success">
                                                completed</span> </td>
                                    </tr>
                                    <tr>
                                        <td> <a href="javascript:void(0);">#TNX0017</a></td>
                                        <td class="text-dark">
                                            Nutrition Counseling
                                        </td>
                                        <td class="text-dark"> 25 Jan 2025 </td>
                                        <td class="text-dark"> PayPal</td>
                                        <td class="text-dark"> $800</td>
                                        <td> <span
                                                class="badge fs-13 badge-soft-success rounded text-success fw-medium border border-success">Completed</span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!--  End Table -->

                    </div>
                </div>
                <!-- tab content end -->

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script data-cfasync="false" src="{{ URL::asset('') }}assets/email-decode.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="a3677d3be43b1a84cb72937a-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="a3677d3be43b1a84cb72937a-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="a3677d3be43b1a84cb72937a-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="a3677d3be43b1a84cb72937a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="a3677d3be43b1a84cb72937a-text/javascript"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="a3677d3be43b1a84cb72937a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="a3677d3be43b1a84cb72937a-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="a3677d3be43b1a84cb72937a-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/social-feed.js" type="a3677d3be43b1a84cb72937a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/email.js" type="a3677d3be43b1a84cb72937a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="a3677d3be43b1a84cb72937a-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="a3677d3be43b1a84cb72937a-|49" defer>
    </script>
</body>

</html>
