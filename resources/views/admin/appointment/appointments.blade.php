<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Appointments - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Font Awosome Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

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

        @include('admin.layouts.menu')

        <div class="page-wrapper">

            <!-- Start Content -->
            <div class="content">

                <!-- Start Page Header -->
                <div
                    class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 pb-3 mb-3 border-1 border-bottom">
                    <div class="flex-grow-1">
                        <h4 class="fw-semibold mb-0"> Appointment </h4>
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
                                    <a class="dropdown-item" href="appointments.html#">Download as PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="appointments.html#">Download as Excel</a>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ url('new-appointment') }}" class="btn btn-primary ms-2 fs-13 btn-md"><i
                                class="ti ti-plus me-1"></i> Nouveau rendez-vous </a>
                    </div>
                </div>
                <!-- End Page Header -->

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
                            <div id="reportrange" class="reportrange-picker d-flex align-items-center">
                                <i class="ti ti-calendar text-gray-5 fs-14 me-1"></i><span
                                    class="reportrange-picker-field">16 Apr 25 - 16 Apr 25</span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex table-dropdown mb-3 right-content align-items-center flex-wrap row-gap-3">
                        <div class="dropdown me-2">
                            <a href="javascript:void(0);"
                                class="bg-white border rounded btn btn-md text-dark fs-14 py-1 align-items-center d-flex fw-normal"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <i class="ti ti-filter text-gray-5 me-1"></i>Filters
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end filter-dropdown p-0"
                                id="filter-dropdown">
                                <div
                                    class="d-flex align-items-center justify-content-between border-bottom filter-header">
                                    <h4 class="mb-0 fw-bold">Filter</h4>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="link-danger text-decoration-underline">Clear All</a>
                                    </div>
                                </div>
                                <form action="appointments.html#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Patient</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
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
                                                        <div class="input-icon-start input-icon position-relative">
                                                            <span class="input-icon-addon fs-12">
                                                                <i class="ti ti-search"></i>
                                                            </span>
                                                            <input type="text" class="form-control form-control-md"
                                                                placeholder="Search">
                                                        </div>
                                                    </div>
                                                    <ul class="mb-3">
                                                        <li class="mb-1">
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img
                                                                        src="{{ URL::asset('') }}assets/img/users/user-33.jpg"
                                                                        class="flex-shrink-0 rounded-circle"
                                                                        alt="img"></span>Alberto Ripley
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img
                                                                        src="{{ URL::asset('') }}assets/img/users/user-12.jpg"
                                                                        class="flex-shrink-0 rounded-circle"
                                                                        alt="img"></span>Bernard Griffith
                                                            </label>
                                                        </li>
                                                        <li class="mb-1">
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img
                                                                        src="{{ URL::asset('') }}assets/img/users/user-02.jpg"
                                                                        class="flex-shrink-0 rounded-circle"
                                                                        alt="img"></span>Carol Lam
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img
                                                                        src="{{ URL::asset('') }}assets/img/users/user-08.jpg"
                                                                        class="flex-shrink-0 rounded-circle"
                                                                        alt="img"></span>Ezra Belcher
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
                                                <label class="form-label">Doctor</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
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
                                                        <div class="input-icon-start input-icon position-relative">
                                                            <span class="input-icon-addon fs-12">
                                                                <i class="ti ti-search"></i>
                                                            </span>
                                                            <input type="text" class="form-control form-control-md"
                                                                placeholder="Search">
                                                        </div>
                                                    </div>
                                                    <ul class="mb-3">
                                                        <li class="mb-1">
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img
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
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img
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
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img
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
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img
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
                                                                <span class="avatar avatar-xs rounded-circle me-2"><img
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
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
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
                                                        <div class="input-icon-start input-icon position-relative">
                                                            <span class="input-icon-addon fs-12">
                                                                <i class="ti ti-search"></i>
                                                            </span>
                                                            <input type="text" class="form-control form-control-md"
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
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
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
                                                        <div class="input-icon-start input-icon position-relative">
                                                            <span class="input-icon-addon fs-12">
                                                                <i class="ti ti-search"></i>
                                                            </span>
                                                            <input type="text" class="form-control form-control-md"
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
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
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
                                                        <div class="input-icon-start input-icon position-relative">
                                                            <span class="input-icon-addon fs-12">
                                                                <i class="ti ti-search"></i>
                                                            </span>
                                                            <input type="text" class="form-control form-control-md"
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
                                        <a href="javascript:void(0);" class="btn btn-light btn-md me-2 fw-medium"
                                            id="close-filter">Close</a>
                                        <button type="submit"
                                            class="btn btn-primary btn-md fw-medium">Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn bg-white btn-md d-inline-flex align-items-center fw-normal rounded border text-dark px-2 py-1 fs-14"
                                data-bs-toggle="dropdown">
                                <span class="me-1"> Sort By : </span> Recent
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-2">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Recent</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Oldest</a>
                                </li>
                            </ul>
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
                                <th>Patient</th>
                                <th>Doctor</th>
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
                                        <a href="patient-details.html" class="avatar avatar-md me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-01.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="patient-details.html" class="text-dark fw-semibold">Alberto Ripley
                                            <span class="text-body fs-13 fw-normal d-block"> +1 56556 54565 </span>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-01.jpg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 mb-1 text-truncate"><a href="doctor-details.html"
                                                    class="fw-semibold">Dr. Mick Thompson</a></h6>
                                            <p class="mb-0 fs-13 text-truncate">Cardiologist</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    In-person
                                    Online
                                    30 Apr 2025
                                </td>
                                <td>
                                    <span class="fs-13 badge badge-soft-info rounded text-info fw-medium">Checked
                                        Out</span>
                                        <span
                                        class="badge fs-13 badge-soft-primary rounded text-primary fw-medium">Schedule</span>
                                        <span
                                        class="badge fs-13 badge-soft-warning rounded text-warning fw-medium">Checked
                                        In</span>
                                        <span
                                        class="badge fs-13 badge-soft-danger rounded text-danger fw-medium">Cancelled</span>
                                        <span
                                        class="badge fs-13 badge-soft-success rounded text-success fw-medium">Confirmed</span>
                                    </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center"
                                                data-bs-toggle="offcanvas" data-bs-target="#view_details">View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
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
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- Start View Details -->
    <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1" id="view_details">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold">Appointment Details <span
                        class="badge badge-soft-primary border pt-1 px-2 border-primary fw-medium ms-2">#AP544658</span>
                </h5>
                <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
        </div>
        <div class="offcanvas-body pt-0 px-0">
            <h6 class="bg-light py-2 px-3 fw-bold"> When & Where </h6>
            <div class="px-3 my-4">
                <div class="bg-light p-3 mb-3 border rounded-3 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0);" class="avatar avatar-md me-2">
                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-03.jpg" alt="product"
                                class="rounded-circle">
                        </a>
                        <a href="javascript:void(0);" class="text-dark fw-semibold">Dr. Emily Carter <span
                                class="text-body fs-13 fw-normal d-block">Pediatrician </span> </a>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="javascript:void(0);"
                            class="btn btn-outline-white bg-white fs-14 d-inline-flex border rounded-2 p-1 me-1">
                            <i class="ti ti-brand-hipchat"></i>
                        </a>
                        <a href="javascript:void(0);"
                            class="btn btn-outline-white bg-white shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                            <i class="ti ti-video"></i>
                        </a>
                    </div>
                </div>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Appointment On
                    <span class="text-body fw-normal"> Saturday, 25 Apr 2025 </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Time <span
                        class="text-body fw-normal"> 09:00 AM - 11:00 AM </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Location <span
                        class="text-body fw-normal">Newyork , USA </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Appointment
                    Type <span class="text-body fw-normal"> Online Consultation </span> </p>
                <div class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Patient
                    Details
                    <div class="text-body fw-normal d-flex align-items-center">
                        <div class="avatar avatar-xs flex-shrink-0">
                            <img src="{{ URL::asset('') }}assets/img/users/avatar-2.jpg" alt=""
                                class="rounded-circle me-1 flex-shrink-0">
                        </div>
                        James Adrian
                    </div>
                </div>
            </div>
            <h6 class="bg-light py-2 px-3 text-dark fw-bold"> Appointment Details </h6>
            <div class="px-3 my-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center">
                        Telehealth
                        <label class="d-flex align-items-center form-switch ps-1">
                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                        </label>
                    </div>
                    <div> <a href="appointment-consultations.html"
                            class="btn-primary btn btn-sm rounded d-flex align-items-center"> <i
                                class="ti ti-video me-1"></i> Start </a></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p class="text-dark"> Status </p>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="mb-3">
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Pending
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-0 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Checked Out
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Checked In
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Cancelled
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Scheduled
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Add New Appointment-->

    <!-- Start Delete Modal  -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center position-relative">
                    <img src="{{ URL::asset('') }}assets/img/bg/delete-modal-bg-01.png" alt=""
                        class="img-fluid position-absolute top-0 start-0 z-0">
                    <img src="{{ URL::asset('') }}assets/img/bg/delete-modal-bg-02.png" alt=""
                        class="img-fluid position-absolute bottom-0 end-0 z-0">
                    <div class="mb-3 position-relative z-1">
                        <span class="avatar avatar-lg bg-danger text-white"><i class="ti ti-trash fs-24"></i></span>
                    </div>
                    <h5 class="fw-bold mb-1 position-relative z-1">Delete Confirmation</h5>
                    <p class="mb-3 position-relative z-1">Are you sure want to delete?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3"
                            data-bs-dismiss="modal">Cancel</a>
                        <a href="appointments.html" class="btn btn-danger position-relative z-1"
                            data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="04798eb7173330a38b46e596-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="04798eb7173330a38b46e596-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="04798eb7173330a38b46e596-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="04798eb7173330a38b46e596-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="04798eb7173330a38b46e596-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="04798eb7173330a38b46e596-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="04798eb7173330a38b46e596-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="04798eb7173330a38b46e596-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="04798eb7173330a38b46e596-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="04798eb7173330a38b46e596-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="04798eb7173330a38b46e596-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="04798eb7173330a38b46e596-|49" defer>
    </script>
</body>

</html>
