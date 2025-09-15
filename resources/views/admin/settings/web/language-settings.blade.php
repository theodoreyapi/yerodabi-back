<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Language - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="3a0f2bbc12b89b11b420c991-text/javascript"></script>

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
                                                <a href="javascript:void(0);" class="active">
                                                    <i class="ti ti-world-cog me-2"></i><span>Website Settings</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <ul>
                                                    <li><a href="organization-settings.html">Organization</a></li>
                                                    <li><a href="localization-settings.html">Localization</a></li>
                                                    <li><a href="prefixes-settings.html">Prefixes</a></li>
                                                    <li><a href="seo-setup-settings.html">SEO Setup</a></li>
                                                    <li><a href="language-settings.html" class="active">Language</a>
                                                    </li>
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
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="fw-bold">Language</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown me-2">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-toggle btn btn-outline-white d-inline-flex align-items-center"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                                    <i class="isax isax-language-square me-1"></i>Language
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-lg p-2">
                                                    <li>
                                                        <label
                                                            class="dropdown-item d-flex align-items-center rounded-1">
                                                            English
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label
                                                            class="dropdown-item d-flex align-items-center rounded-1">
                                                            German
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label
                                                            class="dropdown-item d-flex align-items-center rounded-1">
                                                            Arabic
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label
                                                            class="dropdown-item d-flex align-items-center rounded-1">
                                                            French
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="javascript:void(0);"
                                                class="btn btn-primary d-inline-flex align-items-center"><i
                                                    class="ti ti-plus me-1"></i>Add New Language</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 mx-3">

                                    <div
                                        class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
                                        <div
                                            class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                                            <div class="input-icon-start position-relative me-2">
                                                <input type="text"
                                                    class="form-control form-control-sm ps-2 bg-white"
                                                    placeholder="Search">
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);"
                                            class="btn btn-outline-white d-inline-flex align-items-center"><i
                                                class="ti ti-download me-1"></i>Import Sample</a>
                                    </div>

                                    <!-- Start Table -->
                                    <div
                                        class="custom-datatable-filter table-nowrap table-responsive border rounded mb-3">
                                        <table class="table mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Language</th>
                                                    <th>Code</th>
                                                    <th>RTL</th>
                                                    <th>Default</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="language-settings2.html"
                                                                class=" me-2 flex-shrink-0"><img
                                                                    src="{{ URL::asset('') }}assets/img/flags/us.svg"
                                                                    alt="img"
                                                                    class="avatar avatar-xs rounded-circle"></a>
                                                            <a href="language-settings2.html">English</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        en
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-sm form-switch">
                                                            <input class="form-check-input form-label" type="checkbox"
                                                                role="switch" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-sm form-switch">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-light p-1 rounded-circle toggle-star"><i
                                                                    class="ti ti-star"></i></a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-sm form-switch">
                                                            <span
                                                                class="badge badge-soft-success text-success fw-medium fs-13"><i
                                                                    class="ti ti-point-filled"></i> Active</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="language-settings2.html"
                                                                class="btn btn-sm btn-outline-white me-2">Web</a>
                                                            <a href="language-settings2.html"
                                                                class="btn btn-sm btn-outline-white me-2">App</a>
                                                            <a href="language-settings2.html"
                                                                class="btn btn-sm btn-outline-white">Admin</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-outline-white d-inline-flex rounded p-1 align-items-center justify-content-center btn-sm"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end p-2">
                                                                <li>
                                                                    <a class="dropdown-item rounded-1"
                                                                        href="javascript:void(0);"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#edit_testimonial"><i
                                                                            class="isax isax-edit me-2"></i>Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item rounded-1"
                                                                        href="javascript:void(0);"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#delete_testimonials"><i
                                                                            class="isax isax-trash me-2"></i>Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="language-settings2.html"
                                                                class="flex-shrink-0 me-2"><img
                                                                    src="{{ URL::asset('') }}assets/img/flags/de.svg"
                                                                    alt="img"
                                                                    class="avatar avatar-xs rounded-circle"></a>
                                                            <a href="language-settings2.html">German</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        de
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-sm form-switch">
                                                            <input class="form-check-input form-label" type="checkbox"
                                                                role="switch" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-sm form-switch">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-light p-1 rounded-circle toggle-star"><i
                                                                    class="ti ti-star"></i></a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-sm form-switch">
                                                            <span
                                                                class="badge badge-soft-success text-success fw-medium fs-13"><i
                                                                    class="ti ti-point-filled"></i> Active</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="language-settings2.html"
                                                                class="btn btn-sm btn-outline-white me-2">Web</a>
                                                            <a href="language-settings2.html"
                                                                class="btn btn-sm btn-outline-white me-2">App</a>
                                                            <a href="language-settings2.html"
                                                                class="btn btn-sm btn-outline-white">Admin</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-outline-white d-inline-flex rounded p-1 align-items-center justify-content-center btn-sm"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end p-2">
                                                                <li>
                                                                    <a class="dropdown-item rounded-1"
                                                                        href="javascript:void(0);"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#edit_testimonial"><i
                                                                            class="isax isax-edit me-2"></i>Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item rounded-1"
                                                                        href="javascript:void(0);"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#delete_testimonials"><i
                                                                            class="isax isax-trash me-2"></i>Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="language-settings2.html"
                                                                class="flex-shrink-0 me-2"><img
                                                                    src="{{ URL::asset('') }}assets/img/flags/ae.svg"
                                                                    alt="img"
                                                                    class="avatar avatar-xs rounded-circle"></a>
                                                            <a href="language-settings2.html">Arabic</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        ar
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-sm form-switch">
                                                            <input class="form-check-input form-label" type="checkbox"
                                                                role="switch" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-sm form-switch">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-light p-1 rounded-circle toggle-star"><i
                                                                    class="ti ti-star"></i></a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-sm form-switch">
                                                            <span
                                                                class="badge badge-soft-success text-success fw-medium fs-13"><i
                                                                    class="ti ti-point-filled"></i> Active</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="language-settings2.html"
                                                                class="btn btn-sm btn-outline-white me-2">Web</a>
                                                            <a href="language-settings2.html"
                                                                class="btn btn-sm btn-outline-white me-2">App</a>
                                                            <a href="language-settings2.html"
                                                                class="btn btn-sm btn-outline-white">Admin</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-outline-white d-inline-flex rounded p-1 align-items-center justify-content-center btn-sm"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end p-2">
                                                                <li>
                                                                    <a class="dropdown-item rounded-1"
                                                                        href="javascript:void(0);"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#edit_testimonial"><i
                                                                            class="isax isax-edit me-2"></i>Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item rounded-1"
                                                                        href="javascript:void(0);"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#delete_testimonials"><i
                                                                            class="isax isax-trash me-2"></i>Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="language-settings2.html"
                                                                class="flex-shrink-0 me-2"><img
                                                                    src="{{ URL::asset('') }}assets/img/flags/fr.svg"
                                                                    alt="img"
                                                                    class="avatar avatar-xs rounded-circle"></a>
                                                            <a href="language-settings2.html">French</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        fr
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-sm form-switch">
                                                            <input class="form-check-input form-label" type="checkbox"
                                                                role="switch" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-sm form-switch">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-light p-1 rounded-circle toggle-star"><i
                                                                    class="ti ti-star"></i></a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-sm form-switch">
                                                            <span
                                                                class="badge badge-soft-danger text-danger fw-medium fs-13"><i
                                                                    class="ti ti-point-filled"></i> Inactive</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a href="language-settings2.html"
                                                                class="btn btn-sm btn-outline-white me-2">Web</a>
                                                            <a href="language-settings2.html"
                                                                class="btn btn-sm btn-outline-white me-2">App</a>
                                                            <a href="language-settings2.html"
                                                                class="btn btn-sm btn-outline-white">Admin</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-outline-white d-inline-flex rounded p-1 align-items-center justify-content-center btn-sm"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end p-2">
                                                                <li>
                                                                    <a class="dropdown-item rounded-1"
                                                                        href="javascript:void(0);"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#edit_testimonial"><i
                                                                            class="isax isax-edit me-2"></i>Edit</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item rounded-1"
                                                                        href="javascript:void(0);"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#delete_testimonials"><i
                                                                            class="isax isax-trash me-2"></i>Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- End Table -->

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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="3a0f2bbc12b89b11b420c991-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="3a0f2bbc12b89b11b420c991-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="3a0f2bbc12b89b11b420c991-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="3a0f2bbc12b89b11b420c991-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="3a0f2bbc12b89b11b420c991-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="3a0f2bbc12b89b11b420c991-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="3a0f2bbc12b89b11b420c991-|49" defer>
    </script>
</body>

</html>
