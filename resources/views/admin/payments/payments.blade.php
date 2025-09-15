<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payments | Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

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
                        <h4 class="fw-bold mb-0"> Payments <span
                                class="badge badge-soft-primary fw-medium border py-1 px-2 border-primary fs-13 ms-1">Total
                                Payments : 565</span> </h4>
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
                                    <a class="dropdown-item" href="payments.html#">Download as PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="payments.html#">Download as Excel</a>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-primary ms-2 fs-13 btn-md" data-bs-toggle="modal"
                            data-bs-target="#add_new_payment"><i class="ti ti-plus me-1"></i>New Payment </a>
                    </div>
                </div>
                <!-- End Page Header -->

                <!--  Start Filter -->
                <div class=" d-flex align-items-center justify-content-between flex-wrap row-gap-3">
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
                    </div>

                    <div class="d-flex table-dropdown mb-3 pb-1 right-content align-items-center flex-wrap row-gap-3">
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
                                <form action="payments.html#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label mb-1">Patient</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Alberto Ripley</option>
                                                <option value="m-2">Susan Babin</option>
                                                <option value="m-3">Martin Lisa</option>
                                                <option value="m-4">Stella Mary</option>
                                                <option value="m-5">Carol Lam</option>
                                                <option value="m-6">Jesus Adams</option>
                                                <option value="m-7">Ezra Belcher</option>
                                                <option value="m-8">Unit Manager </option>
                                                <option value="m-9">Bernard Griffith</option>
                                                <option value="m-10">John Elsass</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Practioner</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Dr.Mick Thompson</option>
                                                <option value="m-2">Dr.Sarah Johnson</option>
                                                <option value="m-3">Dr.Emily Carter</option>
                                                <option value="m-4">Dr.David Lee</option>
                                                <option value="m-5">Dr.Anna Kim </option>
                                                <option value="m-6">Dr.John Smith </option>
                                                <option value="m-7">Dr.Lisa White </option>
                                                <option value="m-8">Dr.Patrica Brown </option>
                                                <option value="m-9">Dr.Rachel Green</option>
                                                <option value="m-10">Dr.Michael Smith </option>
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
                                                <option value="m-5">Psychiatrist</option>
                                                <option value="m-6">Neurosurgeon</option>
                                                <option value="m-7">Oncologist</option>
                                                <option value="m-8">Pulmonologist</option>
                                                <option value="m-9">Urologist</option>
                                                <option value="m-10">Dermatologist</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Payment Method</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>PayPal</option>
                                                <option value="m-2">Debit Card</option>
                                                <option value="m-3">Cheque</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Date</label>
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
                                                <option value="m-1" selected>Paid</option>
                                                <option value="m-2">Options Enhanced</option>
                                                <option value="m-3">Unpaid</option>
                                            </select>
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
                    <table class="table table-nowrap datatable">
                        <thead class="thead-light">
                            <tr>
                                <th class="no-sort">
                                    Invoice ID
                                </th>
                                <th>Patient</th>
                                <th>Doctor</th>
                                <th>Paid Date</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <a href="payments.html">#INV0025</a></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-md me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-01.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="text-dark fw-semibold">James Adair </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2">
                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-05.jpg"
                                                alt="Doctor" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="mb-1 fs-14 fw-semibold"><a href="doctor-details.html">Dr. Anna
                                                    Kim</a></h6>
                                            <span class="fs-13 d-block">Psychiatrist</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-dark"> 30 Apr 2025</td>
                                <td class="fw-semibold text-dark"> $800</td>
                                <td class="text-dark"> PayPal</td>
                                <td> <span
                                        class="badge badge-soft-success rounded text-success fw-medium border border-success">Paid</span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_new_payment">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td> <a href="payments.html">#INV0024</a></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-md me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-02.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="text-dark fw-semibold">Emily Johnson </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2">
                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-02.jpg"
                                                alt="Doctor" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="mb-1 fs-14 fw-semibold"><a href="doctor-details.html">Dr.Sarah
                                                    Johnson</a></h6>
                                            <span class="fs-13 d-block">Orthopedic Surgeon</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-dark"> 15 Apr 2025</td>
                                <td class="fw-semibold text-dark"> $930</td>
                                <td class="text-dark"> Debit Card </td>
                                <td> <span
                                        class="badge badge-soft-warning rounded text-warning fw-medium border border-warning">Partially
                                        Paid</span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_new_payment">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td> <a href="payments.html">#INV0023</a></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-md me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-03.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="text-dark fw-semibold"> Robert Mitchell
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="doctor-details.html" class="avatar me-2">
                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-03.jpg"
                                                alt="Doctor" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="mb-1 fs-14 fw-semibold"><a href="doctor-details.html">Dr.Emily
                                                    Carter</a></h6>
                                            <span class="fs-13 d-block">Pediatrician</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-dark"> 02 Apr 2025 </td>
                                <td class="fw-semibold text-dark"> $850</td>
                                <td class="text-dark"> Cheque </td>
                                <td> <span
                                        class="badge badge-soft-danger rounded text-danger fw-medium border border-danger">Unpaid</span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_new_payment">Edit</a>
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


    <!-- Start Add Expense -->
    <div class="modal fade" id="add_new_payment">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark fw-bold">New Payment</h5>
                    <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close"><i class="ti ti-x"></i></button>
                </div>
                <div class="modal-body">

                    <!-- start row -->
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Invoice ID <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Paid Date<span
                                        class="text-danger">*</span></label>
                                <div class="input-group position-relative">
                                    <input type="text" class="form-control datetimepicker"
                                        placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar text-body"></i>
                                    </span>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Patient Name<span
                                        class="text-danger">*</span></label>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                        Select
                                    </a>
                                    <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                        <div class="mb-3">
                                            <div class="input-icon-start position-relative">
                                                <span class="input-icon-addon fs-12">
                                                    <i class="ti ti-search"></i>
                                                </span>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Search">
                                            </div>
                                        </div>
                                        <ul class="mb-0 list-style-none">
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-01.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Alberto Ripley
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-02.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Susan Babin
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-03.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Martin Lisa
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-04.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Stella Mary
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-05.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Carol Lam
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-06.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Jesus Adams
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-07.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Ezra Belcher
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-08.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Glen Lentz
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-09.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Bernard Griffith
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-10.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>John Elsass
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Doctor Name<span
                                        class="text-danger">*</span></label>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                        Select
                                    </a>
                                    <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                        <div class="mb-3">
                                            <div class="input-icon-start position-relative">
                                                <span class="input-icon-addon fs-12">
                                                    <i class="ti ti-search"></i>
                                                </span>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Search">
                                            </div>
                                        </div>
                                        <ul class="mb-0 list-style-none">
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-01.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Mick Thompson
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-02.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Sarah Johnson
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-03.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Emily Carter
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-04.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.David Lee
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-05.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Anna Kim
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-06.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.John Smith
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-07.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Lisa White
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-08.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Patrica Brown
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-09.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Rachel Green
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-10.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Michael Smith
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Total Amount<span
                                        class="text-danger">*</span></label>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="dropdown-toggle form-control w-100 d-flex align-items-center justify-content-between"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                        Select
                                    </a>
                                    <div class="dropdown-menu shadow-lg w-100 dropdown-info p-2">
                                        <div class="filter-range">
                                            <input type="text" id="range_01">
                                            <p class="mt-2 fs-13">Range : <span class="text-dark">$200 - $5695</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Payment Method<span
                                        class="text-danger">*</span></label>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="dropdown-toggle form-control w-100 d-flex align-items-center justify-content-between"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                        Select
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg p-2 dropdown-employee w-100">
                                        <li>
                                            <div class="mb-2">
                                                <input type="text" class="form-control form-control"
                                                    placeholder="Search">
                                            </div>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                PayPal
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Options Enhanced
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Cheque
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Payment Status<span
                                        class="text-danger">*</span></label>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="dropdown-toggle form-control w-100 d-flex align-items-center justify-content-between"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                        Select
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg p-2 dropdown-employee w-100">
                                        <li>
                                            <div class="mb-2">
                                                <input type="text" class="form-control form-control"
                                                    placeholder="Search">
                                            </div>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Approved
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Options Enhanced
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Pending
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                New
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Other Information <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        </div> <!-- end col -->

                    </div>
                    <!-- end row -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm me-2 fs-13 fw-medium"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm fs-13 fw-medium">Add New Payment</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add Expense  -->

    <!-- Start Edit Expense -->
    <div class="modal fade" id="edit_new_payment">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark fw-bold">Edit Payment</h5>
                    <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close"><i class="ti ti-x"></i></button>
                </div>
                <div class="modal-body">

                    <!-- start row -->
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Invoice ID <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="#INV0025">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Paid Date<span
                                        class="text-danger">*</span></label>
                                <div class="input-group position-relative">
                                    <input type="text" class="form-control datetimepicker"
                                        placeholder="30/April/2025">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar text-body"></i>
                                    </span>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Patient Name<span
                                        class="text-danger">*</span></label>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                        James carter
                                    </a>
                                    <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                        <div class="mb-3">
                                            <div class="input-icon-start position-relative">
                                                <span class="input-icon-addon fs-12">
                                                    <i class="ti ti-search"></i>
                                                </span>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Search">
                                            </div>
                                        </div>
                                        <ul class="mb-0 list-style-none">
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-01.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>James Allaire
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-02.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Esther Schmidt
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-03.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Judi Lenahan
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-04.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Robert Reid
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-01.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dottie Sellers
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-02.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Cheryl Bilodeau
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-03.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Diane Nash
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-04.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Sally Cavazos
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-06.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Forest Heath
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Doctor Name<span
                                        class="text-danger">*</span></label>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                        Dr.Mick Thompson
                                    </a>
                                    <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                        <div class="mb-3">
                                            <div class="input-icon-start position-relative">
                                                <span class="input-icon-addon fs-12">
                                                    <i class="ti ti-search"></i>
                                                </span>
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Search">
                                            </div>
                                        </div>
                                        <ul class="mb-0 list-style-none">
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-01.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Mick Thompson
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-02.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Sarah Johnson
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-03.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Emily Carter
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-04.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.David Lee
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-05.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Anna Kim
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-06.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.John Smith
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-07.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Lisa White
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-08.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Patrica Brown
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-09.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Rachel Green
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/doctors/doctor-10.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Dr.Michael Smith
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Total Amount<span
                                        class="text-danger">*</span></label>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="dropdown-toggle form-control w-100 d-flex align-items-center justify-content-between"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                        $800
                                    </a>
                                    <div class="dropdown-menu shadow-lg w-100 dropdown-info p-2">
                                        <div class="filter-range">
                                            <input type="text" id="range_02">
                                            <p class="mt-2 fs-13">Range : <span class="text-dark">$200 -
                                                    $5695</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Payment Method<span
                                        class="text-danger">*</span></label>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="dropdown-toggle form-control w-100 d-flex align-items-center justify-content-between"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                        PayPal
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg p-2 dropdown-employee w-100">
                                        <li>
                                            <div class="mb-2">
                                                <input type="text" class="form-control form-control"
                                                    placeholder="Search">
                                            </div>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                PayPal
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Options Enhanced
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Cheque
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Payment Status<span
                                        class="text-danger">*</span></label>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="dropdown-toggle form-control w-100 d-flex align-items-center justify-content-between"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                        Paid
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg p-2 dropdown-employee w-100">
                                        <li>
                                            <div class="mb-2">
                                                <input type="text" class="form-control form-control"
                                                    placeholder="Search">
                                            </div>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Approved
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Options Enhanced
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Pending
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                New
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Other Information <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <textarea class="form-control" rows="4"> </textarea>
                                </div>
                            </div>
                        </div> <!-- end col -->

                    </div>
                    <!-- end row -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm me-2 fs-13 fw-medium"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm fs-13 fw-medium">Add New Expense</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Edit Expense  -->

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
                        <a href="payments.html" class="btn btn-danger position-relative z-1"
                            data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->


    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="bf385dab1fa69ab08d21d71a-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="bf385dab1fa69ab08d21d71a-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="bf385dab1fa69ab08d21d71a-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="bf385dab1fa69ab08d21d71a-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="bf385dab1fa69ab08d21d71a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="bf385dab1fa69ab08d21d71a-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="bf385dab1fa69ab08d21d71a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="bf385dab1fa69ab08d21d71a-text/javascript"></script>

    <!-- Rangeslider JS -->
    <script src="{{ URL::asset('') }}assets/plugins/ion-rangeslider/js/ion.rangeSlider.js" type="bf385dab1fa69ab08d21d71a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/ion-rangeslider/js/custom-rangeslider.js" type="bf385dab1fa69ab08d21d71a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js" type="bf385dab1fa69ab08d21d71a-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="bf385dab1fa69ab08d21d71a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="bf385dab1fa69ab08d21d71a-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="bf385dab1fa69ab08d21d71a-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="bf385dab1fa69ab08d21d71a-|49" defer>
    </script>
</body>

</html>
