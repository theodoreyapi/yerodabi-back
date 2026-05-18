<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Income Report - Yerodabi</title>
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
                        <h4 class="fw-bold mb-0">Income Report</h4>
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
                                    <a class="dropdown-item" href="income-report.html#">Download as PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="income-report.html#">Download as Excel</a>
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
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <p class="mb-1 text-truncate">Total Clinic Income</p>
                                        <h6 class="mb-0 fw-bold">$18,750</h6>
                                    </div>
                                    <span
                                        class="avatar avatar-lg bg-soft-primary text-primary rounded-circle flex-shrink-0"><i
                                            class="ti ti-currency-dollar fs-24"></i></span>
                                </div>
                                <div class="progress mb-2 progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mb-0 fs-13"><span class="text-success"><i
                                            class="ti ti-arrow-up-right me-1"></i>5.62%</span> from last month</p>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <p class="mb-1 text-truncate">Doctor Fees Collected</p>
                                        <h6 class="mb-0 fw-bold">$7,000</h6>
                                    </div>
                                    <span
                                        class="avatar avatar-lg bg-soft-success text-success rounded-circle flex-shrink-0"><i
                                            class="ti ti-stethoscope fs-24"></i></span>
                                </div>
                                <div class="progress mb-2 progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mb-0 fs-13"><span class="text-success"><i
                                            class="ti ti-arrow-up-right me-1"></i>11.4%</span> from last month</p>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <p class="mb-1 text-truncate">Medicine Sales</p>
                                        <h6 class="mb-0 fw-bold">$6,250</h6>
                                    </div>
                                    <span
                                        class="avatar avatar-lg bg-soft-warning text-warning rounded-circle flex-shrink-0"><i
                                            class="ti ti-pill fs-24"></i></span>
                                </div>
                                <div class="progress mb-2 progress-sm">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mb-0 fs-13"><span class="text-success"><i
                                            class="ti ti-arrow-up-right me-1"></i>8.52%</span> from last month</p>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <p class="mb-1 text-truncate">Lab Revenue</p>
                                        <h6 class="mb-0 fw-bold">$5,500</h6>
                                    </div>
                                    <span
                                        class="avatar avatar-lg bg-soft-danger text-danger rounded-circle flex-shrink-0"><i
                                            class="ti ti-flask fs-24"></i></span>
                                </div>
                                <div class="progress mb-2 progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mb-0 fs-13"><span class="text-danger"><i
                                            class="ti ti-arrow-down-right me-1"></i>7.45%</span> from last month</p>
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
                            <div class="col-md-6">
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
                            <div class="col-md-6">
                                <div class="mb-0">
                                    <label class="form-label">Received From</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Alberto Ripley</option>
                                        <option>Susan Babin</option>
                                        <option>Martin Lisa</option>
                                        <option>Stella Mary</option>
                                        <option>Carol Lam</option>
                                    </select>
                                </div>
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <div class="mb-0">
                                    <label class="form-label">Payment Method</label>
                                    <input class="input-tags form-control" id="inputBox" type="text"
                                        data-role="tagsinput" name="specialist" value="PayPal, Cheque">
                                </div>
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <div class="mb-0">
                                    <label class="form-label">Status</label>
                                    <input class="input-tags form-control" id="inputBox3" type="text"
                                        data-role="tagsinput" name="specialist" value="Received, Pending">
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
                                <th>Income</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Received From</th>
                                <th>Payment Method</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nurse</td>
                                <td>
                                    <p class="text-dark fw-medium">$800</p>
                                </td>
                                <td>22 Apr 2025</td>
                                <td>
                                    <p class="text-dark fw-medium">James Carter</p>
                                </td>
                                <td>PayPal</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Received</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Pharmacist</td>
                                <td>
                                    <p class="text-dark fw-medium">$930</p>
                                </td>
                                <td>12 Apr 2025</td>
                                <td>
                                    <p class="text-dark fw-medium">Emily Johnson</p>
                                </td>
                                <td>Debit Card</td>
                                <td><span
                                        class="badge badge-soft-warning border border-warning px-2 py-1 fs-13 fw-medium">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Receptionist</td>
                                <td>
                                    <p class="text-dark fw-medium">$850</p>
                                </td>
                                <td>01 Apr 2025</td>
                                <td>
                                    <p class="text-dark fw-medium">Robert Mitchell</p>
                                </td>
                                <td>Cheque</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Received</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Technician</td>
                                <td>
                                    <p class="text-dark fw-medium">$700</p>
                                </td>
                                <td>05 Mar 2025</td>
                                <td>
                                    <p class="text-dark fw-medium">Sophia Miller</p>
                                </td>
                                <td>Cheque</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Received</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Medical Assistant</td>
                                <td>
                                    <p class="text-dark fw-medium">$650</p>
                                </td>
                                <td>20 Mar 2025</td>
                                <td>
                                    <p class="text-dark fw-medium">Daniel Anderson</p>
                                </td>
                                <td>PayPal</td>
                                <td><span
                                        class="badge badge-soft-warning border border-warning px-2 py-1 fs-13 fw-medium">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Phlebotomist</td>
                                <td>
                                    <p class="text-dark fw-medium">$430</p>
                                </td>
                                <td>01 Mar 2025</td>
                                <td>
                                    <p class="text-dark fw-medium">Olivia Davis</p>
                                </td>
                                <td>Debit Card</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Received</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Dialysis Technician</td>
                                <td>
                                    <p class="text-dark fw-medium">$300</p>
                                </td>
                                <td>15 Feb 2025</td>
                                <td>
                                    <p class="text-dark fw-medium">Michael Thompson</p>
                                </td>
                                <td>Cheque</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Received</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Medical Coder</td>
                                <td>
                                    <p class="text-dark fw-medium">$450</p>
                                </td>
                                <td>09 Feb 2025</td>
                                <td>
                                    <p class="text-dark fw-medium">Isabella Wilson</p>
                                </td>
                                <td>PayPal</td>
                                <td><span
                                        class="badge badge-soft-warning border border-warning px-2 py-1 fs-13 fw-medium">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Chiropractor</td>
                                <td>
                                    <p class="text-dark fw-medium">$570</p>
                                </td>
                                <td>01 Feb 2025</td>
                                <td>
                                    <p class="text-dark fw-medium">Michael Trade</p>
                                </td>
                                <td>Debit Card</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Received</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Acupuncturist</td>
                                <td>
                                    <p class="text-dark fw-medium">$800</p>
                                </td>
                                <td>12 Jan 2025</td>
                                <td>
                                    <p class="text-dark fw-medium">Ava Robinson</p>
                                </td>
                                <td>Cheque</td>
                                <td><span
                                        class="badge badge-soft-success border border-success px-2 py-1 fs-13 fw-medium">Received</span>
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="14cb99293fdd5097d97e6d2b-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="14cb99293fdd5097d97e6d2b-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="14cb99293fdd5097d97e6d2b-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="14cb99293fdd5097d97e6d2b-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="14cb99293fdd5097d97e6d2b-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="14cb99293fdd5097d97e6d2b-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="14cb99293fdd5097d97e6d2b-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="14cb99293fdd5097d97e6d2b-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="14cb99293fdd5097d97e6d2b-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/doctors.js" type="14cb99293fdd5097d97e6d2b-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="14cb99293fdd5097d97e6d2b-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="14cb99293fdd5097d97e6d2b-|49" defer>
    </script>
</body>

</html>
