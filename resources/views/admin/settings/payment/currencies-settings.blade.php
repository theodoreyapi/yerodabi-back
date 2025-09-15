<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Currencies - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="398558cf321477c2c64bbbcb-text/javascript"></script>

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
                                                    <li><a href="payment-methods-settings.html">Payment Methods</a>
                                                    </li>
                                                    <li><a href="payment-methods-settings.html">Payment Methods</a>
                                                    </li>
                                                    <li><a href="bank-accounts-settings.html">Bank Accounts</a></li>
                                                    <li><a href="tax-rates-settings.html">Tax Rates</a></li>
                                                    <li><a href="currencies-settings.html" class="active">Currencies</a>
                                                    </li>
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
                                        <h5 class="fw-bold">Currencies</h5>
                                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#add_tax_rate"><i class="ti ti-plus me-1"></i>New
                                            Currency</a>
                                    </div>
                                </div>
                                <div class="card-body px-0 mx-3">
                                    <!-- Table List -->
                                    <div class="table-responsive border">
                                        <table class="table table-nowrap">
                                            <thead class="tablehead-light">
                                                <tr>
                                                    <th>Currency</th>
                                                    <th>Code</th>
                                                    <th>Symbol</th>
                                                    <th>Exchange Rate</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0 me-2">Dollar</p>
                                                            <span
                                                                class="badge badge-soft-primary border border-primary fw-medium">Default</span>
                                                        </div>
                                                    </td>
                                                    <td>USD</td>
                                                    <td>$</td>
                                                    <td>01</td>
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
                                                                    data-bs-target="#edit_tax_rate">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_tax_rate">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Rupee</td>
                                                    <td>INR</td>
                                                    <td>₹</td>
                                                    <td>86.62</td>
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
                                                                    data-bs-target="#edit_tax_rate">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_tax_rate">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pound</td>
                                                    <td>GBP</td>
                                                    <td>£</td>
                                                    <td>0.81</td>
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
                                                                    data-bs-target="#edit_tax_rate">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_tax_rate">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Euro</td>
                                                    <td>EUR</td>
                                                    <td>€</td>
                                                    <td>0.96</td>
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
                                                                    data-bs-target="#edit_tax_rate">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_tax_rate">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Dhirams</td>
                                                    <td>AED</td>
                                                    <td>د.إ</td>
                                                    <td>3.67</td>
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
                                                                    data-bs-target="#edit_tax_rate">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item d-flex align-items-center"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete_tax_rate">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /Table List -->

                                </div><!-- end card body -->
                            </div><!-- end card -->

                        </div>

                    </div><!-- end card body -->
                </div><!-- end card -->

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

        <!-- Start Add Categories -->
        <div id="add_tax_rate" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-dark modal-title fw-bold">Add Currency</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="tax-rates-settings.html">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Currency Name<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Exchange Rate<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <!-- start row -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Code<span class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Symbol<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="mb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="form-label">Make a default</label>
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input m-0" type="checkbox" checked="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center gap-1">
                            <button type="button" class="btn btn-white border"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Currency</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Categories -->

        <!-- Start Edit Categories -->
        <div id="edit_tax_rate" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-dark modal-title fw-bold">Edit Currency</h5>
                        <button type="button" class="btn-close btn-close-modal custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>
                    </div>
                    <form action="tax-rates-settings.html">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Currency Name<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control" value="Dollar">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Exchange Rate<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control" value="01">
                            </div>
                            <!-- start row -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Code<span class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="USD">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-0">
                                        <label class="form-label">Symbol<span
                                                class="text-danger ms-1">*</span></label>
                                        <input type="text" class="form-control" value="$">
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="form-label">Make a default</label>
                                    <div class="form-check form-switch ps-0">
                                        <input class="form-check-input m-0" type="checkbox" checked="">
                                    </div>
                                </div>
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
        <div class="modal fade" id="delete_tax_rate">
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
                            <a href="tax-rates-settings.html" class="btn btn-danger position-relative z-1">Yes,
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="398558cf321477c2c64bbbcb-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="398558cf321477c2c64bbbcb-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="398558cf321477c2c64bbbcb-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="398558cf321477c2c64bbbcb-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="398558cf321477c2c64bbbcb-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="398558cf321477c2c64bbbcb-|49" defer>
    </script>
</body>

</html>
