<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email Settings - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="6ab0bf0635676beda56ae006-text/javascript"></script>

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
                                                <a href="javascript:void(0);" class="active">
                                                    <i class="ti ti-device-desktop-cog me-2"></i><span>System
                                                        Settings</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="email-settings.html" class="active">Email
                                                            Settings</a></li>
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
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                        <h5 class="fw-bold">Email Settings</h5>
                                        <a href="javascript:void(0);" class="btn btn-primary"><i
                                                class="ti ti-send me-1"></i>Send Test Mail</a>
                                    </div>
                                </div>
                                <div class="card-body px-0 mx-3">
                                    <!-- start row -->
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="card shadow-none">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <span
                                                            class="avatar avatar-lg p-2 bg-light rounded flex-shrink-0 me-2"><img
                                                                src="{{ URL::asset('') }}assets/img/icons/php-mailer.svg"
                                                                alt="Img"></span>
                                                        <div>
                                                            <p class="fw-medium text-dark mb-1">PHP Mailer</p>
                                                            <p class="mb-0">Used to send emails safely and easily via
                                                                PHP code from a web server.</p>
                                                        </div>
                                                    </div>
                                                </div> <!-- end card body -->
                                                <div
                                                    class="card-footer d-flex align-items-center justify-content-between ">
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-sm btn-light border rounded-2 p-1 me-2"
                                                            href="email-settings.html#" data-bs-toggle="modal"
                                                            data-bs-target="#delete_modal"><i
                                                                class="ti ti-trash"></i></a>
                                                        <a class="btn btn-sm btn-light border rounded-2 p-1"
                                                            href="email-settings.html#" data-bs-toggle="modal"
                                                            data-bs-target="#php_mailer"><i
                                                                class="ti ti-settings"></i></a>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input m-0" type="checkbox"
                                                            checked="">
                                                    </div>
                                                </div> <!-- end card footer -->
                                            </div> <!-- end card -->
                                        </div> <!-- end col -->

                                        <div class="col-md-6">
                                            <div class="card shadow-none">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <span
                                                            class="avatar avatar-lg p-2 bg-light rounded flex-shrink-0 me-2"><img
                                                                src="{{ URL::asset('') }}assets/img/icons/smtp.svg"
                                                                alt="Img"></span>
                                                        <div>
                                                            <p class="fw-medium text-dark mb-1">SMTP</p>
                                                            <p class="mb-0">SMTP is used to send, relay or forward
                                                                messages from a mail client.</p>
                                                        </div>
                                                    </div>
                                                </div> <!-- end card body -->
                                                <div
                                                    class="card-footer d-flex align-items-center justify-content-between ">
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-sm btn-light border rounded-2 p-1 me-2"
                                                            href="email-settings.html#" data-bs-toggle="modal"
                                                            data-bs-target="#delete_modal"><i
                                                                class="ti ti-trash"></i></a>
                                                        <a class="btn btn-sm btn-light border rounded-2 p-1"
                                                            href="email-settings.html#" data-bs-toggle="modal"
                                                            data-bs-target="#php_smtp"><i
                                                                class="ti ti-settings"></i></a>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input m-0" type="checkbox"
                                                            checked="">
                                                    </div>
                                                </div> <!-- end card footer -->
                                            </div> <!-- end card -->
                                        </div> <!-- end col -->
                                        <div class="col-md-6">
                                            <div class="card shadow-none">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <span
                                                            class="avatar avatar-lg p-2 bg-light rounded flex-shrink-0 me-2"><img
                                                                src="{{ URL::asset('') }}assets/img/icons/send-grid.svg"
                                                                alt="Img"></span>
                                                        <div>
                                                            <p class="fw-medium text-dark mb-1">Send Grid</p>
                                                            <p class="mb-0">Cloud-based email marketing tool that
                                                                assists marketers and developers .</p>
                                                        </div>
                                                    </div>
                                                </div> <!-- end card body -->
                                                <div
                                                    class="card-footer d-flex align-items-center justify-content-between ">
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-sm btn-light border rounded-2 p-1 me-2"
                                                            href="email-settings.html#" data-bs-toggle="modal"
                                                            data-bs-target="#delete_modal"><i
                                                                class="ti ti-trash"></i></a>
                                                        <a class="btn btn-sm btn-light border rounded-2 p-1"
                                                            href="email-settings.html#" data-bs-toggle="modal"
                                                            data-bs-target="#test_mail"><i
                                                                class="ti ti-settings"></i></a>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input m-0" type="checkbox"
                                                            checked="">
                                                    </div>
                                                </div> <!-- end card footer -->
                                            </div> <!-- end card -->
                                        </div> <!-- end col -->
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

        <!-- Start Add Mail -->
        <div id="php_mailer" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-dark modal-title fw-bold">PHP Mailer</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="email-settings.html">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">From Email Address<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Password<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-0">
                                <label class="form-label">From Email Name<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Mail -->

        <!-- Start Add Mail -->
        <div id="php_smtp" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-dark modal-title fw-bold">SMTP</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="email-settings.html">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">From Email Address<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Password<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Host<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-0">
                                <label class="form-label">Port<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Mail -->

        <!-- Start Add Mail -->
        <div id="test_mail" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-dark modal-title fw-bold">Test Mail</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="email-settings.html">
                        <div class="modal-body">
                            <div class="mb-0">
                                <label class="form-label">Email Address<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Mail -->

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="6ab0bf0635676beda56ae006-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="6ab0bf0635676beda56ae006-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="6ab0bf0635676beda56ae006-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="6ab0bf0635676beda56ae006-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="6ab0bf0635676beda56ae006-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="6ab0bf0635676beda56ae006-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="6ab0bf0635676beda56ae006-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="6ab0bf0635676beda56ae006-|49" defer>
    </script>
</body>

</html>
