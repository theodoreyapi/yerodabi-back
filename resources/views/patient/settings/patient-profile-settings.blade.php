<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile Settings | Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="93e42729c710a46422fd04d4-text/javascript"></script>

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

                <div class="card" id="profilePage">
                    <div class="card-body">

                        <!-- end card body -->
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="text-start">
                                    <a href="patient-profile-settings.html"
                                        class="d-block w-100 btn btn-md border rounded fs-14 fw-medium text-primary text-start mb-1 active w-100 justify-content-start">
                                        <i class="ti ti-user-cog me-2 text-primary"> </i> Profile Settings </a>
                                    <a href="patient-password-settings.html"
                                        class="btn btn-md rounded fs-14 fw-medium text-dark mb-1 w-100 justify-content-start">
                                        <i class="ti ti-lock-star me-2 text-dark"> </i> Change Password </a>
                                    <a href="patient-notifications-settings.html"
                                        class="btn btn-md rounded fs-14 fw-medium text-dark mb-1 w-100 justify-content-start">
                                        <i class="ti ti-bell me-2 text-dark"> </i> Notifications </a>
                                </div>

                            </div><!-- end col -->

                            <div class="col-lg-9">
                                <div class="border-1 border-start ps-4">
                                    <h5 class="fw-bold pb-3 mb-4 border-1 border-bottom"> Basic Information </h5>

                                    <!-- start row -->
                                    <div class="row border-bottom mb-3">
                                        <div class="col-lg-12">

                                            <!-- start row -->
                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-2">
                                                    <label class="form-label mb-0">Profile Image<span
                                                            class="text-danger ms-1">*</span></label>
                                                </div><!-- end col -->
                                                <div class="col-lg-10">
                                                    <div class="profile-container">
                                                        <img src="{{ URL::asset('') }}assets/img/users/user-08.jpg"
                                                            alt="Profile">
                                                        <div class="overlay-btn">
                                                            <a href="javascript:void(0);" class="text-white"
                                                                id="uploadTrigger">
                                                                <i class="ti ti-photo fs-10"></i>
                                                            </a>
                                                        </div>
                                                        <input type="file" id="profileUpload" style="display: none;">
                                                    </div>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div><!-- end col -->
                                        <div class="col-lg-6">

                                            <!-- start row -->
                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4">
                                                    <label class="form-label mb-0">First Name<span
                                                            class="text-danger ms-1">*</span></label>
                                                </div><!-- end col -->
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div><!-- end col -->
                                        <div class="col-lg-6">

                                            <!-- start row -->
                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4">
                                                    <label class="form-label mb-0">Last Name<span
                                                            class="text-danger ms-1">*</span></label>
                                                </div><!-- end col -->
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div><!-- end col -->
                                        <div class="col-lg-6">

                                            <!-- start row -->
                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4">
                                                    <label class="form-label mb-0">Email<span
                                                            class="text-danger ms-1">*</span></label>
                                                </div><!-- end col -->
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div><!-- end col -->
                                        <div class="col-lg-6">

                                            <!-- start row -->
                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4">
                                                    <label class="form-label mb-0">Phone Number<span
                                                            class="text-danger ms-1">*</span></label>
                                                </div><!-- end col -->
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div><!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <!-- start row -->
                                    <div class="row border-bottom mb-3">
                                        <div class="mb-3">
                                            <h5 class="fw-bold mb-0">Address Information</h5>
                                        </div>
                                        <div class="col-lg-6">

                                            <!-- start row -->
                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4">
                                                    <label class="form-label mb-0">Address Line 1</label>
                                                </div><!-- end col -->
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div><!-- end col -->
                                        <div class="col-lg-6">

                                            <!-- start row -->
                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4">
                                                    <label class="form-label mb-0">Address Line 2</label>
                                                </div><!-- end col -->
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div><!-- end col -->
                                        <div class="col-lg-6">

                                            <!-- start row -->
                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4">
                                                    <label class="form-label mb-0">Country</label>
                                                </div><!-- end col -->
                                                <div class="col-lg-8">
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option>USA</option>
                                                        <option>Canada</option>
                                                        <option>UK</option>
                                                        <option>Germany</option>
                                                    </select>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div><!-- end col -->
                                        <div class="col-lg-6">

                                            <!-- start row -->
                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4">
                                                    <label class="form-label mb-0">State</label>
                                                </div><!-- end col -->
                                                <div class="col-lg-8">
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option>California</option>
                                                        <option>Ontario</option>
                                                        <option>England</option>
                                                        <option>Bavaria</option>
                                                    </select>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div><!-- end col -->
                                        <div class="col-lg-6">

                                            <!-- start row -->
                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4">
                                                    <label class="form-label mb-0">City</label>
                                                </div><!-- end col -->
                                                <div class="col-lg-8">
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option>Los Angeles</option>
                                                        <option>Toronto</option>
                                                        <option>London</option>
                                                        <option>Munich</option>
                                                    </select>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div><!-- end col -->
                                        <div class="col-lg-6">

                                            <!-- start row -->
                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4">
                                                    <label class="form-label mb-0">Pincode</label>
                                                </div><!-- end col -->
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control">
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                        </div><!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div class="d-flex justify-content-end align-items-center gap-2">
                                        <a href="patient-profile-settings.html"
                                            class="btn btn-light btn-md fs-13 fw-medium rounded"> Cancel </a>
                                        <a href="patient-profile-settings.html"
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="93e42729c710a46422fd04d4-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="93e42729c710a46422fd04d4-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="93e42729c710a46422fd04d4-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="93e42729c710a46422fd04d4-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="93e42729c710a46422fd04d4-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="93e42729c710a46422fd04d4-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="93e42729c710a46422fd04d4-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="93e42729c710a46422fd04d4-|49" defer>
    </script>
</body>

</html>
