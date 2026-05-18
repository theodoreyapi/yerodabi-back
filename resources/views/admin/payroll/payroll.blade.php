<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payroll - Bootstrap 5 Admin Template</title>
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
                <div class="mb-3 pb-3 border-bottom">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <h4 class="fw-bold mb-0 me-2">Payroll</h4>
                            <span class="badge badge-soft-primary border border-primary fw-medium">Total Department :
                                33</span>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#add_payroll"><i class="ti ti-plus me-1"></i>Add Employee Salary</a>
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
                                <form action="payroll.html#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Employee</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>James Allaire</option>
                                                <option value="m-2">Esther Schmidt</option>
                                                <option value="m-3">Judi Lenahan</option>
                                                <option value="m-4">Robert Reid</option>
                                                <option value="m-4">Dottie Sellers</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Role</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Admin</option>
                                                <option value="m-2">Reception</option>
                                                <option value="m-3">Nurse (RN)</option>
                                                <option value="m-4">Nurse Practitioner</option>
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
                                <th>Employee</th>
                                <th>Email</th>
                                <th>Joining Date</th>
                                <th>Role</th>
                                <th>Salary</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="f298939f9781b2959f939b9edc919d9f">[email&#160;protected]</a></td>
                                <td>01 Jan 2024</td>
                                <td>Admin</td>
                                <td>$1200</td>
                                <td><a href="{{ url('payroll-2') }}" class="btn btn-white border text-dark">Generate Slip</a>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="btn p-1 btn-white border">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_payroll">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_payroll">Delete</a>
                                        </li>
                                    </ul>
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
        <div id="add_payroll" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-dark modal-title fw-bold">Add Employee Salary</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="payroll.html">
                        <div class="modal-body">
                            <!-- start row -->
                            <div class="row row-gap-2 mb-3">
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Select Staff</label>
                                        <select class="select">
                                            <option>Select staff</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Net Salary</label>
                                        <input type="text" class="form-control" placeholder="0">
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->
                            <!-- start row -->
                            <div class="row row-gap-2">
                                <div class="col-md-6">
                                    <h6 class="mb-3">Earnings ($)</h6>
                                    <div class="mb-3">
                                        <label class="form-label">Basic Salary<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="0">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">DA (40%)<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="0">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">HRA (15%)<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="0">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Conveyance<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="0">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Medical Allowance<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="0">
                                    </div>
                                    <div class="mb-0">
                                        <label class="form-label">Others<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="0">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <h6 class="mb-3">Deductions ($)</h6>
                                    <div class="mb-3">
                                        <label class="form-label">TDS<span class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" placeholder="0">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">ESI</label>
                                        <input type="text" class="form-control" placeholder="0">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">PF<span class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" placeholder="0">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Prof Tax<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" placeholder="0">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Labour Welfare<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" placeholder="0">
                                    </div>
                                    <div class="mb-0">
                                        <label class="form-label">Others<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" placeholder="0">
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Payslip</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Modal -->

        <!-- Start Add Modal -->
        <div id="edit_payroll" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-dark modal-title fw-bold">Edit Employee Salary</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="payroll.html">
                        <div class="modal-body">
                            <!-- start row -->
                            <div class="row row-gap-2 mb-3">
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Select Staff</label>
                                        <select class="select">
                                            <option>Select staff</option>
                                        </select>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Net Salary</label>
                                        <input type="text" class="form-control" value="1000">
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->
                            <!-- start row -->
                            <div class="row row-gap-2">
                                <div class="col-md-6">
                                    <h6 class="mb-3">Earnings ($)</h6>
                                    <div class="mb-3">
                                        <label class="form-label">Basic Salary<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="1000">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">DA (40%)<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="800">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">HRA (15%)<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="600">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Conveyance<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="50">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Medical Allowance<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="40">
                                    </div>
                                    <div class="mb-0">
                                        <label class="form-label">Others<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="20">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <h6 class="mb-3">Deductions ($)</h6>
                                    <div class="mb-3">
                                        <label class="form-label">TDS<span class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="$600">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">ESI</label>
                                        <input type="text" class="form-control" value="500">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">PF<span class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="60">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Prof Tax<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="40">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Labour Welfare<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="30">
                                    </div>
                                    <div class="mb-0">
                                        <label class="form-label">Others<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="10">
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
        <div class="modal fade" id="delete_payroll">
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
                            <a href="payroll.html" class="btn btn-danger position-relative z-1">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Modal  -->

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script data-cfasync="false" src="{{ URL::asset('') }}assets/email-decode.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="e930b3e06d815ba6b4510ad2-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="e930b3e06d815ba6b4510ad2-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="e930b3e06d815ba6b4510ad2-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="e930b3e06d815ba6b4510ad2-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="e930b3e06d815ba6b4510ad2-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="e930b3e06d815ba6b4510ad2-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="e930b3e06d815ba6b4510ad2-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="e930b3e06d815ba6b4510ad2-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="e930b3e06d815ba6b4510ad2-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="e930b3e06d815ba6b4510ad2-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="e930b3e06d815ba6b4510ad2-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/doctors.js" type="e930b3e06d815ba6b4510ad2-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="e930b3e06d815ba6b4510ad2-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="e930b3e06d815ba6b4510ad2-|49" defer>
    </script>
</body>

</html>
