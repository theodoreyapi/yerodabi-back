<!DOCTYPE html>
<html lang="en">

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

                        <form action="{{ route('doctors.update', $doctor->id_doctor) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div
                                        class="border-bottom d-flex align-items-center justify-content-between pb-3 mb-3">
                                        <h5 class="offcanvas-title fs-18 fw-bold">Modification</h5>
                                    </div>
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
                                                            <input value="{{ $doctor->name }}" name="nom" required
                                                                type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Prénom <span
                                                                    class="text-danger">*</span></label>
                                                            <input value="{{ $doctor->last_name }}" name="prenom"
                                                                required type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Numéro de téléphone <span
                                                                    class="text-danger">*</span></label>
                                                            <input value="{{ $doctor->phone }}" type="tel"
                                                                name="telephone" required class="form-control"
                                                                placeholder="+2250585831647">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Adresse e-mail <span
                                                                    class="text-danger">*</span></label>
                                                            <input value="{{ $doctor->email }}" type="email"
                                                                name="email" required class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nationnalité <span
                                                                    class="text-danger">*</span></label>
                                                            <input value="{{ $doctor->nationalite }}" type="text"
                                                                name="nationnalite" required class="form-control"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Taille</label>
                                                            <input value="{{ $doctor->taille }}" type="text"
                                                                name="taille" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Poids</label>
                                                            <input value="{{ $doctor->poids }}" type="text"
                                                                name="poids" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Mot de passe</label>
                                                            <input type="password" name="password"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Date de naissance <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="input-icon-end position-relative">
                                                                <input value="{{ $doctor->birth_date }}"
                                                                    type="text" name="date" required
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
                                                            <input value="{{ $doctor->experience_an }}"
                                                                type="number" name="annee_experience" required
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
                                                                @foreach ($specialisations as $specialisation)
                                                                    <option
                                                                        @if ($doctor->specialisation_id == $specialisation->id_specialisation) selected @endif
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
                                                            <input value="{{ $doctor->emplacement }}" name="lieu"
                                                                required type="text" class="form-control">
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
                                                            <input value="{{ $doctor->licence_medicale }}"
                                                                type="text" name="licence" required
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Langue parlée</label>
                                                            <input value="{{ $doctor->language }}"
                                                                class="input-tags form-control" id="inputBox"
                                                                type="text" data-role="tagsinput" name="langue"
                                                                placeholder="Anglais, Français">
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
                                                                <option
                                                                    @if ($doctor->sanguin == 'O+') selected @endif
                                                                    value="O+">O+</option>
                                                                <option
                                                                    @if ($doctor->sanguin == 'O-') selected @endif
                                                                    value="O-">O-</option>
                                                                <option
                                                                    @if ($doctor->sanguin == 'A+') selected @endif
                                                                    value="A+">A+</option>
                                                                <option
                                                                    @if ($doctor->sanguin == 'A-') selected @endif
                                                                    value="A-">A-</option>
                                                                <option
                                                                    @if ($doctor->sanguin == 'B+') selected @endif
                                                                    value="B+">B+</option>
                                                                <option
                                                                    @if ($doctor->sanguin == 'B-') selected @endif
                                                                    value="B-">B-</option>
                                                                <option
                                                                    @if ($doctor->sanguin == 'AB+') selected @endif
                                                                    value="AB+">AB+</option>
                                                                <option
                                                                    @if ($doctor->sanguin == 'AB-') selected @endif
                                                                    value="AB-">AB-</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Genre <span
                                                                    class="text-danger ms-1">*</span></label>
                                                            <select class="select" name="genre" required>
                                                                <option
                                                                    @if ($doctor->genre == 'Homme') selected @endif
                                                                    value="Homme">Homme</option>
                                                                <option
                                                                    @if ($doctor->genre == 'Femme') selected @endif
                                                                    value="Femme">Femme</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Statut <span
                                                                    class="text-danger ms-1">*</span></label>
                                                            <select class="select" name="statut" required>
                                                                <option
                                                                    @if ($doctor->status == 'approved') selected @endif
                                                                    value="approved">Approuvé</option>
                                                                <option
                                                                    @if ($doctor->status == 'pending') selected @endif
                                                                    value="pending">En attente</option>
                                                                <option
                                                                    @if ($doctor->status == 'rejected') selected @endif
                                                                    value="rejected">Rejeté</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Biographie</label>
                                                    <textarea name="biographie" class="form-control" rows="3"
                                                        placeholder="Une petite description sur le docteur...">{{ $doctor->biographie }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" d-flex justify-content-end gap-2">
                                        <a href="javascript:void(0);" class="btn btn-light btm-md"
                                            data-bs-dismiss="offcanvas">Annuler</a>
                                        <button class="btn btn-primary btm-md" type="submit">Modifier</button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Add Doctor -->
                        </form>

                        <!-- End Add Doctor -->

                    </div>
                </div>

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="3a2e12d26222a0540d811395-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="3a2e12d26222a0540d811395-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="3a2e12d26222a0540d811395-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="3a2e12d26222a0540d811395-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="3a2e12d26222a0540d811395-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="3a2e12d26222a0540d811395-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/doctors.js" type="3a2e12d26222a0540d811395-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="3a2e12d26222a0540d811395-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="3a2e12d26222a0540d811395-|49" defer>
    </script>
</body>

</html>
