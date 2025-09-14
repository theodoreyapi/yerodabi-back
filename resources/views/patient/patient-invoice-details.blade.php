<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Invoices Details | Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="d0bd1a226a978b2219e2cc7a-text/javascript"></script>

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
            <div class="content pb-0">

                <!-- start row-->
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <!-- start page header -->
                        <div class="d-flex align-items-sm-center flex-sm-row flex-column mb-4">
                            <div class="flex-grow-1">
                                <h6 class="fs-14 fw-semibold mb-0 d-flex align-items-center "> <a
                                        href="patient-invoices.html" class="me-1"><i class="ti ti-chevron-left"></i>
                                        Patient Invoices</a></h6>
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
                                    <span class="badge bg-danger text-white fs-12"> Due in 8 days </span>
                                </div>

                                <!-- start row -->
                                <div class="row pb-3 border-1 border-bottom mb-4">
                                    <div class="col-lg-4">
                                        <h5 class="mb-2 fs-16 fw-bold"> Invoice Details </h5>
                                        <p class="text-body mb-1"> Invoice Number : <span class="text-dark">
                                                INV0025</span> </p>
                                        <p class="text-body mb-1"> Issued On : <span class="text-dark"> 25 Jan 2025
                                            </span> </p>
                                        <p class="text-body mb-1"> Due Date : <span class="text-dark"> 31 Jan
                                                2025</span> </p>
                                        <p class="text-body mb-0"> Recurring Invoice : <span class="text-dark">
                                                Monthly</span> </p>
                                    </div> <!-- end col -->
                                    <div class="col-lg-4">
                                        <h5 class="mb-2 fs-16 fw-bold"> Invoice Form </h5>
                                        <p class="text-dark fw-medium mb-1"> Andrew Fletcher</p>
                                        <p class="text-body mb-1 pe-5">
                                            <span class="text-body">
                                                5754 Airport Rd
                                                Coosada, AL, 36020
                                                United States
                                            </span>
                                        </p>
                                    </div> <!-- end col -->
                                    <div class="col-lg-4 text-lg-end">
                                        <h5 class="mb-2 fs-16 fw-bold"> Invoice To </h5>
                                        <p class="text-dark fw-medium mb-1"> Andrew Fletcher </p>
                                        <p class="m-0 ps-5">
                                            299 Star Trek Drive, Florida, 3240,
                                            United States
                                        </p>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->

                                <!-- Items -->
                                <div class="mb-4">
                                    <h6 class="mb-3 fs-16 fw-bold"> Products/Service Items </h6>
                                    <div class="">
                                        <!-- Table List -->
                                        <div class="table-responsive border bg-white">
                                            <table class="table table-nowrap">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Product/Item</th>
                                                        <th>Description</th>
                                                        <th> Unit Cost</th>
                                                        <th> Quantity </th>
                                                        <th> Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Full body checkup</td>
                                                        <td>Complete health screening covering all major systems</td>
                                                        <td> $400 </td>
                                                        <td> 1 </td>
                                                        <td> $400 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Blood Test </td>
                                                        <td>Routine blood analysis to assess overall health status </td>
                                                        <td> $250</td>
                                                        <td> 1 </td>
                                                        <td> $250 </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /Table List -->
                                    </div>
                                </div>
                                <!-- etart row -->
                                <div class="row pb-3 mb-3 border-1 border-bottom">
                                    <div class="col-lg-6">
                                        <div class="">
                                            <h6 class="mb-2 fs-16 fw-bold"> Bank Details</h6>
                                            <p class="text-body mb-1">Bank Name : <span class="text-dark"> ABC Bank
                                                </span> </p>
                                            <p class="text-body mb-1">Account Number : <span class="text-dark">
                                                    782459739212 </span> </p>
                                            <p class="text-body mb-1">IFSC Code : <span class="text-dark"> ABC0001345
                                                </span> </p>
                                            <p class="text-body mb-1">Payment Reference : <span class="text-dark">
                                                    INV-20250220-001 </span> </p>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-lg-6">
                                        <div class="">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-14 fw-medium text-body">Amount</h6>
                                                <h6 class="fs-14 fw-semibold text-dark">$1,793.12</h6>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-14 fw-medium text-body">CGST (9%)</h6>
                                                <h6 class="fs-14 fw-semibold text-dark">$18</h6>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-14 fw-medium text-body">SGST (9%)</h6>
                                                <h6 class="fs-14 fw-semibold text-dark">$18</h6>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <h6 class="fs-14 fw-medium text-body">Discount</h6>
                                                <h6 class="fs-14 fw-semibold text-danger">$18</h6>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h6 class="fs-18 fw-bold">Total (USD)</h6>
                                                <h6 class="fs-18 fw-bold">$1,972.43</h6>
                                            </div>
                                            <div>
                                                <h6 class="fs-14 text-body mb-1">Total in words</h6>
                                                <p class="fw-semibold text-dark">Dollar One thousand nine hundred
                                                    seventy-two</p>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->

                                <!-- Items -->
                                <div
                                    class="pb-3 mb-3 border-1 border-bottom d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div>
                                        <div class=" mb-3">
                                            <h6 class="mb-1 fs-14 fw-semibold"> Terms and Conditions </h6>
                                            <p> The Payment must be returned in the same condition. </p>
                                        </div>

                                        <div class="">
                                            <h6 class="mb-1 fs-14 fw-semibold"> Notes </h6>
                                            <p> All charges are final and include applicable taxes, fees, and additional
                                                costs.</p>
                                        </div>
                                    </div>

                                    <div class="">
                                        <img src="{{ URL::asset('') }}assets/img/icons/signature-img.svg"
                                            alt="" class="img-fluid ">
                                        <h6 class="fs-14 fw-semibold"> Ted M. Davis </h6>
                                        <p class="fs-13 fw-normal">Manager </p>
                                    </div>
                                </div>

                                <div class="text-center d-flex align-items-center justify-content-center">
                                    <a href="patient-invoice-details.html"
                                        class="btn btn-md btn-dark me-2 d-flex align-items-center"> <i
                                            class="ti ti-printer me-1"></i> Print</a>
                                    <a href="patient-invoice-details.html"
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="d0bd1a226a978b2219e2cc7a-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="d0bd1a226a978b2219e2cc7a-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="d0bd1a226a978b2219e2cc7a-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="d0bd1a226a978b2219e2cc7a-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="d0bd1a226a978b2219e2cc7a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="d0bd1a226a978b2219e2cc7a-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="d0bd1a226a978b2219e2cc7a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="d0bd1a226a978b2219e2cc7a-text/javascript"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="d0bd1a226a978b2219e2cc7a-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="d0bd1a226a978b2219e2cc7a-|49" defer>
    </script>
</body>

</html>
