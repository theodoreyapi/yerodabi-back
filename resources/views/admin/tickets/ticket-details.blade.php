<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ticket Details | Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="a053564af6408e5c8463fe80-text/javascript"></script>

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
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- intltelinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/intltelinput/css/intlTelInput.min.css">

    <!-- Quill CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/quill/quill.snow.css">

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
                <div class="d-flex align-items-center justify-content-between pb-3 mb-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <h6 class="fw-bold mb-0 me-2"><a href="{{ url('tickets') }}"><i
                                    class="ti ti-chevron-left me-1"></i>Ticket</a></h6>
                    </div>
                </div>
                <!-- End Page Header -->
                <div class="card mb-3">
                    <div class="card-header bg-white bg-light">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                            <div class="">
                                <h6 class="fs-16 mb-3">#TK001 - <span class="text-gray-5">New Support Ticket</span>
                                </h6>
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-soft-success me-3"><i
                                            class="ti ti-point-filled me-1"></i>High Priority</span>
                                    <span class="badge bg-danger me-3">Billing Department</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="dropdown-toggle btn btn-lg bg-light  d-flex align-items-center justify-content-start fs-13 fw-normal border"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                        <i class="ti ti-shield-half me-1"></i> Resolved
                                    </a>
                                    <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                        <ul class="mb-3">
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center">
                                                    Open
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center">
                                                    On Hold
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center">
                                                    Reopened
                                                </label>
                                            </li>
                                            <li>
                                                <label class="dropdown-item px-2 d-flex align-items-center">
                                                    Resolved
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="mb-3 border-bottom pb-3">
                            <div class="d-flex gap-2">
                                <img src="{{ URL::asset('') }}assets/img/users/user-08.jpg"
                                    class="avatar avatar-md rounded-circle me-2" alt="img">
                                <div>
                                    <div class="mb-3">
                                        <h6 class="fs-14 mb-1">Created By</h6>
                                        <p class="fs-13">Michael Carter</p>
                                    </div>
                                    <p>Hi,</p>
                                    <p>I tried to make a payment through the portal, but it failed multiple times. My
                                        card was charged, but the system didn’t confirm the payment. Please assist
                                        urgently.</p>
                                    <p>Every time I try to pay my bill online, it gives an error after entering card
                                        details. I'm unsure if the payment went through or if I should retry.I attempted
                                        to complete my payment, but the page froze after submission. I haven’t received
                                        a confirmation, and I’m worried the transaction might have failed or
                                        double-charged.</p>
                                    <div>
                                        <h6 class="fw-bold mb-2">Attachments</h6>
                                        <div class="d-flex align-items-center flex-wrap gap-2">
                                            <div
                                                class="d-flex align-items-center justify-content-between bg-light border rounded p-2 me-3">
                                                <div class="d-flex align-items-center me-3">
                                                    <img src="{{ URL::asset('') }}assets/img/icons/pdf.svg"
                                                        alt="img" class="avatar avatar-md me-2">
                                                    <div>
                                                        <a href="javascript:void(0);" class="fs-13">Report1.pdf</a>
                                                        <span class="d-block fs-12">45 KB</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-light btn-md rounded-circle p-1"><i
                                                            class="ti ti-download"></i></a>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between bg-light border rounded p-2">
                                                <div class="d-flex align-items-center me-3">
                                                    <img src="{{ URL::asset('') }}assets/img/media/img-03.jpg"
                                                        alt="img" class="avatar avatar-md me-2">
                                                    <div>
                                                        <a href="javascript:void(0);" class="fs-13">Image2.jpg</a>
                                                        <span class="d-block fs-12">38 KB</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-light btn-md rounded-circle p-1"><i
                                                            class="ti ti-download"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-3 mb-3 border-bottom">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ URL::asset('') }}assets/img/users/user-08.jpg"
                                    class="avatar avatar-md rounded-circle me-2" alt="img">
                                <div class="d-flex align-items-center">
                                    <p class="text-dark fw-medium mb-0 me-2">Rely To :</p>
                                    <span class="badge bg-soft-info text-info">Martin Lisa (<a
                                            href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="91fdf8e2f0d1f4e9f0fce1fdf4bff2fefc">[email&#160;protected]</a>)</span>
                                </div>
                            </div>
                            <div class="editor"></div>
                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="javascript:void(0);" class="btn btn-light me-2">Cancel</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Send Reply</a>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->

            </div>
            <!-- End Content -->

        </div>

    </div>
    <!-- End Wrapper -->


    <!-- jQuery -->
    <script data-cfasync="false" src="{{ URL::asset('') }}assets/email-decode.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="a053564af6408e5c8463fe80-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="a053564af6408e5c8463fe80-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="a053564af6408e5c8463fe80-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="a053564af6408e5c8463fe80-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="a053564af6408e5c8463fe80-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="a053564af6408e5c8463fe80-text/javascript"></script>

    <!-- intel Input -->
    <script src="{{ URL::asset('') }}assets/plugins/intltelinput/js/intlTelInput.js" type="a053564af6408e5c8463fe80-text/javascript"></script>

    <!-- Quill JS -->
    <script src="{{ URL::asset('') }}assets/plugins/quill/quill.min.js" type="a053564af6408e5c8463fe80-text/javascript"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="a053564af6408e5c8463fe80-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets//rocket-loader.min.js" data-cf-settings="a053564af6408e5c8463fe80-|49" defer>
    </script>
</body>

</html>
