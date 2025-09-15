<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Messages | Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="0dcaf4b60b1f91c707562876-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- intltelinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/intltelinput/css/intlTelInput.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

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
                <div class="d-flex align-items-center pb-3 mb-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <h4 class="fw-bold mb-0 me-2">Contact Message</h4>
                        <span class="badge badge-soft-primary border pt-1 px-2 border-primary fw-medium">Total Contact
                            Message : 565</span>
                    </div>
                </div>
                <!-- End Page Header -->


                <div class=" d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <div class="search-set mb-3">
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <div class="table-search d-flex align-items-center mb-0">
                                <div class="search-input">
                                    <a href="javascript:void(0);" class="btn-searchset"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex table-dropdown mb-3 pb-1 right-content align-items-center flex-wrap row-gap-3">
                        <div class="dropdown me-2">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn bg-white btn-md d-inline-flex align-items-center fw-normal rounded border text-dark px-2 py-1 fs-14"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <i class="ti ti-filter me-2 fs-14"></i>Filter
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end filter-dropdown"
                                id="filter-dropdown">
                                <div
                                    class="d-flex align-items-center justify-content-between border-bottom filter-header">
                                    <h4 class="fs-18 fw-bold">Filter</h4>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="link-danger text-decoration-underline me-3">Clear All</a>
                                    </div>
                                </div>
                                <form action="contact-messages.html#">
                                    <div class="filter-body pb-1">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);"
                                                    class="dropdown-toggle btn bg-white  d-flex align-items-center justify-content-start fs-13 p-2 fw-normal border"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                    aria-expanded="true">
                                                    Select
                                                </a>
                                                <div class="dropdown-menu shadow-lg w-100 dropdown-info p-3">
                                                    <div class="mb-3">
                                                        <div class="input-icon-start position-relative">
                                                            <span class="input-icon-addon fs-12">
                                                                <i class="isax isax-search-normal"></i>
                                                            </span>
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Search">
                                                        </div>
                                                    </div>
                                                    <ul class="mb-3">
                                                        <li
                                                            class="d-flex align-items-center justify-content-between mb-3">
                                                            <label class="d-inline-flex align-items-center text-gray-9">
                                                                <input class="form-check-input select-all m-0 me-2"
                                                                    type="checkbox"> Select All
                                                            </label>
                                                            <a href="javascript:void(0);"
                                                                class="link-danger fw-medium text-decoration-underline">Reset</a>
                                                        </li>
                                                        <li>
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                                        src="{{ URL::asset('') }}assets/img/users/user-33.jpg"
                                                                        class="flex-shrink-0 rounded-circle"
                                                                        alt="img"></span>Alberto Ripley
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                                        src="{{ URL::asset('') }}assets/img/users/user-12.jpg"
                                                                        class="flex-shrink-0 rounded-circle"
                                                                        alt="img"></span>Bernard Griffith
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                                        src="{{ URL::asset('') }}assets/img/users/user-02.jpg"
                                                                        class="flex-shrink-0 rounded-circle"
                                                                        alt="img"></span>Carol Lam
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label
                                                                class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                                <input class="form-check-input m-0 me-2"
                                                                    type="checkbox">
                                                                <span class="avatar avatar-sm rounded-circle me-2"><img
                                                                        src="{{ URL::asset('') }}assets/img/users/user-08.jpg"
                                                                        class="flex-shrink-0 rounded-circle"
                                                                        alt="img"></span>Ezra Belcher
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-outline-white w-100 close-filter">Cancel</a>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-primary w-100">Select</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Date</label>
                                            </div>
                                            <div class="input-group position-relative">
                                                <input type="text"
                                                    class="form-control date-range bookingrange rounded-end h-auto py-2 bg-white">
                                                <span class="input-icon-addon fs-16 text-gray-9">
                                                    <i class="ti ti-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="filter-footer d-flex align-items-center justify-content-end border-top">
                                        <a href="javascript:void(0);" class="btn btn-light btn-md me-2"
                                            id="close-filter">Close</a>
                                        <button type="submit" class="btn btn-primary btn-md">Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn bg-white btn-md d-inline-flex align-items-center fw-normal rounded border text-dark px-2 py-1 fs-14"
                                data-bs-toggle="dropdown">
                                <span class="me-1"> Sort By : </span> Recent
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end p-2">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Recent</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Oldest</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-nowrap datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Created On</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-33.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="fw-medium">Alberto Ripley</a>
                                    </div>
                                </td>
                                <td>+1 41245 54132</td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="a7c6cbc5c2d5d3c8e7c2dfc6cad7cbc289c4c8ca">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">Unable to log into my account. Can you assist?</p>
                                </td>
                                <td>30 Apr 2025</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="btn p-1 btn-white border">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_contact">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_contact">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-01.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="fw-medium">Susan Babin</a>
                                    </div>
                                </td>
                                <td>+1 54554 54789</td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="15666066747b55706d74786579703b767a78">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">My invoices are not being sent to clients. Please help!
                                    </p>
                                </td>
                                <td>15 Apr 2025</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="btn p-1 btn-white border">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_contact">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_contact">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-02.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="fw-medium">Carol Lam</a>
                                    </div>
                                </td>
                                <td>+1 43554 54985</td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="a6c5c7d4c9cae6c3dec7cbd6cac388c5c9cb">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">How do I integrate payment gateways for faster
                                        transactions?</p>
                                </td>
                                <td>02 Apr 2025</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="btn p-1 btn-white border">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_contact">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_contact">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-04.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="fw-medium">Marsha Noland</a>
                                    </div>
                                </td>
                                <td>+1 47554 54257</td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="3e535f4c4d565f7e5b465f534e525b105d5153">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">I need help generating financial reports for my business.
                                    </p>
                                </td>
                                <td>27 Mar 2025</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="btn p-1 btn-white border">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_contact">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_contact">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-05.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="fw-medium">Irma Armstrong</a>
                                    </div>
                                </td>
                                <td>+1 54114 57526</td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="68011a0509280d10090518040d460b0705">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">Can I upgrade my plan without losing my existing data?
                                    </p>
                                </td>
                                <td>12 Mar 2025</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="btn p-1 btn-white border">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_contact">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_contact">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-07.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="fw-medium">Jesus Adams</a>
                                    </div>
                                </td>
                                <td>+1 51247 56574</td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="eb818e989e98ab8e938a869b878ec5888486">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">How does the system calculate taxes automatically?</p>
                                </td>
                                <td>05 Mar 2025</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="btn p-1 btn-white border">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_contact">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_contact">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-08.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="fw-medium">Ezra Belcher</a>
                                    </div>
                                </td>
                                <td>+1 41452 25741</td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="d7b2ada5b697b2afb6baa7bbb2f9b4b8ba">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">The mobile app crashes frequently when generating
                                        invoices.</p>
                                </td>
                                <td>19 Feb 2025</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="btn p-1 btn-white border">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_contact">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_contact">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-10.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="fw-medium">Glen Lentz</a>
                                    </div>
                                </td>
                                <td>+1 51425 21498</td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="4e29222b200e2b362f233e222b602d2123">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">How do I categorize expenses for better tracking?</p>
                                </td>
                                <td>16 Feb 2025</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="btn p-1 btn-white border">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_contact">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_contact">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-12.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="fw-medium">Bernard Griffith</a>
                                    </div>
                                </td>
                                <td>+1 45214 98741</td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="fd9f988f939c8f99bd98859c908d9198d39e9290">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">Can I customize invoice templates with my company
                                        branding?</p>
                                </td>
                                <td>01 Feb 2025</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="btn p-1 btn-white border">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_contact">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_contact">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm me-2">
                                            <img src="{{ URL::asset('') }}assets/img/users/user-14.jpg"
                                                alt="product" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="fw-medium">John Elsass</a>
                                    </div>
                                </td>
                                <td>+1 41245 32540</td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="cba1a4a3a58baeb3aaa6bba7aee5a8a4a6">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <p class="truncate-text">How can I add team members with different permission
                                        levels?</p>
                                </td>
                                <td>20 Jas 2025</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="btn p-1 btn-white border">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_contact">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_contact">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- Start Edit Contact -->
    <div id="edit_contact" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-dark modal-title">Edit New Country</h5>
                    <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close"><i class="ti ti-x"></i></button>
                </div>
                <form action="contact-messages.html">
                    <div class="modal-body">
                        <!-- start row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label class="form-label">Name<span class="text-danger ms-1">*</span></label>
                                    <input type="text" class="form-control" value="John Carter">
                                </div>
                            </div><!-- end col -->
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Email Address<span
                                            class="text-danger ms-1">*</span></label>
                                    <input type="text" class="form-control" value="john@example.com">
                                </div>
                            </div><!-- end col -->
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Phone Number<span
                                            class="text-danger ms-1">*</span></label>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                            </div><!-- end col -->
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" rows="3">Unable to log into my account. Can you assist?</textarea>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <div class="modal-footer d-flex align-items-center gap-1">
                        <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Edit Contact -->

    <!-- Start Delete Modal  -->
    <div class="modal fade" id="delete_contact">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center position-relative">
                    <img src="{{ URL::asset('') }}assets/img/bg/delete-modal-bg-01.png" alt=""
                        class="img-fluid position-absolute top-0 start-0">
                    <img src="{{ URL::asset('') }}assets/img/bg/delete-modal-bg-02.png" alt=""
                        class="img-fluid position-absolute bottom-0 end-0">
                    <div class="mb-3">
                        <span class="avatar avatar-lg bg-danger text-white"><i class="ti ti-trash fs-24"></i></span>
                    </div>
                    <h5 class="fw-bold mb-1">Delete Confirmation</h5>
                    <p class="mb-3">Are you sure want to delete?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3"
                            data-bs-dismiss="modal">Cancel</a>
                        <a href="contact-messages.html" class="btn btn-danger position-relative z-1">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->

    <!-- jQuery -->
    <script data-cfasync="false" src="{{ URL::asset('') }}assets/email-decode.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="0dcaf4b60b1f91c707562876-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="0dcaf4b60b1f91c707562876-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="0dcaf4b60b1f91c707562876-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="0dcaf4b60b1f91c707562876-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="0dcaf4b60b1f91c707562876-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="0dcaf4b60b1f91c707562876-text/javascript"></script>

    <!-- intel Input -->
    <script src="{{ URL::asset('') }}assets/plugins/intltelinput/js/intlTelInput.js" type="0dcaf4b60b1f91c707562876-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="0dcaf4b60b1f91c707562876-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="0dcaf4b60b1f91c707562876-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="0dcaf4b60b1f91c707562876-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="0dcaf4b60b1f91c707562876-|49" defer>
    </script>
</body>

</html>
