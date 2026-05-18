<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Roles - Yerodabi</title>
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

    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">

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
                        <h4 class="fw-bold mb-0">Roles</h4>
                    </div>
                    <div class="text-end d-flex">
                        <a href="javascript:void(0);" class="btn btn-primary ms-2 fs-13 btn-md" data-bs-toggle="modal"
                            data-bs-target="#add_role"><i class="ti ti-plus me-1"></i>New Role</a>
                    </div>
                </div>
                <!-- End Page Header -->

                <div class="table-responsive">
                    <table class="table table-nowrap">
                        <thead class="thead-light">
                            <tr>
                                <th>Role</th>
                                <th>Created On</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Admin</td>
                                <td>30 Apr 2025</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Active</span>
                                </td>
                                <td><a href="{{ url('permissions') }}" class="btn btn-white border text-dark"><i
                                            class="ti ti-shield-half me-1"></i>Permissions</a></td>
                                <td>
                                    <div class="action-item">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#edit_role">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete_role">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Nurse</td>
                                <td>12 Mar 2025</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Active</span>
                                </td>
                                <td><a href="permissions.html" class="btn btn-white border text-dark"><i
                                            class="ti ti-shield-half me-1"></i>Permissions</a></td>
                                <td>
                                    <div class="action-item">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#edit_role">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete_role">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Receptionist</td>
                                <td>27 Mar 2025</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Active</span>
                                </td>
                                <td><a href="permissions.html" class="btn btn-white border text-dark"><i
                                            class="ti ti-shield-half me-1"></i>Permissions</a></td>
                                <td>
                                    <div class="action-item">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#edit_role">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete_role">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Lab Technician</td>
                                <td>05 Mar 2025</td>
                                <td><span
                                        class="badge badge-soft-danger border border-danger px-2 py-1 fs-13 fw-medium">Inactive</span>
                                </td>
                                <td><a href="permissions.html" class="btn btn-white border text-dark"><i
                                            class="ti ti-shield-half me-1"></i>Permissions</a></td>
                                <td>
                                    <div class="action-item">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#edit_role">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete_role">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Pharmacist</td>
                                <td>24 Feb 2025</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Active</span>
                                </td>
                                <td><a href="permissions.html" class="btn btn-white border text-dark"><i
                                            class="ti ti-shield-half me-1"></i>Permissions</a></td>
                                <td>
                                    <div class="action-item">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#edit_role">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete_role">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Accountant</td>
                                <td>16 Feb 2025</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Active</span>
                                </td>
                                <td><a href="permissions.html" class="btn btn-white border text-dark"><i
                                            class="ti ti-shield-half me-1"></i>Permissions</a></td>
                                <td>
                                    <div class="action-item">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#edit_role">Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center"
                                                    data-bs-toggle="modal" data-bs-target="#delete_role">Delete</a>
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
        <div id="add_role" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-dark modal-title fw-bold">New Role</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="roles-and-permissions.html">
                        <div class="modal-body">
                            <div class="mb-0">
                                <label class="form-label">Role<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add New Role</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Modal -->

        <!-- Start Add Modal -->
        <div id="edit_role" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-dark modal-title fw-bold">Edit Role</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="roles-and-permissions.html">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Role<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control" value="Doctor">
                            </div>
                            <div class="mb-0">
                                <label class="form-label">Status<span class="text-danger ms-1">*</span></label>
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
        <div class="modal fade" id="delete_role">
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
                            <a href="roles-and-permissions.html" class="btn btn-danger position-relative z-1">Yes,
                                Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Modal  -->

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="88ed9ecd2a0e043e87c8daf1-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="88ed9ecd2a0e043e87c8daf1-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="88ed9ecd2a0e043e87c8daf1-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="88ed9ecd2a0e043e87c8daf1-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="88ed9ecd2a0e043e87c8daf1-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="88ed9ecd2a0e043e87c8daf1-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="88ed9ecd2a0e043e87c8daf1-text/javascript"></script>

    <!-- Rangeslider JS -->
    <script src="{{ URL::asset('') }}assets/plugins/ion-rangeslider/js/ion.rangeSlider.js" type="88ed9ecd2a0e043e87c8daf1-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/ion-rangeslider/js/custom-rangeslider.js" type="88ed9ecd2a0e043e87c8daf1-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js" type="88ed9ecd2a0e043e87c8daf1-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/doctors.js" type="88ed9ecd2a0e043e87c8daf1-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="88ed9ecd2a0e043e87c8daf1-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="88ed9ecd2a0e043e87c8daf1-|49" defer>
    </script>
</body>

</html>
