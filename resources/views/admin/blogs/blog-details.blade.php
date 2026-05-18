<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog Details - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="27f4763446d46d6ce28be033-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

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

                <!-- start row -->
                <div class="row">

                    <div class="col-lg-10 mx-auto">
                        <h4 class="fw-bold mb-4">Mindful Moments, Meaningful Life</h4>
                        <div class="mb-4">
                            <img src="{{ URL::asset('') }}assets/img/blogs/blog-details-img-01.svg" alt="img"
                                class="img-fluid">
                        </div>
                        <div class="card border-0 rounded-0">
                            <div class="card-body">
                                <p>Mindful moments are the pauses — the seconds in between tasks, the deep breaths
                                    before speaking, the awareness of a bird outside your window or the warmth of a cup
                                    of tea in your hands. They're not grand or dramatic. They’re simple, subtle, and yet
                                    profound. Mindfulness invites us to live with our experiences, not just through
                                    them. It’s about being awake to what’s happening — within us and around us — without
                                    judgment. Whether it’s joy or discomfort, stillness or chaos, mindfulness teaches us
                                    to stay, observe, and respond with compassion.</p>
                                <p>"Mindful Moments, Meaningful Life" is a gentle reminder that the path to a fulfilling
                                    life begins with presence. Through simple practices, reflections, and daily
                                    awareness, this concept encourages you to slow down, savor the now, and reconnect
                                    with what truly matters. It’s about finding depth in the small things, peace in the
                                    chaos, and purpose in every breath.</p>
                                <div>
                                    <h6 class="fs-14 fw-semibold mb-3">Latest Tags</h6>
                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                        <span class="badge bg-light text-dark fs-13 fw-medium py-1 px-2">Wellness</span>
                                        <span class="badge bg-light text-dark fs-13 fw-medium py-1 px-2">Patient
                                            Guide</span>
                                        <span class="badge bg-light text-dark fs-13 fw-medium py-1 px-2">Health
                                            Tips</span>
                                        <span
                                            class="badge bg-light text-dark fs-13 fw-medium py-1 px-2">Diagnostics</span>
                                        <span
                                            class="badge bg-light text-dark fs-13 fw-medium py-1 px-2">Immunization</span>
                                        <span class="badge bg-light text-dark fs-13 fw-medium py-1 px-2">Travel
                                            Health</span>
                                        <span class="badge bg-light text-dark fs-13 fw-medium py-1 px-2">Recovery</span>
                                        <span class="badge bg-light text-dark fs-13 fw-medium py-1 px-2">Preventive
                                            Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="27f4763446d46d6ce28be033-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="27f4763446d46d6ce28be033-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="27f4763446d46d6ce28be033-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="27f4763446d46d6ce28be033-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="27f4763446d46d6ce28be033-|49" defer>
    </script>
</body>

</html>
