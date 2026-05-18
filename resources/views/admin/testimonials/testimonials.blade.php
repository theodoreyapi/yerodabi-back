<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Testimonials - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="489af4f16999aa036a4be357-text/javascript"></script>

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
                <div
                    class="d-flex align-items-sm-center justify-content-between flex-sm-row flex-column gap-2 pb-3 mb-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <h4 class="fw-bold mb-0 me-2">Testimonials</h4>
                        <span class="badge badge-soft-primary border pt-1 px-2 border-primary fw-medium">Total
                            Testimonials list : 582</span>
                    </div>
                    <div class="text-end">
                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#add_countries"><i class="ti ti-plus me-1"></i>Add New Testimonials</a>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- Table List -->
                <div class="table-responsive border bg-white">
                    <table class="table table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th class="text-dark">Customer</th>
                                <th class="text-dark">Country</th>
                                <th class="text-dark">Email</th>
                                <th class="text-dark">Comment</th>
                                <th class="text-dark">Created On</th>
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
                                <td>
                                    US
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="324047465a72555f535b5e1c515d5f">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">I received outstanding care from start to finish. The
                                        staff was friendly, the doctor was incredibly thorough, and I finally felt like
                                        someone truly listened to me.</p>
                                </td>
                                <td>30 Apr 2025</td>
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
                                <td>
                                    CA
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="177d787f7957707a767e7b3974787a">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">The appointment was quick, professional, and stress-free.
                                        I was nervous at first, but the team made me feel completely at ease.</p>
                                </td>
                                <td>15 Apr 2025</td>
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
                                <td>
                                    UK
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="6904081b10290e04080005470a0604">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">Exceptional service! My concerns were taken seriously, and
                                        I left with a clear plan for my treatment. I highly recommend this clinic.</p>
                                </td>
                                <td>02 Apr 2025</td>
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
                                <td>
                                    DE
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="d7b2babab697b0bab6bebbf9b4b8ba">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">From the clean facility to the kind staff, everything was
                                        top-notch. This is healthcare done right.</p>
                                </td>
                                <td>27 Mar 2025</td>
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
                                <td>
                                    FR
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="fc9799909085bc9b919d9590d29f9391">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">Booking online was simple, and I didn’t have to wait long.
                                        The doctor was kind, knowledgeable, and explained things in a way I could
                                        understand.</p>
                                </td>
                                <td>30 Apr 2025</td>
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
                                <td>
                                    AR
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="d2bda1b1b3a092b5bfb3bbbefcb1bdbf">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">My entire family trusts this medical center. Every visit
                                        is smooth, and the care we receive is always compassionate and
                                        professional.eceived outstanding care from start to finish. The staff was
                                        friendly, the doctor was incredibly thorough, and I finally felt like someone
                                        truly listened to me.</p>
                                </td>
                                <td>12 Mar 2025</td>
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
                                <td>
                                    IN
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="b8dcd9d6d1ddd4f8dfd5d9d1d496dbd7d5">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">I was impressed by how modern and efficient everything
                                        was. You can tell the staff genuinely care about their patients’ well-being.</p>
                                </td>
                                <td>05 Mar 2025</td>
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
                                <td>
                                    IT
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="791a110b100a391e14181015571a1614">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">They diagnosed an issue other doctors had missed for
                                        years. I'm finally getting better thanks to their care.</p>
                                </td>
                                <td>24 Feb 2025</td>
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
                                <td>
                                    NZ
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="582b2c3d2e3d183f35393134763b3735">[email&#160;protected]</a></td>
                                <td>
                                    <p class="truncate-text">The efficiency and modernity of everything amazed me. The
                                        staff's sincere concern for their patients' welfare is evident.</p>
                                </td>
                                <td>16 Feb 2025</td>
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
                                <td>
                                    AU
                                </td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="84e7ece5f6e8e1f7c4e3e9e5ede8aae7ebe9">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">I got excellent treatment from beginning to end. I finally
                                        felt like someone actually listened to me, the doctor was very thorough, and the
                                        staff was kind.</p>
                                </td>
                                <td>01 Feb 2025</td>
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
                            <a href="blog-categories.html" class="btn btn-danger position-relative z-1">Yes,
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="489af4f16999aa036a4be357-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="489af4f16999aa036a4be357-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="489af4f16999aa036a4be357-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="489af4f16999aa036a4be357-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="489af4f16999aa036a4be357-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="489af4f16999aa036a4be357-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="489af4f16999aa036a4be357-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="489af4f16999aa036a4be357-|49" defer>
    </script>
</body>

</html>
