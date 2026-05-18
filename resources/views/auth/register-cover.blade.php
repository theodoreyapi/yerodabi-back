<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register | Yerodabi</title>
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

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css" id="app-style">

</head>

<body>

    <!-- Begin Wrapper -->
    <div class="main-wrapper auth-bg position-relative overflow-hidden">

        <!-- Start Content -->
        <div class="container-fuild position-relative z-1">
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100 bg-white">
                <!-- start row-->
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div
                            class="login-backgrounds login-covers bg-primary d-lg-flex align-items-center justify-content-center d-none flex-wrap p-4 position-relative h-100 z-0">
                            <div class="authentication-card w-100">
                                <div class="authen-overlay-item w-100">
                                    <div class="authen-head text-center">
                                        <h1 class="text-white fs-32 fw-bold mb-2">Accès aux soins de santé transparent
                                            grâce à une clinique intelligente et moderne</h1>
                                        <p class="text-light fw-normal text-light">Bénéficiez d’une gestion des soins de
                                            santé efficace, sécurisée et conviviale, conçue pour les cliniques modernes
                                            et les pratiques en croissance.</p>
                                    </div>
                                    <div class="mt-4 mx-auto authen-overlay-img">
                                        <img src="{{ URL::asset('') }}assets/img/auth/cover-imgs-1.png" alt="Img">
                                    </div>
                                </div>
                            </div>
                            <img src="{{ URL::asset('') }}assets/img/auth/cover-imgs-2.png" alt="cover-imgs-2"
                                class="img-fluid cover-img">
                        </div>
                    </div>
                    <!-- end row-->

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row justify-content-center align-items-center overflow-auto flex-wrap vh-100 py-4">
                            <div class="col-md-8 mx-auto">
                                <form action="login-cover.html"
                                    class="d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column justify-content-lg-center p-4 p-lg-0 pb-0 flex-fill">
                                        <div class=" mx-auto mb-4 text-center">
                                            <h2><strong>Yerodabi</strong></h2>
                                        </div>
                                        <div class="card border-1 p-lg-3 shadow-md rounded-3">
                                            <div class="card-body">
                                                <div class="text-center mb-3">
                                                    <h5 class="mb-1 fs-20 fw-bold">S'enregistrer</h5>
                                                    <p class="mb-0">Veuillez saisir vos coordonnées pour créer un
                                                        compte</p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Nom</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text border-end-0 bg-white">
                                                            <i class="ti ti-user fs-14 text-dark"></i>
                                                        </span>
                                                        <input type="text" value=""
                                                            class="form-control border-start-0 ps-0"
                                                            placeholder="Entrez le nom">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Prénom</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text border-end-0 bg-white">
                                                            <i class="ti ti-user fs-14 text-dark"></i>
                                                        </span>
                                                        <input type="text" value=""
                                                            class="form-control border-start-0 ps-0"
                                                            placeholder="Entrez le prénom">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Adresse email</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text border-end-0 bg-white">
                                                            <i class="ti ti-mail fs-14 text-dark"></i>
                                                        </span>
                                                        <input type="text" value=""
                                                            class="form-control border-start-0 ps-0"
                                                            placeholder="Entrez l'adresse e-mail">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Mot de passe</label>
                                                    <div class="position-relative">
                                                        <div
                                                            class="pass-group input-group position-relative border rounded">
                                                            <span class="input-group-text bg-white border-0">
                                                                <i class="ti ti-lock text-dark fs-14"></i>
                                                            </span>
                                                            <input type="password"
                                                                class="pass-input form-control ps-0 border-0"
                                                                placeholder="****************">
                                                            <span class="input-group-text bg-white border-0">
                                                                <i
                                                                    class="ti toggle-password ti-eye-off text-dark fs-14"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Confirmez le mot de passe</label>
                                                    <div class="position-relative">
                                                        <div
                                                            class="pass-group input-group position-relative border rounded">
                                                            <span class="input-group-text bg-white border-0">
                                                                <i class="ti ti-lock text-dark fs-14"></i>
                                                            </span>
                                                            <input type="password"
                                                                class="pass-inputs form-control ps-0 border-0"
                                                                placeholder="****************">
                                                            <span class="input-group-text bg-white border-0">
                                                                <i
                                                                    class="ti toggle-passwords ti-eye-off text-dark fs-14"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-check form-check-md mb-0">
                                                            <input class="form-check-input" id="remember_me"
                                                                type="checkbox">
                                                            <label for="remember_me"
                                                                class="form-check-label mt-0 text-dark">
                                                                J'accepte les
                                                                <a href="{{ url('terms') }}"
                                                                    class="text-decoration-underline text-primary">
                                                                    conditions d'utilisation</a> & <a
                                                                    href="{{ url('privacy') }}"
                                                                    class="text-decoration-underline text-primary">la
                                                                    politique de confidentialité</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <button type="submit"
                                                        class="btn bg-primary text-white w-100">S'enregistrer</button>
                                                </div>
                                                <div class="login-or position-relative mb-3">
                                                    <span class="span-or">OU</span>
                                                </div>
                                                <div class="text-center">
                                                    <h6 class="fw-normal fs-14 text-dark mb-0">Already have an account
                                                        yet?
                                                        <a href="{{ url('/') }}" class="hover-a"> Se
                                                            connecter</a>
                                                    </h6>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div>
                                </form>
                                <p class="fs-14 text-dark text-center mt-4">Copyright &copy; {{ date('Y') }} -
                                    Yerodabi. Par <a href="https://aptiotech.com/" target="_blank"
                                        class="hover-a">AptioTech</a></p>
                            </div> <!-- end row-->
                        </div>

                    </div>
                </div>
                <!-- end row-->

            </div>
        </div>
        <!-- End Content -->

    </div>
    <!-- End Wrapper -->


    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="d746b6f8236ee463673dd4bb-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="d746b6f8236ee463673dd4bb-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="d746b6f8236ee463673dd4bb-text/javascript"></script>

    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="d746b6f8236ee463673dd4bb-|49" defer></script>
</body>

</html>
