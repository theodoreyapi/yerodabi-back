<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Messages - Yerodabi</title>
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

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

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
                <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 pb-3">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 fw-semibold mb-0">Message</h4>
                    </div>
                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Message</li>
                        </ol>
                    </div>
                </div>
                <!-- End Page Header -->

                <div class="card shadow-none mb-0">
                    <div class="card-body p-0">

                        <div class="d-md-flex">
                            <div class="chat-user-nav">
                                <div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom p-3">
                                        <div class="d-flex align-items-center">
                                            <span class="avatar me-2 flex-shrink-0"><img
                                                    src="{{ URL::asset('') }}assets/img/users/user-01.jpg"
                                                    alt="user"></span>
                                            <div>
                                                <h6 class="fs-14 mb-1">James Hong </h6>
                                                <p class="mb-0">Admin</p>
                                            </div>
                                        </div>
                                        <a href="messages.html#" class="btn p-2 btn-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="New Chat"><i
                                                class="ti ti-plus"></i></a>
                                    </div>
                                    <div>
                                        <div class="input-group w-auto input-group-flat p-4 pb-0">
                                            <span class="input-group-text border-end-0"><i
                                                    class="ti ti-search"></i></span>
                                            <input type="text" class="form-control" placeholder="Search Keyword">
                                        </div>
                                        <div class="chat-users p-4" data-simplebar>
                                            <h6 class="mb-3">All Messages</h6>
                                            <div
                                                class="d-flex align-items-center justify-content-between rounded p-3 user-list active mb-1">
                                                <div class="d-flex align-items-center">
                                                    <a href="messages.html#" class="avatar me-2 flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-02.jpg"
                                                            alt="user"></a>
                                                    <div>
                                                        <h6 class="fs-14 mb-1"><a href="messages.html#">Mark Smith</a>
                                                        </h6>
                                                        <p class="mb-0 text-truncate">Hey Sam! Did you Ch...</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-dark d-block">10:10 AM</span>
                                                    <span class="d-block text-success"><i
                                                            class="ti ti-checks"></i></span>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between rounded p-3 user-list mb-1">
                                                <div class="d-flex align-items-center">
                                                    <a href="messages.html#" class="avatar me-2 flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-03.jpg"
                                                            alt="user"></a>
                                                    <div>
                                                        <h6 class="fs-14 mb-1"><a href="messages.html#">Eugene
                                                                Sikora</a></h6>
                                                        <p class="mb-0 text-truncate">How are your Today</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-dark d-block mb-1">08:26 AM</span>
                                                    <span
                                                        class="badge ms-auto bg-danger rounded-circle message-count">5</span>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between rounded p-3 user-list mb-1">
                                                <div class="d-flex align-items-center">
                                                    <a href="messages.html#" class="avatar me-2 flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-04.jpg"
                                                            alt="user"></a>
                                                    <div>
                                                        <h6 class="fs-14 mb-1"><a href="messages.html#">Robert
                                                                Fassett</a></h6>
                                                        <p class="mb-0 text-truncate">Here are some of ve...</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-dark d-block mb-1">yesterday</span>
                                                    <span
                                                        class="badge ms-auto bg-danger rounded-circle message-count">5</span>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between rounded p-3 user-list mb-1">
                                                <div class="d-flex align-items-center">
                                                    <a href="messages.html#" class="avatar me-2 flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-05.jpg"
                                                            alt="user"></a>
                                                    <div>
                                                        <h6 class="fs-14 mb-1"><a href="messages.html#">Andrew
                                                                Fletcher</a></h6>
                                                        <p class="mb-0 text-truncate">Use tools like Trello...</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-dark d-block mb-1">yesterday</span>
                                                    <span class="d-block text-light"><i
                                                            class="ti ti-checks"></i></span>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between rounded p-3 user-list mb-1">
                                                <div class="d-flex align-items-center">
                                                    <a href="messages.html#"
                                                        class="avatar badge-soft-purple fw-semibold me-2 flex-shrink-0">TD</a>
                                                    <div>
                                                        <h6 class="fs-14 mb-1"><a href="messages.html#">Tyron
                                                                Derby</a></h6>
                                                        <p class="mb-0 text-truncate">Let's reconvene next...</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-dark d-block mb-1">12:55 PM</span>
                                                    <span class="d-block text-light"><i
                                                            class="ti ti-checks text-success"></i></span>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between rounded p-3 user-list mb-1">
                                                <div class="d-flex align-items-center">
                                                    <a href="messages.html#" class="avatar me-2 flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-06.jpg"
                                                            alt="user"></a>
                                                    <div>
                                                        <h6 class="fs-14 mb-1"><a href="messages.html#">Anna
                                                                Johnson</a></h6>
                                                        <p class="mb-0 text-truncate">How are your Today</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-dark d-block mb-1">12:54 PM</span>
                                                    <span class="d-block text-light"><i
                                                            class="ti ti-check text-light"></i></span>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between rounded p-3 user-list mb-1">
                                                <div class="d-flex align-items-center">
                                                    <a href="messages.html#" class="avatar me-2 flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-07.jpg"
                                                            alt="user"></a>
                                                    <div>
                                                        <h6 class="fs-14 mb-1"><a href="messages.html#">Emily
                                                                Davis</a></h6>
                                                        <p class="mb-0 text-truncate">Sure, I can help with...</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-dark d-block mb-1">11:47 PM</span>
                                                    <span class="d-block text-light"><i
                                                            class="ti ti-checks text-light"></i></span>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between rounded p-3 user-list mb-1">
                                                <div class="d-flex align-items-center">
                                                    <a href="messages.html#" class="avatar me-2 flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-08.jpg"
                                                            alt="user"></a>
                                                    <div>
                                                        <h6 class="fs-14 mb-1"><a href="messages.html#">Susan
                                                                Denton</a></h6>
                                                        <p class="mb-0 text-truncate">I'll share the meeting...</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-dark d-block mb-1">10:43 PM</span>
                                                    <span class="d-block text-light"><i
                                                            class="ti ti-checks text-light"></i></span>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between rounded p-3 user-list">
                                                <div class="d-flex align-items-center">
                                                    <a href="messages.html#" class="avatar me-2 flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-09.jpg"
                                                            alt="user"></a>
                                                    <div>
                                                        <h6 class="fs-14 mb-1"><a href="messages.html#">David Cruz</a>
                                                        </h6>
                                                        <p class="mb-0 text-truncate">Let me know if you...</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-dark d-block mb-1">10:43 PM</span>
                                                    <span class="d-block text-light"><i
                                                            class="ti ti-checks text-light"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- end card body -->
                            </div>
                            <div class="flex-fill chat-messages">
                                <!-- card start -->
                                <div class="card border-0 mb-0">

                                    <div
                                        class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3 p-3">
                                        <div class="d-flex align-items-center">
                                            <span class="avatar me-2 flex-shrink-0"><img
                                                    src="{{ URL::asset('') }}assets/img/users/user-10.jpg"
                                                    alt="user"></span>
                                            <div>
                                                <h6 class="fs-14 fw-semibold mb-1">Mark Smith</h6>
                                                <p class="mb-0 d-inline-flex align-items-center"><i
                                                        class="ti ti-point-filled text-success"></i>Online</p>
                                            </div>
                                        </div>
                                        <div class="gap-2 d-flex align-items-center flex-wrap">
                                            <a href="voice-call.html" class="btn btn-icon btn-light"
                                                data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Refresh"
                                                data-bs-original-title="Voice Call"><i class="ti ti-phone"></i></a>
                                            <a href="video-call.html" class="btn btn-icon btn-light"
                                                data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Refresh"
                                                data-bs-original-title="Video Call"><i class="ti ti-video"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-icon btn-light"
                                                data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Refresh"
                                                data-bs-original-title="Info"><i class="ti ti-info-circle"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-icon btn-light close-chat d-md-none"><i
                                                    class="ti ti-x"></i></a>
                                        </div>
                                    </div>

                                    <div class="card-body p-0">
                                        <div class="message-body p-4" data-simplebar>
                                            <div class="chat-list mb-3">
                                                <div class="d-flex align-items-start">
                                                    <span class="avatar online me-2 flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-10.jpg"
                                                            alt="user"></span>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-1">
                                                            <h6 class="fs-14 mb-0">Mark Smith</h6>
                                                            <p class="mb-0 d-inline-flex align-items-center"><i
                                                                    class="ti ti-point-filled mx-2"></i>02:39 PM</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="message-box receive-message p-3">
                                                                <p class="mb-0 fs-16">Hey mark! Did you check out the
                                                                    new logo design?</p>
                                                            </div>
                                                            <div class="ms-2">
                                                                <a href="javascript:void(0);"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="ti ti-dots-vertical"></i></a>
                                                                <ul class="dropdown-menu p-2">
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-heart me-1"></i>Reply</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-pinned me-1"></i>Forward</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-file-export me-1"></i>Copy</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-heart me-1"></i>Mark as
                                                                            Favourite</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-trash me-1"></i>Delete</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-check me-1"></i>Mark as
                                                                            Unread</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-box-align-right me-1"></i>Archeive
                                                                            Chat</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-pinned me-1"></i>Pin
                                                                            Chat</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-list ms-auto mb-3">
                                                <div class="d-flex align-items-start justify-content-end">
                                                    <div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-end mb-1">
                                                            <p class="mb-0 d-inline-flex align-items-center"><i
                                                                    class="ti ti-checks text-success me-1"></i>02:39
                                                                PM<i class="ti ti-point-filled mx-2"></i></p>
                                                            <h6 class="fs-14 fw-semibold mb-0">You</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <a href="javascript:void(0);"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="ti ti-dots-vertical"></i></a>
                                                                <ul class="dropdown-menu p-2">
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-heart me-1"></i>Reply</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-pinned me-1"></i>Forward</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-file-export me-1"></i>Copy</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-heart me-1"></i>Mark as
                                                                            Favourite</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-trash me-1"></i>Delete</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-check me-1"></i>Mark as
                                                                            Unread</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-box-align-right me-1"></i>Archeive
                                                                            Chat</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-pinned me-1"></i>Pin
                                                                            Chat</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="message-box sent-message p-3">
                                                                <p class="mb-0 fs-16">Not yet. Can you send it here?
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="avatar ms-2 online flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-11.jpg"
                                                            alt="user"></span>
                                                </div>
                                            </div>
                                            <div class="chat-list mb-3">
                                                <div class="d-flex align-items-start">
                                                    <span class="avatar online me-2 flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-10.jpg"
                                                            alt="user"></span>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-1">
                                                            <h6 class="fs-14 mb-0">Mark Smith</h6>
                                                            <p class="mb-0 d-inline-flex align-items-center"><i
                                                                    class="ti ti-point-filled mx-2"></i>02:39 PM</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="message-box receive-message p-3">
                                                                <p class="mb-2 fs-16">Sure! Please check the below
                                                                    logo Attached!!!</p>
                                                                <div class="d-flex align-items-center gap-2 d-none">
                                                                    <span class="bg-white d-block rounded p-1"><img
                                                                            src="{{ URL::asset('') }}assets/img/favicon.png"
                                                                            class="rounded" alt="attachment"></span>
                                                                    <span class="bg-white d-block rounded p-1"><img
                                                                            src="{{ URL::asset('') }}assets/img/favicon.png"
                                                                            class="rounded" alt="attachment"></span>
                                                                </div>
                                                            </div>
                                                            <div class="ms-2">
                                                                <a href="javascript:void(0);"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="ti ti-dots-vertical"></i></a>
                                                                <ul class="dropdown-menu p-2">
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-heart me-1"></i>Reply</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-pinned me-1"></i>Forward</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-file-export me-1"></i>Copy</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-heart me-1"></i>Mark as
                                                                            Favourite</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-trash me-1"></i>Delete</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-check me-1"></i>Mark as
                                                                            Unread</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-box-align-right me-1"></i>Archeive
                                                                            Chat</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-pinned me-1"></i>Pin
                                                                            Chat</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center"><span
                                                    class="badge bg-light rounded-pill px-3 text-dark fs-14">Today</span>
                                            </div>
                                            <div class="chat-list ms-auto mb-3">
                                                <div class="d-flex align-items-start justify-content-end">
                                                    <div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-end mb-1">
                                                            <p class="mb-0 d-inline-flex align-items-center"><i
                                                                    class="ti ti-checks text-success me-1"></i>10:00
                                                                AM<i class="ti ti-point-filled mx-2"></i></p>
                                                            <h6 class="fs-14 fw-semibold mb-0">You</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <a href="javascript:void(0);"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="ti ti-dots-vertical"></i></a>
                                                                <ul class="dropdown-menu p-2">
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-heart me-1"></i>Reply</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-pinned me-1"></i>Forward</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-file-export me-1"></i>Copy</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-heart me-1"></i>Mark as
                                                                            Favourite</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-trash me-1"></i>Delete</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-check me-1"></i>Mark as
                                                                            Unread</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-box-align-right me-1"></i>Archeive
                                                                            Chat</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-pinned me-1"></i>Pin
                                                                            Chat</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="message-box sent-message p-3">
                                                                <p class="mb-0 fs-16">Looks clean! I like the font.
                                                                    Maybe try a slightly darker blue?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="avatar ms-2 online flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-11.jpg"
                                                            alt="user"></span>
                                                </div>
                                            </div>
                                            <div class="chat-list mb-3">
                                                <div class="d-flex align-items-start">
                                                    <span class="avatar online me-2 flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-10.jpg"
                                                            alt="user"></span>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-1">
                                                            <h6 class="fs-14 mb-0">Mark Smith</h6>
                                                            <p class="mb-0 d-inline-flex align-items-center"><i
                                                                    class="ti ti-point-filled mx-2"></i>10:05 AM</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="message-box receive-message p-3">
                                                                <p class="mb-0 fs-16">Perfect! That layout will work
                                                                    great on the landing page. 👍</p>
                                                            </div>
                                                            <div class="ms-2">
                                                                <a href="javascript:void(0);"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="ti ti-dots-vertical"></i></a>
                                                                <ul class="dropdown-menu p-2">
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-heart me-1"></i>Reply</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-pinned me-1"></i>Forward</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-file-export me-1"></i>Copy</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-heart me-1"></i>Mark as
                                                                            Favourite</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-trash me-1"></i>Delete</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-check me-1"></i>Mark as
                                                                            Unread</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-box-align-right me-1"></i>Archeive
                                                                            Chat</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-pinned me-1"></i>Pin
                                                                            Chat</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-list ms-auto mb-3">
                                                <div class="d-flex align-items-start justify-content-end">
                                                    <div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-end mb-1">
                                                            <p class="mb-0 d-inline-flex align-items-center"><i
                                                                    class="ti ti-checks text-success me-1"></i>10:00
                                                                AM<i class="ti ti-point-filled mx-2"></i></p>
                                                            <h6 class="fs-14 fw-semibold mb-0">You</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <a href="javascript:void(0);"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="ti ti-dots-vertical"></i></a>
                                                                <ul class="dropdown-menu p-2">
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-heart me-1"></i>Reply</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-pinned me-1"></i>Forward</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-file-export me-1"></i>Copy</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-heart me-1"></i>Mark as
                                                                            Favourite</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-trash me-1"></i>Delete</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-check me-1"></i>Mark as
                                                                            Unread</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-box-align-right me-1"></i>Archeive
                                                                            Chat</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-pinned me-1"></i>Pin
                                                                            Chat</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="message-box sent-message p-3">
                                                                <p class="mb-0 fs-16">Perfect It looks Great!!!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="avatar ms-2 online flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-11.jpg"
                                                            alt="user"></span>
                                                </div>
                                            </div>
                                            <div class="chat-list">
                                                <div class="d-flex align-items-start">
                                                    <span class="avatar online me-2 flex-shrink-0"><img
                                                            src="{{ URL::asset('') }}assets/img/users/user-10.jpg"
                                                            alt="user"></span>
                                                    <div>
                                                        <div class="d-flex align-items-center mb-1">
                                                            <h6 class="fs-14 mb-0">Mark Smith</h6>
                                                            <p class="mb-0 d-inline-flex align-items-center"><i
                                                                    class="ti ti-point-filled mx-2"></i>02:39 PM</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="message-box receive-message p-3">
                                                                <p class="mb-0 fs-16">Hey mark! Did you check out the
                                                                    new logo design?</p>
                                                            </div>
                                                            <div class="ms-2">
                                                                <a href="javascript:void(0);"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="ti ti-dots-vertical"></i></a>
                                                                <ul class="dropdown-menu p-2">
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-heart me-1"></i>Reply</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-pinned me-1"></i>Forward</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-file-export me-1"></i>Copy</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-heart me-1"></i>Mark as
                                                                            Favourite</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-trash me-1"></i>Delete</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-check me-1"></i>Mark as
                                                                            Unread</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-box-align-right me-1"></i>Archeive
                                                                            Chat</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="messages.html#"><i
                                                                                class="ti ti-pinned me-1"></i>Pin
                                                                            Chat</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-footer d-flex align-items-center border-top p-3">
                                            <div class="flex-fill">
                                                <input type="text" class="form-control border-0"
                                                    placeholder="Type Something...">
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-light"><i
                                                        class="ti ti-photo-plus"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-light"><i
                                                        class="ti ti-mood-smile-beam"></i></a>
                                                <div>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-icon btn-outline-light"
                                                        data-bs-toggle="dropdown" aria-label="more options"><i
                                                            class="ti ti-dots-vertical"></i></a>
                                                    <ul class="dropdown-menu p-2">
                                                        <li>
                                                            <a href="messages.html#" class="dropdown-item"><i
                                                                    class="ti ti-camera-selfie me-2"></i>Camera</a>
                                                        </li>
                                                        <li>
                                                            <a href="messages.html#" class="dropdown-item"><i
                                                                    class="ti ti-photo-up me-2"></i>Gallery</a>
                                                        </li>
                                                        <li>
                                                            <a href="messages.html#" class="dropdown-item"><i
                                                                    class="ti ti-music me-2"></i>Audio</a>
                                                        </li>
                                                        <li>
                                                            <a href="messages.html#" class="dropdown-item"><i
                                                                    class="ti ti-map-pin-share me-2"></i>Location</a>
                                                        </li>
                                                        <li>
                                                            <a href="messages.html#" class="dropdown-item"><i
                                                                    class="ti ti-user-check me-2"></i>Contact</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- card start -->
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->

            </div>
            <!-- End Content -->

            @include('admin.layouts.footer')

        </div>

    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="12d1f24e1c51f79b8b135e98-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="12d1f24e1c51f79b8b135e98-text/javascript"></script>

    <!-- Simplebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/simplebar/simplebar.min.js" type="12d1f24e1c51f79b8b135e98-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js" type="12d1f24e1c51f79b8b135e98-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.min.js" type="12d1f24e1c51f79b8b135e98-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js" type="12d1f24e1c51f79b8b135e98-text/javascript"></script>

    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.slimscroll.min.js" type="12d1f24e1c51f79b8b135e98-text/javascript"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('') }}assets/js/chat.js" type="12d1f24e1c51f79b8b135e98-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/slimscroll.js" type="12d1f24e1c51f79b8b135e98-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js" type="12d1f24e1c51f79b8b135e98-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/rocket-loader.min.js" data-cf-settings="12d1f24e1c51f79b8b135e98-|49" defer>
    </script>
</body>

</html>
