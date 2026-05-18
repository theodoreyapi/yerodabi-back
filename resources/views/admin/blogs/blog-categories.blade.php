<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog Categories - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="1139d18c0359c0401364ae77-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

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

                <!-- Page Header -->
                <div class="d-flex align-items-center pb-3 mb-3 border-bottom">
                    <div class="flex-grow-1">
                        <h4 class="fw-bold mb-0">Categories</h4>
                    </div>
                    <div class="text-end">
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#add_categories"><i class="ti ti-plus me-1"></i>Add New Categories</a>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- Table List -->
                <div class="table-responsive border">
                    <table class="table table-nowrap">
                        <thead class="tablehead-light">
                            <tr>
                                <th>Categories</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>General Medicine</td>
                                <td>30 Apr 2025</td>
                                <td><span
                                        class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">Active</span>
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
                                                data-bs-target="#edit_categories">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_categories">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Disease & Conditions</td>
                                <td>15 Apr 2025</td>
                                <td><span
                                        class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">Active</span>
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
                                                data-bs-target="#edit_categories">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_categories">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Mental Health</td>
                                <td>02 Apr 2025</td>
                                <td><span
                                        class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">Active</span>
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
                                                data-bs-target="#edit_categories">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_categories">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Patient Education </td>
                                <td>27 Mar 2025</td>
                                <td><span
                                        class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">Active</span>
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
                                                data-bs-target="#edit_categories">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_categories">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Nutrition & Lifestyle Medicine</td>
                                <td>12 Mar 2025</td>
                                <td><span
                                        class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">Active</span>
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
                                                data-bs-target="#edit_categories">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_categories">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Women’s & Men’s Health</td>
                                <td>05 Mar 2025</td>
                                <td><span
                                        class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">Active</span>
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
                                                data-bs-target="#edit_categories">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_categories">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Preventive Care</td>
                                <td>24 Feb 2025</td>
                                <td><span
                                        class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">Active</span>
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
                                                data-bs-target="#edit_categories">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_categories">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Medical Technology & Innovations</td>
                                <td>16 Feb 2025</td>
                                <td><span
                                        class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">Active</span>
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
                                                data-bs-target="#edit_categories">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_categories">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Healthcare Policy & News</td>
                                <td>01 Feb 2025</td>
                                <td><span
                                        class="badge bg-soft-danger fs-13 fw-medium text-danger border border-danger py-1 px-2">Inactive</span>
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
                                                data-bs-target="#edit_categories">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_categories">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Pediatrics & Geriatrics</td>
                                <td>25 Jan 2025</td>
                                <td><span
                                        class="badge bg-soft-danger fs-13 fw-medium text-danger border border-danger py-1 px-2">Inactive</span>
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
                                                data-bs-target="#edit_categories">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_categories">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /Table List -->

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

        <!-- Start Add Categories -->
        <div id="add_categories" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-dark modal-title">Add New Category</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="blog-categories.html">
                        <div class="modal-body">
                            <div class="mb-2">
                                <label class="form-label">Category Name<span class="text-danger ms-1">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>General Medicine</option>
                                    <option>Disease & Conditions</option>
                                    <option>Mental Health</option>
                                    <option>Patient Education </option>
                                    <option>Nutrition & Lifestyle Medicine</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Date<span class="text-danger ms-1">*</span></label>
                                <div class="input-group position-relative">
                                    <input type="text"
                                        class="form-control date-range bookingrange rounded-end h-auto py-2 bg-white">
                                    <span class="input-icon-addon fs-16 text-gray-9">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="mb-0">
                                <label class="form-label">Status<span class="text-danger ms-1">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Categories -->

        <!-- Start Edit Categories -->
        <div id="edit_categories" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-dark modal-title">Edit Category</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="blog-categories.html">
                        <div class="modal-body">
                            <div class="mb-2">
                                <label class="form-label">Category Name<span class="text-danger ms-1">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>General Medicine</option>
                                    <option>Disease & Conditions</option>
                                    <option>Mental Health</option>
                                    <option>Patient Education </option>
                                    <option>Nutrition & Lifestyle Medicine</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Date<span class="text-danger ms-1">*</span></label>
                                <div class="input-group position-relative">
                                    <input type="text"
                                        class="form-control date-range bookingrange rounded-end h-auto py-2 bg-white">
                                    <span class="input-icon-addon fs-16 text-gray-9">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
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
        <!-- End Edit Categories -->

        <!-- Start Delete Modal  -->
        <div class="modal fade" id="delete_categories">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-body text-center position-relative">
                        <img src="{{ URL::asset('') }}assets/img/bg/delete-modal-bg-01.png" alt=""
                            class="img-fluid position-absolute top-0 start-0">
                        <img src="{{ URL::asset('') }}assets/img/bg/delete-modal-bg-02.png" alt=""
                            class="img-fluid position-absolute bottom-0 end-0">
                        <div class="mb-3">
                            <span class="avatar avatar-lg bg-danger text-white"><i
                                    class="ti ti-trash fs-24"></i></span>
                        </div>
                        <h5 class="fw-bold mb-1">Delete Confirmation</h5>
                        <p class="mb-3">Are you sure, you want to delete Blog Category?</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3"
                                data-bs-dismiss="modal">Cancel</a>
                            <a href="blog-categories.html" class="btn btn-danger position-relative z-1">Yes,
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="1139d18c0359c0401364ae77-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="1139d18c0359c0401364ae77-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="1139d18c0359c0401364ae77-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="1139d18c0359c0401364ae77-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="1139d18c0359c0401364ae77-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="1139d18c0359c0401364ae77-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="1139d18c0359c0401364ae77-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="1139d18c0359c0401364ae77-|49" defer>
    </script>
</body>

</html>
