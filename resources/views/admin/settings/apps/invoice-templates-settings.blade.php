<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Invoice Templates Settings - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="ef9c0494335df970c32da14e-text/javascript"></script>

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
            <div class="content" id="profilePage">

                <!-- Page Header -->
                <div class="mb-3 border-bottom pb-3">
                    <h4 class="fw-bold mb-0">Settings</h4>
                </div>
                <!-- End Page Header -->

                <div class="card">
                    <div class="card-body p-0">
                        <div class="settings-wrapper d-flex">

                            <!-- Start Settings Sidebar -->
                            <div class="sidebars settings-sidebar" id="sidebar2">
                                <div class="sidebar-inner" data-simplebar>
                                    <div id="sidebar-menu5" class="sidebar-menu mt-0 p-0">
                                        <ul>
                                            <li class="submenu">
                                                <a href="javascript:void(0);">
                                                    <i class="ti ti-user-cog me-2"></i><span>Account Settings</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="profile-settings.html">Profile</a></li>
                                                    <li><a href="security-settings.html">Security</a></li>
                                                    <li><a href="notifications-settings.html">Notifications</a></li>
                                                    <li><a href="integrations-settings.html">Integrations</a></li>
                                                </ul>
                                            </li>
                                            <li class="submenu">
                                                <a href="javascript:void(0);">
                                                    <i class="ti ti-world-cog me-2"></i><span>Website Settings</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="organization-settings.html">Organization</a></li>
                                                    <li><a href="localization-settings.html">Localization</a></li>
                                                    <li><a href="prefixes-settings.html">Prefixes</a></li>
                                                    <li><a href="seo-setup-settings.html">SEO Setup</a></li>
                                                    <li><a href="language-settings.html">Language</a></li>
                                                    <li><a href="maintenance-mode-settings.html">Maintenance Mode</a>
                                                    </li>
                                                    <li><a href="login-and-register-settings.html">Login & Register</a>
                                                    </li>
                                                    <li><a href="preferences-settings.html">Preferences</a></li>
                                                </ul>
                                            </li>
                                            <li class="submenu">
                                                <a href="javascript:void(0);">
                                                    <i class="ti ti-building-hospital me-2"></i><span>Clinic
                                                        Settings</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="appointment-settings.html">Appointment</a></li>
                                                    <li><a href="working-hours-settings.html">Working Hours</a></li>
                                                    <li><a href="cancellation-reason-settings.html">Cancellation
                                                            Reason</a></li>
                                                </ul>
                                            </li>
                                            <li class="submenu">
                                                <a href="javascript:void(0);" class="active">
                                                    <i class="ti ti-device-mobile-cog me-2"></i><span>App
                                                        Settings</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="invoice-settings.html">Invoice Settings</a></li>
                                                    <li><a href="invoice-templates-settings.html" class="active">Invoice
                                                            Templates</a></li>
                                                    <li><a href="signatures-settings.html">Signatures</a></li>
                                                    <li><a href="custom-fields-settings.html">Custom Fields</a></li>
                                                </ul>
                                            </li>
                                            <li class="submenu">
                                                <a href="javascript:void(0);">
                                                    <i class="ti ti-device-desktop-cog me-2"></i><span>System
                                                        Settings</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="email-settings.html">Email Settings</a></li>
                                                    <li><a href="email-templates-settings.html">Email Templates</a>
                                                    </li>
                                                    <li><a href="sms-gateways-settings.html">SMS Gateways</a></li>
                                                    <li><a href="sms-templates-settings.html">SMS Templates</a></li>
                                                    <li><a href="gdpr-cookies-settings.html">GDPR Cookies</a></li>
                                                </ul>
                                            </li>
                                            <li class="submenu">
                                                <a href="javascript:void(0);">
                                                    <i class="ti ti-settings-dollar me-2"></i><span>Finance &
                                                        Accounts</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="payment-methods-settings.html">Payment Methods</a>
                                                    </li>
                                                    <li><a href="bank-accounts-settings.html">Bank Accounts</a></li>
                                                    <li><a href="tax-rates-settings.html">Tax Rates</a></li>
                                                    <li><a href="currencies-settings.html">Currencies</a></li>
                                                </ul>
                                            </li>
                                            <li class="submenu">
                                                <a href="javascript:void(0);">
                                                    <i class="ti ti-settings-2 me-2"></i><span>Other Settings</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="sitemap-settings.html">Sitemap</a></li>
                                                    <li><a href="clear-cache-settings.html">Clear Cache</a></li>
                                                    <li><a href="storage-settings.html">Storage</a></li>
                                                    <li><a href="cronjob-settings.html">Cronjob</a></li>
                                                    <li><a href="ban-ip-address-settings.html">Ban IP Address</a></li>
                                                    <li><a href="system-backup-settings.html">System Backup</a></li>
                                                    <li><a href="database-backup-settings.html">Database Backup</a>
                                                    </li>
                                                    <li><a href="system-update.html">System Update</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Settings Sidebar -->

                            <div class="card flex-fill mb-0 border-0 bg-light-500 shadow-none">
                                <div class="card-header border-bottom px-0 mx-3">
                                    <h5 class="fw-bold">Invoice Templates</h5>
                                </div>
                                <div class="card-body px-0 mx-3">
                                    <!-- start row -->
                                    <div class="row gx-3">
                                        <div class="col-md-3">
                                            <div class="card invoice-template bg-white">
                                                <div class="card-body p-2">
                                                    <div class="invoice-img">
                                                        <a href="invoice-templates-settings.html#">
                                                            <img class="w-100"
                                                                src="{{ URL::asset('') }}assets/img/invoice/invoice-template-01.jpg"
                                                                alt="invoice">
                                                        </a>
                                                        <a href="invoice-templates-settings.html#"
                                                            class="invoice-view-icon" data-bs-toggle="modal"
                                                            data-bs-target="#invoice_view_1"><i
                                                                class="ti ti-eye"></i></a>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <a href="javascript:void(0);">General Invoice 1</a>
                                                        <a href="javascript:void(0);"
                                                            class="invoice-star d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-star"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-md-3">
                                            <div class="card invoice-template bg-white">
                                                <div class="card-body p-2">
                                                    <div class="invoice-img">
                                                        <a href="invoice-templates-settings.html#">
                                                            <img class="w-100"
                                                                src="{{ URL::asset('') }}assets/img/invoice/invoice-template-02.jpg"
                                                                alt="invoice">
                                                        </a>
                                                        <a href="invoice-templates-settings.html#"
                                                            class="invoice-view-icon" data-bs-toggle="modal"
                                                            data-bs-target="#invoice_view_2"><i
                                                                class="ti ti-eye"></i></a>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <a href="javascript:void(0);">General Invoice 2</a>
                                                        <a href="javascript:void(0);"
                                                            class="invoice-star d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-star"></i>
                                                        </a>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                        <div class="col-md-3">
                                            <div class="card invoice-template bg-white">
                                                <div class="card-body p-2">
                                                    <div class="invoice-img">
                                                        <a href="invoice-templates-settings.html#">
                                                            <img class="w-100"
                                                                src="{{ URL::asset('') }}assets/img/invoice/invoice-template-03.jpg"
                                                                alt="invoice">
                                                        </a>
                                                        <a href="invoice-templates-settings.html#"
                                                            class="invoice-view-icon" data-bs-toggle="modal"
                                                            data-bs-target="#invoice_view_3"><i
                                                                class="ti ti-eye"></i></a>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <a href="javascript:void(0);">General Invoice 3</a>
                                                        <a href="javascript:void(0);"
                                                            class="invoice-star d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-star"></i>
                                                        </a>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                        <div class="col-md-3">
                                            <div class="card invoice-template bg-white">
                                                <div class="card-body p-2">
                                                    <div class="invoice-img">
                                                        <a href="invoice-templates-settings.html#">
                                                            <img class="w-100"
                                                                src="{{ URL::asset('') }}assets/img/invoice/invoice-template-04.jpg"
                                                                alt="invoice">
                                                        </a>
                                                        <a href="invoice-templates-settings.html#"
                                                            class="invoice-view-icon" data-bs-toggle="modal"
                                                            data-bs-target="#invoice_view_4"><i
                                                                class="ti ti-eye"></i></a>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <a href="javascript:void(0);">General Invoice 4</a>
                                                        <a href="javascript:void(0);"
                                                            class="invoice-star d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-star"></i>
                                                        </a>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
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

        <!-- Start Invoivce View -->
        <div class="modal fade addmodal" id="invoice_view_1">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="mb-0">General Invoice 1</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close-modal"
                            data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex align-items-center justify-content-center"><img
                                class="w-100 invoice-template-img"
                                src="{{ URL::asset('') }}assets/img/invoice/invoice-template-img-01.jpg"
                                alt="User Img"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Invoivce View -->
        <!-- Start Invoivce View -->
        <div class="modal fade addmodal" id="invoice_view_2">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="mb-0">General Invoice 2</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close-modal"
                            data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex align-items-center justify-content-center"><img
                                class="w-100 invoice-template-img"
                                src="{{ URL::asset('') }}assets/img/invoice/invoice-template-img-02.jpg"
                                alt="User Img"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Invoivce View -->
        <!-- Start Invoivce View -->
        <div class="modal fade addmodal" id="invoice_view_3">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="mb-0">General Invoice 3</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close-modal"
                            data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex align-items-center justify-content-center"><img
                                class="w-100 invoice-template-img"
                                src="{{ URL::asset('') }}assets/img/invoice/invoice-template-img-03.jpg"
                                alt="User Img"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Invoivce View -->
        <!-- Start Invoivce View -->
        <div class="modal fade addmodal" id="invoice_view_4">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="mb-0">General Invoice 4</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close-modal"
                            data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex align-items-center justify-content-center"><img
                                class="w-100 invoice-template-img"
                                src="{{ URL::asset('') }}assets/img/invoice/invoice-template-img-04.jpg"
                                alt="User Img"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Invoivce View -->

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="ef9c0494335df970c32da14e-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="ef9c0494335df970c32da14e-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="ef9c0494335df970c32da14e-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="ef9c0494335df970c32da14e-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="ef9c0494335df970c32da14e-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="ef9c0494335df970c32da14e-text/javascript"></script>

    <!-- Quill JS -->
    <script src="{{ URL::asset('') }}assets/plugins/quill/quill.min.js" type="ef9c0494335df970c32da14e-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="ef9c0494335df970c32da14e-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="ef9c0494335df970c32da14e-|49" defer>
    </script>
</body>

</html>
