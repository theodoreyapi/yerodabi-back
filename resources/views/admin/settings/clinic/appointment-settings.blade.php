<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Appointment Reminders - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="a0433e1a64c408726c8e7378-text/javascript"></script>

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

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

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
            <div class="content" id="profilePage">

                <!-- Page Header -->
                <div class="mb-3 border-bottom pb-3">
                    <h4 class="fw-bold mb-0">Settings</h4>
                </div>
                <!-- End Page Header -->

                <div class="card mb-0">
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
                                                <a href="javascript:void(0);" class="active">
                                                    <i class="ti ti-building-hospital me-2"></i><span>Clinic
                                                        Settings</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="appointment-settings.html"
                                                            class="active">Appointment</a></li>
                                                    <li><a href="working-hours-settings.html">Working Hours</a></li>
                                                    <li><a href="cancellation-reason-settings.html">Cancellation
                                                            Reason</a></li>
                                                </ul>
                                            </li>
                                            <li class="submenu">
                                                <a href="javascript:void(0);">
                                                    <i class="ti ti-device-mobile-cog me-2"></i><span>App
                                                        Settings</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="invoice-settings.html">Invoice Settings</a></li>
                                                    <li><a href="invoice-templates-settings.html">Invoice Templates</a>
                                                    </li>
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
                                    <div class="d-flex align-items-center">
                                        <h5 class="fw-bold">Appointment Reminders</h5>
                                    </div>
                                </div>
                                <div class="card-body px-0 mx-3 break-hours-section" id="break-hours-section">

                                    <!-- start row -->
                                    <div
                                        class="row row-gap-2 align-items-center justify-content-between pb-3 mb-3 border-bottom">
                                        <div class="col-lg-11">
                                            <h6 class="fs-14 fw-medium">Automatically notify clients about upcoming
                                                appointments.</h6>
                                        </div><!-- end col -->
                                        <div class="col-lg-1">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input text-end me-1" type="checkbox"
                                                    checked="">
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-11">
                                            <h6 class="fs-14 fw-medium">Reminders for weekend appointments go out on
                                                Friday.</h6>
                                        </div><!-- end col -->
                                        <div class="col-lg-1">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input text-end me-1" type="checkbox">
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-11">
                                            <h6 class="fs-14 fw-medium">Appointments auto-cancel if clients reply 'No'
                                                or 'Cancel' to reminders.</h6>
                                        </div><!-- end col -->
                                        <div class="col-lg-1">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input text-end me-1" type="checkbox"
                                                    checked="">
                                            </div>
                                        </div><!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div>
                                        <h5 class="fw-bold mb-3">Automatic Reminders</h5>

                                        <div class="reminder-list mb-3 border-bottom">

                                            <div class="row d-flex align-items-center mb-3 reminder-list-item">
                                                <div class="col-md-2">
                                                    <h6 class="fs-14 fw-medium mb-0">Reminder </h6>
                                                </div>
                                                <div class="col-md-10 flex-grow-1">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="me-2">
                                                            <select class="select me-2">
                                                                <option selected>Email</option>
                                                                <option>SMS</option>
                                                            </select>
                                                        </div>
                                                        <div class="me-2">
                                                            <select class="select me-2">
                                                                <option>Select</option>
                                                                <option>Welcome Email</option>
                                                                <option selected>Appointment Reminder</option>
                                                                <option>Appointment Confirmation</option>
                                                                <option>Appointment Rescheduled</option>
                                                                <option>Appointment Cancelled</option>
                                                                <option>Test Result Notification</option>
                                                            </select>
                                                        </div>
                                                        <div class="me-2">
                                                            <select class="select me-2">
                                                                <option selected>01 </option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>05</option>
                                                                <option>10</option>
                                                            </select>
                                                        </div>
                                                        <span class="me-2">
                                                            Days Before
                                                        </span>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-white p-2 border rounded-2 me-2"><i
                                                                    class="ti ti-edit"></i></a>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-white p-2 border rounded-2 add-reminder"><i
                                                                    class="ti ti-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row d-flex align-items-center mb-3 reminder-list-item">
                                                <div class="col-md-2">
                                                    <h6 class="fs-14 fw-medium mb-0">Reminder </h6>
                                                </div>
                                                <div class="col-md-10 flex-grow-1">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div class="me-2">
                                                            <select class="select me-2">
                                                                <option selected>Email</option>
                                                                <option>SMS</option>
                                                            </select>
                                                        </div>
                                                        <div class="me-2">
                                                            <select class="select me-2">
                                                                <option>Select</option>
                                                                <option>Welcome Email</option>
                                                                <option selected>Appointment Reminder</option>
                                                                <option>Appointment Confirmation</option>
                                                                <option>Appointment Rescheduled</option>
                                                                <option>Appointment Cancelled</option>
                                                                <option>Test Result Notification</option>
                                                            </select>
                                                        </div>
                                                        <div class="me-2">
                                                            <select class="select me-2">
                                                                <option selected>01 </option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>05</option>
                                                                <option>10</option>
                                                            </select>
                                                        </div>
                                                        <span class="me-2">
                                                            Days Before
                                                        </span>
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-white p-2 border rounded-2 me-2"><i
                                                                    class="ti ti-edit"></i></a>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-white p-2 border rounded-2 remove-reminder"><i
                                                                    class="ti ti-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class=" pb-3 mb-3 border-bottom">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <h5 class="fw-bold mb-0">Manual Reminders</h5>
                                            </div>

                                            <!-- start row -->
                                            <div class="row align-items-center row-gap-2 mb-3">
                                                <div class="col-lg-6">
                                                    <p class="text-dark fw-medium mb-0">SMS Reminder Template</p>
                                                </div><!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option>Appointment Confirmation</option>
                                                            <option>Appointment Reminder</option>
                                                            <option>Appointment Rescheduled</option>
                                                            <option>Appointment Cancellation</option>
                                                            <option>Test Results Notification</option>
                                                            <option>Follow-Up Reminder</option>
                                                        </select>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-white p-2 border rounded-2 me-2"><i
                                                                class="ti ti-edit"></i></a>
                                                    </div>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <!-- start row -->
                                            <div class="row align-items-center row-gap-2 mb-3">
                                                <div class="col-lg-6">
                                                    <p class="text-dark fw-medium mb-0">Email Reminder Template</p>
                                                </div><!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option>Welcome Email</option>
                                                            <option>Appointment Confirmation</option>
                                                            <option>Appointment Reminder</option>
                                                            <option>Appointment Rescheduled</option>
                                                            <option>Appointment Cancelled</option>
                                                            <option>Test Result Notification</option>
                                                        </select>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-white p-2 border rounded-2 me-2"><i
                                                                class="ti ti-edit"></i></a>
                                                    </div>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div class="border-top pt-3">

                                                <!-- start row -->
                                                <div class="row align-items-center mb-3">
                                                    <div class="col-9">
                                                        <p class="mb-0 text-dark fw-medium">Send reminder automatically
                                                            upon new appointment booking</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input text-end me-1"
                                                                    type="checkbox" checked="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- start end -->

                                                <!-- start row -->
                                                <div class="row align-items-center row-gap-2">
                                                    <div class="col-xl-5 col-lg-3">
                                                        <p class="text-dark fw-medium mb-0">Reminder</p>
                                                    </div><!-- end col -->
                                                    <div class="col-xl-7 col-lg-9">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <select class="select">
                                                                <option>Email</option>
                                                                <option>SMS</option>
                                                            </select>
                                                            <select class="select">
                                                                <option>Appointment Remainder</option>
                                                                <option>Welcome Email</option>
                                                                <option>Appointment Confirmation</option>
                                                                <option>Appointment Reminder</option>
                                                                <option>Appointment Rescheduled</option>
                                                                <option>Appointment Cancelled</option>
                                                                <option>Test Result Notification</option>
                                                            </select>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-white p-2 border rounded-2 me-2"><i
                                                                    class="ti ti-edit"></i></a>
                                                        </div>
                                                    </div><!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>

                                        </div>

                                        <div class="d-flex align-items-center justify-content-end">
                                            <a href="javascript:void(0);" class="btn btn-light me-2">Cancel</a>
                                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                                        </div>

                                    </div>
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="a0433e1a64c408726c8e7378-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="a0433e1a64c408726c8e7378-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="a0433e1a64c408726c8e7378-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="a0433e1a64c408726c8e7378-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="a0433e1a64c408726c8e7378-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="a0433e1a64c408726c8e7378-text/javascript"></script>

    <!-- Date Time Pikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="a0433e1a64c408726c8e7378-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="a0433e1a64c408726c8e7378-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="a0433e1a64c408726c8e7378-|49" defer>
    </script>
</body>

</html>
