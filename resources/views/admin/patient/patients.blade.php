<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Patients - Yerodabi</title>
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

                <!-- Start Page Header -->
                <div
                    class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 pb-3 mb-3 border-1 border-bottom">
                    <div class="flex-grow-1">
                        <h4 class="fw-bold mb-0">Liste des patients <span
                                class="badge badge-soft-primary fw-medium border py-1 px-2 border-primary fs-13 ms-1">Total
                                Patients : {{ $patientsCount }}</span></h4>
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
                                    <a class="dropdown-item" href="patients.html#">Telecharger en PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="patients.html#">Telecharger en Excel</a>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ url('create-patient') }}" class="btn btn-primary ms-2 fs-13 btn-md"><i
                                class="ti ti-plus me-1"></i>Nouveau patient</a>
                    </div>
                </div>
                <!-- End Page Header -->

                <!--  Start Filter -->
                <div class=" d-flex align-items-center justify-content-between flex-wrap">
                    <div>
                        <div class="search-set mb-3">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <div class="table-search d-flex align-items-center mb-0">
                                    <div class="search-input">
                                        <a href="javascript:void(0);" class="btn-searchset"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex table-dropdown mb-3 right-content align-items-center flex-wrap row-gap-3">
                        <div class="dropdown me-2">
                            <a href="javascript:void(0);"
                                class="bg-white border rounded btn btn-md text-dark fs-14 py-1 align-items-center d-flex fw-normal"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <i class="ti ti-filter text-gray-5 me-1"></i>Filtres
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end filter-dropdown p-0"
                                id="filter-dropdown">
                                <div
                                    class="d-flex align-items-center justify-content-between border-bottom filter-header">
                                    <h4 class="mb-0 fw-bold">Filtre</h4>
                                </div>
                                <form action="patients.html#">
                                    <div class="filter-body pb-0">
                                        <div class="mb-3">
                                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Date</label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control bookingrange"
                                                    placeholder="dd/mm/yyyy">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Statut</label>
                                            <select class="select" name="statut" required>
                                                <option value="approved">Approuvé</option>
                                                <option value="pending">En attente</option>
                                                <option value="rejected">Rejeté</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="filter-footer d-flex align-items-center justify-content-end border-top">
                                        <a href="javascript:void(0);" class="btn btn-light btn-md me-2 fw-medium"
                                            id="close-filter">Annuler</a>
                                        <button type="submit" class="btn btn-primary btn-md fw-medium">Filtrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  End Filter -->

                <!--  Start Table -->
                <div class="table-responsive">
                    <table class="table datatable table-nowrap">
                        <thead class="">
                            <tr>
                                <th>Patient</th>
                                <th>Contact</th>
                                <th>Adresse</th>
                                <th>Date de création</th>
                                <th>Statut</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('patients.show', $patient->id_patient) }}"
                                                class="avatar avatar-md me-2">
                                                <img src="{{ $patient->photo == '' ? URL::asset('assets/img/users/user-08.jpg') : $patient->photo }}"
                                                    alt="product" class="rounded-circle">
                                            </a>
                                            <a href="{{ route('patients.show', $patient->id_patient) }}"
                                                class="text-dark fw-semibold">{{ $patient->name }}
                                                {{ $patient->last_name }}
                                                <span class="text-body fs-13 fw-normal d-block">
                                                    {{ date_diff(date_create($patient->birth_date), date_create())->y }}
                                                    ans, {{ $patient->genre }} </span> </a>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $patient->email }}
                                        <br>
                                        {{ $patient->phone_code }} {{ $patient->phone }}
                                    </td>
                                    <td>{{ $patient->emplacement }}</td>
                                    <td>{{ $patient->created_at }}</td>
                                    <td>
                                        @if ($patient->status == 'approved')
                                            <span
                                                class="badge badge-soft-success rounded text-success border border-success fs-13 fw-medium">Approuvé</span>
                                        @elseif ($patient->status == 'rejected')
                                            <span
                                                class="badge badge-soft-danger rounded text-danger border border-danger fs-13 fw-medium">Rejeté</span>
                                        @else
                                            <span
                                                class="badge badge-soft-warning rounded text-warning border border-warning fs-13 fw-medium">En
                                                attente</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-1">
                                            <a href="javascript:void(0);"
                                                class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="{{ route('patients.edit', $patient->id_patient) }}"
                                                        class="dropdown-item d-flex align-items-center">Modifier</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('patients.show', $patient->id_patient) }}"
                                                        class="dropdown-item d-flex align-items-center">Voir</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item d-flex align-items-center text-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_modal{{ $patient->id_patient }}">Suppression</a>
                                                </li>
                                            </ul>
                                            <div class="modal fade" id="delete_modal{{ $patient->id_patient }}">
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
                                                                <span class="avatar avatar-lg bg-danger text-white"><i
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
                                                                    action="{{ route('patients.destroy', $patient->id_patient) }}"
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
                                    </td>
                                </tr>
                            @endforeach
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

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="7f718909bdbc5ee0b3122b5a-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="7f718909bdbc5ee0b3122b5a-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="7f718909bdbc5ee0b3122b5a-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="7f718909bdbc5ee0b3122b5a-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="7f718909bdbc5ee0b3122b5a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="7f718909bdbc5ee0b3122b5a-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="7f718909bdbc5ee0b3122b5a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js" type="7f718909bdbc5ee0b3122b5a-text/javascript"></script>

    <!-- Datatable JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.dataTables.min.js" type="7f718909bdbc5ee0b3122b5a-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/dataTables.bootstrap5.min.js" type="7f718909bdbc5ee0b3122b5a-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="7f718909bdbc5ee0b3122b5a-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="7f718909bdbc5ee0b3122b5a-|49" defer>
    </script>
</body>

</html>
