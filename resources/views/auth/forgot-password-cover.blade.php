<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forgot | Yerodabi</title>
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
                        <div class="row justify-content-center align-items-center overflow-auto flex-wrap vh-100">
                            <div class="col-md-8 mx-auto">
                                <form action="{{ url('two-step') }}"
                                    class="d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column justify-content-lg-center p-4 p-lg-0 pb-0 flex-fill">
                                        <div class=" mx-auto mb-4 text-center">
                                            <h2><strong>Yerodabi</strong></h2>
                                        </div>
                                        <div class="card border-1 p-lg-3 shadow-md rounded-3">
                                            <div class="card-body">
                                                <div class="text-center mb-3">
                                                    <h5 class="mb-1 fs-20 fw-bold">Mot de passe oublié</h5>
                                                    <p class="mb-0">Ne vous inquiétez pas, nous vous enverrons des
                                                        instructions de réinitialisation</p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Adresse email</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text border-end-0 bg-white">
                                                            <i class="ti ti-mail fs-14 text-dark"></i>
                                                        </span>
                                                        <input type="text" value=""
                                                            class="form-control border-start-0 ps-0"
                                                            placeholder="Entrez votre adresse email">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <button type="submit" class="btn bg-primary text-white w-100">Réinitialiser le mot de passe</button>
                                                </div>
                                                <div class="text-center">
                                                    <h6 class="fw-normal fs-14 text-dark mb-0">Retour à
                                                        <a href="{{ url('/') }}" class="hover-a"> connexion</a>
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="9e8cb652786fe87978d7740c-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="9e8cb652786fe87978d7740c-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="9e8cb652786fe87978d7740c-text/javascript"></script>

    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="9e8cb652786fe87978d7740c-|49" defer></script>
</body>

</html>
