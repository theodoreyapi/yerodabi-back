<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctors Schedules | Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="c4628604bd7c5b5082ee5569-text/javascript"></script>

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

                <!-- Start Row -->
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!-- Start Page Header -->
                        <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 mb-3 pb-3 border-bottom">
                            <div class="flex-grow-1">
                                <h4 class="fw-bold mb-0"> My Schedule</h4>
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
                                            <a class="dropdown-item" href="doctors-schedules.html#">Download as
                                                PDF</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="doctors-schedules.html#">Download as
                                                Excel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Page Header -->


                        <div class="card">
                            <div class="card-body">
                                <div class="border-bottom mb-3">
                                    <h6 class="fw-bold mb-3">Schedule Detail</h6>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Location</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">From</label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker"
                                                        placeholder="dd/mm/yyyy">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">To</label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker"
                                                        placeholder="dd/mm/yyyy">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Recures Every</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>1 Week</option>
                                                    <option>1 Month</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-3">Schedules</h6>
                                    <ul class="nav nav-pills schedule-tab mb-3" id="pills-tab2" role="tablist">
                                        <li class="nav-item me-1" role="presentation">
                                            <button
                                                class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto active"
                                                data-bs-toggle="pill" data-bs-target="#schedules-8" type="button"
                                                role="tab" aria-selected="true">Monday</button>
                                        </li>
                                        <li class="nav-item me-1" role="presentation">
                                            <button
                                                class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                                data-bs-toggle="pill" data-bs-target="#schedules-9" type="button"
                                                role="tab" aria-selected="false" tabindex="-1">Tuesday</button>
                                        </li>
                                        <li class="nav-item me-1" role="presentation">
                                            <button
                                                class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                                data-bs-toggle="pill" data-bs-target="#schedules-10" type="button"
                                                role="tab" aria-selected="false"
                                                tabindex="-1">Wednesday</button>
                                        </li>
                                        <li class="nav-item me-1" role="presentation">
                                            <button
                                                class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                                data-bs-toggle="pill" data-bs-target="#schedules-11" type="button"
                                                role="tab" aria-selected="false" tabindex="-1">Thursday</button>
                                        </li>
                                        <li class="nav-item me-1" role="presentation">
                                            <button
                                                class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                                data-bs-toggle="pill" data-bs-target="#schedules-12" type="button"
                                                role="tab" aria-selected="false" tabindex="-1">Friday</button>
                                        </li>
                                        <li class="nav-item me-1" role="presentation">
                                            <button
                                                class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                                data-bs-toggle="pill" data-bs-target="#schedules-13" type="button"
                                                role="tab" aria-selected="false" tabindex="-1">Saturday</button>
                                        </li>
                                        <li class="nav-item me-1" role="presentation">
                                            <button
                                                class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                                data-bs-toggle="pill" data-bs-target="#schedules-14" type="button"
                                                role="tab" aria-selected="false" tabindex="-1">Sunday</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent2">
                                        <div class="tab-pane fade active show" id="schedules-8" role="tabpanel">
                                            <div class="add-schedule-list">
                                                <div class="row gx-3">
                                                    <div class="col-lg-5">
                                                        <div class="mb-3">
                                                            <label class="form-label">Session</label>
                                                            <select class="select">
                                                                <option>Select</option>
                                                                <option selected>Morning</option>
                                                                <option>Noon</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="row align-items-end gx-3">
                                                            <div class="col-lg-9">
                                                                <div class="row gx-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">From</label>
                                                                            <div
                                                                                class="input-icon-end position-relative">
                                                                                <input type="text"
                                                                                    class="form-control timepicker"
                                                                                    placeholder="03 : 05  AM">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">To</label>
                                                                            <div
                                                                                class="input-icon-end position-relative">
                                                                                <input type="text"
                                                                                    class="form-control timepicker"
                                                                                    placeholder="03 : 05  AM">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                    <a href="doctors-schedules.html#"
                                                                        class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                                        <i class="ti ti-plus fs-16"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="schedules-9" role="tabpanel">
                                            <div class="add-schedule-list">
                                                <div class="row gx-3">
                                                    <div class="col-lg-5">
                                                        <div class="mb-3">
                                                            <label class="form-label">Session</label>
                                                            <select class="select">
                                                                <option>Select</option>
                                                                <option>Morning</option>
                                                                <option>Noon</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="row align-items-end gx-3">
                                                            <div class="col-lg-9">
                                                                <div class="row gx-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">From</label>
                                                                            <div
                                                                                class="input-icon-end position-relative">
                                                                                <input type="text"
                                                                                    class="form-control timepicker"
                                                                                    placeholder="03 : 05  AM">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">To</label>
                                                                            <div
                                                                                class="input-icon-end position-relative">
                                                                                <input type="text"
                                                                                    class="form-control timepicker"
                                                                                    placeholder="03 : 05  AM">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                    <a href="doctors-schedules.html#"
                                                                        class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                                        <i class="ti ti-plus fs-16"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="schedules-10" role="tabpanel">
                                            <div class="add-schedule-list">
                                                <div class="row gx-3">
                                                    <div class="col-lg-5">
                                                        <div class="mb-3">
                                                            <label class="form-label">Session</label>
                                                            <select class="select">
                                                                <option>Select</option>
                                                                <option>Morning</option>
                                                                <option>Noon</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="row align-items-end gx-3">
                                                            <div class="col-lg-9">
                                                                <div class="row gx-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">From</label>
                                                                            <div
                                                                                class="input-icon-end position-relative">
                                                                                <input type="text"
                                                                                    class="form-control timepicker"
                                                                                    placeholder="03 : 05  AM">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">To</label>
                                                                            <div
                                                                                class="input-icon-end position-relative">
                                                                                <input type="text"
                                                                                    class="form-control timepicker"
                                                                                    placeholder="03 : 05  AM">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                    <a href="doctors-schedules.html#"
                                                                        class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                                        <i class="ti ti-plus fs-16"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="schedules-11" role="tabpanel">
                                            <div class="add-schedule-list">
                                                <div class="row gx-3">
                                                    <div class="col-lg-5">
                                                        <div class="mb-3">
                                                            <label class="form-label">Session</label>
                                                            <select class="select">
                                                                <option>Select</option>
                                                                <option>Morning</option>
                                                                <option>Noon</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="row align-items-end gx-3">
                                                            <div class="col-lg-9">
                                                                <div class="row gx-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">From</label>
                                                                            <div
                                                                                class="input-icon-end position-relative">
                                                                                <input type="text"
                                                                                    class="form-control timepicker"
                                                                                    placeholder="03 : 05  AM">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">To</label>
                                                                            <div
                                                                                class="input-icon-end position-relative">
                                                                                <input type="text"
                                                                                    class="form-control timepicker"
                                                                                    placeholder="03 : 05  AM">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                    <a href="doctors-schedules.html#"
                                                                        class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                                        <i class="ti ti-plus fs-16"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="schedules-12" role="tabpanel">
                                            <div class="add-schedule-list">
                                                <div class="row gx-3">
                                                    <div class="col-lg-5">
                                                        <div class="mb-3">
                                                            <label class="form-label">Session</label>
                                                            <select class="select">
                                                                <option>Select</option>
                                                                <option>Morning</option>
                                                                <option>Noon</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="row align-items-end gx-3">
                                                            <div class="col-lg-9">
                                                                <div class="row gx-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">From</label>
                                                                            <div
                                                                                class="input-icon-end position-relative">
                                                                                <input type="text"
                                                                                    class="form-control timepicker"
                                                                                    placeholder="03 : 05  AM">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">To</label>
                                                                            <div
                                                                                class="input-icon-end position-relative">
                                                                                <input type="text"
                                                                                    class="form-control timepicker"
                                                                                    placeholder="03 : 05  AM">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                    <a href="doctors-schedules.html#"
                                                                        class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                                        <i class="ti ti-plus fs-16"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="schedules-13" role="tabpanel">
                                            <div class="add-schedule-list">
                                                <div class="row gx-3">
                                                    <div class="col-lg-5">
                                                        <div class="mb-3">
                                                            <label class="form-label">Session</label>
                                                            <select class="select">
                                                                <option>Select</option>
                                                                <option>Morning</option>
                                                                <option>Noon</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="row align-items-end gx-3">
                                                            <div class="col-lg-9">
                                                                <div class="row gx-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">From</label>
                                                                            <div
                                                                                class="input-icon-end position-relative">
                                                                                <input type="text"
                                                                                    class="form-control timepicker"
                                                                                    placeholder="03 : 05  AM">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">To</label>
                                                                            <div
                                                                                class="input-icon-end position-relative">
                                                                                <input type="text"
                                                                                    class="form-control timepicker"
                                                                                    placeholder="03 : 05  AM">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                    <a href="doctors-schedules.html#"
                                                                        class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                                        <i class="ti ti-plus fs-16"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="schedules-14" role="tabpanel">
                                            <div class="add-schedule-list">
                                                <div class="row gx-3">
                                                    <div class="col-lg-5">
                                                        <div class="mb-3">
                                                            <label class="form-label">Session</label>
                                                            <select class="select">
                                                                <option>Select</option>
                                                                <option>Morning</option>
                                                                <option>Noon</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="row align-items-end gx-3">
                                                            <div class="col-lg-9">
                                                                <div class="row gx-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">From</label>
                                                                            <div
                                                                                class="input-icon-end position-relative">
                                                                                <input type="text"
                                                                                    class="form-control timepicker"
                                                                                    placeholder="03 : 05  AM">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">To</label>
                                                                            <div
                                                                                class="input-icon-end position-relative">
                                                                                <input type="text"
                                                                                    class="form-control timepicker"
                                                                                    placeholder="03 : 05  AM">
                                                                                <span class="input-icon-addon">
                                                                                    <i class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                    <a href="doctors-schedules.html#"
                                                                        class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                                        <i class="ti ti-plus fs-16"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End card body -->
                        </div> <!-- End card -->

                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
                <!-- End Row -->



            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="c4628604bd7c5b5082ee5569-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="c4628604bd7c5b5082ee5569-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="c4628604bd7c5b5082ee5569-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="c4628604bd7c5b5082ee5569-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="c4628604bd7c5b5082ee5569-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="c4628604bd7c5b5082ee5569-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="c4628604bd7c5b5082ee5569-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="c4628604bd7c5b5082ee5569-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="c4628604bd7c5b5082ee5569-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/doctors.js" type="c4628604bd7c5b5082ee5569-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="c4628604bd7c5b5082ee5569-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="c4628604bd7c5b5082ee5569-|49" defer>
    </script>
</body>

</html>
