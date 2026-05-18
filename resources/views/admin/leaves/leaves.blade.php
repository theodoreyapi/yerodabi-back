<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Leaves - Yerodabi</title>
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

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

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
                        <h4 class="fw-bold mb-0">Admin Leaves</h4>
                    </div>
                    <div class="text-end d-flex">
                        <a href="javascript:void(0);" class="btn btn-primary ms-2 fs-13 btn-md" data-bs-toggle="modal"
                            data-bs-target="#add_leave"><i class="ti ti-plus me-1"></i>New
                            Leave</a>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- start row -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body position-relative">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p>Total Present</p>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2"><span class="text-dark fw-bold">180</span></p>
                                            <span class="badge badge-soft-success fs-12 fw-normal">+10.6%<i
                                                    class="ti ti-arrow-up-right ms-1"></i></span>
                                        </div>
                                    </div>
                                    <span
                                        class="p-2 bg-soft-primary border border-primary rounded-circle d-inline-flex align-items-center justify-content-center text-primary position-relative z-1"><i
                                            class="ti ti-user-check"></i></span>
                                </div>
                                <img src="{{ URL::asset('') }}assets/img/bg/attendance-bg-01.png" alt=""
                                    class="img-fluid position-absolute bottom-0 end-0">
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body position-relative">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p>Planned Leaves</p>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2"><span class="text-dark fw-bold">10</span></p>
                                            <span class="badge badge-soft-success fs-12 fw-normal">+8.95%<i
                                                    class="ti ti-arrow-up-right ms-1"></i></span>
                                        </div>
                                    </div>
                                    <span
                                        class="p-2 bg-soft-success border border-success rounded-circle d-inline-flex align-items-center justify-content-center text-success position-relative z-1"><i
                                            class="ti ti-user-x"></i></span>
                                </div>
                                <img src="{{ URL::asset('') }}assets/img/bg/attendance-bg-02.png" alt=""
                                    class="img-fluid position-absolute bottom-0 end-0">
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body position-relative">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p>Unplanned Leaves</p>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2"><span class="text-dark fw-bold">50</span></p>
                                            <span class="badge badge-soft-success fs-12 fw-normal">+3.78%<i
                                                    class="ti ti-arrow-up-right ms-1"></i></span>
                                        </div>
                                    </div>
                                    <span
                                        class="p-2 bg-soft-warning border border-warning rounded-circle d-inline-flex align-items-center justify-content-center text-warning position-relative z-1"><i
                                            class="ti ti-user-exclamation"></i></span>
                                </div>
                                <img src="{{ URL::asset('') }}assets/img/bg/attendance-bg-03.png" alt=""
                                    class="img-fluid position-absolute bottom-0 end-0">
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body position-relative">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p>Pending Requests</p>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-2"><span class="text-dark fw-bold">15</span></p>
                                            <span class="badge badge-soft-success fs-12 fw-normal">+7.65%<i
                                                    class="ti ti-arrow-up-right ms-1"></i></span>
                                        </div>
                                    </div>
                                    <span
                                        class="p-2 bg-soft-danger border border-danger rounded-circle d-inline-flex align-items-center justify-content-center text-danger position-relative z-1"><i
                                            class="ti ti-user-question"></i></span>
                                </div>
                                <img src="{{ URL::asset('') }}assets/img/bg/attendance-bg-04.png" alt=""
                                    class="img-fluid position-absolute bottom-0 end-0">
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                <div class=" d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <div class="search-set mb-3">
                        <div class="d-flex align-items-center">
                            <div class="table-search d-flex align-items-center mb-0 me-2">
                                <div class="search-input">
                                    <a href="javascript:void(0);" class="btn-searchset"></a>
                                </div>
                            </div>
                            <div class="d-flex right-content align-items-center flex-wrap">
                                <div id="reportrange" class="reportrange-picker d-flex align-items-center">
                                    <i class="ti ti-calendar text-gray-5 fs-14 me-1"></i><span
                                        class="reportrange-picker-field">16 Apr 25 - 16 Apr 25</span>
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
                                    <h5 class="mb-0 fw-bold">Filter</h5>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="link-danger text-decoration-underline">Clear All</a>
                                    </div>
                                </div>
                                <form action="leaves.html#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Employee</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>James Adair</option>
                                                <option value="m-2">Adam Milne</option>
                                                <option value="m-3">Richard Clark</option>
                                                <option value="m-4">Robert Reid</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Leave Type</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Sick Leave</option>
                                                <option value="m-2">Casual Leave</option>
                                                <option value="m-3">Emergency</option>
                                                <option value="m-4">Vacation</option>
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
                                                <label class="form-label">Status</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Approved</option>
                                                <option value="m-2">Rejected</option>
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
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Recent</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Oldest</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-nowrap datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Employee</th>
                                <th>Leave Type</th>
                                <th>Date</th>
                                <th>Day</th>
                                <th>Applied On</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#EMP020</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2" data-bs-toggle="modal"
                                            data-bs-target="#view_staff">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-08.jpg"
                                                alt="Doctor" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="mb-0 fs-14 fw-semibold"><a href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#view_staff">James
                                                    Adair</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Sick Leave</td>
                                <td>30 Apr 2025 - 30 Apr 2025</td>
                                <td>01 Day</td>
                                <td>22 Apr 2025</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Approved</span>
                                </td>
                                <td>
                                    <div class="action-item p-2">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#edit_leave">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete_leave">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#EMP019</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2" data-bs-toggle="modal"
                                            data-bs-target="#view_staff">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-03.jpg"
                                                alt="Doctor" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="mb-0 fs-14 fw-semibold"><a href="javascript:void(0);"
                                                    data-bs-toggle="modal" data-bs-target="#view_staff">Adam Milne</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Casual Leave</td>
                                <td>15 Apr 2025 - 15 Apr 2025</td>
                                <td>02 Days</td>
                                <td>12 Apr 2025</td>
                                <td><span
                                        class="badge badge-soft-danger border border-danger px-2 py-1 fs-13 fw-medium">Rejected</span>
                                </td>
                                <td>
                                    <div class="action-item p-2">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#edit_leave">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete_leave">Delete</a>
                                            </li>
                                        </ul>
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

        <!-- Start Add Modal -->
        <div id="add_leave" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-dark modal-title fw-bold">Add New Leave</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="leaves.html">
                        <div class="modal-body">
                            <!-- start row -->
                            <div class="row row-gap-2">
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Employee<span
                                                class="text-danger ms-1">*</span></label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>James Adair</option>
                                            <option>Adam Milne</option>
                                            <option>Richard Clark</option>
                                            <option>Robert Reid</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Leave Type<span
                                                class="text-danger ms-1">*</span></label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Sick Leave</option>
                                            <option>Casual Leave</option>
                                            <option>Emergency</option>
                                            <option>Vacation</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">From Date<span
                                                class="text-danger ms-1">*</span></label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker"
                                                placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">To Date<span
                                                class="text-danger ms-1">*</span></label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker"
                                                placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-12">
                                    <div class="mb-0">
                                        <label class="form-label">No of Days<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-12">
                                    <div class="p-2 bg-light rounded">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <span class="text-body">dd/mm/yyyy</span>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Full Day</option>
                                                    <option>Half Day</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-12">
                                    <div class="mb-0">
                                        <label class="form-label">No of Days<span
                                                class="text-danger ms-1">*</span></label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add New Leave</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Modal -->

        <!-- Start Add Modal -->
        <div id="edit_leave" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-dark modal-title fw-bold">Edit Leave</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="leaves.html">
                        <div class="modal-body">
                            <!-- start row -->
                            <div class="row row-gap-2">
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Employee<span
                                                class="text-danger ms-1">*</span></label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>James Adair</option>
                                            <option>Adam Milne</option>
                                            <option>Richard Clark</option>
                                            <option>Robert Reid</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Leave Type<span
                                                class="text-danger ms-1">*</span></label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Sick Leave</option>
                                            <option>Casual Leave</option>
                                            <option>Emergency</option>
                                            <option>Vacation</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">From Date<span
                                                class="text-danger ms-1">*</span></label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker"
                                                placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">To Date<span
                                                class="text-danger ms-1">*</span></label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker"
                                                placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-12">
                                    <div class="mb-0">
                                        <label class="form-label">No of Days<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="2">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-12">
                                    <div class="p-2 bg-light rounded">
                                        <div class="row align-items-center mb-2">
                                            <div class="col-md-6">
                                                <span class="text-body">18 Jan 2025</span>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>Full Day</option>
                                                    <option>Half Day</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <span class="text-body">18 Jan 2025</span>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>Full Day</option>
                                                    <option>Half Day</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-12">
                                    <div class="mb-0">
                                        <label class="form-label">No of Days<span
                                                class="text-danger ms-1">*</span></label>
                                        <textarea class="form-control" rows="3">Not feeling well due to cold and fatigue, taking rest as advised by family doctor.</textarea>
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->
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
        <!-- End Add Modal -->

        <!-- Start Delete Modal  -->
        <div class="modal fade" id="delete_leave">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-body text-center position-relative z-1">
                        <img src="{{ URL::asset('') }}assets/img/bg/delete-modal-bg-01.png" alt=""
                            class="img-fluid position-absolute top-0 start-0 z-n1">
                        <img src="{{ URL::asset('') }}assets/img/bg/delete-modal-bg-02.png" alt=""
                            class="img-fluid position-absolute bottom-0 end-0 z-n1">
                        <div class="mb-3">
                            <span class="avatar avatar-lg bg-danger text-white"><i
                                    class="ti ti-trash fs-24"></i></span>
                        </div>
                        <h5 class="fw-bold mb-1">Delete Confirmation</h5>
                        <p class="mb-3">Are you sure want to delete?</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3"
                                data-bs-dismiss="modal">Cancel</a>
                            <a href="leaves.html" class="btn btn-danger position-relative z-1">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Modal  -->

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="bae6a9f9fdabdc42df95cc0d-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="bae6a9f9fdabdc42df95cc0d-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="bae6a9f9fdabdc42df95cc0d-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="bae6a9f9fdabdc42df95cc0d-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="bae6a9f9fdabdc42df95cc0d-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="bae6a9f9fdabdc42df95cc0d-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="bae6a9f9fdabdc42df95cc0d-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="bae6a9f9fdabdc42df95cc0d-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="bae6a9f9fdabdc42df95cc0d-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="bae6a9f9fdabdc42df95cc0d-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="bae6a9f9fdabdc42df95cc0d-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/doctors.js" type="bae6a9f9fdabdc42df95cc0d-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="bae6a9f9fdabdc42df95cc0d-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="bae6a9f9fdabdc42df95cc0d-|49" defer>
    </script>
</body>

</html>
