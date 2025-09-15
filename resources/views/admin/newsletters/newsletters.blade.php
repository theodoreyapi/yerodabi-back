<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Newsletters - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="8efcfa66a25ea7ac6b0bb51f-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

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

        @include('admin.layouts.menu')

        <div class="page-wrapper">

            <!-- Start Content -->
            <div class="content">

                <!-- Page Header -->
                <div class="mb-3 pb-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <h4 class="fw-bold mb-0 me-2">Newsletter</h4>
                        <span class="badge badge-soft-primary border pt-1 px-2 border-primary fw-medium">Total
                            Newsletter : 565</span>
                    </div>
                </div>
                <!-- End Page Header -->

                <div class=" d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <div class="search-set mb-3">
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <div class="table-search d-flex align-items-center mb-0">
                                <div class="search-input">
                                    <a href="javascript:void(0);" class="btn-searchset"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex table-dropdown mb-3 pb-1 right-content align-items-center flex-wrap row-gap-3">
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn bg-white btn-md d-inline-flex align-items-center fw-normal rounded border text-dark px-2 py-1 fs-14"
                                data-bs-toggle="dropdown">
                                <span class="me-1"> Sort By : </span> Recent
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-2">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Recent</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Oldest</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Table List -->
                <div class="table-responsive">
                    <table class="table table-nowrap datatable mb-0">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Created On</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="5c2e2928341c3b313d3530723f3331">[email&#160;protected]</a></td>
                                <td>30 Apr 2025</td>
                            </tr>
                            <tr>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="1c767374725c7b717d7570327f7371">[email&#160;protected]</a></td>
                                <td>15 Apr 2025</td>
                            </tr>
                            <tr>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="365b57444f76515b575f5a1855595b">[email&#160;protected]</a></td>
                                <td>02 Apr 2025</td>
                            </tr>
                            <tr>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="3e5b53535f7e59535f5752105d5153">[email&#160;protected]</a></td>
                                <td>27 Mar 2025</td>
                            </tr>
                            <tr>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="402b252c2c3900272d21292c6e232f2d">[email&#160;protected]</a></td>
                                <td>30 Apr 2025</td>
                            </tr>
                            <tr>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="2b4458484a596b4c464a424705484446">[email&#160;protected]</a></td>
                                <td>12 Mar 2025</td>
                            </tr>
                            <tr>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="c5a1a4abaca0a985a2a8a4aca9eba6aaa8">[email&#160;protected]</a>
                                </td>
                                <td>05 Mar 2025</td>
                            </tr>
                            <tr>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="3a59524853497a5d575b535614595557">[email&#160;protected]</a></td>
                                <td>24 Feb 2025</td>
                            </tr>
                            <tr>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="9cefe8f9eaf9dcfbf1fdf5f0b2fff3f1">[email&#160;protected]</a></td>
                                <td>16 Feb 2025</td>
                            </tr>
                            <tr>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="63000b02110f061023040e020a0f4d000c0e">[email&#160;protected]</a>
                                </td>
                                <td>01 Feb 2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /Table List -->

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

        <!-- Start Delete Modal  -->
        <div class="modal fade" id="delete_categories">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-body text-center position-relative">
                        <img src="{{ URL::asset('') }}assets/img/bg/delete-modal-bg-01.png" alt=""
                            class="img-fluid position-absolute top-0 start-0">
                        <img src="{{ URL::asset('') }}assets/img/bg/delete-modal-bg-02.png" alt=""
                            class="img-fluid position-absolute bottom-0 end-0">
                        <div class="mb-3">
                            <span class="avatar avatar-lg bg-danger text-white"><i
                                    class="ti ti-trash fs-24"></i></span>
                        </div>
                        <h5 class="fw-bold mb-1">Delete Confirmation</h5>
                        <p class="mb-3">Are you sure want to delete?</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3"
                                data-bs-dismiss="modal">Cancel</a>
                            <a href="blog-comments.html" class="btn btn-danger position-relative z-1">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Modal  -->

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script data-cfasync="false" src="{{ URL::asset('') }}assets/email-decode.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="8efcfa66a25ea7ac6b0bb51f-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="8efcfa66a25ea7ac6b0bb51f-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="8efcfa66a25ea7ac6b0bb51f-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="8efcfa66a25ea7ac6b0bb51f-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="8efcfa66a25ea7ac6b0bb51f-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="8efcfa66a25ea7ac6b0bb51f-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="8efcfa66a25ea7ac6b0bb51f-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js"
        data-cf-settings="8efcfa66a25ea7ac6b0bb51f-|49" defer></script>
</body>

</html>
