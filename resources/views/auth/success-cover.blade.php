<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Success | Yerodabi</title>
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
                                <form action="{{ url('/') }}" method="get"
                                    class="d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column justify-content-lg-center p-4 p-lg-0 pb-0 flex-fill">
                                        <div class=" mx-auto mb-4 text-center">
                                            <h2><strong>Yerodabi</strong></h2>
                                        </div>
                                        <div class="card border-1 p-lg-3 shadow-md rounded-3">
                                            <div class="card-body">
                                                <div class="mb-3 text-center">
                                                    <span><i
                                                            class="ti ti-circle-check-filled fs-48 text-success"></i></span>
                                                </div>
                                                <div class="text-center mb-3">
                                                    <h5 class="mb-1 fs-20 fw-bold">Succès</h5>
                                                    <p class="mb-0">Votre nouveau mot de passe a été enregistré avec
                                                        succès.
                                                    </p>
                                                </div>
                                                <div class="mt-3">
                                                    <button type="submit"
                                                        class="btn bg-primary text-white w-100">Retour à la
                                                        connexion</button>
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="5745197d8cd3c6d4bc6da23d-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="5745197d8cd3c6d4bc6da23d-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="5745197d8cd3c6d4bc6da23d-text/javascript"></script>

    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="5745197d8cd3c6d4bc6da23d-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"974eee806936b7aa","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.8.0","token":"3ca157e612a14eccbb30cf6db6691c29"}'
        crossorigin="anonymous"></script>
</body>

</html>
