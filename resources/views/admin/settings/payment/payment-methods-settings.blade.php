<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payment Methods - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="34acadae34870ae8265161a8-text/javascript"></script>

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
                                                <a href="javascript:void(0);" class="active">
                                                    <i class="ti ti-settings-dollar me-2"></i><span>Finance &
                                                        Accounts</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="payment-methods-settings.html" class="active">Payment
                                                            Methods</a></li>
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
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="fw-bold">Payment Methods</h5>
                                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#add_reason"><i class="ti ti-plus me-1"></i>New Payment
                                            Method</a>
                                    </div>
                                </div>
                                <div class="card-body px-0 mx-3">
                                    <!-- Table List -->
                                    <div class="table-responsive border">
                                        <table class="table table-nowrap">
                                            <thead class="tablehead-light">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Created On</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Cash</td>
                                                    <td>30 Apr 2025</td>
                                                    <td><span
                                                            class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">Active</span>
                                                    </td>
                                                    <td class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                            class="btn p-1 btn-white border">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#edit_reason">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_reason">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cheque</td>
                                                    <td>15 Apr 2025</td>
                                                    <td><span
                                                            class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">Active</span>
                                                    </td>
                                                    <td class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                            class="btn p-1 btn-white border">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#edit_reason">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_reason">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Debit Card</td>
                                                    <td>02 Apr 2025</td>
                                                    <td><span
                                                            class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">Active</span>
                                                    </td>
                                                    <td class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                            class="btn p-1 btn-white border">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#edit_reason">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_reason">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Direct Deposit</td>
                                                    <td>27 Mar 2025</td>
                                                    <td><span
                                                            class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">Active</span>
                                                    </td>
                                                    <td class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                            class="btn p-1 btn-white border">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#edit_reason">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_reason">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Gift Voucher</td>
                                                    <td>12 Mar 2025</td>
                                                    <td><span
                                                            class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">Active</span>
                                                    </td>
                                                    <td class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                            class="btn p-1 btn-white border">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#edit_reason">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_reason">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Master Card</td>
                                                    <td>12 Mar 2025</td>
                                                    <td><span
                                                            class="badge bg-soft-success fs-13 fw-medium text-success border border-success py-1 px-2">Active</span>
                                                    </td>
                                                    <td class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                            class="btn p-1 btn-white border">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#edit_reason">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_reason">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Visa</td>
                                                    <td>05 Mar 2025</td>
                                                    <td><span
                                                            class="badge bg-soft-danger fs-13 fw-medium text-danger border border-danger py-1 px-2">Inactive</span>
                                                    </td>
                                                    <td class="action-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                            class="btn p-1 btn-white border">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu p-2">
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#edit_reason">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_reason">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /Table List -->
                                </div>
                            </div>
                        </div>

                    </div><!-- end card body -->
                </div><!-- end card -->

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

        <!-- Start Add Categories -->
        <div id="add_reason" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-dark modal-title fw-bold">Add Payment Method</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="cancellation-reason-settings.html">
                        <div class="modal-body">
                            <div class="mb-0">
                                <label class="form-label">Name<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Payment Method</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Categories -->

        <!-- Start Edit Categories -->
        <div id="edit_reason" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-dark modal-title fw-bold">Edit Payment Method</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="cancellation-reason-settings.html">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Name<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control" value="Personal Emergency">
                            </div>
                            <div class="mb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="form-label">Status</label>
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input m-0" type="checkbox" checked="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Edit Categories -->

        <!-- Start Delete Modal  -->
        <div class="modal fade" id="delete_reason">
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
                            <a href="cancellation-reason-settings.html"
                                class="btn btn-danger position-relative z-1">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Modal  -->

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="34acadae34870ae8265161a8-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="34acadae34870ae8265161a8-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="34acadae34870ae8265161a8-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="34acadae34870ae8265161a8-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="34acadae34870ae8265161a8-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="34acadae34870ae8265161a8-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="34acadae34870ae8265161a8-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="34acadae34870ae8265161a8-|49" defer>
    </script>
</body>

</html>
