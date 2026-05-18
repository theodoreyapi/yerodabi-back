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
                                class="badge badge-soft-primary fs-13 fw-medium ms-2">Nombre total de médecins :
                                {{ $doctorsCount }}</span></h4>
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
                                    <a class="dropdown-item" href="#">Telecharger en PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Telecharger en Excel</a>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ url('add-doctor') }}" class="btn btn-primary ms-2 fs-13 btn-md"><i
                                class="ti ti-plus me-1"></i>Nouveau Docteur</a>
                    </div>
                </div>
                <!-- End Page Header -->

                @include('admin.layouts.status')

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
                                <i class="ti ti-filter text-gray-5 me-1"></i>Filtres
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end filter-dropdown p-0"
                                id="filter-dropdown">
                                <div
                                    class="d-flex align-items-center justify-content-between border-bottom filter-header">
                                    <h4 class="mb-0">Filtre</h4>
                                </div>
                                <form action="#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <label class="form-label">Spécialisation</label>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1">Cardiologist</option>
                                                <option value="m-2">Orthopedic Surgeon</option>
                                                <option value="m-3">Pediatrician</option>
                                                <option value="m-4">Gynecologist</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Date</label>
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
                                                <label class="form-label">Statut</label>
                                            </div>
                                            <select class="select2" multiple="multiple">
                                                <option value="m-1" value="pending">En attente</option>
                                                <option value="m-2" value="approved">Approuver</option>
                                                <option value="m-2" value="rejected">Réjeter</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div
                                        class="filter-footer d-flex align-items-center justify-content-end border-top">
                                        <a href="javascript:void(0);" class="btn btn-light btn-md me-2"
                                            id="close-filter">Annuler</a>
                                        <button type="submit" class="btn btn-primary btn-md">Filtrer</button>
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
                                <th>Nom & Spécialisation</th>
                                <th>Description</th>
                                <th>Téléphone</th>
                                <th>E-mail</th>
                                {{-- <th>Frais</th> --}}
                                <th>Statut</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $doctor)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('doctors.show', $doctor->id_doctor) }}" class="avatar me-2">
                                                <img src="{{ $doctor->photo == '' ? URL::asset('assets/img/doctors/doctor-01.jpg') : $doctor->photo }}"
                                                    alt="Doctor" class="rounded-circle">
                                            </a>
                                            <div>
                                                <h6 class="mb-1 fs-14 fw-semibold"><a
                                                        href="{{ route('doctors.show', $doctor->id_doctor) }}">Dr. {{ $doctor->name }}
                                                        {{ $doctor->last_name }}</a></h6>
                                                <span class="fs-13 d-block"> {{ $doctor->nom_specialisation }} </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        {!! nl2br(wordwrap($doctor->description_specialisation, 40, "\n", true)) !!}
                                    </td>
                                    <td>{{ $doctor->phone }}</td>
                                    <td>
                                        <a href="#" class="__cf_email__"
                                            data-cfemail="">{{ $doctor->email }}</a>
                                    </td>
                                    {{--  <td>
                                        <h6 class="fs-14 fw-semibold mb-0">$458</h6>
                                    </td> --}}
                                    <td>
                                        @if ($doctor->status == 'approved')
                                            <span
                                                class="badge badge-soft-success border border-success">Approuvé</span>
                                        @elseif ($doctor->status == 'rejected')
                                            <span class="badge badge-soft-danger border border-danger">Rejeté</span>
                                        @else
                                            <span class="badge badge-soft-warning border border-warning">En
                                                attente</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="action-item me-2">
                                                <a
                                                    href="{{ route('appointment-calendar.index', $doctor->id_doctor) }}">
                                                    <i class="ti ti-calendar-cog"></i>
                                                </a>
                                            </div>
                                            <div class="action-item">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="{{ route('doctors.edit', $doctor->id_doctor) }}"
                                                            class="dropdown-item d-flex align-items-center">Modifier</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="dropdown-item d-flex align-items-center text-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#delete_modal{{ $doctor->id_doctor }}">Suppression</a>
                                                    </li>
                                                </ul>
                                                <div class="modal fade" id="delete_modal{{ $doctor->id_doctor }}">
                                                    <div class="modal-dialog modal-dialog-centered modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center position-relative z-1">
                                                                <img src="{{ URL::asset('assets/img/bg/delete-modal-bg-01.png') }}"
                                                                    alt=""
                                                                    class="img-fluid position-absolute top-0 start-0 z-n1">
                                                                <img src="{{ URL::asset('assets/img/bg/delete-modal-bg-02.png') }}"
                                                                    alt=""
                                                                    class="img-fluid position-absolute bottom-0 end-0 z-n1">
                                                                <div class="mb-3">
                                                                    <span
                                                                        class="avatar avatar-lg bg-danger text-white"><i
                                                                            class="ti ti-trash fs-24"></i></span>
                                                                </div>
                                                                <h5 class="fw-bold mb-1">Confirmez la suppression
                                                                </h5>
                                                                <p class="mb-3">Êtes-vous sûr de vouloir
                                                                    supprimer ?</p>
                                                                <div class="d-flex justify-content-center">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-light position-relative z-1 me-3"
                                                                        data-bs-dismiss="modal">Annuler</a>
                                                                    <form
                                                                        action="{{ route('doctors.destroy', $doctor->id_doctor) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-danger position-relative z-1">Oui,
                                                                            Supprimer</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

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
