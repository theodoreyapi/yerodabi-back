<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Designation - Yerodabi</title>
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
                        <h4 class="fw-bold mb-0">Designation<span
                                class="badge badge-soft-primary border border-primary fs-13 fw-medium ms-2">Total
                                Designation : 54</span></h4>
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
                                    <a class="dropdown-item" href="designation.html#">Download as PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="designation.html#">Download as Excel</a>
                                </li>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-primary ms-2 fs-13 btn-md" data-bs-toggle="modal"
                            data-bs-target="#add_designation"><i class="ti ti-plus me-1"></i>Add New Designation</a>
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
                                    <h5 class="mb-0 fw-bold">Filter</h5>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="link-danger text-decoration-underline">Clear All</a>
                                    </div>
                                </div>
                                <form action="designation.html#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Designation</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Nurse</option>
                                                <option value="m-2">Pharmacist</option>
                                                <option value="m-3">Receptionist</option>
                                                <option value="m-4">Technician</option>
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
                                                <option value="m-1" selected>Active</option>
                                                <option value="m-2">Inactive</option>
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
                                <th>Designation</th>
                                <th>Created Date</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nurse</td>
                                <td>22 Apr 2025</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Active</span>
                                </td>
                                <td>
                                    <div class="action-item">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#edit_designation">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#delete_designation">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Pharmacist</td>
                                <td>12 Apr 2025</td>
                                <td><span
                                        class="badge badge-soft-danger border border-danger px-2 py-1 fs-13 fw-medium">Inactive</span>
                                </td>
                                <td>
                                    <div class="action-item">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#edit_designation">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#delete_designation">Delete</a>
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
        <div id="add_designation" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-dark modal-title fw-bold">Add New Designation</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="designation.html">
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center me-3">
                                        <input class="form-check-input me-2" type="radio" name="Radio-2"
                                            id="Radio-sm-1">
                                        <label class="form-check-label fs-13" for="Radio-sm-1">Staff</label>
                                    </div>
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-2" type="radio" name="Radio-2"
                                            id="Radio-sm-2">
                                        <label class="form-check-label fs-13" for="Radio-sm-2">Doctor</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Designation Name<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Department<span class="text-danger ms-1">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Nurse</option>
                                    <option>Pharmacist</option>
                                    <option>Receptionist</option>
                                    <option>Technician</option>
                                    <option>Medical Assistant</option>
                                </select>
                            </div>
                            <div class="mb-0">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Designation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Modal -->

        <!-- Start Add Modal -->
        <div id="edit_designation" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-dark modal-title fw-bold">Edit Designation</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="designation.html">
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center me-3">
                                        <input class="form-check-input me-2" type="radio" name="Radio-2"
                                            id="Radio-sm-3" checked>
                                        <label class="form-check-label fs-13" for="Radio-sm-3">Staff</label>
                                    </div>
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-2" type="radio" name="Radio-2"
                                            id="Radio-sm-4">
                                        <label class="form-check-label fs-13" for="Radio-sm-4">Doctor</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Designation Name<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control" value="Nurse">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Department<span class="text-danger ms-1">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>Nurse</option>
                                    <option>Pharmacist</option>
                                    <option>Receptionist</option>
                                    <option>Technician</option>
                                    <option>Medical Assistant</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="3">A nurse provides patient care and supports medical treatments.</textarea>
                            </div>
                            <div class="mb-0">
                                <label class="form-label">Status</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>Active</option>
                                    <option>Inactive</option>
                                </select>
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
        <!-- End Add Modal -->

        <!-- Start Delete Modal  -->
        <div class="modal fade" id="delete_designation">
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
                            <a href="designation.html" class="btn btn-danger position-relative z-1">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Modal  -->

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="3c373f87b922ca301e771b24-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="3c373f87b922ca301e771b24-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="3c373f87b922ca301e771b24-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="3c373f87b922ca301e771b24-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="3c373f87b922ca301e771b24-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="3c373f87b922ca301e771b24-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="3c373f87b922ca301e771b24-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="3c373f87b922ca301e771b24-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="3c373f87b922ca301e771b24-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/doctors.js" type="3c373f87b922ca301e771b24-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="3c373f87b922ca301e771b24-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="3c373f87b922ca301e771b24-|49" defer>
    </script>
</body>

</html>
