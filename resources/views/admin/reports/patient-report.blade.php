<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Patients Report - Yerodabi</title>
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
                        <h4 class="fw-bold mb-0">Patients Report</h4>
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
                                    <a class="dropdown-item" href="patient-report.html#">Download as PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="patient-report.html#">Download as Excel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- row start-->
                <div class="row">

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100 z-0">
                            <img src="{{ URL::asset('') }}assets/img/bg/widget-bg-09.svg" alt="img"
                                class="position-absolute end-0 bottom-0 z-n1">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <p class="mb-1 text-truncate">Total Patients</p>
                                        <h6 class="mb-0 fw-bold">1,240</h6>
                                    </div>
                                    <span class="avatar avatar-lg bg-primary rounded-circle flex-shrink-0"><i
                                            class="ti ti-users fs-24"></i></span>
                                </div>
                                <span class="mb-0 fs-13 d-block border-top rounded-2 pt-2"><span class="text-success"><i
                                            class="ti ti-arrow-up-right me-1"></i>5.62%</span>
                                    from last month</span>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100 z-0">
                            <img src="{{ URL::asset('') }}assets/img/bg/widget-bg-10.svg" alt="img"
                                class="position-absolute end-0 bottom-0 z-n1">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <p class="mb-1 text-truncate">New Patients</p>
                                        <h6 class="mb-0 fw-bold">210</h6>
                                    </div>
                                    <span class="avatar avatar-lg bg-success rounded-circle flex-shrink-0"><i
                                            class="ti ti-users-plus fs-24"></i></span>
                                </div>
                                <span class="mb-0 fs-13 d-block border-top rounded-2 pt-2"><span class="text-success"><i
                                            class="ti ti-arrow-up-right me-1"></i>11.4%</span>
                                    from last month</span>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100 z-0">
                            <img src="{{ URL::asset('') }}assets/img/bg/widget-bg-11.svg" alt="img"
                                class="position-absolute end-0 bottom-0 z-n1">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <p class="mb-1 text-truncate">Appointment Booked</p>
                                        <h6 class="mb-0 fw-bold">500</h6>
                                    </div>
                                    <span class="avatar avatar-lg bg-warning rounded-circle flex-shrink-0"><i
                                            class="ti ti-bookmarks fs-24"></i></span>
                                </div>
                                <span class="mb-0 fs-13 d-block border-top rounded-2 pt-2"><span class="text-success"><i
                                            class="ti ti-arrow-up-right me-1"></i>8.52%</span>
                                    from last month</span>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100 z-0">
                            <img src="{{ URL::asset('') }}assets/img/bg/widget-bg-12.svg" alt="img"
                                class="position-absolute end-0 bottom-0 z-n1">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <p class="mb-1 text-truncate">Returning Patients</p>
                                        <h6 class="mb-0 fw-bold">380</h6>
                                    </div>
                                    <span class="avatar avatar-lg bg-danger rounded-circle flex-shrink-0"><i
                                            class="ti ti-users-minus fs-24"></i></span>
                                </div>
                                <span class="mb-0 fs-13 d-block border-top rounded-2 pt-2"><span
                                        class="text-danger"><i class="ti ti-arrow-down-right me-1"></i>7.45%</span>
                                    from last month</span>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                </div>
                <!-- row end -->

                <div class="card">
                    <div class="card-body">

                        <!-- start row -->
                        <div class="row row-gap-2">
                            <div class="col-lg-4">
                                <div class="mb-0">
                                    <label class="form-label">Date</label>
                                    <div class="input-group position-relative">
                                        <input type="text"
                                            class="form-control date-range bookingrange rounded-end bg-white">
                                        <span class="input-icon-addon fs-14 text-dark">
                                            <i class="ti ti-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-lg-4">
                                <div class="mb-0">
                                    <label class="form-label">Patient</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Alberto Ripley</option>
                                        <option>Susan Babin</option>
                                        <option>Martin Lisa</option>
                                        <option>Stella Mary</option>
                                        <option>Carol Lam</option>
                                        <option>Jesus Adams</option>
                                        <option>Ezra Belcher</option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                            <div class="col-lg-4">
                                <div class="mb-0">
                                    <label class="form-label">Location</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>California</option>
                                        <option>Options Enhanced</option>
                                        <option>New York</option>
                                        <option>Florida</option>
                                        <option>Illinois</option>
                                        <option>Georgia</option>
                                        <option>Washington</option>
                                        <option>Arizona</option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                            <div class="col-lg-4">
                                <div class="mb-0">
                                    <label class="form-label">Practioner</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Dr. Mick Thompson</option>
                                        <option>Dr. Sarah Johnson</option>
                                        <option>Dr. Emily Carter</option>
                                        <option>Dr. David Lee</option>
                                        <option>Dr. Anna Kim</option>
                                        <option>Dr. John Smith</option>
                                        <option>Dr. Lisa White</option>
                                        <option>Dr. Patrica Brown</option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                            <div class="col-lg-4">
                                <div class="mb-0">
                                    <label class="form-label">Designation</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Cardiologist</option>
                                        <option>Orthopedic Surgeon</option>
                                        <option>Pediatrician</option>
                                        <option>Gynecologist</option>
                                        <option>Psychiatrist</option>
                                        <option>Neurosurgeon</option>
                                        <option>Oncologist</option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                            <div class="col-lg-4">
                                <div class="mb-0">
                                    <label class="form-label">Status</label>
                                    <input class="input-tags form-control" id="inputBox" type="text"
                                        data-role="tagsinput" name="specialist" value="Pending">
                                </div>
                            </div><!-- end col -->
                            <div class="col-md-12">
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="javascript:void(0);" class="btn btn-dark"><i
                                            class="ti ti-player-play me-1"></i>Run Report</a>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                    </div><!-- end card body -->
                </div><!-- end card -->

                <div class="table-responsive">
                    <table class="table table-nowrap">
                        <thead class="thead-light">
                            <tr>
                                <th>Patient</th>
                                <th>Age/Gender</th>
                                <th>Contact Info</th>
                                <th>Practioner</th>
                                <th>Location</th>
                                <th>Last Visit</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Alberto Ripley</td>
                                <td>26/Male</td>
                                <td>
                                    <p class="text-dark mb-0">+1 43554 54584</p>
                                    <span><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="650f0408001625001d04081509004b060a08">[email&#160;protected]</a></span>
                                </td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Mick Thompson</p>
                                </td>
                                <td>California</td>
                                <td>30 Apr 2025</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Available</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Susan Babin</td>
                                <td>21/Female</td>
                                <td>
                                    <p class="text-dark mb-0">+1 47554 54585</p>
                                    <span><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="90f5fdf9fce9d0f5e8f1fde0fcf5bef3fffd">[email&#160;protected]</a></span>
                                </td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Sarah Johnson</p>
                                </td>
                                <td>Texas</td>
                                <td>15 Apr 2025</td>
                                <td><span
                                        class="badge badge-soft-danger border border-danger px-2 py-1 fs-13 fw-medium">Unavailable</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Carol Lam</td>
                                <td>28/Male</td>
                                <td>
                                    <p class="text-dark mb-0">+1 54114 54586</p>
                                    <span><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="e4968b86819690a4819c8589948881ca878b89">[email&#160;protected]</a></span>
                                </td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Emily Carter</p>
                                </td>
                                <td>New York</td>
                                <td>02 Apr 2025</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Available</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Marsha Noland</td>
                                <td>25/Female</td>
                                <td>
                                    <p class="text-dark mb-0">+1 51247 54587</p>
                                    <span><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="077468776f6e6647627f666a776b622964686a">[email&#160;protected]</a></span>
                                </td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. David Lee</p>
                                </td>
                                <td>Florida</td>
                                <td>27 Mar 2025</td>
                                <td><span
                                        class="badge badge-soft-danger border border-danger px-2 py-1 fs-13 fw-medium">Unavailable</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Irma Armstrong</td>
                                <td>32/Male</td>
                                <td>
                                    <p class="text-dark mb-0">+1 41452 54588</p>
                                    <span><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="7410151a1d111834110c15190418115a171b19">[email&#160;protected]</a></span>
                                </td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Anna Kim</p>
                                </td>
                                <td>Illinois</td>
                                <td>12 Mar 2025</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Available</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Jesus Adams</td>
                                <td>27/Female</td>
                                <td>
                                    <p class="text-dark mb-0">+1 51425 54589</p>
                                    <span><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="741b181d021d1534110c15190418115a171b19">[email&#160;protected]</a></span>
                                </td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. John Smith</p>
                                </td>
                                <td>Pennsylvania</td>
                                <td>05 Mar 2025</td>
                                <td><span
                                        class="badge badge-soft-danger border border-danger px-2 py-1 fs-13 fw-medium">Unavailable</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Ezra Belcher</td>
                                <td>28/Male</td>
                                <td>
                                    <p class="text-dark mb-0">+1 42565 54590</p>
                                    <span><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="adc0c4cec5ccc8c1edc8d5ccc0ddc1c883cec2c0">[email&#160;protected]</a></span>
                                </td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Lisa White</p>
                                </td>
                                <td>Ohio</td>
                                <td>24 Feb 2025</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Available</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Glen Lentz</td>
                                <td>22/Female</td>
                                <td>
                                    <p class="text-dark mb-0">+1 51425 54589</p>
                                    <span><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="1c756f7d7e7970707d5c79647d716c7079327f7371">[email&#160;protected]</a></span>
                                </td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Patricia Brown</p>
                                </td>
                                <td>Georgia</td>
                                <td>16 Feb 2025</td>
                                <td><span
                                        class="badge badge-soft-danger border border-danger px-2 py-1 fs-13 fw-medium">Unavailable</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Bernard Griffith</td>
                                <td>34/Male</td>
                                <td>
                                    <p class="text-dark mb-0">+1 45214 54591</p>
                                    <span><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="0a7e786b6e6f4a6f726b677a666f24696567">[email&#160;protected]</a></span>
                                </td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Rachel Green</p>
                                </td>
                                <td>North Carolina</td>
                                <td>01 Feb 2025</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Available</span>
                                </td>
                            </tr>
                            <tr>
                                <td>John Elsass</td>
                                <td>23/Female</td>
                                <td>
                                    <p class="text-dark mb-0">+1 41245 54592</p>
                                    <span><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="70110611301508111d001c155e131f1d">[email&#160;protected]</a></span>
                                </td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Michael Smith</p>
                                </td>
                                <td>Michigan</td>
                                <td>25 Jan 2025</td>
                                <td><span
                                        class="badge badge-soft-danger border border-danger px-2 py-1 fs-13 fw-medium">Unavailable</span>
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

    <!-- jQuery -->
    <script data-cfasync="false" src="{{ URL::asset('') }}assets/email-decode.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="f91d49fc3e8a484e03d78f8f-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="f91d49fc3e8a484e03d78f8f-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="f91d49fc3e8a484e03d78f8f-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="f91d49fc3e8a484e03d78f8f-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="f91d49fc3e8a484e03d78f8f-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="f91d49fc3e8a484e03d78f8f-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="f91d49fc3e8a484e03d78f8f-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="f91d49fc3e8a484e03d78f8f-text/javascript"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/apexcharts.min.js" type="f91d49fc3e8a484e03d78f8f-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/chart-data.js" type="f91d49fc3e8a484e03d78f8f-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="f91d49fc3e8a484e03d78f8f-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/doctors.js" type="f91d49fc3e8a484e03d78f8f-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="f91d49fc3e8a484e03d78f8f-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="f91d49fc3e8a484e03d78f8f-|49" defer>
    </script>
</body>

</html>
