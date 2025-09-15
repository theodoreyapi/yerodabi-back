<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Appointment Report - Yerodabi</title>
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
                        <h4 class="fw-bold mb-0">Appointment Report</h4>
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
                                    <a class="dropdown-item" href="appointment-report.html#">Download as PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="appointment-report.html#">Download as Excel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- row start -->
                <div class="row">

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100 z-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span
                                        class="avatar avatar-sm bg-soft-primary border border-primary text-primary rounded-2 flex-shrink-0"><i
                                            class="ti ti-calendar-time fs-14"></i></span>
                                    <span class="badge fw-medium bg-soft-success text-success flex-shrink-0 ms-2">+10%<i
                                            class="ti ti-arrow-up-right ms-1"></i></span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-1 text-truncate">Total Appointments</p>
                                        <h6 class="mb-0 fw-bold">850</h6>
                                    </div>
                                    <div id="s-col-11" class="chart-set"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100 z-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span
                                        class="avatar avatar-sm bg-soft-success border border-success text-success rounded-2 flex-shrink-0"><i
                                            class="ti ti-calendar-up fs-14"></i></span>
                                    <span
                                        class="badge fw-medium bg-soft-success text-success flex-shrink-0 ms-2">+11.5%<i
                                            class="ti ti-arrow-up-right ms-1"></i></span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-1 text-truncate">Completed</p>
                                        <h6 class="mb-0 fw-bold">720</h6>
                                    </div>
                                    <div id="s-col-12" class="chart-set"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100 z-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span
                                        class="avatar avatar-sm bg-soft-warning border border-warning text-warning rounded-2 flex-shrink-0"><i
                                            class="ti ti-calendar-down fs-14"></i></span>
                                    <span
                                        class="badge fw-medium bg-soft-success text-success flex-shrink-0 ms-2">+8.43%<i
                                            class="ti ti-arrow-up-right ms-1"></i></span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-1 text-truncate">Cancelled</p>
                                        <h6 class="mb-0 fw-bold">65</h6>
                                    </div>
                                    <div id="s-col-13" class="chart-set"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100 z-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span
                                        class="avatar avatar-sm bg-soft-danger border border-danger text-danger rounded-2 flex-shrink-0"><i
                                            class="ti ti-calendar-repeat fs-14"></i></span>
                                    <span
                                        class="badge fw-medium bg-soft-success text-success flex-shrink-0 ms-2">+6.58%<i
                                            class="ti ti-arrow-up-right ms-1"></i></span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-1 text-truncate">Rescheduled</p>
                                        <h6 class="mb-0 fw-bold">40</h6>
                                    </div>
                                    <div id="s-col-14" class="chart-set"></div>
                                </div>
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
                                <th>Date & Time</th>
                                <th>Invoice ID</th>
                                <th>Practioner</th>
                                <th>Location</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Alberto Ripley</td>
                                <td>May 27 2025 - 09:30 AM</td>
                                <td>#INV0020</td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Mick Thompson</p>
                                </td>
                                <td>California</td>
                                <td><span
                                        class="badge badge-soft-primary border border-primary px-2 py-1 fs-13 fw-medium">Checked
                                        Out</span></td>
                            </tr>
                            <tr>
                                <td>Susan Babin</td>
                                <td>May 27 2025 - 10:00 AM</td>
                                <td>#INV0019</td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Sarah Johnson</p>
                                </td>
                                <td>Texas</td>
                                <td><span
                                        class="badge badge-soft-warning border border-warning px-2 py-1 fs-13 fw-medium">Checked
                                        in</span></td>
                            </tr>
                            <tr>
                                <td>Carol Lam</td>
                                <td>May 28 2025 - 10:00 AM</td>
                                <td>#INV0018</td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Emily Carter</p>
                                </td>
                                <td>New York</td>
                                <td><span
                                        class="badge badge-soft-danger border border-danger px-2 py-1 fs-13 fw-medium">Cancelled</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Marsha Noland</td>
                                <td>May 28 2025 - 10:30 AM</td>
                                <td>#INV0017</td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. David Lee</p>
                                </td>
                                <td>Florida</td>
                                <td><span
                                        class="badge badge-soft-info border border-info px-2 py-1 fs-13 fw-medium">Schedule</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Irma Armstrong</td>
                                <td>May 28 2025 - 11: 15 AM</td>
                                <td>#INV0016</td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Anna Kim</p>
                                </td>
                                <td>Illinois</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Confirmed</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Jesus Adams</td>
                                <td>May 29 2025 - 11:30 AM</td>
                                <td>#INV0015</td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. John Smith</p>
                                </td>
                                <td>Pennsylvania</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Confirmed</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Ezra Belcher</td>
                                <td>May 30 2025 - 09:30 AM</td>
                                <td>#INV0014</td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Lisa White</p>
                                </td>
                                <td>Ohio</td>
                                <td><span
                                        class="badge badge-soft-danger border border-danger px-2 py-1 fs-13 fw-medium">Cancelled</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Glen Lentz</td>
                                <td>May 30 2025 - 10:00 AM</td>
                                <td>#INV0013</td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Patricia Brown</p>
                                </td>
                                <td>Georgia</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Confirmed</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Bernard Griffith</td>
                                <td>May 30 2025 - 11:00 AM</td>
                                <td>#INV0012</td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Rachel Green</p>
                                </td>
                                <td>North Carolina</td>
                                <td><span
                                        class="badge badge-soft-primary border border-primary px-2 py-1 fs-13 fw-medium">Checked
                                        Out</span></td>
                            </tr>
                            <tr>
                                <td>John Elsass</td>
                                <td>May 30 2025 - 11:00 AM</td>
                                <td>#INV0011</td>
                                <td>
                                    <p class="text-dark fw-medium">Dr. Michael Smith</p>
                                </td>
                                <td>Michigan</td>
                                <td><span
                                        class="badge badge-soft-info border border-info px-2 py-1 fs-13 fw-medium">Schedule</span>
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="8b8dd8cf393b0475f502059d-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="8b8dd8cf393b0475f502059d-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="8b8dd8cf393b0475f502059d-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="8b8dd8cf393b0475f502059d-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="8b8dd8cf393b0475f502059d-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="8b8dd8cf393b0475f502059d-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="8b8dd8cf393b0475f502059d-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="8b8dd8cf393b0475f502059d-text/javascript"></script>

    <!-- Chart JS -->
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/apexcharts.min.js" type="8b8dd8cf393b0475f502059d-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/apexchart/chart-data.js" type="8b8dd8cf393b0475f502059d-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="8b8dd8cf393b0475f502059d-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/doctors.js" type="8b8dd8cf393b0475f502059d-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="8b8dd8cf393b0475f502059d-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="8b8dd8cf393b0475f502059d-|49" defer>
    </script>
</body>

</html>
