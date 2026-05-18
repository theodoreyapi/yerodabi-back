<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Working Hours - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="540c4073730dcf48bfba7b7b-text/javascript"></script>

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
                                                <a href="javascript:void(0);" class="active">
                                                    <i class="ti ti-building-hospital me-2"></i><span>Clinic
                                                        Settings</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="appointment-settings.html">Appointment</a></li>
                                                    <li><a href="working-hours-settings.html" class="active">Working
                                                            Hours</a></li>
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
                                        <h5 class="fw-bold">Working Hours</h5>
                                    </div>
                                </div>
                                <div class="card-body px-0 mx-3 break-hours-section" id="break-hours-section">
                                    <div
                                        class="d-flex align-items-center justify-content-between pb-3 mb-3 border-bottom">
                                        <h6 class="fs-14 fw-medium">Expected Productive Time<span
                                                class="text-danger ms-1">*</span></h6>
                                        <div class="d-flex align-items-center">
                                            <div class="input-icon-end position-relative me-2">
                                                <input type="text" class="form-control timepicker">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-clock text-gray-7"></i>
                                                </span>
                                            </div>
                                            <span class="flex-shrink-0 align-items-center">Hours / Day</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-3">Working Days</h5>

                                        <!-- start row -->
                                        <div class="row align-items-center row-gap-2 pb-3 mb-3 border-bottom">
                                            <div class="col-lg-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input me-1" type="checkbox"
                                                        checked="" id="check1">
                                                    <label for="check1" class="fw-normal">Monday</label>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="input-icon-end position-relative me-2">
                                                        <input type="text" value="9:30 AM"
                                                            class="form-control timepicker">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-clock text-gray-7"></i>
                                                        </span>
                                                    </div>
                                                    <span class="text-dark me-2">to</span>
                                                    <div class="input-icon-end position-relative">
                                                        <input type="text" value="9:30 AM"
                                                            class="form-control timepicker">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-clock text-gray-7"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input me-1" type="checkbox"
                                                        checked="" id="check2">
                                                    <label for="check2" class="fw-normal">Tuesday</label>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="input-icon-end position-relative me-2">
                                                        <input type="text" value="9:30 AM"
                                                            class="form-control timepicker">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-clock text-gray-7"></i>
                                                        </span>
                                                    </div>
                                                    <span class="text-dark me-2">to</span>
                                                    <div class="input-icon-end position-relative">
                                                        <input type="text" value="9:30 AM"
                                                            class="form-control timepicker">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-clock text-gray-7"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input me-1" type="checkbox"
                                                        checked="" id="check3">
                                                    <label for="check3" class="fw-normal">Wednesday</label>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="input-icon-end position-relative me-2">
                                                        <input type="text" value="9:30 AM"
                                                            class="form-control timepicker">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-clock text-gray-7"></i>
                                                        </span>
                                                    </div>
                                                    <span class="text-dark me-2">to</span>
                                                    <div class="input-icon-end position-relative">
                                                        <input type="text" value="9:30 AM"
                                                            class="form-control timepicker">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-clock text-gray-7"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input me-1" type="checkbox"
                                                        checked="" id="check4">
                                                    <label for="check4" class="fw-normal">Thursday</label>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="input-icon-end position-relative me-2">
                                                        <input type="text" value="9:30 AM"
                                                            class="form-control timepicker">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-clock text-gray-7"></i>
                                                        </span>
                                                    </div>
                                                    <span class="text-dark me-2">to</span>
                                                    <div class="input-icon-end position-relative">
                                                        <input type="text" value="9:30 AM"
                                                            class="form-control timepicker">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-clock text-gray-7"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input me-1" type="checkbox"
                                                        checked="" id="check5">
                                                    <label for="check5" class="fw-normal">Friday</label>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="input-icon-end position-relative me-2">
                                                        <input type="text" value="9:30 AM"
                                                            class="form-control timepicker">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-clock text-gray-7"></i>
                                                        </span>
                                                    </div>
                                                    <span class="text-dark me-2">to</span>
                                                    <div class="input-icon-end position-relative">
                                                        <input type="text" value="9:30 AM"
                                                            class="form-control timepicker">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-clock text-gray-7"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input me-1" type="checkbox"
                                                        id="check6">
                                                    <label for="check6" class="fw-normal">Saturday</label>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="input-icon-end position-relative me-2">
                                                        <input type="text" disabled
                                                            class="form-control timepicker">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-clock text-gray-7"></i>
                                                        </span>
                                                    </div>
                                                    <span class="text-dark me-2">to</span>
                                                    <div class="input-icon-end position-relative">
                                                        <input type="text" disabled
                                                            class="form-control timepicker">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-clock text-gray-7"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input me-1" type="checkbox"
                                                        id="check7">
                                                    <label for="check7" class="fw-normal">Sunday</label>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="input-icon-end position-relative me-2">
                                                        <input type="text" disabled
                                                            class="form-control timepicker">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-clock text-gray-7"></i>
                                                        </span>
                                                    </div>
                                                    <span class="text-dark me-2">to</span>
                                                    <div class="input-icon-end position-relative">
                                                        <input type="text" disabled
                                                            class="form-control timepicker">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-clock text-gray-7"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class=" pb-3 mb-3 border-bottom">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <h5 class="fw-bold">Break Hours</h5>
                                                <a href="javascript:void(0);" class="add-break"><i
                                                        class="ti ti-plus me-1"></i>Add New</a>
                                            </div>

                                            <!-- start row -->
                                            <div class="row align-items-center row-gap-2 mb-3 break1">
                                                <div class="col-lg-6">
                                                    <p class="text-dark fw-medium mb-0">Morning Break</p>
                                                </div><!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="d-flex align-items-center">
                                                        <div class="input-icon-end position-relative me-2">
                                                            <input type="text" value="9:30 AM"
                                                                class="form-control timepicker">
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-clock text-gray-7"></i>
                                                            </span>
                                                        </div>
                                                        <span class="text-dark me-2">to</span>
                                                        <div class="input-icon-end position-relative me-2">
                                                            <input type="text" value="9:30 AM"
                                                                class="form-control timepicker">
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-clock text-gray-7"></i>
                                                            </span>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-white p-2 border rounded-2 me-2"><i
                                                                class="ti ti-edit"></i></a>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-white p-2 border rounded-2"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>

                                        <div class=" pb-3 mb-3 border-bottom">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <h5 class="fw-bold">Lunch Hours</h5>
                                            </div>

                                            <!-- start row -->
                                            <div class="row align-items-center row-gap-2">
                                                <div class="col-lg-6">
                                                    <p class="text-dark fw-medium mb-0">Lunch Break</p>
                                                </div><!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="d-flex align-items-center">
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option>15 Mins</option>
                                                            <option>30 Mins</option>
                                                            <option selected>45 Mins</option>
                                                            <option>60 Mins</option>
                                                        </select>
                                                        <span class="text-dark flex-shrink-0 mx-2">Lunch at</span>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option>11 AM</option>
                                                            <option selected>01:00 PM</option>
                                                            <option>05:00 PM</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end col -->
                                            </div>
                                            <!-- end row -->

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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="540c4073730dcf48bfba7b7b-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="540c4073730dcf48bfba7b7b-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="540c4073730dcf48bfba7b7b-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="540c4073730dcf48bfba7b7b-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="540c4073730dcf48bfba7b7b-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="540c4073730dcf48bfba7b7b-text/javascript"></script>

    <!-- Date Time Pikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="540c4073730dcf48bfba7b7b-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="540c4073730dcf48bfba7b7b-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="540c4073730dcf48bfba7b7b-|49" defer>
    </script>
</body>

</html>
