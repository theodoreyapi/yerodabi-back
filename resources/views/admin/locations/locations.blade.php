<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Locations - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Font Awosome Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

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
                <div
                    class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 pb-3 mb-3 border-1 border-bottom">
                    <div class="flex-grow-1">
                        <h4 class="fw-bold mb-0"> Locations <span
                                class="badge badge-soft-primary fw-medium border py-1 px-2 border-primary fs-13 ms-1">Total
                                Location : 565</span> </h4>
                    </div>
                    <div class="text-end d-flex">
                        <a href="javascript:void(0);" class="btn btn-primary fs-13 btn-md" data-bs-toggle="modal"
                            data-bs-target="#add_modal"><i class="ti ti-plus me-1"></i>Nouvelle Location</a>
                    </div>
                </div>
                <!-- End Page Header -->

                <!--  Start Table -->
                <div class="table-responsive">
                    <table class="table table-nowrap border">
                        <thead class="thead-light">
                            <tr>
                                <th>Clinic Name</th>
                                <th>Address</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-md me-2">
                                            <img src="{{ URL::asset('') }}assets/img/icons/clinic-08.svg" alt="img"
                                                class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="text-dark fw-semibold">Harmony Health
                                            Clinic</a>
                                        <span
                                            class="badge badge-soft-success border border-success fw-medium ms-2">Default</span>
                                    </div>
                                </td>
                                <td>California</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_modal">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-md me-2">
                                            <img src="{{ URL::asset('') }}assets/img/icons/clinic-07.svg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="text-dark fw-semibold">WellCare Medical
                                            Center</a>
                                    </div>
                                </td>
                                <td>Texas</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_modal">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-md me-2">
                                            <img src="{{ URL::asset('') }}assets/img/icons/clinic-06.svg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="text-dark fw-semibold">VitalLife
                                            Clinic</a>
                                    </div>
                                </td>
                                <td>Florida</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_modal">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-md me-2">
                                            <img src="{{ URL::asset('') }}assets/img/icons/clinic-05.svg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="text-dark fw-semibold">BrightPath Family
                                            Clinic</a>
                                    </div>
                                </td>
                                <td>New York</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_modal">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-md me-2">
                                            <img src="{{ URL::asset('') }}assets/img/icons/clinic-04.svg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="text-dark fw-semibold">Greeny Medical
                                            Clinic</a>
                                    </div>
                                </td>
                                <td>Illinois</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_modal">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-md me-2">
                                            <img src="{{ URL::asset('') }}assets/img/icons/clinic-01.svg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="text-dark fw-semibold">CureWell Medical
                                            Hub</a>
                                    </div>
                                </td>
                                <td>Ohio</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_modal">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-md me-2">
                                            <img src="{{ URL::asset('') }}assets/img/icons/clinic-03.svg"
                                                alt="img" class="rounded-circle">
                                        </a>
                                        <a href="javascript:void(0);" class="text-dark fw-semibold">NovaCare
                                            Medical</a>
                                    </div>
                                </td>
                                <td>Washington</td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu p-2">
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#edit_modal">Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal">Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--  End Table -->

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- Start Add modal -->
    <div class="modal fade" id="add_modal">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark fw-bold">New Location</h5>
                    <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body pb-0">

                    <!-- start row -->
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="mb-3 d-flex align-items-center">
                                <label class="form-label mb-0">Image</label>
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
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1">Name<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1">Location Type<span
                                        class="text-danger ms-1">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>In Person</option>
                                    <option>Video Consultation</option>
                                    <option>Both</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1">Email Address<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="email" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1">Phone Number<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="tel" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1">Address 1<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1">Address 2<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1">Country<span class="text-danger ms-1">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>UK</option>
                                    <option>Germany</option>
                                    <option>France</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1">State<span class="text-danger ms-1">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>California</option>
                                    <option>Ontario</option>
                                    <option>Bavaria</option>
                                    <option>Wellington</option>
                                    <option>Le-de-France</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1">City<span class="text-danger ms-1">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Los Angeles</option>
                                    <option>Toronto</option>
                                    <option>London</option>
                                    <option>Munich</option>
                                    <option>Sydney</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1">Pincode<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                    </div>
                    <!-- end row -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm me-2 fs-13 fw-medium"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm fs-13 fw-medium">Add New Location</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add modal  -->

    <!-- Start edit modal -->
    <div class="modal fade" id="edit_modal">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark fw-bold">Edit Location</h5>
                    <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body pb-0">

                    <!-- start row -->
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="mb-3 d-flex align-items-center">
                                <label class="form-label mb-0">Image</label>
                                <div
                                    class="drag-upload-btn avatar avatar-xxl rounded-circle bg-light text-muted position-relative overflow-hidden z-1 mb-2 ms-4 p-0">
                                    <img src="{{ URL::asset('') }}assets/img/icons/clinic-08.svg"
                                        class="position-relative z-n1" alt="img">
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
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1">Name<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control" value="James Carter">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1">Location Type<span
                                        class="text-danger ms-1">*</span></label>
                                <select class="select">
                                    <option>In Person</option>
                                    <option>Video Consultation</option>
                                    <option>Both</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1">Email Address<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="email" class="form-control" value="james@example.com">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1">Phone Number<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="tel" class="form-control" value="+1 43554 54584">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1">Address 1<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control" value="123 Main Street">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label mb-1">Address 2<span
                                        class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control" value=" Apartment 4B">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1">Country<span class="text-danger ms-1">*</span></label>
                                <select class="select">
                                    <option>USA</option>
                                    <option>Canada</option>
                                    <option>UK</option>
                                    <option>Germany</option>
                                    <option>France</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1">State<span class="text-danger ms-1">*</span></label>
                                <select class="select">
                                    <option>California</option>
                                    <option>Ontario</option>
                                    <option>Bavaria</option>
                                    <option>Wellington</option>
                                    <option>Le-de-France</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1">City<span class="text-danger ms-1">*</span></label>
                                <select class="select">
                                    <option>Los Angeles</option>
                                    <option>Toronto</option>
                                    <option>London</option>
                                    <option>Munich</option>
                                    <option>Sydney</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label mb-1">Pincode<span class="text-danger ms-1">*</span></label>
                                <input type="text" class="form-control" value="90001">
                            </div>
                        </div>

                    </div>
                    <!-- end row -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm me-2 fs-13 fw-medium"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm fs-13 fw-medium">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End edit modal  -->

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
                        <span class="avatar avatar-lg bg-danger text-white"><i class="ti ti-trash fs-24"></i></span>
                    </div>
                    <h5 class="fw-bold mb-1 position-relative z-1">Delete Confirmation</h5>
                    <p class="mb-3 position-relative z-1">Are you sure want to delete?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3"
                            data-bs-dismiss="modal">Cancel</a>
                        <a href="locations.html" class="btn btn-danger position-relative z-1"
                            data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->


    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="935d58bb536cdec78eab7eaa-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="935d58bb536cdec78eab7eaa-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="935d58bb536cdec78eab7eaa-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="935d58bb536cdec78eab7eaa-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="935d58bb536cdec78eab7eaa-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="935d58bb536cdec78eab7eaa-|49" defer>
    </script>
</body>

</html>
