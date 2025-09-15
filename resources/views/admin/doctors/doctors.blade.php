<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctors - Yerodabi</title>
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

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/dataTables.bootstrap5.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

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

                <!-- Start Page Header -->
                <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 mb-3 pb-3 border-bottom">
                    <div class="flex-grow-1">
                        <h4 class="fw-bold mb-0"> Liste des médecins <span
                                class="badge badge-soft-primary fs-13 fw-medium ms-2">Nombre total de médecins : 565</span></h4>
                    </div>
                    <div class="text-end d-flex">
                        <!-- dropdown-->
                        <div class="dropdown me-1">
                            <a href="javascript:void(0);"
                                class="btn btn-md fs-14 fw-normal border bg-white rounded text-dark d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                Exporter<i class="ti ti-chevron-down ms-2"></i>
                            </a>
                            <ul class="dropdown-menu p-2">
                                <li>
                                    <a class="dropdown-item" href="doctors-list.html#">Telecharger en PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="doctors-list.html#">Telecharger en Excel</a>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ url('add-doctor') }}" class="btn btn-primary ms-2 fs-13 btn-md"><i
                                class="ti ti-plus me-1"></i>Nouveau Docteur</a>
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
                                class="btn btn-white bg-white fs-14 py-1 border d-inline-flex text-dark align-items-center"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <i class="ti ti-filter text-gray-5 me-1"></i>Filters
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end filter-dropdown p-0"
                                id="filter-dropdown">
                                <div
                                    class="d-flex align-items-center justify-content-between border-bottom filter-header">
                                    <h4 class="mb-0">Filter</h4>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="link-danger text-decoration-underline">Clear All</a>
                                    </div>
                                </div>
                                <form action="doctors-list.html#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Doctor</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Dr. Mick Thompson</option>
                                                <option value="m-2">Dr. Sarah Johnson</option>
                                                <option value="m-3">Dr. Emily Carter</option>
                                                <option value="m-4">Dr. David Lee</option>
                                                <option value="m-5">Dr. Anna Kim</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Designation</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Cardiologist</option>
                                                <option value="m-2">Orthopedic Surgeon</option>
                                                <option value="m-3">Pediatrician</option>
                                                <option value="m-4">Gynecologist</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Department</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Cardiology</option>
                                                <option value="m-2">Orthopedics</option>
                                                <option value="m-3">Pediatrics</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Date<span
                                                    class="text-danger">*</span></label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker"
                                                    placeholder="dd/mm/yyyy">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Amount</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>$501 - $1000</option>
                                                <option value="m-2">$501 - $1100</option>
                                                <option value="m-3">$701 - $1200</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Status</label>
                                                <a href="javascript:void(0);" class="link-primary mb-1">Reset</a>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" selected>Available</option>
                                                <option value="m-2">Unavailable</option>
                                            </select>
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
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-nowrap datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>Nom & désignation</th>
                                <th>Département</th>
                                <th>Téléphone</th>
                                <th>E-mail</th>
                                <th>Frais</th>
                                <th>Statut</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{ url('doctor-details') }}" class="avatar me-2">
                                            <img src="{{ URL::asset('') }}assets/img/doctors/doctor-01.jpg"
                                                alt="Doctor" class="rounded-circle">
                                        </a>
                                        <div>
                                            <h6 class="mb-1 fs-14 fw-semibold"><a href="{{ url('doctor-details') }}">Dr. Mick
                                                    Thompson</a></h6>
                                            <span class="fs-13 d-block"> Cardiologue </span>
                                        </div>
                                    </div>
                                </td>
                                <td>Cardiologie </td>
                                <td>+1 54554 54584</td>
                                <td><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="264b4f454d66435e474b564a430845494b">[email&#160;protected]</a>
                                </td>
                                <td>
                                    <h6 class="fs-14 fw-semibold mb-0">$458</h6>
                                </td>
                                <td>
                                    <span class="badge badge-soft-success border border-success">Available</span>
                                    <span class="badge badge-soft-danger border border-danger">Unavailable
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="action-item me-2">
                                            <a href="{{ url('appointment-calendar') }}">
                                                <i class="ti ti-calendar-cog"></i>
                                            </a>
                                        </div>
                                        <div class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ url('edit-doctor') }}"
                                                        class="dropdown-item d-flex align-items-center">Modifier</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_modal">Suppression</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

        <!-- Start Add Doctor -->
        <div class="offcanvas offcanvas-offset offcanvas-end offcanvas-large" tabindex="-1" id="add_doctor">
            <div class="offcanvas-header d-block pb-0 px-0">
                <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                    <h5 class="offcanvas-title fs-18 fw-bold">New Doctor</h5>
                    <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="offcanvas"
                        aria-label="Close"><i class="ti ti-x bg-white fs-16 text-dark"></i></button>
                </div>
            </div>
            <div class="offcanvas-body p-0">
                <form action="doctors-list.html">
                    <div class="bg-light px-3 py-2">
                        <h6 class="fw-bold mb-0">Contact Information</h6>
                    </div>
                    <div class="p-3 pb-0">
                        <!-- start row-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label">Profile Image</label>
                                    <div
                                        class="drag-upload-btn avatar avatar-xxl rounded-circle bg-light text-muted position-relative overflow-hidden z-1 mb-2 ms-4 p-0">
                                        <i class="ti ti-user-plus fs-16"></i>
                                        <input type="file" class="form-control image-sign" multiple="">
                                        <div
                                            class="position-absolute bottom-0 end-0 star-0 w-100 h-25 bg-dark d-flex align-items-center justify-content-center z-n1">
                                            <a href="javascript:void(0);"
                                                class="text-white d-flex align-items-center justify-content-center">
                                                <i class="ti ti-photo fs-14"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Username <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col-->

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">DOB <span class="text-danger">*</span></label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker"
                                                    placeholder="dd/mm/yyyy">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Year Of Experience <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col-->

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Department<span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Cardiology </option>
                                                <option>Orthopedics</option>
                                                <option>Pediatrics</option>
                                                <option>Gynecology</option>
                                                <option>Psychiatry</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Designation <span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Cardiologist</option>
                                                <option>Orthopedic Surgeon</option>
                                                <option>Pediatrics</option>
                                                <option>Gynecology</option>
                                                <option>Psychiatry</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col-->

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Medical License Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Language Spoken</label>
                                            <input class="input-tags form-control" id="inputBox" type="text"
                                                data-role="tagsinput" name="specialist" value="English,French">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col-->

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Blood Group<span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>O+</option>
                                                <option>O-</option>
                                                <option>A+</option>
                                                <option>A-</option>
                                                <option>B+</option>
                                                <option>B-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Gender <span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col-->

                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" rows="3">About Doctor</textarea>
                                </div>
                                <div class="form-check form-switch mb-3">
                                    <label class="form-check-label" for="switchCheckDefault">Feature On
                                        Website</label>
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="switchCheckDefault">
                                </div>
                            </div>

                        </div>
                        <!-- end row-->
                    </div>
                    <div class="bg-light px-3 py-2">
                        <h6 class="fw-bold mb-0">Address Information</h6>
                    </div>
                    <div class="p-3 pb-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Address 1</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Address 2 </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Country</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>United States</option>
                                        <option>India</option>
                                        <option>Canada</option>
                                        <option>Germany</option>
                                        <option>Brazil</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">City</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Los Angeles</option>
                                        <option>San Francisco</option>
                                        <option>San Francisco</option>
                                        <option>San Jose</option>
                                        <option>Fresno</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">State</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>California</option>
                                        <option>Texas</option>
                                        <option>New York</option>
                                        <option>Florida</option>
                                        <option>Illinois</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light px-3 py-2">
                        <h6 class="fw-bold mb-0">Address Information</h6>
                    </div>
                    <div class="p-3">
                        <ul class="nav nav-pills schedule-tab mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item me-1" role="presentation">
                                <button
                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto active"
                                    data-bs-toggle="pill" data-bs-target="#schedule-1" type="button" role="tab"
                                    aria-selected="true">Monday</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button
                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                    data-bs-toggle="pill" data-bs-target="#schedule-2" type="button" role="tab"
                                    aria-selected="false" tabindex="-1">Tuesday</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button
                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                    data-bs-toggle="pill" data-bs-target="#schedule-3" type="button" role="tab"
                                    aria-selected="false" tabindex="-1">Wednesday</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button
                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                    data-bs-toggle="pill" data-bs-target="#schedule-4" type="button" role="tab"
                                    aria-selected="false" tabindex="-1">Thursday</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button
                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                    data-bs-toggle="pill" data-bs-target="#schedule-5" type="button" role="tab"
                                    aria-selected="false" tabindex="-1">Friday</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button
                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                    data-bs-toggle="pill" data-bs-target="#schedule-6" type="button" role="tab"
                                    aria-selected="false" tabindex="-1">Saturday</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button
                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                    data-bs-toggle="pill" data-bs-target="#schedule-7" type="button" role="tab"
                                    aria-selected="false" tabindex="-1">Sunday</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="schedule-1" role="tabpanel">
                                <div class="add-schedule-list">
                                    <div class="row gx-3">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Session</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Morning</option>
                                                    <option>Noon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="row align-items-end gx-3">
                                                <div class="col-lg-9">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">From</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">To</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <a href="doctors-list.html#"
                                                            class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="schedule-2" role="tabpanel">
                                <div class="add-schedule-list">
                                    <div class="row gx-3">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Session</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Morning</option>
                                                    <option>Noon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="row align-items-end gx-3">
                                                <div class="col-lg-9">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">From</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">To</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <a href="doctors-list.html#"
                                                            class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="schedule-3" role="tabpanel">
                                <div class="add-schedule-list">
                                    <div class="row gx-3">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Session</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Morning</option>
                                                    <option>Noon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="row align-items-end gx-3">
                                                <div class="col-lg-9">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">From</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">To</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <a href="doctors-list.html#"
                                                            class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="schedule-4" role="tabpanel">
                                <div class="add-schedule-list">
                                    <div class="row gx-3">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Session</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Morning</option>
                                                    <option>Noon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="row align-items-end gx-3">
                                                <div class="col-lg-9">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">From</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">To</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <a href="doctors-list.html#"
                                                            class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="schedule-5" role="tabpanel">
                                <div class="add-schedule-list">
                                    <div class="row gx-3">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Session</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Morning</option>
                                                    <option>Noon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="row align-items-end gx-3">
                                                <div class="col-lg-9">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">From</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">To</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <a href="doctors-list.html#"
                                                            class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="schedule-6" role="tabpanel">
                                <div class="add-schedule-list">
                                    <div class="row gx-3">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Session</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Morning</option>
                                                    <option>Noon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="row align-items-end gx-3">
                                                <div class="col-lg-9">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">From</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">To</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <a href="doctors-list.html#"
                                                            class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="schedule-7" role="tabpanel">
                                <div class="add-schedule-list">
                                    <div class="row gx-3">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Session</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Morning</option>
                                                    <option>Noon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="row align-items-end gx-3">
                                                <div class="col-lg-9">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">From</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">To</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <a href="doctors-list.html#"
                                                            class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="doctors-list.html#" class="btn btn-dark">Apply All</a>
                        </div>
                    </div>
                    <div class="bg-light px-3 py-2">
                        <h6 class="fw-bold mb-0">Appointment Information</h6>
                    </div>
                    <div class="p-3 pb-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Appointment Type</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Online Consultation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Accept bookings (in Advance)</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text bg-transparent text-dark fs-14">Days</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Appointment Duration</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text bg-transparent text-dark fs-14">Mins</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Consultation Charge</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-text bg-transparent text-dark fs-14">$</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Max Bookings Per Slot</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check form-switch mb-3">
                                    <label class="form-check-label" for="switchCheckDefault2">Display on Booking
                                        Page</label>
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="switchCheckDefault2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light px-3 py-2">
                        <h6 class="fw-bold mb-0">Educational Information</h6>
                    </div>
                    <div class="p-3 pb-0">
                        <div class="add-education-list">
                            <div class="row align-items-end">
                                <div class="col-lg-11">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label class="form-label">Educational Degree</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label class="form-label">University</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label class="form-label">From</label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker"
                                                        placeholder="dd/mm/yyyy">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label class="form-label">To</label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker"
                                                        placeholder="dd/mm/yyyy">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="mb-3">
                                        <a href="doctors-list.html#"
                                            class="add-education-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                            <i class="ti ti-plus fs-16"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light px-3 py-2">
                        <h6 class="fw-bold mb-0">Awards & Recognition</h6>
                    </div>
                    <div class="p-3 pb-0">
                        <div class="add-award-list">
                            <div class="row align-items-end">
                                <div class="col-lg-11">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">From</label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker"
                                                        placeholder="dd/mm/yyyy">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="mb-3">
                                        <a href="doctors-list.html#"
                                            class="add-award-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                            <i class="ti ti-plus fs-16"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light px-3 py-2">
                        <h6 class="fw-bold mb-0">Certifications</h6>
                    </div>
                    <div class="p-3 pb-0">
                        <div class="add-certification-list">
                            <div class="row align-items-end">
                                <div class="col-lg-11">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">From</label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker"
                                                        placeholder="dd/mm/yyyy">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="mb-3">
                                        <a href="doctors-list.html#"
                                            class="add-certification-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                            <i class="ti ti-plus fs-16"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="offcanvas-footer mb-1 p-3 border-1 border-top">
                <div class=" d-flex justify-content-end gap-2">
                    <a href="javascript:void(0);" class="btn btn-light btm-md"
                        data-bs-dismiss="offcanvas">Cancel</a>
                    <button class="btn btn-primary btm-md" data-bs-toggle="modal"
                        data-bs-target="#success_modal">Add Doctor</button>
                </div>
            </div>
            <!-- End Add New Appointment-->

        </div>
        <!-- End Add Doctor -->

        <!-- Start Edit Doctor -->
        <div class="offcanvas offcanvas-offset offcanvas-end offcanvas-large" tabindex="-1" id="edit_doctor">
            <div class="offcanvas-header d-block pb-0 px-0">
                <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                    <h5 class="offcanvas-title fs-18 fw-bold">Edit Doctor</h5>
                    <button type="button" class="btn-close custom-btn-close opacity-100"
                        data-bs-dismiss="offcanvas" aria-label="Close"><i
                            class="ti ti-x bg-white fs-16 text-dark"></i></button>
                </div>
            </div>
            <div class="offcanvas-body p-0">
                <form action="doctors-list.html">
                    <div class="bg-light px-3 py-2">
                        <h6 class="fw-bold mb-0">Contact Information</h6>
                    </div>
                    <div class="p-3 pb-0">
                        <!-- start row-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label">Profile Image</label>
                                    <div
                                        class="drag-upload-btn avatar avatar-xxl rounded-circle bg-light text-muted position-relative overflow-hidden z-1 mb-2 ms-4 p-0">
                                        <img src="{{ URL::asset('') }}assets/img/doctors/doctor-01.jpg"
                                            class="position-relative z-n1" alt="">
                                        <input type="file" class="form-control image-sign" multiple="">
                                        <div
                                            class="position-absolute bottom-0 end-0 star-0 w-100 h-25 bg-dark d-flex align-items-center justify-content-center z-n1">
                                            <a href="javascript:void(0);"
                                                class="text-white d-flex align-items-center justify-content-center">
                                                <i class="ti ti-photo fs-14"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="Dr.Mick Thompson">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Username <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="Andrew">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="+1 47895 58974">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="mick@example.com">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col-->

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">DOB <span class="text-danger">*</span></label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker"
                                                    placeholder="dd/mm/yyyy">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Year Of Experience <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="+5 Years">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col-->

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Department<span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Cardiology </option>
                                                <option>Orthopedics</option>
                                                <option>Pediatrics</option>
                                                <option>Gynecology</option>
                                                <option>Psychiatry</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Designation <span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Cardiologist</option>
                                                <option>Orthopedic Surgeon</option>
                                                <option>Pediatrics</option>
                                                <option>Gynecology</option>
                                                <option>Psychiatry</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col-->

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Medical License Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="MGF14578">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Language Spoken</label>
                                            <input class="input-tags form-control" id="inputBox2" type="text"
                                                data-role="tagsinput" name="specialist" value="English,French">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col-->

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Blood Group<span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>O+</option>
                                                <option>O-</option>
                                                <option>A+</option>
                                                <option>A-</option>
                                                <option>B+</option>
                                                <option>B-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Gender <span
                                                    class="text-danger ms-1">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Male</option>
                                                <option>Female</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col-->

                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" rows="3">Dr.Mick Thompson is a compassionate and experienced internal medicine physician with over 5 years of clinical practice.</textarea>
                                </div>
                                <div class="form-check form-switch mb-3">
                                    <label class="form-check-label" for="switchCheckDefault3">Feature On
                                        Website</label>
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="switchCheckDefault3">
                                </div>
                            </div>

                        </div>
                        <!-- end row-->
                    </div>
                    <div class="bg-light px-3 py-2">
                        <h6 class="fw-bold mb-0">Address Information</h6>
                    </div>
                    <div class="p-3 pb-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Address 1</label>
                                    <input type="text" class="form-control" value="2900 Alpha Avenue">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Address 2 </label>
                                    <input type="text" class="form-control" value="2900 Alpha Avenue">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Country</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>United States</option>
                                        <option>India</option>
                                        <option>Canada</option>
                                        <option>Germany</option>
                                        <option>Brazil</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">City</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Los Angeles</option>
                                        <option>San Francisco</option>
                                        <option>San Francisco</option>
                                        <option>San Jose</option>
                                        <option>Fresno</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">State</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>California</option>
                                        <option>Texas</option>
                                        <option>New York</option>
                                        <option>Florida</option>
                                        <option>Illinois</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="text" class="form-control" value="PA 15650">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light px-3 py-2">
                        <h6 class="fw-bold mb-0">Address Information</h6>
                    </div>
                    <div class="p-3">
                        <ul class="nav nav-pills schedule-tab mb-3" id="pills-tab2" role="tablist">
                            <li class="nav-item me-1" role="presentation">
                                <button
                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto active"
                                    data-bs-toggle="pill" data-bs-target="#schedules-1" type="button"
                                    role="tab" aria-selected="true">Monday</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button
                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                    data-bs-toggle="pill" data-bs-target="#schedules-2" type="button"
                                    role="tab" aria-selected="false" tabindex="-1">Tuesday</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button
                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                    data-bs-toggle="pill" data-bs-target="#schedules-3" type="button"
                                    role="tab" aria-selected="false" tabindex="-1">Wednesday</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button
                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                    data-bs-toggle="pill" data-bs-target="#schedules-4" type="button"
                                    role="tab" aria-selected="false" tabindex="-1">Thursday</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button
                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                    data-bs-toggle="pill" data-bs-target="#schedules-5" type="button"
                                    role="tab" aria-selected="false" tabindex="-1">Friday</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button
                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                    data-bs-toggle="pill" data-bs-target="#schedules-6" type="button"
                                    role="tab" aria-selected="false" tabindex="-1">Saturday</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button
                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                    data-bs-toggle="pill" data-bs-target="#schedules-7" type="button"
                                    role="tab" aria-selected="false" tabindex="-1">Sunday</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent2">
                            <div class="tab-pane fade active show" id="schedules-1" role="tabpanel">
                                <div class="add-schedule-list">
                                    <div class="row gx-3">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Session</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>Morning</option>
                                                    <option>Noon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="row align-items-end gx-3">
                                                <div class="col-lg-9">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">From</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">To</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <a href="doctors-list.html#"
                                                            class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="schedules-2" role="tabpanel">
                                <div class="add-schedule-list">
                                    <div class="row gx-3">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Session</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Morning</option>
                                                    <option>Noon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="row align-items-end gx-3">
                                                <div class="col-lg-9">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">From</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">To</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <a href="doctors-list.html#"
                                                            class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="schedules-3" role="tabpanel">
                                <div class="add-schedule-list">
                                    <div class="row gx-3">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Session</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Morning</option>
                                                    <option>Noon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="row align-items-end gx-3">
                                                <div class="col-lg-9">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">From</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">To</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <a href="doctors-list.html#"
                                                            class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="schedules-4" role="tabpanel">
                                <div class="add-schedule-list">
                                    <div class="row gx-3">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Session</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Morning</option>
                                                    <option>Noon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="row align-items-end gx-3">
                                                <div class="col-lg-9">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">From</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">To</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <a href="doctors-list.html#"
                                                            class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="schedules-5" role="tabpanel">
                                <div class="add-schedule-list">
                                    <div class="row gx-3">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Session</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Morning</option>
                                                    <option>Noon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="row align-items-end gx-3">
                                                <div class="col-lg-9">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">From</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">To</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <a href="doctors-list.html#"
                                                            class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="schedules-6" role="tabpanel">
                                <div class="add-schedule-list">
                                    <div class="row gx-3">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Session</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Morning</option>
                                                    <option>Noon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="row align-items-end gx-3">
                                                <div class="col-lg-9">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">From</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">To</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <a href="doctors-list.html#"
                                                            class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="schedules-7" role="tabpanel">
                                <div class="add-schedule-list">
                                    <div class="row gx-3">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Session</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Morning</option>
                                                    <option>Noon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="row align-items-end gx-3">
                                                <div class="col-lg-9">
                                                    <div class="row gx-3">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">From</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">To</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control timepicker"
                                                                        placeholder="03 : 05  AM">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-clock-hour-10"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <a href="doctors-list.html#"
                                                            class="add-schedule-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="doctors-list.html#" class="btn btn-dark">Apply All</a>
                        </div>
                    </div>
                    <div class="bg-light px-3 py-2">
                        <h6 class="fw-bold mb-0">Appointment Information</h6>
                    </div>
                    <div class="p-3 pb-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Appointment Type</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Online Consultation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Accept bookings (in Advance)</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="2">
                                        <span class="input-group-text bg-transparent text-dark fs-14">Days</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Appointment Duration</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="30">
                                        <span class="input-group-text bg-transparent text-dark fs-14">Mins</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Consultation Charge</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="$100">
                                        <span class="input-group-text bg-transparent text-dark fs-14">$</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Max Bookings Per Slot</label>
                                    <input type="text" class="form-control" value="200">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check form-switch mb-3">
                                    <label class="form-check-label" for="switchCheckDefault5">Display on Booking
                                        Page</label>
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="switchCheckDefault5">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light px-3 py-2">
                        <h6 class="fw-bold mb-0">Educational Information</h6>
                    </div>
                    <div class="p-3 pb-0">
                        <div class="add-education-list">
                            <div class="row align-items-end">
                                <div class="col-lg-11">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label class="form-label">Educational Degree</label>
                                                <input type="text" class="form-control" value="M.B.B.S">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label class="form-label">University</label>
                                                <input type="text" class="form-control"
                                                    value="Harvard Medical School">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label class="form-label">From</label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker"
                                                        placeholder="dd/mm/yyyy">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label class="form-label">To</label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker"
                                                        placeholder="dd/mm/yyyy">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="mb-3">
                                        <a href="doctors-list.html#"
                                            class="add-education-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                            <i class="ti ti-plus fs-16"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light px-3 py-2">
                        <h6 class="fw-bold mb-0">Awards & Recognition</h6>
                    </div>
                    <div class="p-3 pb-0">
                        <div class="add-award-list">
                            <div class="row align-items-end">
                                <div class="col-lg-11">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control"
                                                    value="Harvard Medical School">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">From</label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker"
                                                        placeholder="dd/mm/yyyy">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="mb-3">
                                        <a href="doctors-list.html#"
                                            class="add-award-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                            <i class="ti ti-plus fs-16"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light px-3 py-2">
                        <h6 class="fw-bold mb-0">Certifications</h6>
                    </div>
                    <div class="p-3 pb-0">
                        <div class="add-certification-list">
                            <div class="row align-items-end">
                                <div class="col-lg-11">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control"
                                                    value="Harvard Medical School">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">From</label>
                                                <div class="input-icon-end position-relative">
                                                    <input type="text" class="form-control datetimepicker"
                                                        placeholder="dd/mm/yyyy">
                                                    <span class="input-icon-addon">
                                                        <i class="ti ti-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="mb-3">
                                        <a href="doctors-list.html#"
                                            class="add-certification-btn p-2 bg-light btn-icon text-dark rounded d-flex align-items-center justify-content-center">
                                            <i class="ti ti-plus fs-16"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="offcanvas-footer mb-1 p-3 border-1 border-top">
                <div class=" d-flex justify-content-end gap-2">
                    <a href="javascript:void(0);" class="btn btn-light btm-md"
                        data-bs-dismiss="offcanvas">Cancel</a>
                    <button class="btn btn-primary btm-md">Save Changes</button>
                </div>
            </div>
            <!-- End Add New Appointment-->

        </div>
        <!-- End Edit Doctor -->

        <!-- Start Delete Modal  -->
        <div class="modal fade" id="delete_modal">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-body text-center position-relative z-1">
                        <img src="{{ URL::asset('') }}assets/img/bg/delete-modal-bg-01.png" alt=""
                            class="img-fluid position-absolute top-0 start-0 z-n1">
                        <img src="{{ URL::asset('') }}assets/img/bg/delete-modal-bg-02.png" alt=""
                            class="img-fluid position-absolute bottom-0 end-0 z-n1">
                        <div class="mb-3">
                            <span class="avatar avatar-lg bg-danger text-white"><i
                                    class="ti ti-trash fs-24"></i></span>
                        </div>
                        <h5 class="fw-bold mb-1">Delete Confirmation</h5>
                        <p class="mb-3">Are you sure want to delete?</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3"
                                data-bs-dismiss="modal">Cancel</a>
                            <a href="doctors-list.html" class="btn btn-danger position-relative z-1">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Modal  -->

        <!-- Start Delete Modal  -->
        <div class="modal fade" id="success_modal">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-body text-center position-relative z-1">
                        <div class="mb-3">
                            <span class="avatar avatar-lg bg-success text-white"><i
                                    class="ti ti-check fs-24"></i></span>
                        </div>
                        <h5 class="fw-bold mb-1">Added Successfully</h5>
                        <p class="mb-3">Doctor has been added to your List</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3"
                                data-bs-dismiss="modal">Cancel</a>
                            <a href="doctor-details.html" class="btn btn-primary position-relative z-1">View
                                Details</a>
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type=""></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="c4feeb2fde1d26bd35c7d650-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="c4feeb2fde1d26bd35c7d650-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="c4feeb2fde1d26bd35c7d650-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="c4feeb2fde1d26bd35c7d650-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="c4feeb2fde1d26bd35c7d650-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="c4feeb2fde1d26bd35c7d650-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="c4feeb2fde1d26bd35c7d650-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="c4feeb2fde1d26bd35c7d650-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/doctors.js" type="c4feeb2fde1d26bd35c7d650-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="c4feeb2fde1d26bd35c7d650-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="c4feeb2fde1d26bd35c7d650-|49" defer>
    </script>
</body>

</html>
