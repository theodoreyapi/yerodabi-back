<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Invoices Details | Yerodabi</title>
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

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

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

                <!-- start row -->
                <div class="row m-auto justify-content-center">
                    <div class="col-lg-10">
                        <!-- Start Page Header -->
                        <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 mb-3">
                            <div class="flex-grow-1">
                                <h6 class="fw-bold mb-0 d-flex align-items-center"><a href="invoices.html"
                                        class=""><i class="ti ti-chevron-left me-1 fs-14"></i>Invoices</a></h6>
                            </div>
                        </div>
                        <!-- End Page Header -->

                        <div class="card">
                            <div class="card-body">
                                <!-- Items -->
                                <div
                                    class="d-flex align-items-center justify-content-between border-1 border-bottom pb-3 mb-3">
                                    <div class="invoice-logo">
                                        <img src="{{ URL::asset('') }}assets/img/logo.svg" class="logo-white"
                                            alt="logo">
                                        <img src="{{ URL::asset('') }}assets/img/logo-white.svg" class="logo-dark"
                                            alt="logo">
                                    </div>
                                    <span class="badge bg-danger text-white"> Due in 8 days </span>
                                </div>

                                <!-- start row -->
                                <div class="row pb-3 border-1 border-bottom mb-4">
                                    <div class="col-lg-4">
                                        <h5 class="mb-2 fs-16 fw-bold"> Invoice Details </h5>
                                        <p class="text-body mb-1"> Invoice Number : <span class="text-dark">
                                                INV0025</span> </p>
                                        <p class="text-body mb-1"> Issued On : <span class="text-dark"> 25 Jan 2025
                                            </span> </p>
                                        <p class="text-body mb-1"> Due Date : <span class="text-dark"> 31 Jan
                                                2025</span> </p>
                                        <p class="text-body mb-0"> Recurring Invoice : <span class="text-dark">
                                                Monthly</span> </p>
                                    </div> <!-- end col -->
                                    <div class="col-lg-4">
                                        <h5 class="mb-2 fs-16 fw-bold"> Invoice Form </h5>
                                        <p class="text-dark fw-medium mb-1"> Andrew Fletcher</p>
                                        <p class="text-body mb-1 pe-5">
                                            <span class="text-body">
                                                5754 Airport Rd
                                                Coosada, AL, 36020
                                                United States
                                            </span>
                                        </p>
                                    </div> <!-- end col -->
                                    <div class="col-lg-4 text-lg-end">
                                        <h5 class="mb-2 fs-16 fw-bold"> Invoice To </h5>
                                        <p class="text-dark fw-medium mb-1"> Andrew Fletcher </p>
                                        <p class="m-0 ps-5">
                                            299 Star Trek Drive, Florida, 3240,
                                            United States
                                        </p>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->

                                <!-- Items -->
                                <div class="mb-4">
                                    <h6 class="mb-3 fs-16 fw-bold"> Products/Service Items </h6>
                                    <div class="">
                                        <!-- Table List -->
                                        <div class="table-responsive border bg-white">
                                            <table class="table table-nowrap">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Product/Item</th>
                                                        <th>Description</th>
                                                        <th> Unit Cost</th>
                                                        <th> Quantity </th>
                                                        <th> Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Full body checkup</td>
                                                        <td>Complete health screening covering all major systems</td>
                                                        <td> $400 </td>
                                                        <td> 1 </td>
                                                        <td> $400 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Blood Test </td>
                                                        <td>Routine blood analysis to assess overall health status </td>
                                                        <td> $250</td>
                                                        <td> 1 </td>
                                                        <td> $250 </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /Table List -->
                                    </div>
                                </div>
                                <!-- etart row -->
                                <div class="row pb-3 mb-3 border-1 border-bottom">
                                    <div class="col-lg-6">
                                        <div class="">
                                            <h6 class="mb-2 fs-16 fw-bold"> Bank Details</h6>
                                            <p class="text-body mb-1">Bank Name : <span class="text-dark"> ABC Bank
                                                </span> </p>
                                            <p class="text-body mb-1">Account Number : <span class="text-dark">
                                                    782459739212 </span> </p>
                                            <p class="text-body mb-1">IFSC Code : <span class="text-dark"> ABC0001345
                                                </span> </p>
                                            <p class="text-body mb-1">Payment Reference : <span class="text-dark">
                                                    INV-20250220-001 </span> </p>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-lg-6">
                                        <div class="">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-14 fw-medium text-body">Amount</h6>
                                                <h6 class="fs-14 fw-semibold text-dark">$650</h6>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-14 fw-medium text-body">CGST (9%)</h6>
                                                <h6 class="fs-14 fw-semibold text-dark">$18</h6>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-14 fw-medium text-body">SGST (9%)</h6>
                                                <h6 class="fs-14 fw-semibold text-dark">$18</h6>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <h6 class="fs-14 fw-medium text-body">Discount</h6>
                                                <h6 class="fs-14 fw-semibold text-danger">-$36</h6>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-18 fw-bold">Total (USD)</h6>
                                                <h6 class="fs-18 fw-bold">$650</h6>
                                            </div>
                                            <div>
                                                <h6 class="fs-14 text-body mb-1">Total in words</h6>
                                                <p class="fw-semibold text-dark">Dollar Six Hundread Fifty</p>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->

                                <!-- Items -->
                                <div
                                    class="pb-3 mb-3 border-1 border-bottom d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div>
                                        <div class=" mb-3">
                                            <h6 class="mb-1 fs-14 fw-semibold"> Terms and Conditions </h6>
                                            <p> The Payment must be returned in the same condition. </p>
                                        </div>

                                        <div class="">
                                            <h6 class="mb-1 fs-14 fw-semibold"> Notes </h6>
                                            <p> All charges are final and include applicable taxes, fees, and additional
                                                costs.</p>
                                        </div>
                                    </div>

                                    <div class="">
                                        <img src="{{ URL::asset('') }}assets/img/icons/signature-img.svg"
                                            alt="" class="img-fluid ">
                                        <h6 class="fs-14 fw-semibold"> Ted M. Davis </h6>
                                        <p class="fs-13 fw-normal">Manager </p>
                                    </div>
                                </div>

                                <div class="text-center d-flex align-items-center justify-content-center">
                                    <a href="invoices-details.html"
                                        class="btn btn-md btn-dark me-2 d-flex align-items-center"> <i
                                            class="ti ti-printer me-1"></i> Print</a>
                                    <a href="invoices-details.html"
                                        class="btn btn-md btn-primary d-flex align-items-center"> <i
                                            class="ti ti-download me-1"></i> Download</a>
                                </div>

                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->






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
                        aria-label="Close"></button>
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
                        aria-label="Close"></button>
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
                        <a href="invoices-details.html" class="btn btn-danger position-relative z-1"
                            data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->


    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="73d1921f6e8d05170e0d7b95-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="73d1921f6e8d05170e0d7b95-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="73d1921f6e8d05170e0d7b95-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="73d1921f6e8d05170e0d7b95-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="73d1921f6e8d05170e0d7b95-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="73d1921f6e8d05170e0d7b95-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="73d1921f6e8d05170e0d7b95-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="73d1921f6e8d05170e0d7b95-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="73d1921f6e8d05170e0d7b95-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="73d1921f6e8d05170e0d7b95-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="73d1921f6e8d05170e0d7b95-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="73d1921f6e8d05170e0d7b95-|49" defer>
    </script>
</body>

</html>
