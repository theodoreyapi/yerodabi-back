<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Doctors - Yerodabi</title>
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

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

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
            <div class="content">

                @include('admin.layouts.status')

                <div class="row">
                    <div class="col-lg-10 mx-auto">

                        <!-- Start Page Header -->
                        <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 mb-3">
                            <div class="flex-grow-1">
                                <h6 class="fw-bold mb-0 d-flex align-items-center"><a href="{{ url('doctors') }}"><i
                                            class="ti ti-chevron-left me-1 fs-14"></i>Médecin</a></h6>
                            </div>
                        </div>
                        <!-- End Page Header -->

                        <!-- Start Add Doctor -->
                        <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card mb-0">
                                <!-- <div class="card-header">

                            </div> -->
                                <div class="card-body">
                                    <div
                                        class="border-bottom d-flex align-items-center justify-content-between pb-3 mb-3">
                                        <h5 class="offcanvas-title fs-18 fw-bold">Nouveau docteur</h5>
                                    </div>
                                        {{--   <div class="px-3 py-2 mb-3 feild-head">
                                            <h6 class="fw-bold mb-0">Coordonnées</h6>
                                        </div> --}}
                                        <div class="pb-0">
                                            <!-- start row-->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3 d-flex align-items-center">
                                                        <label class="form-label">Photo</label>
                                                        <input type="file" class="form-control" name="photo">
                                                    </div>
                                                </div> <!-- end col-->

                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Nom <span
                                                                        class="text-danger">*</span></label>
                                                                <input name="nom" required type="text"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Prénom <span
                                                                        class="text-danger">*</span></label>
                                                                <input name="prenom" required type="text"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Numéro de téléphone <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="tel" name="telephone" required
                                                                    class="form-control" placeholder="+2250585831647">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Adresse e-mail <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="email" name="email" required
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Nationnalité <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" name="nationnalite" required
                                                                    class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Taille</label>
                                                                <input type="text" name="taille"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Poids</label>
                                                                <input type="text" name="poids"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Mot de passe <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="password" required name="password"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-->

                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Date de naissance <span
                                                                        class="text-danger">*</span></label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text" name="date" required
                                                                        class="form-control datetimepicker"
                                                                        placeholder="dd/mm/yyyy">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Année d'expérience <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="number" name="annee_experience" required
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Spécialisation <span
                                                                        class="text-danger ms-1">*</span></label>
                                                                <select class="select" required name="specialisation">
                                                                    <option value="">Sélectionne</option>
                                                                    @foreach ($specialisations as $specialisation)
                                                                        <option
                                                                            value="{{ $specialisation->id_specialisation }}">
                                                                            {{ $specialisation->nom_specialisation }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Lieu d'habitation <span
                                                                        class="text-danger">*</span></label>
                                                                <input name="lieu" required type="text"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Numéro de licence médicale
                                                                    <span class="text-danger">*</span></label>
                                                                <input type="text" name="licence" required
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Langue parlée</label>
                                                                <input class="input-tags form-control" id="inputBox"
                                                                    type="text" data-role="tagsinput"
                                                                    name="langue" placeholder="Anglais, Français">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Groupe sanguin<span
                                                                        class="text-danger ms-1">*</span></label>
                                                                <select name="sanguin" class="select">
                                                                    <option value="">Select</option>
                                                                    <option value="O+">O+</option>
                                                                    <option value="O-">O-</option>
                                                                    <option value="A+">A+</option>
                                                                    <option value="A-">A-</option>
                                                                    <option value="B+">B+</option>
                                                                    <option value="B-">B-</option>
                                                                    <option value="AB+">AB+</option>
                                                                    <option value="AB-">AB-</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Genre <span
                                                                        class="text-danger ms-1">*</span></label>
                                                                <select class="select" name="genre" required>
                                                                    <option value="">Select</option>
                                                                    <option value="Homme">Homme</option>
                                                                    <option value="Femme">Femme</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-->

                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Biographie</label>
                                                        <textarea name="biographie" class="form-control" rows="3"
                                                            placeholder="Une petite description sur le docteur..."></textarea>
                                                    </div>
                                                    {{-- <div class="form-check form-switch mb-3">
                                                    <label class="form-check-label" for="switchCheckDefault">Feature
                                                        On Website</label>
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="switchCheckDefault">
                                                </div> --}}
                                                </div>

                                            </div>
                                            <!-- end row-->
                                        </div>
                                        {{--  <div class="px-3 py-2 mb-3 feild-head">
                                        <h6 class="fw-bold mb-0">Informations sur l'adresse</h6>
                                    </div>
                                    <div class="pb-0">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Adresse 1</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Adresse 2 </label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Pays</label>
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
                                                    <label class="form-label">Ville</label>
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
                                                    <label class="form-label">État</label>
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
                                                    <label class="form-label">Code PIN</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 py-2 mb-3 feild-head">
                                        <h6 class="fw-bold mb-0">Informations sur l'adresse</h6>
                                    </div>
                                    <div class="p-3">
                                        <ul class="nav nav-pills schedule-tab mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item me-1" role="presentation">
                                                <button
                                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto active"
                                                    data-bs-toggle="pill" data-bs-target="#schedule-1" type="button"
                                                    role="tab" aria-selected="true">Lundi</button>
                                            </li>
                                            <li class="nav-item me-1" role="presentation">
                                                <button
                                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                                    data-bs-toggle="pill" data-bs-target="#schedule-2" type="button"
                                                    role="tab" aria-selected="false"
                                                    tabindex="-1">Mardi</button>
                                            </li>
                                            <li class="nav-item me-1" role="presentation">
                                                <button
                                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                                    data-bs-toggle="pill" data-bs-target="#schedule-3" type="button"
                                                    role="tab" aria-selected="false"
                                                    tabindex="-1">Mercredi</button>
                                            </li>
                                            <li class="nav-item me-1" role="presentation">
                                                <button
                                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                                    data-bs-toggle="pill" data-bs-target="#schedule-4" type="button"
                                                    role="tab" aria-selected="false"
                                                    tabindex="-1">Jeudi</button>
                                            </li>
                                            <li class="nav-item me-1" role="presentation">
                                                <button
                                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                                    data-bs-toggle="pill" data-bs-target="#schedule-5" type="button"
                                                    role="tab" aria-selected="false"
                                                    tabindex="-1">Vendredi</button>
                                            </li>
                                            <li class="nav-item me-1" role="presentation">
                                                <button
                                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                                    data-bs-toggle="pill" data-bs-target="#schedule-6" type="button"
                                                    role="tab" aria-selected="false"
                                                    tabindex="-1">Samedi</button>
                                            </li>
                                            <li class="nav-item me-1" role="presentation">
                                                <button
                                                    class="nav-link btn btn-sm btn-icon p-2 d-flex align-items-center justify-content-center w-auto"
                                                    data-bs-toggle="pill" data-bs-target="#schedule-7" type="button"
                                                    role="tab" aria-selected="false"
                                                    tabindex="-1">Dimanche</button>
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
                                                                                <label class="form-label">De</label>
                                                                                <div
                                                                                    class="input-icon-end position-relative">
                                                                                    <input type="text"
                                                                                        class="form-control timepicker"
                                                                                        placeholder="03 : 05  AM">
                                                                                    <span class="input-icon-addon">
                                                                                        <i
                                                                                            class="ti ti-clock-hour-10"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">À</label>
                                                                                <div
                                                                                    class="input-icon-end position-relative">
                                                                                    <input type="text"
                                                                                        class="form-control timepicker"
                                                                                        placeholder="03 : 05  AM">
                                                                                    <span class="input-icon-addon">
                                                                                        <i
                                                                                            class="ti ti-clock-hour-10"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-3">
                                                                        <a href="add-doctor.html#"
                                                                            class="add-schedule-btn p-2 bg-light btn-icon text-body rounded d-flex align-items-center justify-content-center">
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
                                                                                <label class="form-label">De</label>
                                                                                <div
                                                                                    class="input-icon-end position-relative">
                                                                                    <input type="text"
                                                                                        class="form-control timepicker"
                                                                                        placeholder="03 : 05  AM">
                                                                                    <span class="input-icon-addon">
                                                                                        <i
                                                                                            class="ti ti-clock-hour-10"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">À</label>
                                                                                <div
                                                                                    class="input-icon-end position-relative">
                                                                                    <input type="text"
                                                                                        class="form-control timepicker"
                                                                                        placeholder="03 : 05  AM">
                                                                                    <span class="input-icon-addon">
                                                                                        <i
                                                                                            class="ti ti-clock-hour-10"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-3">
                                                                        <a href="add-doctor.html#"
                                                                            class="add-schedule-btn p-2 bg-light btn-icon text-body rounded d-flex align-items-center justify-content-center">
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
                                                                                <label class="form-label">De</label>
                                                                                <div
                                                                                    class="input-icon-end position-relative">
                                                                                    <input type="text"
                                                                                        class="form-control timepicker"
                                                                                        placeholder="03 : 05  AM">
                                                                                    <span class="input-icon-addon">
                                                                                        <i
                                                                                            class="ti ti-clock-hour-10"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">À</label>
                                                                                <div
                                                                                    class="input-icon-end position-relative">
                                                                                    <input type="text"
                                                                                        class="form-control timepicker"
                                                                                        placeholder="03 : 05  AM">
                                                                                    <span class="input-icon-addon">
                                                                                        <i
                                                                                            class="ti ti-clock-hour-10"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-3">
                                                                        <a href="add-doctor.html#"
                                                                            class="add-schedule-btn p-2 bg-light btn-icon text-body rounded d-flex align-items-center justify-content-center">
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
                                                                                <label class="form-label">De</label>
                                                                                <div
                                                                                    class="input-icon-end position-relative">
                                                                                    <input type="text"
                                                                                        class="form-control timepicker"
                                                                                        placeholder="03 : 05  AM">
                                                                                    <span class="input-icon-addon">
                                                                                        <i
                                                                                            class="ti ti-clock-hour-10"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">À</label>
                                                                                <div
                                                                                    class="input-icon-end position-relative">
                                                                                    <input type="text"
                                                                                        class="form-control timepicker"
                                                                                        placeholder="03 : 05  AM">
                                                                                    <span class="input-icon-addon">
                                                                                        <i
                                                                                            class="ti ti-clock-hour-10"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-3">
                                                                        <a href="add-doctor.html#"
                                                                            class="add-schedule-btn p-2 bg-light btn-icon text-body rounded d-flex align-items-center justify-content-center">
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
                                                                                <label class="form-label">De</label>
                                                                                <div
                                                                                    class="input-icon-end position-relative">
                                                                                    <input type="text"
                                                                                        class="form-control timepicker"
                                                                                        placeholder="03 : 05  AM">
                                                                                    <span class="input-icon-addon">
                                                                                        <i
                                                                                            class="ti ti-clock-hour-10"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">À</label>
                                                                                <div
                                                                                    class="input-icon-end position-relative">
                                                                                    <input type="text"
                                                                                        class="form-control timepicker"
                                                                                        placeholder="03 : 05  AM">
                                                                                    <span class="input-icon-addon">
                                                                                        <i
                                                                                            class="ti ti-clock-hour-10"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-3">
                                                                        <a href="add-doctor.html#"
                                                                            class="add-schedule-btn p-2 bg-light btn-icon text-body rounded d-flex align-items-center justify-content-center">
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
                                                                                <label class="form-label">De</label>
                                                                                <div
                                                                                    class="input-icon-end position-relative">
                                                                                    <input type="text"
                                                                                        class="form-control timepicker"
                                                                                        placeholder="03 : 05  AM">
                                                                                    <span class="input-icon-addon">
                                                                                        <i
                                                                                            class="ti ti-clock-hour-10"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">À</label>
                                                                                <div
                                                                                    class="input-icon-end position-relative">
                                                                                    <input type="text"
                                                                                        class="form-control timepicker"
                                                                                        placeholder="03 : 05  AM">
                                                                                    <span class="input-icon-addon">
                                                                                        <i
                                                                                            class="ti ti-clock-hour-10"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-3">
                                                                        <a href="add-doctor.html#"
                                                                            class="add-schedule-btn p-2 bg-light btn-icon text-body rounded d-flex align-items-center justify-content-center">
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
                                                                                <label class="form-label">De</label>
                                                                                <div
                                                                                    class="input-icon-end position-relative">
                                                                                    <input type="text"
                                                                                        class="form-control timepicker"
                                                                                        placeholder="03 : 05  AM">
                                                                                    <span class="input-icon-addon">
                                                                                        <i
                                                                                            class="ti ti-clock-hour-10"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">À</label>
                                                                                <div
                                                                                    class="input-icon-end position-relative">
                                                                                    <input type="text"
                                                                                        class="form-control timepicker"
                                                                                        placeholder="03 : 05  AM">
                                                                                    <span class="input-icon-addon">
                                                                                        <i
                                                                                            class="ti ti-clock-hour-10"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-3">
                                                                        <a href="add-doctor.html#"
                                                                            class="add-schedule-btn p-2 bg-light btn-icon text-body rounded d-flex align-items-center justify-content-center">
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
                                        <div class="mb-3">
                                            <a href="add-doctor.html#" class="btn btn-dark">Appliquer À tous</a>
                                        </div>
                                    </div>
                                    <div class="px-3 py-2 mb-3 feild-head">
                                        <h6 class="fw-bold mb-0">Informations sur les rendez-vous</h6>
                                    </div>
                                    <div class="pb-0">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Type de rendez-vous</label>
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option>Online Consultation</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6"></div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Accepter les réservations (à
                                                        l'avance)</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <span
                                                            class="input-group-text bg-transparent text-dark fs-14">Jours</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Durée du rendez-vous</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <span
                                                            class="input-group-text bg-transparent text-dark fs-14">Minutes</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Frais de consultation</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <span
                                                            class="input-group-text bg-transparent text-dark fs-14">$</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Réservations maximales par
                                                        créneau</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check form-switch mb-3">
                                                    <label class="form-check-label"
                                                        for="switchCheckDefault2">Affichage sur la page de
                                                        réservation</label>
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="switchCheckDefault2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 py-2 mb-3 feild-head">
                                        <h6 class="fw-bold mb-0">Informations pédagogiques</h6>
                                    </div>
                                    <div class="pb-0">
                                        <div class="add-education-list">
                                            <div class="row align-items-end">
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <div class="mb-3">
                                                                <label class="form-label">Diplôme d'études</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mb-3">
                                                                <label class="form-label">Université</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mb-3">
                                                                <label class="form-label">De</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control datetimepicker"
                                                                        placeholder="dd/mm/yyyy">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mb-3">
                                                                <label class="form-label">À</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control datetimepicker"
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
                                                        <a href="add-doctor.html#"
                                                            class="add-education-btn p-2 bg-light btn-icon text-body rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 py-2 mb-3 feild-head">
                                        <h6 class="fw-bold mb-0">Prix & reconnaissance</h6>
                                    </div>
                                    <div class="pb-0">
                                        <div class="add-award-list">
                                            <div class="row align-items-end">
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Nom</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">De</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control datetimepicker"
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
                                                        <a href="add-doctor.html#"
                                                            class="add-award-btn p-2 bg-light btn-icon text-body rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 py-2 mb-3 feild-head">
                                        <h6 class="fw-bold mb-0">Certifications</h6>
                                    </div>
                                    <div class="pb-3 mb-3 border-bottom">
                                        <div class="add-certification-list">
                                            <div class="row align-items-end">
                                                <div class="col-lg-11">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Nom</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">De</label>
                                                                <div class="input-icon-end position-relative">
                                                                    <input type="text"
                                                                        class="form-control datetimepicker"
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
                                                        <a href="add-doctor.html#"
                                                            class="add-certification-btn p-2 bg-light btn-icon text-body rounded d-flex align-items-center justify-content-center">
                                                            <i class="ti ti-plus fs-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                        <div class=" d-flex justify-content-end gap-2">
                                            <a href="javascript:void(0);" class="btn btn-light btm-md"
                                                data-bs-dismiss="offcanvas">Annuler</a>
                                            <button class="btn btn-primary btm-md" type="submit">Ajouter un
                                                Médecin</button>
                                        </div>
                                </div>
                                <!-- <div class="card-footer">

                            </div> -->
                            </div>
                            <!-- End Add Doctor -->
                        </form>
                    </div>
                </div>

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="f51043452d348755e654d5ec-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="f51043452d348755e654d5ec-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="f51043452d348755e654d5ec-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="f51043452d348755e654d5ec-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="f51043452d348755e654d5ec-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="f51043452d348755e654d5ec-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/doctors.js" type="f51043452d348755e654d5ec-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="f51043452d348755e654d5ec-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="f51043452d348755e654d5ec-|49" defer>
    </script>
</body>

</html>
