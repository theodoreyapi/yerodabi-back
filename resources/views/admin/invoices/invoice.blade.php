<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Invoice | Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

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
            <div class="content content-two">

                <!-- Page Header -->
                <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 pb-3">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 fw-semibold mb-0">Invoices</h4>
                    </div>
                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Invoices</li>
                        </ol>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- start row -->
                <div class="row">

                    <div class="col-xl-3 col-sm-6">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center overflow-hidden mb-2">
                                    <div>
                                        <p class="mb-1 text-truncate">Total Invoice</p>
                                        <h6>$3,237.94</h6>
                                    </div>
                                </div>
                                <div class="attendance-report-bar mb-2">
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                                        <div class="progress-bar bg-pink" style="width: 85%"></div>
                                    </div>
                                </div>
                                <div>
                                    <p class="d-flex align-items-center text-truncate"><span
                                            class="text-success fs-12 d-flex align-items-center me-1"><i
                                                class="ti ti-arrow-wave-right-up me-1"></i>+32.40%</span>from last month
                                    </p>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-sm-6">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center overflow-hidden mb-2">
                                    <div>
                                        <p class="mb-1 text-truncate">Outstanding</p>
                                        <h6>$3,237.94</h6>
                                    </div>
                                </div>
                                <div class="attendance-report-bar mb-2">
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                                        <div class="progress-bar bg-purple" style="width: 50%"></div>
                                    </div>
                                </div>
                                <div>
                                    <p class="d-flex align-items-center text-truncate"><span
                                            class="text-danger fs-12 d-flex align-items-center me-1"><i
                                                class="ti ti-arrow-wave-right-up me-1"></i>-4.40%</span>from last month
                                    </p>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-sm-6">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center overflow-hidden mb-2">
                                    <div>
                                        <p class="mb-1 text-truncate">Draft</p>
                                        <h6>$3,237.94</h6>
                                    </div>
                                </div>
                                <div class="attendance-report-bar mb-2">
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                                        <div class="progress-bar bg-warning" style="width: 30%"></div>
                                    </div>
                                </div>
                                <div>
                                    <p class="d-flex align-items-center text-truncate"><span
                                            class="text-success fs-12 d-flex align-items-center me-1"><i
                                                class="ti ti-arrow-wave-right-up me-1"></i>12%</span>from last month</p>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-sm-6">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="d-flex align-items-center overflow-hidden mb-2">
                                    <div>
                                        <p class="mb-1 text-truncate">Total Overdue</p>
                                        <h6>$3,237.94</h6>
                                    </div>
                                </div>
                                <div class="attendance-report-bar mb-2">
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                        style="height: 5px;">
                                        <div class="progress-bar bg-danger" style="width: 20%"></div>
                                    </div>
                                </div>
                                <div>
                                    <p class="d-flex align-items-center text-truncate"><span
                                            class="text-danger fs-12 d-flex align-items-center me-1"><i
                                                class="ti ti-arrow-wave-right-up me-1"></i>-15.40%</span>from last
                                        month</p>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                </div>
                <!-- end row -->

                <!-- start row -->
                <div class="row">

                    <div class="col-sm-12">
                        <div>
                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                                <h5 class="d-flex align-items-center mb-0">Invoices<span
                                        class="badge bg-soft-dark ms-2 text-dark fs-12">2000 Invoices</span></h5>
                                <a href="{{ url('add-invoices') }}"
                                    class="btn btn-md btn-primary d-flex align-items-center"><i
                                        class="ti ti-circle-plus me-2"></i>Add Invoices</a>
                            </div>
                            <div class="card-body p-0">

                                <div class="table-responsive table-nowrap">
                                    <table class="table border">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="select-all">
                                                    </div>
                                                </th>
                                                <th>Invoice</th>
                                                <th>Name</th>
                                                <th>Created On</th>
                                                <th>Total</th>
                                                <th>Amount Due</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ url('invoices-details') }}" class="tb-data">INV-1454</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ url('invoices-details') }}" class="avatar avatar-lg me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/users/user-01.jpg"
                                                                class="rounded-circle" alt="user">
                                                        </a>
                                                        <div>
                                                            <h6 class="fw-medium mb-1 fs-14"><a
                                                                    href="{{ url('invoices-details') }}">Anthony Lewis</a>
                                                            </h6>
                                                            <span class="fs-12"><a
                                                                    href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="0d6c6379656263744d68756c607d6168236e6260">[email&#160;protected]</a></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>14 Jan 2024, 04:27 AM </td>
                                                <td>$300</td>
                                                <td>$0</td>
                                                <td>14 Jan 2024, 04:27 AM</td>
                                                <td>
                                                    <span
                                                        class="badge badge-soft-success d-inline-flex align-items-center">
                                                        <i class="ti ti-point-filled me-1"></i>Paid
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="action-icon d-inline-flex">
                                                        <a href="{{ url('invoices-details') }}" class="me-2"><i
                                                                class="ti ti-eye"></i></a>
                                                        <a href="{{ url('edit-invoices') }}" class="me-2"><i
                                                                class="ti ti-edit"></i></a>
                                                        <a href="#delete_modal" class=""
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ url('invoices-details') }}" class="tb-data">INV-6571</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="invoice-details.html" class="avatar avatar-lg me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/users/user-09.jpg"
                                                                class="rounded-circle" alt="user">
                                                        </a>
                                                        <div>
                                                            <h6 class="fw-medium mb-1 fs-14"><a
                                                                    href="invoice-details.html">Brian Villalobos</a>
                                                            </h6>
                                                            <span class="fs-12"><a
                                                                    href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="6c0e1e050d022c09140d011c0009420f0301">[email&#160;protected]</a></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>21 Jan 2024, 03:19 AM</td>
                                                <td>$547</td>
                                                <td>$200</td>
                                                <td>21 Jan 2024, 03:19 AM</td>
                                                <td>
                                                    <span
                                                        class="badge badge-soft-danger d-inline-flex align-items-center">
                                                        <i class="ti ti-point-filled me-1"></i>Overdue
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="action-icon d-inline-flex">
                                                        <a href="invoice-details.html" class="me-2"><i
                                                                class="ti ti-eye"></i></a>
                                                        <a href="edit-invoices.html" class="me-2"><i
                                                                class="ti ti-edit"></i></a>
                                                        <a href="invoice.html#delete_modal" class=""
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="invoice-details.html" class="tb-data">INV-2245</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="invoice-details.html" class="avatar avatar-lg me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/users/user-01.jpg"
                                                                class="rounded-circle" alt="user">
                                                        </a>
                                                        <div>
                                                            <h6 class="fw-medium mb-1 fs-14"><a
                                                                    href="invoice-details.html">Harvey Smith</a>
                                                            </h6>
                                                            <span class="fs-12"><a
                                                                    href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="a7cfc6d5d1c2dee7c2dfc6cad7cbc289c4c8ca">[email&#160;protected]</a></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>20 Feb 2024, 12:15 PM</td>
                                                <td>$325</td>
                                                <td>$65</td>
                                                <td>20 Feb 2024, 12:15 PM</td>
                                                <td>
                                                    <span
                                                        class="badge badge-soft-primary d-inline-flex align-items-center">
                                                        <i class="ti ti-point-filled me-1"></i>Pending
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="action-icon d-inline-flex">
                                                        <a href="invoice-details.html" class="me-2"><i
                                                                class="ti ti-eye"></i></a>
                                                        <a href="edit-invoices.html" class="me-2"><i
                                                                class="ti ti-edit"></i></a>
                                                        <a href="invoice.html#delete_modal" class=""
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="invoice-details.html" class="tb-data">INV-1456</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="invoice-details.html" class="avatar avatar-lg me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/users/user-02.jpg"
                                                                class="rounded-circle" alt="user">
                                                        </a>
                                                        <div>
                                                            <h6 class="fw-medium mb-1 fs-14"><a
                                                                    href="invoice-details.html">Stephan Peralt</a>
                                                            </h6>
                                                            <span class="fs-12"><a
                                                                    href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="73031601121f33160b121e031f165d101c1e">[email&#160;protected]</a></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>15 Mar 2024, 12:11 AM</td>
                                                <td>$471</td>
                                                <td>$145</td>
                                                <td>15 Mar 2024, 12:11 AM</td>
                                                <td>
                                                    <span
                                                        class="badge badge-soft-primary d-inline-flex align-items-center">
                                                        <i class="ti ti-point-filled me-1"></i>Pending
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="action-icon d-inline-flex">
                                                        <a href="invoice-details.html" class="me-2"><i
                                                                class="ti ti-eye"></i></a>
                                                        <a href="edit-invoices.html" class="me-2"><i
                                                                class="ti ti-edit"></i></a>
                                                        <a href="invoice.html#" class="" data-bs-toggle="modal"
                                                            data-bs-target="#delete_modal"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="invoice-details.html" class="tb-data">INV-0045</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="invoice-details.html" class="avatar avatar-lg me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/users/user-03.jpg"
                                                                class="rounded-circle" alt="user">
                                                        </a>
                                                        <div>
                                                            <h6 class="fw-medium mb-1 fs-14"><a
                                                                    href="invoice-details.html">Doglas Martini</a>
                                                            </h6>
                                                            <span class="fs-12"><a
                                                                    href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="f39e9281879d9a8481b3968b929e839f96dd909c9e">[email&#160;protected]</a></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>12 Apr 2024, 05:48 PM</td>
                                                <td>$147</td>
                                                <td>$32</td>
                                                <td>12 Apr 2024, 05:48 PM</td>
                                                <td>
                                                    <span
                                                        class="badge badge-soft-danger d-inline-flex align-items-center">
                                                        <i class="ti ti-point-filled me-1"></i>Overdue
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="action-icon d-inline-flex">
                                                        <a href="invoice-details.html" class="me-2"><i
                                                                class="ti ti-eye"></i></a>
                                                        <a href="edit-invoices.html" class="me-2"><i
                                                                class="ti ti-edit"></i></a>
                                                        <a href="invoice.html#delete_modal" class=""
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="invoice-details.html" class="tb-data">INV-6244</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="invoice-details.html" class="avatar avatar-lg me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/users/user-02.jpg"
                                                                class="rounded-circle" alt="user">
                                                        </a>
                                                        <div>
                                                            <h6 class="fw-medium mb-1 fs-14"><a
                                                                    href="invoice-details.html">Linda Ray</a>
                                                            </h6>
                                                            <span class="fs-12"><a
                                                                    href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="bfcddec68b8a89ffdac7ded2cfd3da91dcd0d2">[email&#160;protected]</a></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>20 Apr 2024, 06:11 PM</td>
                                                <td>$654</td>
                                                <td>$140</td>
                                                <td>20 Apr 2024, 06:11 PM</td>
                                                <td>
                                                    <span
                                                        class="badge badge-soft-warning d-inline-flex align-items-center">
                                                        <i class="ti ti-point-filled me-1"></i>Draft
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="action-icon d-inline-flex">
                                                        <a href="invoice-details.html" class="me-2"><i
                                                                class="ti ti-eye"></i></a>
                                                        <a href="edit-invoices.html" class="me-2"><i
                                                                class="ti ti-edit"></i></a>
                                                        <a href="invoice.html#delete_modal" class=""
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="invoice-details.html" class="tb-data">INV-9565</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="invoice-details.html" class="avatar avatar-lg me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/users/user-06.jpg"
                                                                class="rounded-circle" alt="user">
                                                        </a>
                                                        <div>
                                                            <h6 class="fw-medium mb-1 fs-14"><a
                                                                    href="invoice-details.html">Elliot Murray</a>
                                                            </h6>
                                                            <span class="fs-12"><a
                                                                    href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="a5c8d0d7d7c4dce5c0ddc4c8d5c9c08bc6cac8">[email&#160;protected]</a></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>14 Jan 2024, 04:27 AM </td>
                                                <td>$300</td>
                                                <td>$0</td>
                                                <td>14 Jan 2024, 04:27 AM</td>
                                                <td>
                                                    <span
                                                        class="badge badge-soft-success d-inline-flex align-items-center">
                                                        <i class="ti ti-point-filled me-1"></i>Paid
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="action-icon d-inline-flex">
                                                        <a href="invoice-details.html" class="me-2"><i
                                                                class="ti ti-eye"></i></a>
                                                        <a href="edit-invoices.html" class="me-2"><i
                                                                class="ti ti-edit"></i></a>
                                                        <a href="invoice.html#delete_modal" class=""
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="invoice-details.html" class="tb-data">INV-6874</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="invoice-details.html" class="avatar avatar-lg me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/users/user-07.jpg"
                                                                class="rounded-circle" alt="user">
                                                        </a>
                                                        <div>
                                                            <h6 class="fw-medium mb-1 fs-14"><a
                                                                    href="invoice-details.html">Rebecca Smtih</a>
                                                            </h6>
                                                            <span class="fs-12"><a
                                                                    href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="3f4c524b56577f5a475e524f535a115c5052">[email&#160;protected]</a></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>02 Sep 2024, 09:21 PM</td>
                                                <td>$654</td>
                                                <td>$65</td>
                                                <td>02 Sep 2024, 09:21 PM</td>
                                                <td>
                                                    <span
                                                        class="badge badge-soft-success d-inline-flex align-items-center">
                                                        <i class="ti ti-point-filled me-1"></i>Paid
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="action-icon d-inline-flex">
                                                        <a href="invoice-details.html" class="me-2"><i
                                                                class="ti ti-eye"></i></a>
                                                        <a href="edit-invoices.html" class="me-2"><i
                                                                class="ti ti-edit"></i></a>
                                                        <a href="invoice.html#delete_modal" class=""
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="invoice-details.html" class="tb-data">INV-1454</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="invoice-details.html" class="avatar avatar-lg me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/users/user-08.jpg"
                                                                class="rounded-circle" alt="user">
                                                        </a>
                                                        <div>
                                                            <h6 class="fw-medium mb-1 fs-14"><a
                                                                    href="invoice-details.html">Anthony Lewis</a>
                                                            </h6>
                                                            <span class="fs-12"><a
                                                                    href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="51303f25393e3f28113429303c213d347f323e3c">[email&#160;protected]</a></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>14 Jan 2024, 04:27 AM </td>
                                                <td>$300</td>
                                                <td>$0</td>
                                                <td>14 Jan 2024, 04:27 AM</td>
                                                <td>
                                                    <span
                                                        class="badge badge-soft-warning d-inline-flex align-items-center">
                                                        <i class="ti ti-point-filled me-1"></i>Draft
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="action-icon d-inline-flex">
                                                        <a href="invoice-details.html" class="me-2"><i
                                                                class="ti ti-eye"></i></a>
                                                        <a href="edit-invoices.html" class="me-2"><i
                                                                class="ti ti-edit"></i></a>
                                                        <a href="invoice.html#delete_modal" class=""
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="invoice-details.html" class="tb-data">INV-6587</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="invoice-details.html" class="avatar avatar-lg me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/users/user-09.jpg"
                                                                class="rounded-circle" alt="user">
                                                        </a>
                                                        <div>
                                                            <h6 class="fw-medium mb-1 fs-14"><a
                                                                    href="invoice-details.html">Connie Waters</a>
                                                            </h6>
                                                            <span class="fs-12"><a
                                                                    href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="abc8c4c5c5c2ceebced3cac6dbc7ce85c8c4c6">[email&#160;protected]</a></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>15 Nov 2024, 12:44 PM</td>
                                                <td>$987</td>
                                                <td>$47</td>
                                                <td>15 Nov 2024, 12:44 PM</td>
                                                <td>
                                                    <span
                                                        class="badge badge-soft-primary d-inline-flex align-items-center">
                                                        <i class="ti ti-point-filled me-1"></i>Pending
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="action-icon d-inline-flex">
                                                        <a href="invoice-details.html" class="me-2"><i
                                                                class="ti ti-eye"></i></a>
                                                        <a href="edit-invoices.html" class="me-2"><i
                                                                class="ti ti-edit"></i></a>
                                                        <a href="invoice.html#delete_modal" class=""
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="invoice-details.html" class="tb-data">INV-5879</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="invoice-details.html" class="avatar avatar-lg me-2">
                                                            <img src="{{ URL::asset('') }}assets/img/users/user-10.jpg"
                                                                class="rounded-circle" alt="user">
                                                        </a>
                                                        <div>
                                                            <h6 class="fw-medium mb-1 fs-14"><a
                                                                    href="invoice-details.html">Lori Broaddus</a>
                                                            </h6>
                                                            <span class="fs-12"><a
                                                                    href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="8be9f9e4eaefeffef8cbeef3eae6fbe7eea5e8e4e6">[email&#160;protected]</a></span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>10 Dec 2024, 11:23 PM</td>
                                                <td>$365</td>
                                                <td>$21</td>
                                                <td>10 Dec 2024, 11:23 PM</td>
                                                <td>
                                                    <span
                                                        class="badge badge-soft-danger d-inline-flex align-items-center">
                                                        <i class="ti ti-point-filled me-1"></i>Overdue
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="action-icon d-inline-flex">
                                                        <a href="invoice-details.html" class="me-2"><i
                                                                class="ti ti-eye"></i></a>
                                                        <a href="edit-invoices.html" class="me-2"><i
                                                                class="ti ti-edit"></i></a>
                                                        <a href="invoice.html#delete_modal" class=""
                                                            data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

        <!-- Start Delete Modal  -->
        <div class="modal fade" id="delete_modal">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-body text-center position-relative">
                        <img src="{{ URL::asset('') }}assets/img/bg/delete-modal-bg-01.png" alt=""
                            class="img-fluid position-absolute top-0 start-0 z-0">
                        <img src="{{ URL::asset('') }}assets/img/bg/delete-modal-bg-02.png" alt=""
                            class="img-fluid position-absolute bottom-0 end-0 z-0">
                        <div class="mb-3 position-relative z-1">
                            <span class="avatar avatar-lg bg-danger text-white"><i
                                    class="ti ti-trash fs-24"></i></span>
                        </div>
                        <h5 class="fw-bold mb-1 position-relative z-1">Delete Confirmation</h5>
                        <p class="mb-3 position-relative z-1">Are you sure want to delete?</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3"
                                data-bs-dismiss="modal">Cancel</a>
                            <a href="invoice.html" class="btn btn-danger position-relative z-1"
                                data-bs-dismiss="modal">Yes, Delete</a>
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="f3968ba1bdf3e1faa15a1959-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="f3968ba1bdf3e1faa15a1959-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="f3968ba1bdf3e1faa15a1959-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="f3968ba1bdf3e1faa15a1959-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="f3968ba1bdf3e1faa15a1959-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="f3968ba1bdf3e1faa15a1959-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="f3968ba1bdf3e1faa15a1959-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="f3968ba1bdf3e1faa15a1959-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="f3968ba1bdf3e1faa15a1959-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="f3968ba1bdf3e1faa15a1959-|49" defer>
    </script>
</body>

</html>
