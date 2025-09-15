<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Assets | Preclinic - Yerodabi</title>
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

    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

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
                        <h4 class="fw-bold mb-0"> Assets <span
                                class="badge badge-soft-primary fw-medium border py-1 px-2 border-primary fs-13 ms-1">Asset
                                List : 565</span> </h4>
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
                                    <a class="dropdown-item" href="assets.html#">Download as PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="assets.html#">Download as Excel</a>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-primary ms-2 fs-13 btn-md" data-bs-toggle="modal"
                            data-bs-target="#add_asset"><i class="ti ti-plus me-1"></i>Add Asset </a>
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

                        <div class="d-flex right-content align-items-center flex-wrap mb-3">
                            <div class="input-icon-start position-relative">
                                <span class="input-icon-addon text-dark">
                                    <i class="ti ti-calendar-event"></i>
                                </span>
                                <input type="text" class="form-control form-control-sm bookingrange">
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
                                <form action="assets.html#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Asset User</label>
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
                                                <label class="form-label">Assets</label>
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
                                                                VitalScan Monitor
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                MediScope
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                ThermoTrack
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                InjecSure
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                LabMate
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                First Aid Hub
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                MediCart
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                SterilBox
                                                            </label>
                                                        </li>
                                                        <li class="mb-0">
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                MediLogix
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
                                                <a href="javascript:void(0);" class="dropdown-toggle form-control"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                    aria-expanded="true">
                                                    Select
                                                </a>
                                                <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                    <div class="filter-range">
                                                        <input type="text" id="range_03">
                                                        <p>Range : <span class="text-gray-9">$200 - $5695</span></p>
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
                                                                Approved
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
                    <table class="table table-nowrap datatable">
                        <thead class="thead-light">
                            <tr>
                                <th class="no-sort">
                                    Asset ID
                                </th>
                                <th>Asset User</th>
                                <th>Assets</th>
                                <th>Purchase Date</th>
                                <th>Warrenty</th>
                                <th> Warranty End </th>
                                <th> Amount </th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <a href="assets.html">#AST001</a></td>
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
                                    VitalScan Monitor
                                </td>
                                <td> 30 Mar 2025 </td>
                                <td> 3 Years </td>
                                <td>30 Mar 2028</td>
                                <td>$2587</td>
                                <td> <span
                                        class="badge badge-soft-success rounded text-success fw-medium border border-success">Approved</span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_asset">Edit</a>
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
                                <td> <a href="assets.html">#AST004</a></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-md me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-04.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="text-dark fw-semibold">Robert Reid </a>
                                    </div>
                                </td>
                                <td>
                                    InjecSure
                                </td>
                                <td> 15 Mar 2025 </td>
                                <td> 3 Years </td>
                                <td> 15 Mar 2029</td>
                                <td>$21770</td>
                                <td> <span
                                        class="badge badge-soft-danger rounded text-danger fw-medium border border-danger">Pending</span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_asset">Edit</a>
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
                                <td> <a href="assets.html">#AST007</a></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-md me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-07.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="text-dark fw-semibold">Valerie Padgett
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    First Aid Hub
                                </td>
                                <td> 20 Feb 2025 </td>
                                <td> 2 Years </td>
                                <td>20 Feb 2027</td>
                                <td> $54100</td>
                                <td> <span
                                        class="badge badge-soft-warning rounded text-warning fw-medium border border-warning">
                                        Returned</span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_asset">Edit</a>
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

    <!-- Start Add Asset -->
    <div class="modal fade" id="add_asset">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark fw-bold">Add Asset</h5>
                    <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- start row -->
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Asset Name <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Asset User <span
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
                                                    placeholder="Select">
                                            </div>
                                        </div>
                                        <ul class="mb-3 list-style-none">
                                            <li class="list-none">
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-02.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Emily Clark
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/profiles/avatar-01.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>John Carter
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/profiles/avatar-16.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Sophia White
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/profiles/avatar-15.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Michael Johnson
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/profiles/avatar-14.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Olivia Harris
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/profiles/avatar-01.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>David Anderson
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Purchase Date <span
                                        class="text-danger">*</span></label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker"
                                        placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Purchase From <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium"> Manufacturer <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium"> Model <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium"> Serial Number <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium"> Supplier<span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <select class="select form-control rounded w-100">
                                        <option>New one</option>
                                        <option>Old one</option>
                                        <option>Recent one</option>
                                    </select>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium"> Condition  <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <select class="select form-control rounded w-100">
                                        <option>Select</option>
                                        <option>Good one</option>
                                        <option>Old one</option>
                                        <option>Recent one</option>
                                    </select>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium"> warranty <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Value <span class="text-danger">*
                                </span> </label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent text-dark fs-14">$</span>
                                <input type="text" class="form-control" placeholder="0">
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium"> Status <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <select class="select form-control rounded w-100">
                                        <option>Select</option>
                                        <option>Approved</option>
                                        <option>Pending</option>
                                    </select>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <div>
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Description <span
                                            class="text-danger">*</span> </label>
                                    <textarea rows="4" class="form-control rounded" placeholder="Description "> </textarea>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm me-2 fs-13 fw-medium"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm fs-13 fw-medium">Add Asset</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add Asset  -->

    <!-- Start Edit Asset -->
    <div class="modal fade" id="edit_asset">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark fw-bold">Edit Asset</h5>
                    <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- start row -->
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Asset Name <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="VitalScan Monitor">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Asset User <span
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
                                                    placeholder="Emily clerk">
                                            </div>
                                        </div>
                                        <ul class="mb-3 list-style-none">
                                            <li class="list-none">
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-02.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Emily Clark
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/profiles/avatar-01.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>John Carter
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/profiles/avatar-16.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Sophia White
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/profiles/avatar-15.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Michael Johnson
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/profiles/avatar-14.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>Olivia Harris
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                                    <span class="avatar avatar-sm rounded-circle me-2"><img
                                                            src="{{ URL::asset('') }}assets/img/profiles/avatar-01.jpg"
                                                            class="flex-shrink-0 rounded-circle"
                                                            alt="img"></span>David Anderson
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Purchase Date <span
                                        class="text-danger">*</span></label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker"
                                        placeholder="10/04/2025">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Purchase From <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="2547">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium"> Manufacturer <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Endosys">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium"> Model <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="CareKIT Pro">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium"> Serial Number <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="ENW12547E789">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium"> Supplier<span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <select class="select form-control rounded w-100">
                                        <option>Endosys Customization</option>
                                        <option>New one</option>
                                        <option>Old one</option>
                                        <option>Recent one</option>
                                    </select>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium"> Condition  <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <select class="select form-control rounded w-100">
                                        <option>Good one</option>
                                        <option>Old one</option>
                                        <option>Recent one</option>
                                    </select>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium"> warranty <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="2 years">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Value <span class="text-danger">*
                                </span> </label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent text-dark fs-14">$</span>
                                <input type="text" class="form-control" placeholder="0" value="100">
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium"> Status <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <select class="select form-control rounded w-100">
                                        <option>Approved</option>
                                        <option>Pending</option>
                                    </select>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <div>
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Description <span
                                            class="text-danger">*</span> </label>
                                    <textarea rows="4" class="form-control rounded" placeholder=""> Evaluates the Autonomic Nervous System (ANS) to help identify disorders such as sudden death risk, silent heart attacks, hypertension, and syncope.​</textarea>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm me-2 fs-13 fw-medium"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm fs-13 fw-medium">Add Asset</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Edit Asset  -->

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
                        <a href="assets.html" class="btn btn-danger position-relative z-1"
                            data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->


    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="e209647fa0eb2edf293016af-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="e209647fa0eb2edf293016af-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="e209647fa0eb2edf293016af-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="e209647fa0eb2edf293016af-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="e209647fa0eb2edf293016af-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="e209647fa0eb2edf293016af-text/javascript"></script>

    <!-- Rangeslider JS -->
    <script src="{{ URL::asset('') }}assets/plugins/ion-rangeslider/js/ion.rangeSlider.js" type="e209647fa0eb2edf293016af-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/ion-rangeslider/js/custom-rangeslider.js" type="e209647fa0eb2edf293016af-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js" type="e209647fa0eb2edf293016af-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="e209647fa0eb2edf293016af-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="e209647fa0eb2edf293016af-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="e209647fa0eb2edf293016af-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="e209647fa0eb2edf293016af-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="e209647fa0eb2edf293016af-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="e209647fa0eb2edf293016af-|49" defer>
    </script>
</body>

</html>
