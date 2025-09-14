<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctor Details - Yerodabi</title>
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

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

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
            <div class="content pb-0">

                <!-- Start Page Header -->
                <div class="mb-3">
                    <h6 class="fw-semibold fs-14 mb-0"><a href="{{ url('doctors') }}"><i
                                class="ti ti-chevron-left me-1"></i>Détails Médecin</a></h6>
                </div>
                <!-- End Page Header -->

                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                        <div class="d-flex align-items-center flex-sm-nowrap flex-wrap row-gap-3">
                            <div class="me-3 doctor-profile-img"><a href="doctor-details.html"><img
                                        src="{{ URL::asset('') }}assets/img/doctors/doctor-06.jpg" class="rounded"
                                        alt=""></a></div>
                            <div class="flex-fill">
                                <div class="d-flex align-items-center mb-1">
                                    <h6 class="mb-0 fw-semibold">Dr. John Smith</h6>
                                    <span class="badge border bg-white text-dark fw-medium ms-2"><i
                                            class="ti ti-point-filled me-1 text-info"></i>Cardiology</span>
                                </div>
                                <span class="d-block mb-3 fs-13">MBBS, M.D, Cardiology</span>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 fs-13"><i class="ti ti-building-hospital me-1"></i>Clinic : Downtown
                                        Medical Clinic</p>
                                    <span class="badge badge-soft-success fw-medium ms-2"><i
                                            class="ti ti-point-filled me-1 text-success"></i>Available</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="mb-2">Frais de consultation</p>
                            <h6 class="fs-18 fw-bold mb-3">$499 <span class="fw-normal text-body fs-14"> / 30 Min</span>
                            </h6>
                            <a href="appointment-calendar.html" class="btn btn-primary"><i
                                    class="ti ti-calendar-event me-1"></i>Prendre rendez-vous</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3">Disponibilité</h5>
                                    <ul class="nav nav-tabs nav-bordered nav-border-bottom mb-3">
                                        <li class="nav-item flex-fill"><a
                                                class="nav-link text-center active fw-semibold"
                                                href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#available-tab-1">Monday</a></li>
                                        <li class="nav-item flex-fill"><a class="nav-link text-center fw-semibold"
                                                href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#available-tab-2">Tuesday</a></li>
                                        <li class="nav-item flex-fill"><a class="nav-link text-center fw-semibold"
                                                href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#available-tab-3">Wednesday</a></li>
                                        <li class="nav-item flex-fill"><a class="nav-link text-center fw-semibold"
                                                href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#available-tab-4">Thursday</a></li>
                                        <li class="nav-item flex-fill"><a class="nav-link text-center fw-semibold"
                                                href="javascript:void(0);" data-bs-toggle="tab"
                                                data-bs-target="#available-tab-5">Friday</a></li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade active show" id="available-tab-1" role="tabpanel">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">11:30
                                                    AM - 12:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">12:30
                                                    PM - 01:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">02:30
                                                    PM - 03:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">04:30
                                                    PM - 05:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">06:00
                                                    PM - 07:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">07:00
                                                    PM - 08:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">09:00
                                                    PM - 11:00 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">11:00
                                                    PM - 11:30 PM</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="available-tab-2" role="tabpanel">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">11:30
                                                    AM - 12:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">12:30
                                                    PM - 01:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">02:30
                                                    PM - 03:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">04:30
                                                    PM - 05:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">06:00
                                                    PM - 07:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">07:00
                                                    PM - 08:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">09:00
                                                    PM - 11:00 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">11:00
                                                    PM - 11:30 PM</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="available-tab-3" role="tabpanel">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">11:30
                                                    AM - 12:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">12:30
                                                    PM - 01:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">02:30
                                                    PM - 03:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">04:30
                                                    PM - 05:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">06:00
                                                    PM - 07:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">07:00
                                                    PM - 08:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">09:00
                                                    PM - 11:00 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">11:00
                                                    PM - 11:30 PM</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="available-tab-4" role="tabpanel">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">11:30
                                                    AM - 12:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">12:30
                                                    PM - 01:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">02:30
                                                    PM - 03:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">04:30
                                                    PM - 05:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">06:00
                                                    PM - 07:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">07:00
                                                    PM - 08:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">09:00
                                                    PM - 11:00 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">11:00
                                                    PM - 11:30 PM</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="available-tab-5" role="tabpanel">
                                            <div class="d-flex align-items-center flex-wrap gap-2">
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">11:30
                                                    AM - 12:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">12:30
                                                    PM - 01:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">02:30
                                                    PM - 03:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">04:30
                                                    PM - 05:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">06:00
                                                    PM - 07:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">07:00
                                                    PM - 08:30 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">09:00
                                                    PM - 11:00 PM</a>
                                                <a href="doctor-details.html#"
                                                    class="d-inline-flex align-items-center bg-light rounded flex-fill text-center justify-content-center p-1 text-body">11:00
                                                    PM - 11:30 PM</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3">Courte biographie</h5>
                                    <p>Dr. John Smith has been practicing family medicine for over 10 years. She has
                                        extensive experience in managing chronic illnesses, preventive care, and
                                        treating a wide range of medical conditions for patients of all ages.</p>
                                    <div>
                                        <div class="more-menu">
                                            <p>Dr. Smith is dedicated to providing patient-centered care and emphasizes
                                                building long-term relationships with her patients.</p>
                                        </div>
                                        <div class="view-all mt-2">
                                            <a href="javascript:void(0);"
                                                class="viewall-button text-primary fw-medium"><span>See More</span><i
                                                    class="ti ti-chevron-down fs-10 ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3">Informations sur l'éducation</h5>
                                    <ul class="activity-feed rounded">
                                        <li class="feed-item timeline-item">
                                            <h6 class="fw-bold mb-2">Boston Medicine Institutuion - MD</h6>
                                            <p>25 May 1990 - 29 Jan 1992</p>
                                        </li>
                                        <li class="feed-item timeline-item">
                                            <h6 class="fw-bold mb-2">Harvard Medical School, Boston - MBBS</h6>
                                            <p>25 May 1985 - 29 Jan 1990</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3">Prix & reconnaissance</h5>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="me-2"><i class="ti ti-award"></i></span>
                                            <h6 class="mb-0 fw-bold">Top Doctor Award (2023)</h6>
                                        </div>
                                        <p>Recognized by U.S. News & World Report for outstanding achievements in family
                                            medicine.</p>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="me-2"><i class="ti ti-award"></i></span>
                                            <h6 class="mb-0 fw-bold">Patient Choice Award (2022)</h6>
                                        </div>
                                        <p>Awarded by Vitals.com for consistently receiving high patient ratings in
                                            satisfaction and care.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3">Certifications</h5>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="me-2"><i class="ti ti-award"></i></span>
                                            <h6 class="mb-0 fw-bold">Certification by the American Board of Family
                                                Medicine (ABFM), 2015</h6>
                                        </div>
                                        <p>Demonstrates mastery of comprehensive, ongoing care for individuals and
                                            families, across all ages and genders.</p>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="me-2"><i class="ti ti-award"></i></span>
                                            <h6 class="mb-0 fw-bold">American Heart Association, 2024</h6>
                                        </div>
                                        <p>Certification in performing life-saving techniques, including CPR and
                                            emergency cardiac care for adults and children.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 theiaStickySidebar">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="fw-bold mb-3">À propos</h6>
                                <div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="avatar rounded-circle bg-light text-dark fs-16 flex-shrink-0 me-2"><i
                                                class="ti ti-file text-body"></i></span>
                                        <div>
                                            <h6 class="fw-semibold fs-13 mb-1">Numéro de licence médicale</h6>
                                            <p>ML566659898</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="avatar rounded-circle bg-light text-dark fs-16 flex-shrink-0 me-2"><i
                                                class="ti ti-phone text-body"></i></span>
                                        <div>
                                            <h6 class="fw-semibold fs-13 mb-1">Numéro de téléphone</h6>
                                            <p>+1 54546 45648</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="avatar rounded-circle bg-light text-dark fs-16 flex-shrink-0 me-2"><i
                                                class="ti ti-mail text-body"></i></span>
                                        <div>
                                            <h6 class="fw-semibold fs-13 mb-1">Adresse email</h6>
                                            <p><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="5e343136301e3b263f332e323b703d3133">[email&#160;protected]</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="avatar rounded-circle bg-light text-dark fs-16 flex-shrink-0 me-2"><i
                                                class="ti ti-map-pin-check text-body"></i></span>
                                        <div>
                                            <h6 class="fw-semibold fs-13 mb-1">Emplacement</h6>
                                            <p>4150 Hiney Road, Las Vegas, NV 89109</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="avatar rounded-circle bg-light text-dark fs-16 flex-shrink-0 me-2"><i
                                                class="ti ti-calendar-event text-body"></i></span>
                                        <div>
                                            <h6 class="fw-semibold fs-13 mb-1">Date de naissance</h6>
                                            <p>25 Jan 1990</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="avatar rounded-circle bg-light text-dark fs-16 flex-shrink-0 me-2"><i
                                                class="ti ti-droplet text-body"></i></span>
                                        <div>
                                            <h6 class="fw-semibold fs-13 mb-1">Groupe sanguin</h6>
                                            <p>O +ve</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="avatar rounded-circle bg-light text-dark fs-16 flex-shrink-0 me-2"><i
                                                class="ti ti-user-check text-body"></i></span>
                                        <div>
                                            <h6 class="fw-semibold fs-13 mb-1">Année d'expérience</h6>
                                            <p>15+ Years</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span
                                            class="avatar rounded-circle bg-light text-dark fs-16 flex-shrink-0 me-2"><i
                                                class="ti ti-gender-male"></i></span>
                                        <div>
                                            <h6 class="fw-semibold fs-13 mb-1">Genre</h6>
                                            <p>Masculin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script data-cfasync="false" src="{{ URL::asset('') }}assets/email-decode.min.js"></script>
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="8e29ee28627475b70a52e50c-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="8e29ee28627475b70a52e50c-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="8e29ee28627475b70a52e50c-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="8e29ee28627475b70a52e50c-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="8e29ee28627475b70a52e50c-text/javascript"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="8e29ee28627475b70a52e50c-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="8e29ee28627475b70a52e50c-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="8e29ee28627475b70a52e50c-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/social-feed.js" type="8e29ee28627475b70a52e50c-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/email.js" type="8e29ee28627475b70a52e50c-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="8e29ee28627475b70a52e50c-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="8e29ee28627475b70a52e50c-|49" defer>
    </script>
</body>

</html>
