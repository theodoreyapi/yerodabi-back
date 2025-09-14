<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Change Password Settings | Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="06f84b78858c39f2ef49189a-text/javascript"></script>

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

        @include('patient.layouts.menu-patient')

        <div class="page-wrapper">

            <!-- Start Content -->
            <div class="content">

                <!-- Page Header -->
                <div class="mb-3 border-bottom pb-3">
                    <h4 class="fw-bold mb-0">Settings</h4>
                </div>
                <!-- End Page Header -->

                <div class="card">
                    <div class="card-body">

                        <!-- end card body -->
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="text-start">
                                    <a href="patient-profile-settings.html"
                                        class="btn btn-md rounded fs-14 fw-medium text-dark mb-1 w-100 justify-content-start"><i
                                            class="ti ti-user-cog me-2 text-dark"> </i> Profile Settings </a>
                                    <a href="patient-password-settings.html"
                                        class="d-block w-100 btn btn-md border rounded fs-14 fw-medium text-primary text-start mb-1 active w-100 justify-content-start">
                                        <i class="ti ti-lock-star me-2 text-primary"> </i> Change Password </a>
                                    <a href="patient-notifications-settings.html"
                                        class="btn btn-md rounded fs-14 fw-medium text-dark mb-1 w-100 justify-content-start">
                                        <i class="ti ti-bell me-2 text-dark"> </i> Notifications </a>
                                </div>

                            </div><!-- end col -->

                            <div class="col-lg-9">
                                <div class="border-1 border-start ps-4">
                                    <h5 class="fw-bold pb-3 mb-4 border-1 border-bottom"> Change Password </h5>

                                    <!-- start row -->
                                    <div class="row border-bottom mb-3">

                                        <div class="col-lg-6">

                                            <!-- start row -->
                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-5">
                                                    <label class="form-label mb-0">New Password <span
                                                            class="text-danger">*</span> </label>
                                                </div><!-- end col -->
                                                <div class="col-lg-7">
                                                    <div class="position-relative">
                                                        <div
                                                            class="pass-group input-group position-relative border rounded">
                                                            <span class="input-group-text bg-white border-0">
                                                                <i class="ti ti-lock text-dark fs-14"></i>
                                                            </span>
                                                            <input type="password"
                                                                class="pass-inputb form-control ps-0 border-0"
                                                                placeholder="****************">
                                                            <span class="input-group-text bg-white border-0">
                                                                <i
                                                                    class="ti toggle-passwordb ti-eye-off text-dark fs-14"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div><!-- end col -->
                                        <div class="col-lg-6">

                                            <!-- start row -->
                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-5">
                                                    <label class="form-label mb-0">Confirm Password <span
                                                            class="text-danger">*</span></label>
                                                </div><!-- end col -->
                                                <div class="col-lg-7">
                                                    <div class="position-relative">
                                                        <div
                                                            class="pass-group input-group position-relative border rounded">
                                                            <span class="input-group-text bg-white border-0">
                                                                <i class="ti ti-lock text-dark fs-14"></i>
                                                            </span>
                                                            <input type="password"
                                                                class="pass-inputa form-control ps-0 border-0"
                                                                placeholder="****************">
                                                            <span class="input-group-text bg-white border-0">
                                                                <i
                                                                    class="ti toggle-passworda ti-eye-off text-dark fs-14"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div><!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div class="d-flex justify-content-end align-items-center gap-2">
                                        <a href="patient-password-settings.html"
                                            class="btn btn-light btn-md fs-13 fw-medium rounded"> Cancel </a>
                                        <a href="patient-password-settings.html"
                                            class="btn btn-primary btn-md fs-13 fw-medium rounded"> Save Changes </a>
                                    </div>
                                </div>




                            </div> <!-- end col -->
                        </div>

                    </div><!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="06f84b78858c39f2ef49189a-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="06f84b78858c39f2ef49189a-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="06f84b78858c39f2ef49189a-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="06f84b78858c39f2ef49189a-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="06f84b78858c39f2ef49189a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="06f84b78858c39f2ef49189a-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="06f84b78858c39f2ef49189a-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="06f84b78858c39f2ef49189a-|49" defer>
    </script>
</body>

</html>
