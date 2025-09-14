<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leaves | Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="5e9231395d6f0c03a3dbfd59-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

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
                        <h4 class="fw-bold mb-0"> Leaves </h4>
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
                                    <a class="dropdown-item" href="doctors-leaves.html#">Download as PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="doctors-leaves.html#">Download as Excel</a>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-primary ms-2 fs-13 btn-md" data-bs-toggle="modal"
                            data-bs-target="#add-leave"><i class="ti ti-plus me-1"></i>Add New Leave</a>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- Start Filter -->
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
                                <form action="doctors-leaves.html#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label mb-1">Doctor</label>
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
                <!-- End Filter -->

                <!-- Start Table -->
                <div class="table-responsive">
                    <table class="table table-nowrap datatable">
                        <thead class="thead-light">
                            <tr>
                                <th class="no-sort">
                                    Date
                                </th>
                                <th>Leave Type</th>
                                <th>Day</th>
                                <th>Applied On</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    15 Apr 2025 - 15 Apr 2025
                                </td>
                                <td>Sick Leave</td>
                                <td>01 Day</td>
                                <td>22 Apr 2025</td>
                                <td> <span class="badge badge-info badge-sm text-info border-info border rounded">
                                        Applied </span> </td>
                                <td class="action-item"> <a href="doctors-leaves.html" class=""
                                        data-bs-toggle="modal" data-bs-target="#cancel-leave"> <i
                                            class="ti ti-x"></i> </a> </td>
                            </tr>

                            <tr>
                                <td>
                                    30 Apr 2025 - 30 Apr 2025
                                </td>
                                <td>Sick Leave </td>
                                <td>01 Day</td>
                                <td>22 Apr 2025</td>
                                <td> <span class="badge badge-info badge-sm text-info border-info border rounded">
                                        Applied </span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit-leave">Edit</a>
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
                                <td>
                                    15 Apr 2025 - 15 Apr 2025
                                </td>
                                <td>Casual Leave</td>
                                <td>01 Day</td>
                                <td>12 Apr 2025</td>
                                <td> <span
                                        class="badge badge-success badge-sm text-success border-success border rounded">
                                        Approved </span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit-leave">Edit</a>
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
                                <td>
                                    02 Apr 2025 - 03 Apr 2025
                                </td>
                                <td>Emergency </td>
                                <td>02 Days</td>
                                <td>01 Apr 2025</td>
                                <td> <span
                                        class="badge badge-danger badge-sm text-danger border-danger border rounded">
                                        Rejected </span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit-leave">Edit</a>
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
                                <td>
                                    12 Mar 2025 - 13 Mar 2025
                                </td>
                                <td> Vacation </td>
                                <td>02 Days</td>
                                <td>05 Mar 2025</td>
                                <td> <span
                                        class="badge badge-success badge-sm text-success border-success border rounded">
                                        Approved </span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit-leave">Edit</a>
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
                                <td>
                                    27 Mar 2025 - 29 Mar 2025
                                </td>
                                <td>Maternity </td>
                                <td>03 Days</td>
                                <td>20 Mar 2025</td>
                                <td> <span
                                        class="badge badge-danger badge-sm text-danger border-danger border rounded">
                                        Rejected </span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit-leave">Edit</a>
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
                                <td>
                                    05 Mar 2025 - 05 Mar 2025
                                </td>
                                <td>Paternity</td>
                                <td>01 Day</td>
                                <td>01 Mar 2025</td>
                                <td> <span
                                        class="badge badge-success badge-sm text-success border-success border rounded">
                                        Approved </span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit-leave">Edit</a>
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
                                <td>
                                    24 Feb 2025 - 25 Feb 2025
                                </td>
                                <td>Sick Leave </td>
                                <td>02 Days</td>
                                <td>15 Feb 2025</td>
                                <td> <span
                                        class="badge badge-success badge-sm text-success border-success border rounded">
                                        Approved </span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit-leave">Edit</a>
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
                                <td>
                                    16 Feb 2025 - 17 Feb 2025
                                </td>
                                <td>Casual Leave </td>
                                <td>01 Day</td>
                                <td>09 Feb 2025</td>
                                <td> <span
                                        class="badge badge-danger badge-sm text-danger border-danger border rounded">
                                        Rejected </span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit-leave">Edit</a>
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
                                <td>
                                    01 Feb 2025 - 01 Feb 2025
                                </td>
                                <td>Emergency</td>
                                <td>01 Day</td>
                                <td>01 Feb 2025</td>
                                <td> <span class="badge badge-info badge-sm text-info border-info border rounded">
                                        Applied </span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit-leave">Edit</a>
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
                                <td>
                                    25 Jan 2025 - 29 Jan 2025
                                </td>
                                <td>Vacation </td>
                                <td>05 Days</td>
                                <td>12 Jan 2025</td>
                                <td> <span class="badge badge-success badge-sm text-success border-success border">
                                        Approved </span> </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit-leave">Edit</a>
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
                <!-- End Table -->

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- Start Add leave -->
    <div class="modal fade" id="add-leave">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark fw-bold">Add New Leave</h5>
                    <button type="button" class="btn-close btn-close-modal" data-bs-dismiss="modal"
                        aria-label="Close"><i class="ti ti-x"></i></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Leave Type<span
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
                                                Casual Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Sick Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Maternity Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Paternity Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Compensatory Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Emergency Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Bereavement Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Study/Exam Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Paid Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Unpaid Leave
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">From Date<span
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
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">To Date<span
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

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">No of Days<span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <div class="row p-2 bg-light rounded align-items-center flex-wrap">
                                    <div class="col-lg-6">
                                        <label class="form-label mb-1 text-body fs-14 fw-medium">dd/mm/yyyy</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label mb-1 text-dark fs-14 fw-medium">Leave Type<span
                                                class="text-danger">*</span></label>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);"
                                                class="dropdown-toggle form-control w-100 d-flex align-items-center justify-content-between"
                                                data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="true">
                                                Select
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-lg p-2 dropdown-employee w-100">
                                                <li>
                                                    <label
                                                        class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                        <input class="form-check-input m-0 me-2" type="checkbox">
                                                        Applied
                                                    </label>
                                                </li>
                                                <li>
                                                    <label
                                                        class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                        <input class="form-check-input m-0 me-2" type="checkbox"
                                                            checked>
                                                        Approved
                                                    </label>
                                                </li>
                                                <li>
                                                    <label
                                                        class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                        <input class="form-check-input m-0 me-2" type="checkbox"
                                                            checked>
                                                        Rejected
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <div>
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Reason</label>
                                    <textarea rows="4" class="form-control rounded" placeholder="Description"> </textarea>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm me-2 fs-13 fw-medium"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm fs-13 fw-medium">Add New Leave</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add New leave  -->

    <!-- Start Cancel Modal -->
    <div class="modal fade" id="cancel-leave">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark fw-bold">Cancel Reason</h5>
                    <button type="button" class="btn-close opacity-100" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div>
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Reason</label>
                            <textarea rows="4" class="form-control rounded" placeholder="Description"> </textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm me-2 fs-13 fw-medium"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm fs-13 fw-medium">Cancel Leave</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cancel Modal  -->

    <!-- Start Add leave -->
    <div class="modal fade" id="edit-leave">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark fw-bold">Edit New Leave</h5>
                    <button type="button" class="btn-close btn-close-modal" data-bs-dismiss="modal"
                        aria-label="Close"> <i class="ti ti-x"></i></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Leave Type<span
                                        class="text-danger">*</span></label>
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="dropdown-toggle form-control w-100 d-flex align-items-center justify-content-between"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                        Casual Leave
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
                                                Casual Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Sick Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Maternity Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Paternity Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Compensatory Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Emergency Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Bereavement Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Study/Exam Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Paid Leave
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Unpaid Leave
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">From Date<span
                                        class="text-danger">*</span></label>
                                <div class="input-group position-relative">
                                    <input type="text" class="form-control datetimepicker"
                                        placeholder="20/09/2025">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar text-body"></i>
                                    </span>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">To Date<span
                                        class="text-danger">*</span></label>
                                <div class="input-group position-relative">
                                    <input type="text" class="form-control datetimepicker"
                                        placeholder="20/10/2025">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar text-body"></i>
                                    </span>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">No of Days<span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="30">
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <div class="row p-2 bg-light rounded align-items-center flex-wrap">
                                    <div class="col-lg-6">
                                        <label class="form-label mb-1 text-body fs-14 fw-medium">dd/mm/yyyy</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label mb-1 text-dark fs-14 fw-medium">Leave Type<span
                                                class="text-danger">*</span></label>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);"
                                                class="dropdown-toggle form-control w-100 d-flex align-items-center justify-content-between"
                                                data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="true">
                                                Applied
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-lg p-2 dropdown-employee w-100">
                                                <li>
                                                    <label
                                                        class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                        <input class="form-check-input m-0 me-2" type="checkbox">
                                                        Applied
                                                    </label>
                                                </li>
                                                <li>
                                                    <label
                                                        class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                        <input class="form-check-input m-0 me-2" type="checkbox"
                                                            checked>
                                                        Approved
                                                    </label>
                                                </li>
                                                <li>
                                                    <label
                                                        class="dropdown-item px-2 d-flex align-items-center rounded-1">
                                                        <input class="form-check-input m-0 me-2" type="checkbox"
                                                            checked>
                                                        Rejected
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <div>
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Reason</label>
                                    <textarea rows="4" class="form-control rounded" placeholder="Description"> </textarea>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm me-2 fs-13 fw-medium"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm fs-13 fw-medium">Edit Leave</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add New leave  -->

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
                        <a href="doctors-leaves.html" class="btn btn-danger position-relative z-1"
                            data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="5e9231395d6f0c03a3dbfd59-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="5e9231395d6f0c03a3dbfd59-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="5e9231395d6f0c03a3dbfd59-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="5e9231395d6f0c03a3dbfd59-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="5e9231395d6f0c03a3dbfd59-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="5e9231395d6f0c03a3dbfd59-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="5e9231395d6f0c03a3dbfd59-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="5e9231395d6f0c03a3dbfd59-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="5e9231395d6f0c03a3dbfd59-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="5e9231395d6f0c03a3dbfd59-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="5e9231395d6f0c03a3dbfd59-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="5e9231395d6f0c03a3dbfd59-|49" defer>
    </script>
</body>

</html>
