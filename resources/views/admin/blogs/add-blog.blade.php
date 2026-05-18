<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Blog - Yerodabi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('') }}assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="{{ URL::asset('') }}assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('') }}assets/js/theme-script.js" type="fd5c151e9449dbee536e442b-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.css">

    <!-- Quill CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/quill/quill.snow.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

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
                        <div class="mb-3">
                            <h6 class="fw-semibold"><a href="{{ url('blogs') }}"><i
                                        class="ti ti-chevron-left me-1"></i>Blogs</a></h6>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Category</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>General Medicine</option>
                                        <option>Disease & Conditions</option>
                                        <option>Mental Health</option>
                                        <option>Patient Education </option>
                                        <option>Nutrition & Lifestyle Medicine</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Content</label>
                                    <div class="editor"></div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tag</label>
                                    <input class="input-tags form-control" id="inputBox" type="text"
                                        data-role="tagsinput" name="specialist">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Feature Image</label>
                                    <input class="form-control" type="file">
                                </div>

                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="javascript:void(0);" class="btn btn-light me-2">Cancel</a>
                                    <a href="javascript:void(0);" class="btn btn-primary">Add Blog</a>
                                </div>


                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                </div>
                <!-- end row -->

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="fd5c151e9449dbee536e442b-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="fd5c151e9449dbee536e442b-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="fd5c151e9449dbee536e442b-text/javascript"></script>

    <!-- Quill JS -->
    <script src="{{ URL::asset('') }}assets/plugins/quill/quill.min.js" type="fd5c151e9449dbee536e442b-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="fd5c151e9449dbee536e442b-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{ URL::asset('') }}assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="fd5c151e9449dbee536e442b-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="fd5c151e9449dbee536e442b-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="fd5c151e9449dbee536e442b-|49" defer>
    </script>
</body>

</html>
