<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Notification Settings | Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="5be8b670c51fa67f14f7a67b-text/javascript"></script>

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
                                        class="btn btn-md rounded fs-14 fw-medium text-dark mb-1 w-100 justify-content-start">
                                        <i class="ti ti-user-cog me-2 text-dark"> </i>Profile Settings </a>
                                    <a href="patient-password-settings.html"
                                        class="btn btn-md rounded fs-14 fw-medium text-dark mb-1 w-100 justify-content-start">
                                        <i class="ti ti-lock-star me-2 text-dark"> </i> Change Password </a>
                                    <a href="patient-notifications-settings.html"
                                        class="d-block w-100 btn btn-md border rounded fs-14 fw-medium text-primary text-start mb-1 w-100 justify-content-start">
                                        <i class="ti ti-bell me-2 text-primary active"> </i>Notifications </a>
                                </div>

                            </div><!-- end col -->

                            <div class="col-lg-9">
                                <div class="border-1 border-start ps-4">
                                    <h5 class="fw-bold pb-3 mb-4 border-1 border-bottom"> Notifications </h5>


                                    <!-- Items -->
                                    <div
                                        class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 border mb-3 p-3 rounded">
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-lg border bg-light me-2">
                                                <i class="ti ti-calendar-time text-body fs-16"></i>
                                            </span>
                                            <div>
                                                <h5 class="fs-14 fw-semibold mb-1">New Appointment Booking</h5>
                                                <p class="fs-13">Alert when an appointment is booked</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> Email </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox" checked="">
                                                </label>
                                            </div>
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> SMS </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox" checked="">
                                                </label>
                                            </div>
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> In App </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox" checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Items -->
                                    <div
                                        class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 border mb-3 p-3 rounded">
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-lg border bg-light me-2">
                                                <i class="ti ti-calendar-x text-body fs-16"></i>
                                            </span>
                                            <div>
                                                <h5 class="fs-14 fw-semibold mb-1">Appointment Cancellation</h5>
                                                <p class="fs-13">Alert if a appointment is cancel</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> Email </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox" checked="">
                                                </label>
                                            </div>
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> SMS </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox" checked="">
                                                </label>
                                            </div>
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> In App </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox" checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Items -->
                                    <div
                                        class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 border mb-3 p-3">
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-lg border bg-light me-2">
                                                <i class="ti ti-calendar-time text-body fs-16"></i>
                                            </span>
                                            <div>
                                                <h5 class="fs-14 fw-semibold mb-1">Lab Report Ready</h5>
                                                <p class="fs-13">Notify when test reports are available</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> Email </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox"
                                                        checked="">
                                                </label>
                                            </div>
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> SMS </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox"
                                                        checked="">
                                                </label>
                                            </div>
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> In App </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox"
                                                        checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Items -->
                                    <div
                                        class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 border mb-3 p-3">
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-lg border bg-light me-2">
                                                <i class="ti ti-activity-heartbeat text-body fs-16"></i>
                                            </span>
                                            <div>
                                                <h5 class="fs-14 fw-semibold mb-1">Follow-up Reminders</h5>
                                                <p class="fs-13">Scheduled follow-ups from doctors</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> Email </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox"
                                                        checked="">
                                                </label>
                                            </div>
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> SMS </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox"
                                                        checked="">
                                                </label>
                                            </div>
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> In App </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox"
                                                        checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Items -->
                                    <div
                                        class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 border mb-3 p-3">
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-lg border bg-light me-2">
                                                <i class="ti ti-file-dollar text-body fs-16"></i>
                                            </span>
                                            <div>
                                                <h5 class="fs-14 fw-semibold mb-1">Billing/Invoice Notification</h5>
                                                <p class="fs-13">Notify when a new bill or invoice is generated</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> Email </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox"
                                                        checked="">
                                                </label>
                                            </div>
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> SMS </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox"
                                                        checked="">
                                                </label>
                                            </div>
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> In App </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox"
                                                        checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Items -->
                                    <div
                                        class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 border mb-3 p-3">
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-lg border bg-light me-2">
                                                <i class="ti ti-alert-octagon text-body fs-16"></i>
                                            </span>
                                            <div>
                                                <h5 class="fs-14 fw-semibold mb-1">System Alerts</h5>
                                                <p class="fs-13">Login attempts, data changes, or system updates.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> Email </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox"
                                                        checked="">
                                                </label>
                                            </div>
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> SMS </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox"
                                                        checked="">
                                                </label>
                                            </div>
                                            <div class="">
                                                <p class="fw-medium mb-1 text-dark"> In App </p>
                                                <label class="d-flex align-items-center form-switch ps-0">
                                                    <input class="form-check-input m-0" type="checkbox"
                                                        checked="">
                                                </label>
                                            </div>
                                        </div>
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="5be8b670c51fa67f14f7a67b-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="5be8b670c51fa67f14f7a67b-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="5be8b670c51fa67f14f7a67b-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="5be8b670c51fa67f14f7a67b-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="5be8b670c51fa67f14f7a67b-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="5be8b670c51fa67f14f7a67b-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="5be8b670c51fa67f14f7a67b-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="5be8b670c51fa67f14f7a67b-|49" defer>
    </script>
</body>

</html>
