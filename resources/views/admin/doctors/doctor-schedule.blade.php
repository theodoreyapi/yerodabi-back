<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctors schedule - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="943df16b5992dd8aef07e6ab-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

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
                <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 mb-3 pb-3 border-bottom">
                    <div class="flex-grow-1">
                        <h4 class="fw-bold mb-0"> Horaire du médecin<span
                                class="badge badge-soft-primary fs-13 fw-medium ms-2">Nombre total de médecins : 565</span></h4>
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
                                    <a class="dropdown-item" href="doctor-schedule.html#">Download as PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="doctor-schedule.html#">Download as Excel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->

                <div class=" d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <div class="search-set mb-3">
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <div class="table-search d-flex align-items-center mb-0">
                                <div class="search-input">
                                    <a href="javascript:void(0);" class="btn-searchset"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex table-dropdown mb-3 pb-1 right-content align-items-center flex-wrap row-gap-3">
                        <div class="dropdown me-2">
                            <a href="javascript:void(0);"
                                class="btn btn-white bg-white fs-14 py-1 border d-inline-flex text-dark align-items-center"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <i class="ti ti-filter text-gray-5 me-1"></i>Filters
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end filter-dropdown p-0"
                                id="filter-dropdown">
                                <div
                                    class="d-flex align-items-center justify-content-between border-bottom filter-header">
                                    <h4 class="mb-0">Filter</h4>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="link-danger text-decoration-underline">Clear All</a>
                                    </div>
                                </div>
                                <form action="doctor-schedule.html#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Doctor</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Dr. Mick Thompson</option>
                                                <option value="m-2">Dr. Sarah Johnson</option>
                                                <option value="m-3">Dr. Emily Carter</option>
                                                <option value="m-4">Dr. David Lee</option>
                                                <option value="m-5">Dr. Anna Kim</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Designation</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Cardiologist</option>
                                                <option value="m-2">Orthopedic Surgeon</option>
                                                <option value="m-3">Pediatrician</option>
                                                <option value="m-4">Gynecologist</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Department</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Cardiology</option>
                                                <option value="m-2">Orthopedics</option>
                                                <option value="m-3">Pediatrics</option>
                                            </select>
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
                                                <label class="form-label">Amount</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>$501 - $1000</option>
                                                <option value="m-2">$501 - $1100</option>
                                                <option value="m-3">$701 - $1200</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Status</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Available</option>
                                                <option value="m-2">Unavailable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div
                                        class="filter-footer d-flex align-items-center justify-content-end border-top">
                                        <a href="javascript:void(0);" class="btn btn-light btn-md me-2"
                                            id="close-filter">Close</a>
                                        <button type="submit" class="btn btn-primary btn-md">Filter</button>
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
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-nowrap datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>Médecin</th>
                                <th>Département</th>
                                <th>Téléphone</th>
                                <th>Disponibilité</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2">
                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-01.jpg"
                                                alt="Doctor" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="mb-1 fs-14 fw-semibold"><a href="doctor-details.html">Dr. Mick
                                                    Thompson</a></h6>
                                            <span class="fs-13 d-block"> Cardiologist </span>
                                        </div>
                                    </div>
                                </td>
                                <td>Cardiology </td>
                                <td>+1 54554 54584</td>
                                <td>
                                    <div class="availabity-check d-flex align-items-center gap-2" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <div>
                                            <input type="checkbox" class="btn-check" name="btnradio" id="btnradio1"
                                                checked="">
                                            <label class="btn btn-icon btn-sm rounded-circle btn-light"
                                                for="btnradio1">L</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="btn-check" name="btnradio" id="btnradio2"
                                                checked>
                                            <label class="btn btn-icon btn-sm rounded-circle btn-light"
                                                for="btnradio2">M</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="btn-check" name="btnradio" id="btnradio3">
                                            <label class="btn btn-icon btn-sm rounded-circle btn-light"
                                                for="btnradio3">M</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="btn-check" name="btnradio" id="btnradio4"
                                                checked>
                                            <label class="btn btn-icon btn-sm rounded-circle btn-light"
                                                for="btnradio4">J</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="btn-check" name="btnradio" id="btnradio5"
                                                checked>
                                            <label class="btn btn-icon btn-sm rounded-circle btn-light"
                                                for="btnradio5">V</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="btn-check" name="btnradio" id="btnradio6">
                                            <label class="btn btn-icon btn-sm rounded-circle btn-light"
                                                for="btnradio6">S</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="btn-check" name="btnradio" id="btnradio7">
                                            <label class="btn btn-icon btn-sm rounded-circle btn-light"
                                                for="btnradio7">D</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-item d-flex align-items-center gap-2">
                                        <a href="{{ url('appointment-calendar') }}">
                                            <i class="ti ti-calendar-cog"></i>
                                        </a>
                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#doctor_detil">
                                            <i class="ti ti-eye"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

        <!-- Start Edit Modal -->
        <div id="doctor_detil" class="modal fade">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-dark modal-title">Schedule Details</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="doctor-schedule.html">
                        <div class="modal-body pb-0">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <div class="d-flex align-items-center flex-wrap row-gap-3">
                                        <span class="avatar avatar-xxl me-3"><img
                                                src="{{ URL::asset('') }}assets/img/doctors/doctor-01.jpg"
                                                alt=""></span>
                                        <div>
                                            <span class="text-primary d-block">#DT2002</span>
                                            <div class="d-flex align-items-center mb-1">
                                                <h5 class="fw-bold mb-0">Dr. John Smith</h5>
                                                <span
                                                    class="badge badge-soft-primary border border-primary ms-2">Cardiology</span>
                                            </div>
                                            <p>MBBS, M.D, Cardiology</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
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
                                                                    <a href="doctor-schedule.html#"
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
                                                                    <a href="doctor-schedule.html#"
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
                                                                                    <i
                                                                                        class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                    <a href="doctor-schedule.html#"
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
                                                                                    <i
                                                                                        class="ti ti-clock-hour-10"></i>
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
                                                                                    <i
                                                                                        class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                    <a href="doctor-schedule.html#"
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
                                                                                    <i
                                                                                        class="ti ti-clock-hour-10"></i>
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
                                                                                    <i
                                                                                        class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                    <a href="doctor-schedule.html#"
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
                                                                                    <i
                                                                                        class="ti ti-clock-hour-10"></i>
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
                                                                                    <i
                                                                                        class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                    <a href="doctor-schedule.html#"
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
                                                                                    <i
                                                                                        class="ti ti-clock-hour-10"></i>
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
                                                                                    <i
                                                                                        class="ti ti-clock-hour-10"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-3">
                                                                    <a href="doctor-schedule.html#"
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
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Edit Modal -->

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="943df16b5992dd8aef07e6ab-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="943df16b5992dd8aef07e6ab-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="943df16b5992dd8aef07e6ab-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="943df16b5992dd8aef07e6ab-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="943df16b5992dd8aef07e6ab-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="943df16b5992dd8aef07e6ab-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="943df16b5992dd8aef07e6ab-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="943df16b5992dd8aef07e6ab-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="943df16b5992dd8aef07e6ab-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/doctors.js" type="943df16b5992dd8aef07e6ab-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="943df16b5992dd8aef07e6ab-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js"
        data-cf-settings="943df16b5992dd8aef07e6ab-|49" defer></script>
</body>

</html>
