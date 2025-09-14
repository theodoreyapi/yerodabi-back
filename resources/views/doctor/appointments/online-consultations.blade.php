<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online-consultattion | Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="c3602d2e1698bcee22568147-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css" id="app-style">

</head>

<body>

    <!-- Begin Wrapper -->
    <div class="main-wrapper">

        @include('admin.layouts.header')

        @include('doctor.layouts.menu-doctor')

        <div class="page-wrapper consultation-custom">

            <!-- Start Content -->
            <div class="content">

                <!-- Start Page Header -->
                <div
                    class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 pb-3 mb-3 border-1 border-bottom">
                    <div class="flex-grow-1">
                        <h4 class="fw-bold mb-0"> Online Consultations </h4>
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
                                    <a class="dropdown-item" href="online-consultations.html#">Download as PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="online-consultations.html#">Download as Excel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- Start Information -->
                <div class="card rounded-0">
                    <div class="card-header">
                        <h5 class="m-0 fw-bold"> Basic Information </h5>
                    </div> <!-- end card header -->

                    <div class="card-body">
                        <!-- start row -->
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar avatar-xxxl">
                                        <img src="{{ URL::asset('') }}assets/img/users/user-04.jpg" alt="user-01"
                                            class="img-fluid img1 rounded">
                                    </div>
                                    <div class="">
                                        <span
                                            class="badge badge-md text-info border border-info mb-1 fs-13 fw-medium px-2 ">
                                            #AP02254 </span>
                                        <h5 class="text-dark mb-1 fw-bold"> James Carter </h5>
                                        <p class="text-dark m-0"> <span class="text-body"> Reason : </span> Pain near
                                            left chest, Pelvic salinity</p>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="bg-light p-3 rounded d-flex align-items-center justify-content-between">

                                    <!-- Items -->
                                    <div>
                                        <div class="mb-2">
                                            <h6 class="text-dark fs-14 fw-semibold mb-1"> Age </h6>
                                            <p class="text-body fs-13 m-0"> 28 Years </p>
                                        </div>
                                        <div>
                                            <h6 class="text-dark fs-14 fw-semibold mb-1"> Department </h6>
                                            <p class="text-body fs-13 m-0"> Cardiology </p>
                                        </div>
                                    </div>

                                    <!-- Items -->
                                    <div>
                                        <div class="mb-2">
                                            <h6 class="text-dark fs-14 fw-semibold mb-1"> Date </h6>
                                            <p class="text-body fs-13 m-0">25 Jan 2024, 07:00 </p>
                                        </div>
                                        <div>
                                            <h6 class="text-dark fs-14 fw-semibold mb-1"> Gender </h6>
                                            <p class="text-body fs-13 m-0"> Male</p>
                                        </div>
                                    </div>

                                    <!-- Items -->
                                    <div>
                                        <div class="mb-2">
                                            <h6 class="text-dark fs-14 fw-semibold mb-1"> Blood Group </h6>
                                            <p class="text-body fs-13 m-0"> O+ve </p>
                                        </div>
                                        <div>
                                            <h6 class="text-dark fs-14 fw-semibold mb-1"> Consultation Type </h6>
                                            <p class="text-body fs-13 m-0">Online Consultation </p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->
                    </div> <!-- end card body-->
                </div><!-- end card -->
                <!-- End Information -->

                <!-- Start Vitals -->
                <div class="card rounded-0">
                    <div class="card-header">
                        <h5 class="m-0 fw-bold"> Vitals </h5>
                    </div> <!-- end card header -->

                    <div class="card-body pb-0">
                        <!-- start form -->
                        <form>
                            <!-- start row -->
                            <div class="row">

                                <!-- Items -->
                                <div class="col-md-4 mb-3">
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Temperature</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text bg-transparent text-dark fs-14 border">F</span>
                                    </div>
                                </div> <!-- end col -->

                                <!-- Items -->
                                <div class="col-md-4 mb-3">
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Pulse</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text bg-transparent text-dark fs-14 border">mmHg</span>
                                    </div>
                                </div> <!-- end col -->

                                <!-- Items -->
                                <div class="col-md-4 mb-3">
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Respiratory Rate</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text bg-transparent text-dark fs-14 border">rpm</span>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-md-4 mb-3">
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">SPO2</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text bg-transparent text-dark fs-14 border">%</span>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-md-4 mb-3">
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Height</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text bg-transparent text-dark fs-14 border">cm</span>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-md-4 mb-3">
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Weight</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text bg-transparent text-dark fs-14 border">kg</span>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-md-4 mb-3">
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">BMI</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text bg-transparent text-dark fs-14 border">%</span>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-md-4 mb-3">
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Waist</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text bg-transparent text-dark fs-14 border">cm</span>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-md-4 mb-3">
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Weight</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text bg-transparent text-dark fs-14 border">kg</span>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
                        </form>
                        <!-- end form -->
                    </div>
                </div>
                <!-- End Vitals -->

                <!-- Start Complaint -->
                <div class="card rounded-0">
                    <div class="card-header">
                        <h5 class="m-0 fw-bold"> Complaint </h5>
                    </div> <!-- end card header -->

                    <div class="card-body">
                        <div class="complaint-list">
                            <!-- Items -->
                            <div class="mb-3 complaint-list-item">
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Complaint</label>
                                <div class="input-group">
                                    <input type="text" class="form-control rounded">
                                    <a href="online-consultations.html#"
                                        class="remove-complaint ms-3 p-2 bg-light text-danger rounded d-flex align-items-center justify-content-center"><i
                                            class="ti ti-trash fs-16"></i></a>
                                </div>
                            </div>

                            <!-- Items -->
                            <div class="complaint-list-item">
                                <div class="input-group">
                                    <input type="text" class="form-control rounded" value="Headache in Leftside">
                                    <a href="online-consultations.html#"
                                        class="add-complaint ms-3 p-2 bg-light text-dark rounded d-flex align-items-center justify-content-center"><i
                                            class="ti ti-plus fs-16"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-body -->
                <!-- End Vitals -->

                <!-- Start Diagnosis -->
                <div class="card rounded-0">
                    <div class="card-header">
                        <h5 class="m-0 fw-bold"> Diagnosis </h5>
                    </div> <!-- end card header -->

                    <div class="card-body pb-0">
                        <div class="">


                            <div class="diagnosis-list">
                                <div class="row diagnosis-list-item">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Diagnosis
                                                Type</label>
                                            <select class="select form-control rounded">
                                                <option>Select</option>
                                                <option>Fever</option>
                                                <option>Headache</option>
                                                <option>Joint Pain</option>
                                                <option>Skin Rash</option>
                                                <option>Back Pain</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Complaint
                                                History</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control rounded">
                                                <!-- Only first row has '+' -->
                                                <a href="online-consultations.html#"
                                                    class="add-diagnosis ms-3 p-2 bg-light text-dark rounded d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-plus fs-16"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row diagnosis-list-item">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <select class="select form-control rounded">
                                                <option>Headache</option>
                                                <option>Fever</option>
                                                <option>Joint Pain</option>
                                                <option>Skin Rash</option>
                                                <option>Back Pain</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control rounded">
                                                <a href="online-consultations.html#"
                                                    class="remove-diagnosis ms-3 p-2 bg-light text-danger rounded d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-trash fs-16"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-body -->
                <!-- End Complaint -->

                <!-- Start Medication -->
                <div class="card rounded-0">
                    <div class="card-header">
                        <h5 class="m-0 fw-bold"> Medications </h5>
                    </div> <!-- end card header -->

                    <div class="card-body pb-0">
                        <div class="medication-list">

                            <!-- start row -->
                            <div class="row medication-list-item">
                                <div class="col-lg-11">
                                    <!-- start row-->
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="mb-3">
                                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Medicine
                                                    Name</label>
                                                <select class="select form-control rounded">
                                                    <option>Select</option>
                                                    <option>General Medicine</option>
                                                    <option>Axer 90MG Tab</option>
                                                    <option>Ramistar XL 2.5</option>
                                                </select>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-2">
                                            <div class="mb-3">
                                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Dosage</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <span
                                                        class="input-group-text bg-transparent text-dark fs-14 border">mg</span>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-2">
                                            <div class="mb-3">
                                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Dosage</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <span
                                                        class="input-group-text bg-transparent text-dark fs-14 border">m</span>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-2">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label mb-1 text-dark fs-14 fw-medium">Frequency</label>
                                                <select class="select form-control rounded">
                                                    <option>Select</option>
                                                    <option>0-0-1</option>
                                                    <option>1-0-0</option>
                                                    <option>0-1-0</option>
                                                </select>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-2">
                                            <div class="mb-3">
                                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Timing</label>
                                                <select class="select form-control rounded">
                                                    <option>Select</option>
                                                    <option>Before Meal</option>
                                                    <option>After Meal</option>
                                                </select>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-2">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label mb-1 text-dark fs-14 fw-medium">Instruction</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <div class="col-lg-1 px-xxl-3">
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium"></label>
                                    <a href="online-consultations.html#"
                                        class="remove-medication ms-3 p-2 bg-light text-danger rounded d-flex align-items-center justify-content-center"><i
                                            class="ti ti-trash fs-16"></i></a>
                                </div>
                            </div>
                            <!-- end row -->

                            <!-- start row -->
                            <div class="row medication-list-item">
                                <div class="col-lg-11">
                                    <!-- start row-->
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="mb-3">
                                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Medicine
                                                    Name</label>
                                                <select class="select form-control rounded">
                                                    <option>Select</option>
                                                    <option selected>General Medicine</option>
                                                    <option>Axer 90MG Tab</option>
                                                    <option>Ramistar XL 2.5</option>
                                                </select>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-2">
                                            <div class="mb-3">
                                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Dosage</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <span
                                                        class="input-group-text bg-transparent text-dark fs-14 border">mg</span>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-2">
                                            <div class="mb-3">
                                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Dosage</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <span
                                                        class="input-group-text bg-transparent text-dark fs-14 border">m</span>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-2">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label mb-1 text-dark fs-14 fw-medium">Frequency</label>
                                                <select class="select form-control rounded">
                                                    <option>0-0-1</option>
                                                    <option>1-0-0</option>
                                                    <option>0-1-0</option>
                                                </select>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-2">
                                            <div class="mb-3">
                                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Timing</label>
                                                <select class="select form-control rounded">
                                                    <option>Before Meal</option>
                                                    <option>After Meal</option>
                                                </select>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-2">
                                            <div class="mb-3">
                                                <label
                                                    class="form-label mb-1 text-dark fs-14 fw-medium">Instruction</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="After Food">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <div class="col-lg-1 px-xxl-3">
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium"></label>
                                    <a href="online-consultations.html#"
                                        class="add-medication ms-3 p-2 mt-1 bg-light text-dark rounded d-flex align-items-center justify-content-center"><i
                                            class="ti ti-plus fs-16"></i></a>
                                </div>
                            </div>
                            <!-- end row -->

                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-body -->
                <!-- End Medications -->

                <!-- Start Advice -->
                <div class="card rounded-0">
                    <div class="card-header">
                        <h5 class="m-0 fw-bold"> Advice </h5>
                    </div> <!-- end card header -->

                    <div class="card-body advices-list pb-0">
                        <!-- start row -->
                        <div class="mb-3 advices-list-item">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Advice</label>
                            <div class="input-group">
                                <input type="text" class="form-control rounded">
                                <a href="online-consultations.html#"
                                    class="add-advices ms-3 p-2 bg-light text-dark rounded d-flex align-items-center justify-content-center"><i
                                        class="ti ti-plus fs-16"></i></a>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
                <!-- End Advice -->

                <!-- Start Investigation -->
                <div class="card rounded-0">
                    <div class="card-header">
                        <h5 class="m-0 fw-bold"> Investigation & Procedure </h5>
                    </div> <!-- end card header -->

                    <div class="card-body invest-list pb-0">
                        <!-- start row -->
                        <div class="mb-3 invest-list-item">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Investigation & Procedure</label>
                            <div class="input-group">
                                <input type="text" class="form-control rounded">
                                <a href="online-consultations.html#"
                                    class="add-invest ms-3 p-2 bg-light text-dark rounded d-flex align-items-center justify-content-center"><i
                                        class="ti ti-plus fs-16"></i></a>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
                <!-- End Advice -->

                <!-- Start Follow Up -->
                <div class="card rounded-0">
                    <div class="card-header">
                        <h5 class="m-0 fw-bold"> Follow Up </h5>
                    </div> <!-- end card header -->

                    <div class="card-body pb-0">
                        <!-- start row -->
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Next Consultation </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control rounded">
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1 text-dark fs-14 fw-medium">Whether to come on empty
                                        Stomach </label>
                                    <select class="select form-control rounded">
                                        <option>Select</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
                <!-- End Follow Up -->

                <!-- Start Invoice -->
                <div class="card rounded-0">
                    <div class="card-header">
                        <h5 class="m-0 fw-bold"> Invoice </h5>
                    </div> <!-- end card header -->

                    <div class="card-body">
                        <div class="Invoice-list">

                            <!-- start row -->
                            <div class="row invoice-list-item">
                                <div class="col-lg-8">
                                    <div class="mb-3">
                                        <label class="form-label mb-1 text-dark fs-14 fw-medium">Service</label>
                                        <select class="select form-control rounded">
                                            <option>Select</option>
                                            <option>General Consultation</option>
                                            <option>Dental Cleaning</option>
                                            <option>Eye Checkup</option>
                                            <option>Blood Test</option>
                                            <option>Skin Allergy Test</option>
                                        </select>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label mb-1 text-dark fs-14 fw-medium">Amount</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control rounded">
                                            <a href="online-consultations.html#"
                                                class="remove-invoice ms-3 p-2 bg-light text-danger rounded d-flex align-items-center justify-content-center"><i
                                                    class="ti ti-trash fs-16"></i></a>
                                        </div>
                                    </div>
                                </div> <!-- start row -->
                            </div>
                            <!-- end row -->

                            <!-- start row -->
                            <div class="row invoice-list-item">
                                <div class="col-lg-8">
                                    <div class="mb-3">
                                        <select class="select form-control rounded">
                                            <option>Select</option>
                                            <option>General Consultation</option>
                                            <option>Dental Cleaning</option>
                                            <option>Eye Checkup</option>
                                            <option>Blood Test</option>
                                            <option>Skin Allergy Test</option>
                                        </select>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control rounded">
                                            <a href="online-consultations.html#"
                                                class="add-invoice ms-3 p-2 bg-light text-dark rounded d-flex align-items-center justify-content-center"><i
                                                    class="ti ti-plus fs-16"></i></a>
                                        </div>
                                    </div>
                                </div> <!-- start row -->
                            </div>
                            <!-- end row -->

                            <div class="row pt-3 border-1 border-top">
                                <div class="col-lg-8"></div>
                                <div class="col-lg-4">
                                    <div class="amount mb-3 pb-3 border-1 border-bottom">
                                        <h6
                                            class="fs-14 fw-semibold d-flex align-items-center justify-content-between mb-2">
                                            Amount<span class="fw-normal">$0.00</span></h6>
                                        <h6
                                            class="fs-14 fw-semibold d-flex align-items-center justify-content-between mb-2">
                                            Tax (0%)<span class="fw-normal">$0.00</span></h6>
                                        <h6
                                            class="fs-14 fw-semibold d-flex align-items-center justify-content-between mb-2">
                                            Discount (0%)<span class="fw-normal">$0.00</span></h6>
                                    </div>
                                    <div class="total mb-4">
                                        <h6 class="fs-16 fw-bold d-flex align-items-center justify-content-between">
                                            Total : <span> $0.00</span> </h6>
                                    </div>

                                    <div class="">
                                        <label class="form-label mb-1 text-dark fs-14 fw-medium">Payment Mode</label>
                                        <select class="select form-control rounded">
                                            <option>Select</option>
                                            <option>Paypal</option>
                                            <option>Stripe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-body -->
                <!-- End Complaint -->

                <div class="d-flex gap-2 align-items-center justify-content-end mb-4">
                    <a href="online-consultations.html" class="btn btn-md bg-light text-dark fs-13 fw-medium rounded">
                        Cancel </a>
                    <a href="online-consultations.html" class="btn btn-md btn-primary fs-13 fw-medium rounded"
                        data-bs-toggle="modal" data-bs-target="#cancel-reason"> Complete Appointment </a>
                </div>

            </div>
            <!-- End Content -->

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- Start Phone Number-->
    <div class="modal fade" id="cancel-reason">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark fw-bold">Cancel Reason</h5>
                    <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="modal"
                        aria-label="Close"><i class="ti ti-x bg-white fs-16 text-dark"></i></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label mb-1 text-dark fs-14 fw-medium">Cancel Reason</label>
                        <select class="select form-control rounded">
                            <option>Select</option>
                            <option>Type-1</option>
                            <option>Type-2</option>
                            <option>Type-3</option>
                            <option>Type-4</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div>
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Comments</label>
                            <textarea rows="4" class="form-control rounded"> </textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm me-2 fs-13 fw-medium"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm fs-13 fw-medium">Cancel Appointment</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Phone Number -->


    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="c3602d2e1698bcee22568147-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="c3602d2e1698bcee22568147-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="c3602d2e1698bcee22568147-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="c3602d2e1698bcee22568147-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="c3602d2e1698bcee22568147-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="c3602d2e1698bcee22568147-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="c3602d2e1698bcee22568147-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="c3602d2e1698bcee22568147-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="c3602d2e1698bcee22568147-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="c3602d2e1698bcee22568147-|49" defer>
    </script>
</body>

</html>
