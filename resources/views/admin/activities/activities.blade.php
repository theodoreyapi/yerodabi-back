<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Activities | Yerodabi</title>
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

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

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
                <div class="mb-3 border-bottom pb-3">
                    <h4 class="fw-bold mb-0">Activities</h4>
                </div>
                <!-- End Page Header -->

                <div class="card mb-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <p class="text-dark me-4 mb-0 timeline-date flex-shrink-0">24 Sep 2024</p>
                            <div class="border-start ps-4 py-4 border-circle position-relative">
                                <p class="text-dark fw-semibold mb-1">Completed the Patient visit at Glory Hospital in
                                    Florida, USA .</p>
                                <p>The patient successfully completed a scheduled visit. All clinical notes,
                                    diagnostics, and visit outcomes have been recorded and stored in the medical record.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="text-dark me-4 mb-0 timeline-date flex-shrink-0">20 Sep 2024</p>
                            <div class="border-start ps-4 py-4 border-circle position-relative">
                                <p class="text-dark fw-semibold mb-1">Bernardo James Uploaded 4 new photos for World
                                    Safety Event</p>
                                <p>02:30 AM, April 9 - 2025, Bernardo James, Uploaded 4 new photos</p>

                                <!-- start row -->
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="avatar avatar-xxxl rounded-3">
                                            <img src="{{ URL::asset('') }}assets/img/media/img-31.png" alt="img"
                                                class="img-fluid object-fit-cover rounded-3">
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-lg-3">
                                        <div class="avatar avatar-xxxl rounded-3">
                                            <img src="{{ URL::asset('') }}assets/img/media/img-32.png" alt="img"
                                                class="img-fluid object-fit-cover rounded-3">
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-lg-3">
                                        <div class="avatar avatar-xxxl rounded-3">
                                            <img src="{{ URL::asset('') }}assets/img/media/img-33.png" alt="img"
                                                class="img-fluid object-fit-cover rounded-3">
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-lg-3">
                                        <div class="avatar avatar-xxxl rounded-3">
                                            <img src="{{ URL::asset('') }}assets/img/media/img-34.png" alt="img"
                                                class="img-fluid object-fit-cover rounded-3">
                                        </div>
                                    </div><!-- end col -->
                                </div>
                                <!-- end row -->

                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="text-dark me-4 mb-0 timeline-date flex-shrink-0">10 Sep 2024</p>
                            <div class="border-start ps-4 py-4 border-circle position-relative">
                                <p class="text-dark fw-semibold mb-1">Dr. Linda Carpenter Doctors Meeting</p>
                                <p>April 12, 2025, 10:00 AM – 12:30 PM, Conference Room B / Virtual via Zoom</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="text-dark me-4 mb-0 timeline-date flex-shrink-0">02 Sep 2024</p>
                            <div class="border-start ps-4 py-4 border-circle position-relative">
                                <p class="text-dark fw-semibold mb-1">Dr.Markhay smith was Completed the Operation With
                                    in Deadline</p>
                                <p> The operation was successfully completed within the scheduled deadline.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="text-dark me-4 mb-0 timeline-date flex-shrink-0">01 Sep 2024</p>
                            <div class="border-start ps-4 py-4 border-circle position-relative pb-0">
                                <p class="text-dark fw-semibold mb-1"> Rio Williams Posted a Blog about Corona Safety
                                    Measurements</p>
                                <div class="rounded-2 bg-light p-3">

                                    <!-- start row -->
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-3 timeline-img">
                                            <img src="{{ URL::asset('') }}assets/img/media/img-34.png" alt="img"
                                                class="img-fluid rounded-3 w-100 h-100 object-fit-cover">
                                        </div>
                                        <div class="ms-3">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="badge bg-info me-3">Safety</span>
                                                <span>March 10, 2025</span>
                                            </div>
                                            <p class="text-body">Rio Williams posted a new blog</p>
                                            <p class="mb-2 text-body">“Stay informed on how to keep your clinic
                                                environment safe. Rio shares essential COVID-19 safety protocols, from
                                                sanitization tips to patient screening procedures.”</p>
                                            <a href="javascript:void(0);" class="btn btn-primary">Read more <i
                                                    class="ti ti-chevron-right ms-1"></i></a>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                </div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="c0d75fb3ad21ec8c30644772-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="c0d75fb3ad21ec8c30644772-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="c0d75fb3ad21ec8c30644772-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="c0d75fb3ad21ec8c30644772-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="c0d75fb3ad21ec8c30644772-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="c0d75fb3ad21ec8c30644772-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="c0d75fb3ad21ec8c30644772-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="c0d75fb3ad21ec8c30644772-|49" defer>
    </script>
</body>

</html>
