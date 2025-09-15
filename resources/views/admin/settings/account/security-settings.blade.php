<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Security - Medical & Hospital - Bootstrap 5 Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="dbf6c4063932cc0bfbbe7868-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <!-- intltelinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/intltelinput/css/intlTelInput.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/intltelinput/css/demo.css">

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
                                                <a href="javascript:void(0);" class="active">
                                                    <i class="ti ti-user-cog me-2"></i><span>Account Settings</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="profile-settings.html">Profile</a></li>
                                                    <li><a href="security-settings.html" class="active">Security</a>
                                                    </li>
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
                                                <a href="javascript:void(0);">
                                                    <i class="ti ti-device-desktop-cog me-2"></i><span>System
                                                        Settings</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="email-settings.html">Email Settings</a></li>
                                                    <li><a href="email-templates-settings.html">Email Templates</a></li>
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
                                                    <li><a href="payment-methods-settings.html">Payment Methods</a></li>
                                                    <li><a href="payment-methods-settings.html">Payment Methods</a></li>
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
                                    <div class="d-flex">
                                        <h5 class="fw-bold">Security</h5>
                                    </div>
                                </div>
                                <div class="card-body px-0 mx-3">

                                    <!-- start row -->
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 border-bottom mb-3 pb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <h5 class="fs-16 fw-semibold mb-1">Password</h5>
                                                            <p class="fs-14">Set a unique password to secure the
                                                                account</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                                            data-bs-target="#change_password"><span
                                                                class="btn btn-md btn-light p-1 shadow-sm border"><i
                                                                    class="ti ti-edit"></i></span></a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 border-bottom mb-3 pb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <h5 class="fs-16 fw-semibold mb-1">Two Factor
                                                                Authentication</h5>
                                                            <p class="fs-14">Use your mobile phone to receive security
                                                                PIN.</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <label class="d-flex align-items-center form-switch ps-3">
                                                            <input class="form-check-input m-0 me-2" type="checkbox"
                                                                checked>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 border-bottom mb-3 pb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <h5 class="fs-16 fw-semibold mb-1">Google Authentication
                                                            </h5>
                                                            <p class="fs-14">Connect to Google</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <label class="d-flex align-items-center form-switch ps-3">
                                                            <input class="form-check-input m-0 me-2" type="checkbox"
                                                                checked>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 border-bottom mb-3 pb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <h5 class="fs-16 fw-semibold mb-1">Phone Number</h5>
                                                            <p class="fs-14">Phone Number associated with the account
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="me-3"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#phone_verification"><span
                                                                class="btn btn-md btn-light border shadow-sm p-1"><i
                                                                    class="ti ti-edit"></i></span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="btn btn-md btn-light border shadow-sm p-1"><i
                                                                    class="ti ti-trash"></i></span></a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 border-bottom mb-3 pb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <h5 class="fs-16 fw-semibold mb-1">Email Address</h5>
                                                            <p class="fs-14">Email Address associated with the account
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="me-3"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#email_verification"><span
                                                                class="btn btn-md btn-light border shadow-sm p-1"><i
                                                                    class="ti ti-edit"></i></span></a>
                                                        <a href="javascript:void(0);"><span
                                                                class="btn btn-md btn-light border shadow-sm p-1"><i
                                                                    class="ti ti-trash"></i></span></a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 border-bottom mb-3 pb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <h5 class="fs-16 fw-semibold mb-1">Deactivate Account</h5>
                                                            <p class="fs-14">​Your account will be deactivated and
                                                                reactivated upon signing in again.</p>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);"><span
                                                            class="btn btn-md btn-light border shadow-sm p-1"><i
                                                                class="ti ti-ban"></i></span></a>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <h5 class="fs-16 fw-semibold mb-1">Delete Account</h5>
                                                            <p class="fs-14">Your account will be permanently deleted
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#delete_modal"><span
                                                            class="btn btn-md btn-light border shadow-sm p-1"><i
                                                                class="ti ti-trash"></i></span></a>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-4">
                                            <div class="card bg-light">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <h6 class="fs-14 fw-semibold">Browsers & Devices</h6>
                                                        <p class="mb-1">The associated browsers & devices </p>
                                                        <a href="javascript:void(0);" class="btn btn-primary"><i
                                                                class="ti ti-logout me-1"></i>Sign out from all</a>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between p-2 border-bottom">
                                                        <div>
                                                            <h6 class="fs-14 fw-semibold">Chrome - Windows</h6>
                                                            <span class="fs-13 text-body">30 Apr 2025, 11:15 AM</span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-md bg-white border shadow-sm p-1"><i
                                                                class="ti ti-logout"></i></a>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between p-2 border-bottom">
                                                        <div>
                                                            <h6 class="fs-14 fw-semibold">Safari Macos</h6>
                                                            <span class="fs-13 text-body">30 Apr 2025, 11:15 AM</span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-md bg-white border shadow-sm p-1"><i
                                                                class="ti ti-logout"></i></a>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between p-2 border-bottom">
                                                        <div>
                                                            <h6 class="fs-14 fw-semibold">Chrome - Windows</h6>
                                                            <span class="fs-13 text-body">30 Apr 2025, 11:15 AM</span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-md bg-white border shadow-sm p-1"><i
                                                                class="ti ti-logout"></i></a>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between p-2 border-bottom">
                                                        <div>
                                                            <h6 class="fs-14 fw-semibold">Chrome - Windows</h6>
                                                            <span class="fs-13 text-body">19 Mar 2025, 02:50 PM</span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-md bg-white border shadow-sm p-1"><i
                                                                class="ti ti-logout"></i></a>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between p-2 border-bottom">
                                                        <div>
                                                            <h6 class="fs-14 fw-semibold">Firefox Windows</h6>
                                                            <span class="fs-13 text-body">20 Feb 2025, 06:20 PM</span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-md bg-white border shadow-sm p-1"><i
                                                                class="ti ti-logout"></i></a>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between p-2 border-bottom">
                                                        <div>
                                                            <h6 class="fs-14 fw-semibold">Chrome - Windows</h6>
                                                            <span class="fs-13 text-body">18 Jan 2025, 03:15 PM</span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-md bg-white border shadow-sm p-1"><i
                                                                class="ti ti-logout"></i></a>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between p-2 border-bottom">
                                                        <div>
                                                            <h6 class="fs-14 fw-semibold">Safari Macos</h6>
                                                            <span class="fs-13 text-body">02 Jan 2025, 09:30 AM</span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-md bg-white border shadow-sm p-1"><i
                                                                class="ti ti-logout"></i></a>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between p-2">
                                                        <div>
                                                            <h6 class="fs-14 fw-semibold">Firefox Windows</h6>
                                                            <span class="fs-13 text-body">28 Dec 2024, 05:40 PM</span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-md bg-white border shadow-sm p-1"><i
                                                                class="ti ti-logout"></i></a>
                                                    </div>
                                                </div><!-- end card -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                    </div>
                                    <!-- end row -->

                                </div><!-- end card body -->
                            </div><!-- end card -->

                        </div>

                    </div><!-- end card body -->
                </div><!-- end card -->

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

        <div id="change_password" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title fw-bold">Change Password</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="security-settings.html">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Current Password<span
                                        class="text-danger ms-1">*</span></label>
                                <div class="position-relative">
                                    <div class="pass-group input-group position-relative border rounded">
                                        <span class="input-group-text bg-white border-0">
                                            <i class="ti ti-lock text-dark fs-14"></i>
                                        </span>
                                        <input type="password" class="pass-input form-control ps-0 border-0"
                                            placeholder="****************">
                                        <span class="input-group-text bg-white border-0">
                                            <i class="ti toggle-password ti-eye-off text-dark fs-14"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password<span class="text-danger ms-1">*</span></label>
                                <div class="position-relative">
                                    <div class="pass-group input-group position-relative border rounded">
                                        <span class="input-group-text bg-white border-0">
                                            <i class="ti ti-lock text-dark fs-14"></i>
                                        </span>
                                        <input type="password" class="pass-inputs form-control ps-0 border-0"
                                            placeholder="****************">
                                        <span class="input-group-text bg-white border-0">
                                            <i class="ti toggle-passwords ti-eye-off text-dark fs-14"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="password-strength d-flex" id="passwordStrength">
                                    <span id="poor"></span>
                                    <span id="weak"></span>
                                    <span id="strong"></span>
                                    <span id="heavy"></span>
                                </div>
                                <div id="passwordInfo" class="mb-2"></div>
                                <p class="text-gray-5">Use 8 or more characters with a mix of letters, numbers &
                                    symbols.</p>
                            </div>
                            <div>
                                <label class="form-label">Confirm Password<span
                                        class="text-danger ms-1">*</span></label>
                                <div class="position-relative">
                                    <div class="pass-group input-group position-relative border rounded">
                                        <span class="input-group-text bg-white border-0">
                                            <i class="ti ti-lock text-dark fs-14"></i>
                                        </span>
                                        <input type="password" class="pass-inputa form-control ps-0 border-0"
                                            placeholder="****************">
                                        <span class="input-group-text bg-white border-0">
                                            <i class="ti toggle-passworda ti-eye-off text-dark fs-14"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center justify-content-between gap-1">
                            <button type="button" class="btn btn-outline-white"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="phone_verification" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title fw-bold">Change Phone Number</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="security-settings.html">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Current Phone Number<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control" id="phone">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Phone Number<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control" id="phone2">
                                <p class="mt-2 d-inline-flex align-items-center"><i
                                        class="ti ti-info-circle me-1"></i>New phone number only updated once you
                                    verified </p>
                            </div>
                            <div>
                                <label class="form-label">Current Password<span
                                        class="text-danger ms-1">*</span></label>
                                <div class="position-relative">
                                    <div class="pass-group input-group position-relative border rounded">
                                        <span class="input-group-text bg-white border-0">
                                            <i class="ti ti-lock text-dark fs-14"></i>
                                        </span>
                                        <input type="password" class="pass-inputb form-control ps-0 border-0"
                                            placeholder="****************">
                                        <span class="input-group-text bg-white border-0">
                                            <i class="ti toggle-passwordb ti-eye-off text-dark fs-14"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center justify-content-between gap-1">
                            <button type="button" class="btn btn-outline-white"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="email_verification" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title fw-bold">Change Email Address</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="security-settings.html">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Current Email Address<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Email Address<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="email" class="form-control">
                                <p class="mt-2 d-inline-flex align-items-center"><i
                                        class="ti ti-info-circle me-1"></i>New email address only updated once you
                                    verified </p>
                            </div>
                            <div>
                                <label class="form-label">Current Password<span
                                        class="text-danger ms-1">*</span></label>
                                <div class="position-relative">
                                    <div class="pass-group input-group position-relative border rounded">
                                        <span class="input-group-text bg-white border-0">
                                            <i class="ti ti-lock text-dark fs-14"></i>
                                        </span>
                                        <input type="password" class="pass-inputc form-control ps-0 border-0"
                                            placeholder="****************">
                                        <span class="input-group-text bg-white border-0">
                                            <i class="ti toggle-passwordc ti-eye-off text-dark fs-14"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center justify-content-end gap-1">
                            <button type="button" class="btn btn-outline-white"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="two-factor" class="modal fade">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title fw-bold">SMS Two Factor Authentication</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="security-settings.html">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Phone Number<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control" id="phone3">
                            </div>
                            <p class="fs-13 mb-0">By providing your phone number, you agree to receive text messages
                                from Figma to enable two-factor authentication when you log in. </p>
                        </div>
                        <div class="modal-footer d-flex align-items-center justify-content-between gap-1">
                            <button type="button" class="btn btn-outline-white"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Verify</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="delete_modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title fw-bold">Delete Account</h4>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="security-settings.html">
                        <div class="modal-body">
                            <div class="mb-3">
                                <p class="text-dark fw-semibold mb-0">Why Are You Deleting Your Account?</p>
                                <p class="fs-13">We're sorry to see you go! To help us improve, please let us know
                                    your reason for deleting your account</p>
                            </div>
                            <div>
                                <div class="form-check mb-3 d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="Radio-2" id="Radio-sm-1">
                                    <div class="ms-2">
                                        <p class="text-dark fw-semibold mb-0">No longer using the service</p>
                                        <label class="form-check-label fs-13" for="Radio-sm-1">
                                            I no longer need this service and won’t be using it in the future.
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check mb-3 d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="Radio-2" id="Radio-sm-2">
                                    <div class="ms-2">
                                        <p class="text-dark fw-semibold mb-0">Privacy concerns</p>
                                        <label class="form-check-label fs-13" for="Radio-sm-2">
                                            I am concerned about how my data is handled and want to remove
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check mb-3 d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="Radio-2" id="Radio-sm-3">
                                    <div class="ms-2">
                                        <p class="text-dark fw-semibold mb-0">Too many notifications/emails</p>
                                        <label class="form-check-label fs-13" for="Radio-sm-3">
                                            I’m overwhelmed by the volume of notifications or emails
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check mb-3 d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="Radio-2" id="Radio-sm-4">
                                    <div class="ms-2">
                                        <p class="text-dark fw-semibold mb-0">Poor user experience</p>
                                        <label class="form-check-label fs-13" for="Radio-sm-4">
                                            I’ve had difficulty using the platform, and it didn’t meet my expectations
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="Radio-2" id="Radio-sm-5"
                                        checked>
                                    <label class="form-check-label text-dark fw-semibold" for="Radio-sm-5">
                                        Other (Please specify)
                                    </label>
                                </div>
                            </div>
                            <div>
                                <label class="form-label">Reason<span class="text-danger ms-1">*</span></label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center justify-content-between gap-1">
                            <button type="button" class="btn btn-outline-white"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Confirm & Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="dbf6c4063932cc0bfbbe7868-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="dbf6c4063932cc0bfbbe7868-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="dbf6c4063932cc0bfbbe7868-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="dbf6c4063932cc0bfbbe7868-text/javascript"></script>

    <!-- intel Input -->
    <script src="{{ URL::asset('') }}assets/plugins/intltelinput/js/intlTelInput.js" type="dbf6c4063932cc0bfbbe7868-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="dbf6c4063932cc0bfbbe7868-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="dbf6c4063932cc0bfbbe7868-|49" defer>
    </script>
</body>

</html>
