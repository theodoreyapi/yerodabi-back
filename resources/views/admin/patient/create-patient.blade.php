<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Patient - Yerodabie</title>
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

    <!-- intel input -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/intltelinput/css/intlTelInput.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap-datetimepicker.min.css">

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
            <div class="content">

                @include('admin.layouts.status')

                <!-- row start -->
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!-- page header start -->
                        <div class="mb-4">
                            <h6 class="fw-bold mb-0 d-flex align-items-center"> <a href="{{ url('patients') }}"
                                    class="text-dark"> <i class="ti ti-chevron-left me-1"></i>Patients</a></h6>
                        </div>
                        <!-- page header end -->
                        <form action="{{ route('patients.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- card start -->
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="form">
                                        <h6 class="fw-bold mb-3">Information du patient</h6>
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="mb-3 d-flex align-items-center">
                                                    <label class="form-label mb-0">Photo</label>
                                                    <input type="file" name="photo"
                                                        class="form-control image-sign">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1 fw-medium">Nom<span
                                                            class="text-danger ms-1">*</span></label>
                                                    <input name="nom" required type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1 fw-medium">Prénom<span
                                                            class="text-danger ms-1">*</span></label>
                                                    <input name="prenom" required type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1 fw-medium">Téléphone<span
                                                            class="text-danger ms-1">*</span></label>
                                                    <input required type="tel" class="form-control" name="phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1 fw-medium">E-mail<span
                                                            class="text-danger ms-1">*</span></label>
                                                    <input required type="email" class="form-control" id="email"
                                                        name="email">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1 fw-medium">Adresse<span
                                                            class="text-danger ms-1">*</span></label>
                                                    <input required type="text" class="form-control" name="adresse">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1 fw-medium">Taille</label>
                                                    <input type="text" class="form-control" name="taille">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1 fw-medium">Poids</label>
                                                    <input type="text" class="form-control" name="poids">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1 fw-medium">Date de naissance<span
                                                            class="text-danger ms-1">*</span></label>
                                                    <div class="input-icon-end position-relative">
                                                        <input required name="date" type="text"
                                                            class="form-control datetimepicker"
                                                            placeholder="dd/mm/yyyy">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1 fw-medium">Genre<span
                                                            class="text-danger ms-1">*</span></label>
                                                    <select name="genre" required class="select">
                                                        <option value="">Sélectionne</option>
                                                        <option value="Homme">Homme</option>
                                                        <option value="Femme">Femme</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1 fw-medium">Groupe Sanguin<span
                                                            class="text-danger ms-1">*</span></label>
                                                    <select name="sanguin" required class="select">
                                                        <option value="">Sélectionne</option>
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

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1 fw-medium">Mot de passe<span
                                                            class="text-danger ms-1">*</span></label>
                                                    <input required name="password" type="password"
                                                        class="form-control">
                                                </div>
                                            </div>

                                        </div>

                                        <h6 class="fw-bold mb-3 border-top pt-3">Information adresse</h6>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1 fw-medium">Nationnalité<span
                                                            class="text-danger ms-1">*</span></label>
                                                    <input required name="nationnalite" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1">Pays<span
                                                            class="text-danger ms-1">*</span></label>
                                                    <select required name="pays" id="pays" class="select">
                                                        <option value="">Sélectionne</option>
                                                        @foreach ($pays as $pay)
                                                            <option value="{{ $pay->id_pays }}">{{ $pay->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1">Ville<span
                                                            class="text-danger ms-1">*</span></label>
                                                    <select required name="ville" id="ville" class="select">
                                                        <option value="">Sélectionne</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label mb-1">Code postal<span
                                                            class="text-danger ms-1">*</span></label>
                                                    <input required name="code_postal" type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card end -->

                            <div class="d-flex align-items-center justify-content-end">
                                <a href="javascript:void(0);" class="btn btn-light me-2">Annuler</a>
                                <button type="submit" class="btn btn-primary">Ajouter le Nouveau Patient</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->


    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="5ee2f99ee09c37274860a372-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="5ee2f99ee09c37274860a372-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {

            console.log('JS chargé');

            $('#pays').on('change', function() {

                let paysId = $(this).val();
                let villeSelect = $('#ville');

                console.log('Pays changé:', paysId);

                villeSelect.empty().append('<option value="">Chargement...</option>');

                if (!paysId) {
                    villeSelect.html('<option value="">Sélectionne</option>');
                    return;
                }

                $.get(`/villes-par-pays/${paysId}`, function(data) {

                    console.log('Villes reçues:', data);

                    villeSelect.empty().append('<option value="">Sélectionne</option>');

                    data.forEach(function(ville) {
                        villeSelect.append(
                            `<option value="${ville.id_ville}">${ville.name}</option>`
                        );
                    });

                    // IMPORTANT : notifier Select2 du changement
                    villeSelect.trigger('change');
                });
            });

        });
    </script>


    <!-- intel Input -->
    <script src="{{ URL::asset('') }}assets/plugins/intltelinput/js/intlTelInput.js" type="5ee2f99ee09c37274860a372-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="5ee2f99ee09c37274860a372-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="5ee2f99ee09c37274860a372-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="5ee2f99ee09c37274860a372-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="5ee2f99ee09c37274860a372-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="5ee2f99ee09c37274860a372-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="5ee2f99ee09c37274860a372-|49" defer>
    </script>

</body>

</html>
