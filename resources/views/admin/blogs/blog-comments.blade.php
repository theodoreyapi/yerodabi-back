<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog Comments - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="25cffced020be32ebaf830a7-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

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
                <div class="mb-3 pb-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <h4 class="fw-bold mb-0 me-2">Comments</h4>
                        <span class="badge badge-soft-primary border pt-1 px-2 border-primary fw-medium">Total Comments
                            : 365</span>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- Table List -->
                <div class="table-responsive border bg-white">
                    <table class="table table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Email</th>
                                <th>Comment</th>
                                <th>Created On</th>
                                <th>Review</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-02.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Ruth
                                                    Castleberry</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="6d1f1819052d0a000c0401430e0200">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">Great article! Always remember—prevention is better than
                                        cure. Regular checkups and healthy habits go a long way</p>
                                </td>
                                <td>30 Apr 2025</td>
                                <td>
                                    <div class="dropdown me-2">
                                        <a href="javascript:void(0);"
                                            class="dropdown-toggle btn btn-white border fw-normal d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown">
                                            Publish
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Unpublish</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Publish</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#delete_categories"><i
                                            class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-03.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">John
                                                    Carter</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="2e444146406e49434f4742004d4143">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">Glad to see people investing in their health! Just a
                                        reminder to always consult your doctor before starting new supplements</p>
                                </td>
                                <td>15 Apr 2025</td>
                                <td>
                                    <div class="dropdown me-2">
                                        <a href="javascript:void(0);"
                                            class="dropdown-toggle btn btn-white border fw-normal d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown">
                                            Publish
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Unpublish</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Publish</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#delete_categories"><i
                                            class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-06.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Mary
                                                    Moore</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="dfb2beada69fb8b2beb6b3f1bcb0b2">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">Small daily changes lead to big results. Stay consistent
                                        and put your health first—your future self will thank you!</p>
                                </td>
                                <td>02 Apr 2025</td>
                                <td>
                                    <div class="dropdown me-2">
                                        <a href="javascript:void(0);"
                                            class="dropdown-toggle btn btn-white border fw-normal d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown">
                                            Publish
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Unpublish</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Publish</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#delete_categories"><i
                                            class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-16.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Emma
                                                    Barton</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="3e5b53535f7e59535f5752105d5153">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">Appreciate this focus on mental well-being. Taking care of
                                        your mind is just as important as your body.</p>
                                </td>
                                <td>27 Mar 2025</td>
                                <td>
                                    <div class="dropdown me-2">
                                        <a href="javascript:void(0);"
                                            class="dropdown-toggle btn btn-white border fw-normal d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown">
                                            Publish
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Unpublish</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Publish</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#delete_categories"><i
                                            class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-08.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Kelly
                                                    Perkins</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="fa919f969683ba9d979b9396d4999597">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">This is helpful information! If anyone has ongoing
                                        symptoms, don’t hesitate to speak to a licensed healthcare provider</p>
                                </td>
                                <td>30 Apr 2025</td>
                                <td>
                                    <div class="dropdown me-2">
                                        <a href="javascript:void(0);"
                                            class="dropdown-toggle btn btn-white border fw-normal d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown">
                                            Publish
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Unpublish</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Publish</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#delete_categories"><i
                                            class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-09.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Oscar
                                                    King</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="620d1101031022050f030b0e4c010d0f">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">Very professional and caring staff. I felt heard and
                                        understood throughout my treatment.</p>
                                </td>
                                <td>12 Mar 2025</td>
                                <td>
                                    <div class="dropdown me-2">
                                        <a href="javascript:void(0);"
                                            class="dropdown-toggle btn btn-white border fw-normal d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown">
                                            Publish
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Unpublish</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Publish</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#delete_categories"><i
                                            class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-14.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Daniel
                                                    Shea</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="6d090c030408012d0a000c0401430e0200">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">The doctors took time to explain everything clearly. I
                                        left feeling informed and reassured.</p>
                                </td>
                                <td>05 Mar 2025</td>
                                <td>
                                    <div class="dropdown me-2">
                                        <a href="javascript:void(0);"
                                            class="dropdown-toggle btn btn-white border fw-normal d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown">
                                            Publish
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Unpublish</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Publish</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#delete_categories"><i
                                            class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-15.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Christopher
                                                    Smith</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="d6b5bea4bfa596b1bbb7bfbaf8b5b9bb">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">Exceptional care from start to finish. The clinic is
                                        clean, organized, and patient-focused.</p>
                                </td>
                                <td>24 Feb 2025</td>
                                <td>
                                    <div class="dropdown me-2">
                                        <a href="javascript:void(0);"
                                            class="dropdown-toggle btn btn-white border fw-normal d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown">
                                            Publish
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Unpublish</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Publish</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#delete_categories"><i
                                            class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-23.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Steve
                                                    Mason</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="5d2e29382b381d3a303c3431733e3230">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">Booking was easy, the team was punctual, and I received
                                        excellent medical attention.</p>
                                </td>
                                <td>16 Feb 2025</td>
                                <td>
                                    <div class="dropdown me-2">
                                        <a href="javascript:void(0);"
                                            class="dropdown-toggle btn btn-white border fw-normal d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown">
                                            Publish
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Unpublish</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Publish</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#delete_categories"><i
                                            class="ti ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-26.jpg"
                                                class="rounded-circle" alt="img">
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Charles
                                                    Jarrell</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="ee8d868f9c828b9dae89838f8782c08d8183">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">Great experience! The doctor truly listened and provided
                                        personalized advice.</p>
                                </td>
                                <td>01 Feb 2025</td>
                                <td>
                                    <div class="dropdown me-2">
                                        <a href="javascript:void(0);"
                                            class="dropdown-toggle btn btn-white border fw-normal d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown">
                                            Publish
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-2">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Unpublish</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">Publish</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#delete_categories"><i
                                            class="ti ti-trash"></i></a>
                                </td>
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
                            <a href="blog-comments.html" class="btn btn-danger position-relative z-1">Yes,
                                Delete</a>
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="25cffced020be32ebaf830a7-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="25cffced020be32ebaf830a7-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="25cffced020be32ebaf830a7-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="25cffced020be32ebaf830a7-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="25cffced020be32ebaf830a7-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="25cffced020be32ebaf830a7-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="25cffced020be32ebaf830a7-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="25cffced020be32ebaf830a7-|49" defer>
    </script>
</body>

</html>
