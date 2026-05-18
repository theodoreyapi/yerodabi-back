<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blogs - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="09f462c699d2a60c846ce96f-text/javascript"></script>

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

                <!-- Page Header -->
                <div class="d-flex align-items-center pb-3 mb-3 border-bottom">
                    <div class="flex-grow-1">
                        <h4 class="fw-bold mb-0">Blogs</h4>
                    </div>
                    <div class="text-end">
                        <a href="{{ url('add-blog') }}" class="btn btn-primary"><i class="ti ti-plus me-1"></i> Nouveau
                            Blog</a>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- start row -->
                <div class="row">

                    <div class="col-md-6 col-lg-4">
                        <div class="card blog-item">
                            <div class="card-body p-0">
                                <div class="position-relative rounded-top overflow-hidden">
                                    <a href="{{ url('blog-details') }}" class="blog-img"><img
                                            src="{{ URL::asset('') }}assets/img/blogs/blog-img-01.jpg" alt="img"
                                            class="img-fluid rounded-top"></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-delete"><i
                                            class="ti ti-trash"></i></a>
                                    <a href="{{ url('edit-blog') }}"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-edit"><i
                                            class="ti ti-edit"></i></a>
                                </div>
                                <div class="p-3">
                                    <span
                                        class="badge badge-soft-primary border border-primary fs-13 py-1 px-2 mb-3">Preventive
                                        Care</span>
                                    <h6 class="fw-bold"><a href="blog-details.html">Health First: Your Guide to Better
                                            Living</a></h6>
                                    <p class="truncate-2-lines mb-0">Preventive care refers to medical services that
                                        help you avoid illness, detect health issues early, and maintain overall
                                        wellness</p>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-md-6 col-lg-4">
                        <div class="card blog-item">
                            <div class="card-body p-0">
                                <div class="position-relative rounded-top overflow-hidden">
                                    <a href="blog-details.html" class="blog-img"><img
                                            src="{{ URL::asset('') }}assets/img/blogs/blog-img-02.jpg" alt="img"
                                            class="img-fluid rounded-top"></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-delete"><i
                                            class="ti ti-trash"></i></a>
                                    <a href="edit-blog.html"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-edit"><i
                                            class="ti ti-edit"></i></a>
                                </div>
                                <div class="p-3">
                                    <span
                                        class="badge badge-soft-primary border border-primary fs-13 py-1 px-2 mb-3">Nutrition</span>
                                    <h6 class="fw-bold"><a href="blog-details.html">Balance Your Plate, Boost Your
                                            Life</a></h6>
                                    <p class="truncate-2-lines mb-0">Fuel your body, move with purpose—wellness starts
                                        with what you eat and how you live</p>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-md-6 col-lg-4">
                        <div class="card blog-item">
                            <div class="card-body p-0">
                                <div class="position-relative rounded-top overflow-hidden">
                                    <a href="blog-details.html" class="blog-img"><img
                                            src="{{ URL::asset('') }}assets/img/blogs/blog-img-04.jpg" alt="img"
                                            class="img-fluid rounded-top"></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-delete"><i
                                            class="ti ti-trash"></i></a>
                                    <a href="edit-blog.html"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-edit"><i
                                            class="ti ti-edit"></i></a>
                                </div>
                                <div class="p-3">
                                    <span
                                        class="badge badge-soft-primary border border-primary fs-13 py-1 px-2 mb-3">Health
                                        Tips</span>
                                    <h6 class="fw-bold"><a href="blog-details.html">Small Daily Habits, Big Health
                                            Benefits</a></h6>
                                    <p class="truncate-2-lines mb-0">Add a fruit or veggie to every meal.Don’t skip
                                        breakfast—it fuels your day.Go to bed and wake up at the same time daily</p>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-md-6 col-lg-4">
                        <div class="card blog-item">
                            <div class="card-body p-0">
                                <div class="position-relative rounded-top overflow-hidden">
                                    <a href="blog-details.html" class="blog-img"><img
                                            src="{{ URL::asset('') }}assets/img/blogs/blog-img-03.jpg" alt="img"
                                            class="img-fluid rounded-top"></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-delete"><i
                                            class="ti ti-trash"></i></a>
                                    <a href="edit-blog.html"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-edit"><i
                                            class="ti ti-edit"></i></a>
                                </div>
                                <div class="p-3">
                                    <span
                                        class="badge badge-soft-primary border border-primary fs-13 py-1 px-2 mb-3">Sleep
                                    </span>
                                    <h6 class="fw-bold"><a href="blog-details.html">Rest Your Body, Calm Your Mind</a>
                                    </h6>
                                    <p class="truncate-2-lines mb-0">Avoid screens at least 1 hour before bedtime.Take
                                        5-minute deep breathing breaks throughout your day.</p>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-md-6 col-lg-4">
                        <div class="card blog-item">
                            <div class="card-body p-0">
                                <div class="position-relative rounded-top overflow-hidden">
                                    <a href="blog-details.html" class="blog-img"><img
                                            src="{{ URL::asset('') }}assets/img/blogs/blog-img-05.jpg" alt="img"
                                            class="img-fluid rounded-top"></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-delete"><i
                                            class="ti ti-trash"></i></a>
                                    <a href="edit-blog.html"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-edit"><i
                                            class="ti ti-edit"></i></a>
                                </div>
                                <div class="p-3">
                                    <span
                                        class="badge badge-soft-primary border border-primary fs-13 py-1 px-2 mb-3">Anxiety
                                    </span>
                                    <h6 class="fw-bold"><a href="blog-details.html">When the Mind Feels Heavy</a></h6>
                                    <p class="truncate-2-lines mb-0">Move your body for at least 30 minutes a
                                        day.Practice deep breathing or mindfulness to manage stress.</p>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-md-6 col-lg-4">
                        <div class="card blog-item">
                            <div class="card-body p-0">
                                <div class="position-relative rounded-top overflow-hidden">
                                    <a href="blog-details.html" class="blog-img"><img
                                            src="{{ URL::asset('') }}assets/img/blogs/blog-img-06.jpg" alt="img"
                                            class="img-fluid rounded-top"></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-delete"><i
                                            class="ti ti-trash"></i></a>
                                    <a href="edit-blog.html"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-edit"><i
                                            class="ti ti-edit"></i></a>
                                </div>
                                <div class="p-3">
                                    <span
                                        class="badge badge-soft-primary border border-primary fs-13 py-1 px-2 mb-3">Therapy
                                    </span>
                                    <h6 class="fw-bold"><a href="blog-details.html">Therapy Isn’t Just for Crisis</a>
                                    </h6>
                                    <p class="truncate-2-lines mb-0">Healing isn't linear—progress takes time and
                                        patience.Therapy gives you tools; growth comes from using them.</p>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-md-6 col-lg-4">
                        <div class="card blog-item">
                            <div class="card-body p-0">
                                <div class="position-relative rounded-top overflow-hidden">
                                    <a href="blog-details.html" class="blog-img"><img
                                            src="{{ URL::asset('') }}assets/img/blogs/blog-img-07.jpg" alt="img"
                                            class="img-fluid rounded-top"></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-delete"><i
                                            class="ti ti-trash"></i></a>
                                    <a href="edit-blog.html"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-edit"><i
                                            class="ti ti-edit"></i></a>
                                </div>
                                <div class="p-3">
                                    <span
                                        class="badge badge-soft-primary border border-primary fs-13 py-1 px-2 mb-3">Stay
                                        Well</span>
                                    <h6 class="fw-bold"><a href="blog-details.html">Pediatrics & Family Health</a>
                                    </h6>
                                    <p class="truncate-2-lines mb-0">Vaccines for Kids: What Parents Should Know.Screen
                                        Time and Children’s Health: Striking the Balance</p>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-md-6 col-lg-4">
                        <div class="card blog-item">
                            <div class="card-body p-0">
                                <div class="position-relative rounded-top overflow-hidden">
                                    <a href="blog-details.html" class="blog-img"><img
                                            src="{{ URL::asset('') }}assets/img/blogs/blog-img-08.jpg" alt="img"
                                            class="img-fluid rounded-top"></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-delete"><i
                                            class="ti ti-trash"></i></a>
                                    <a href="edit-blog.html"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-edit"><i
                                            class="ti ti-edit"></i></a>
                                </div>
                                <div class="p-3">
                                    <span
                                        class="badge badge-soft-primary border border-primary fs-13 py-1 px-2 mb-3">Health
                                        First</span>
                                    <h6 class="fw-bold"><a href="blog-details.html">Health First: Your Guide to Better
                                            Living</a></h6>
                                    <p class="truncate-2-lines mb-0">Move More, Live More: Exercise as a
                                        Prescription.Sleep, Stress, and Sugar: The Silent Health Killers</p>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-md-6 col-lg-4">
                        <div class="card blog-item">
                            <div class="card-body p-0">
                                <div class="position-relative rounded-top overflow-hidden">
                                    <a href="blog-details.html" class="blog-img">
                                        <img src="{{ URL::asset('') }}assets/img/blogs/blog-img-09.jpg"
                                            alt="img" class="img-fluid rounded-top">
                                    </a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-delete"><i
                                            class="ti ti-trash"></i></a>
                                    <a href="edit-blog.html"
                                        class="btn btn-sm d-inline-flex align-items-center justify-content-center p-2 bg-white rounded-2 blog-edit"><i
                                            class="ti ti-edit"></i></a>
                                </div>
                                <div class="p-3">
                                    <span
                                        class="badge badge-soft-primary border border-primary fs-13 py-1 px-2 mb-3">Self-Care</span>
                                    <h6 class="fw-bold"><a href="blog-details.html">Mindful Moments, Meaningful
                                            Life</a></h6>
                                    <p class="truncate-2-lines mb-0">Start your day with 2 minutes of silence. Taking a
                                        walk without your phone. Getting enough sleep</p>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-lg-12">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0);"
                                class="btn btn-outline-white bg-white d-inline-flex align-items-center">Load More <i
                                    class="ti ti-loader-2 ms-1"></i></a>
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
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="09f462c699d2a60c846ce96f-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="09f462c699d2a60c846ce96f-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="09f462c699d2a60c846ce96f-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="09f462c699d2a60c846ce96f-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="09f462c699d2a60c846ce96f-|49" defer>
    </script>
</body>

</html>
