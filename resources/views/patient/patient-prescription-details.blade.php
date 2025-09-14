<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prescription | Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="48c282ed35e8c8aa900205b5-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

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

                <!-- start row-->
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <!-- start page header -->
                        <div class="d-flex align-items-sm-center flex-sm-row flex-column mb-4">
                            <div class="flex-grow-1">
                                <h6 class="fs-14 fw-semibold mb-0 d-flex align-items-center "> <a
                                        href="patient-prescriptions.html" class="me-1"><i
                                            class="ti ti-chevron-left"></i> Prescriptions </a></h6>
                            </div>
                        </div>
                        <!-- end page header -->

                        <div class="card">
                            <div class="card-body">
                                <!-- Items -->
                                <div
                                    class="d-flex align-items-center justify-content-between border-1 border-bottom pb-3 mb-3">
                                    <div class="invoice-logo">
                                        <img src="{{ URL::asset('') }}assets/img/logo.svg" class="logo-white"
                                            alt="logo">
                                        <img src="{{ URL::asset('') }}assets/img/logo-white.svg" class="logo-dark"
                                            alt="logo">
                                    </div>
                                    <span
                                        class="badge bg-info-subtle text-info-emphasis fs-13 fw-medium border border-primary py-1 px-2">
                                        #PRE0025</span>
                                </div>

                                <!-- Items -->
                                <div
                                    class="d-flex align-items-center justify-content-between border-1 border-bottom pb-3 mb-3 flex-wrap gap-2">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar avatar-xxl rounded bg-light border p-2">
                                            <img src="{{ URL::asset('') }}assets/img/icons/trust-care.svg"
                                                alt="favicon.png" class="img-fluid img1 ">
                                        </div>
                                        <div>
                                            <h6 class="text-dark fw-semibold mb-1">Trustcare Clinic </h6>
                                            <p class="mb-1"> Dr. Mick Thompson </p>
                                            <p class="mb-0"> MD Cardiologist. MBBS,MS</p>
                                        </div>
                                    </div>

                                    <div class="text-lg-end">
                                        <p class="text-dark mb-1"> Department : <span class="text-body"> Cardiology
                                                OP</span> </p>
                                        <p class="text-dark mb-1"> Prescribed on : <span class="text-body"> 25 Jan
                                                2025, 09:00 AM</span> </p>
                                        <p class="text-dark mb-0"> Consultation : <span class="text-body"> Video
                                            </span> </p>
                                    </div>
                                </div>

                                <!-- Items -->
                                <div class="mb-3">
                                    <h6 class=" mb-2 fs-14 fw-medium"> Patient Details </h6>
                                    <div
                                        class="px-3 py-2 bg-light rounded d-flex align-items-center justify-content-between">
                                        <h6 class="m-0 fw-semibold fs-16"> M.Reyan Verol </h6>
                                        <div class="d-flex align-items-center  gap-3">
                                            <p class="mb-0 text-dark"> 28Y / Male </p>
                                            <p class="mb-0 text-dark"> <span class="text-body"> Blood </span> : O+ve
                                            </p>
                                            <p class="mb-0 text-dark"> Patient ID <span class="text-body">
                                                    PT0025</span></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Items -->
                                <div class="mb-4">
                                    <h6 class="mb-3 fs-16 fw-bold text-center">Cardiology Prescription</h6>
                                    <div class="">
                                        <!-- Table List -->
                                        <div class="table-responsive border bg-white">
                                            <table class="table table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>SNO</th>
                                                        <th>Medecine Name</th>
                                                        <th>Dosage</th>
                                                        <th> Frequency</th>
                                                        <th> Duration </th>
                                                        <th> Timings</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>General Medicine</td>
                                                        <td>Ecosprin 75MG </td>
                                                        <td> 1-0-1 </td>
                                                        <td> 1 month </td>
                                                        <td> Before meal </td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td>Axer 90MG Tab </td>
                                                        <td>90 mg </td>
                                                        <td> 1-1-1 </td>
                                                        <td> 1 month </td>
                                                        <td> After meal </td>
                                                    </tr>
                                                    <tr>
                                                        <td>03</td>
                                                        <td>Ramistar XL 2.5</td>
                                                        <td>75 ml</td>
                                                        <td> 1-0-1 </td>
                                                        <td> 1 month </td>
                                                        <td> After meal </td>
                                                    </tr>
                                                    <tr>
                                                        <td>04</td>
                                                        <td>General Medicine</td>
                                                        <td>Ecosprin 75MG </td>
                                                        <td> 1-0-1 </td>
                                                        <td> 1 month </td>
                                                        <td> Before meal </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /Table List -->
                                    </div>
                                </div>

                                <!-- Items -->
                                <div class="pb-3 mb-3 border-1 border-bottom">
                                    <h6 class="mb-1 fs-16 fw-semibold">Advice</h6>
                                    <p> An account of the present illness, which includes the circumstances surrounding
                                        the onset of recent health changes and the chronology of subsequent events that
                                        have led the patient to seek medical care, is essential to understanding the
                                        course of the disease process. Medications are listed in the medical history
                                        because they may play a role in the current illness. </p>
                                </div>

                                <!-- Items -->

                                <div
                                    class="pb-3 mb-3 border-1 border-bottom d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div class="">
                                        <h6 class="mb-1 fs-16 fw-semibold"> Follow Up </h6>
                                        <p> Follow u p after 3 months, Have to come on empty stomach</p>
                                    </div>
                                    <div class="">
                                        <img src="{{ URL::asset('') }}assets/img/icons/signature-img.svg"
                                            alt="" class="img-fluid ">
                                        <h6 class="fs-14 fw-semibold"> Dr. Mick Thompson </h6>
                                        <p class="fs-13 fw-normal"> MD Cardiologist </p>
                                    </div>
                                </div>

                                <div class="text-center d-flex align-items-center justify-content-center">
                                    <a href="patient-prescription-details.html"
                                        class="btn btn-md btn-dark me-2 d-flex align-items-center"> <i
                                            class="ti ti-printer me-1"></i> Print</a>
                                    <a href="patient-prescription-details.html"
                                        class="btn btn-md btn-primary d-flex align-items-center"> <i
                                            class="ti ti-download me-1"></i> Download</a>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <!-- end row-->

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="48c282ed35e8c8aa900205b5-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="48c282ed35e8c8aa900205b5-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="48c282ed35e8c8aa900205b5-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="48c282ed35e8c8aa900205b5-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="48c282ed35e8c8aa900205b5-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="48c282ed35e8c8aa900205b5-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="48c282ed35e8c8aa900205b5-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="48c282ed35e8c8aa900205b5-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="48c282ed35e8c8aa900205b5-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="48c282ed35e8c8aa900205b5-|49" defer>
    </script>
</body>

</html>
