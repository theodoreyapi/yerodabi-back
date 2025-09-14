<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctors | Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="86a649cbca43d33b73848648-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css" id="app-style">

</head>

<body>

    <!-- Begin Wrapper -->
    <div class="main-wrapper">

        @include('admin.layouts.header')

        @include('patient.layouts.menu-patient')

        <div class="page-wrapper">

            <!-- Start Content -->
            <div class="content">

                <!-- Start Page Header -->
                <div
                    class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 pb-3 mb-3 border-1 border-bottom">
                    <div class="flex-grow-1">
                        <h4 class="fw-bold mb-0"> Doctors </h4>
                    </div>
                    <div class="text-end">
                        <!-- dropdown-->
                        <div class="dropdown me-1">
                            <a href="javascript:void(0);"
                                class="btn btn-md fw-normal border fs-14 bg-white rounded text-dark d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                Export<i class="ti ti-chevron-down ms-2"></i>
                            </a>
                            <ul class="dropdown-menu p-2">
                                <li>
                                    <a class="dropdown-item" href="patient-doctors.html#">Download as PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="patient-doctors.html#">Download as Excel</a>
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
                                <th class="no-sort">
                                    Doctor Name
                                </th>
                                <th>Phone</th>
                                <th>Last Visit</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{ url('patients-doctor-details') }}" class="avatar avatar-md me-2">
                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-02.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="{{ url('patients-doctor-details') }}"
                                            class="text-dark fw-semibold">Dr. Mick
                                            Thompson <span class="text-body fs-13 fw-normal d-block"> Cardiologist
                                            </span> </a>
                                    </div>
                                </td>
                                <td>+1 41245 54132 </td>
                                <td>
                                    30 Apr 2025
                                </td>
                                <td class="">
                                    <a href="{{ url('patient-appointment-details') }}"
                                        class="border p-1 rounded-3 fs-13 text-body d-inline-flex align-items-center justify-content-center">
                                        <i class="ti ti-calendar-cog"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="border p-1 rounded-3 fs-13 text-body d-inline-flex align-items-center justify-content-center">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_doctors">Edit</a>
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

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->


    <!-- Start Edit Modal -->
    <div id="edit_doctors" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-dark modal-title">Edit Date</h5>
                    <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close"><i class="ti ti-x"></i></button>
                </div>
                <form action="https://preclinic.dreamstechnologies.com/html/template/categories.html">
                    <div class="modal-body">
                        <div class="mb-2">
                            <label class="form-label">Date<span class="text-danger ms-1">*</span></label>
                            <div class="input-group position-relative">
                                <input type="text"
                                    class="form-control datetimepicker rounded-end h-auto py-2 bg-white">
                                <span class="input-icon-addon fs-16 text-dark">
                                    <i class="ti ti-calendar "></i>
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
                        <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Edit Modal -->

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
                        <a href="patient-doctors.html" class="btn btn-danger position-relative z-1"
                            data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="86a649cbca43d33b73848648-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="86a649cbca43d33b73848648-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="86a649cbca43d33b73848648-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="86a649cbca43d33b73848648-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="86a649cbca43d33b73848648-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="86a649cbca43d33b73848648-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="86a649cbca43d33b73848648-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="86a649cbca43d33b73848648-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="86a649cbca43d33b73848648-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="86a649cbca43d33b73848648-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="86a649cbca43d33b73848648-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="86a649cbca43d33b73848648-|49" defer>
    </script>
</body>

</html>
