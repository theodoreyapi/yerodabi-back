
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Patient Dashboard - Medical & Hospital - Bootstrap 5 Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dreams Technologies">
	
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="assets/js/theme-script.js" type="931dfa7a0dd05b009326fb1e-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Daterangepikcer CSS -->
	<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="assets/plugins/simplebar/simplebar.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css" id="app-style">

</head>

<body>

    <!-- Begin Wrapper -->
    <div class="main-wrapper">

        <!-- Topbar Start -->
        <header class="navbar-header">
            <div class="page-container topbar-menu">
                <div class="d-flex align-items-center gap-2">

                    <!-- Logo -->
                    <a href="index.html" class="logo">

                        <!-- Logo Normal -->
                        <span class="logo-light">
                            <span class="logo-lg"><img src="assets/img/logo.svg" alt="logo"></span>
                            <span class="logo-sm"><img src="assets/img/logo-small.svg" alt="small logo"></span>
                        </span>

                        <!-- Logo Dark -->
                        <span class="logo-dark">
                            <span class="logo-lg"><img src="assets/img/logo-white.svg" alt="dark logo"></span>
                        </span>
                    </a>

                    <!-- Sidebar Mobile Button -->
                    <a id="mobile_btn" class="mobile-btn" href="patient-dashboard.html#sidebar">
                        <i class="ti ti-menu-deep fs-24"></i>
                    </a>
                       
                    <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn2"> 
                        <i class="ti ti-arrow-right"></i>
                    </button>  
					
                    <!-- Search -->
                    <div class="me-auto d-flex align-items-center header-search d-lg-flex d-none">
                        <!-- Search -->
                        <div class="input-icon-start position-relative me-2">
                            <span class="input-icon-addon">
                                <i class="ti ti-search"></i>
                            </span>
                           <input type="text" class="form-control shadow-sm" placeholder="Search">
                           <span class="input-icon-addon text-dark shadow fs-18 d-inline-flex p-0 header-search-icon"><i class="ti ti-command"></i></span>
                        </div>
                        <!-- /Search -->
                    </div>
					
                </div>

                <div class="d-flex align-items-center">
				
                    <!-- Search for Mobile -->
                    <div class="header-item d-flex d-lg-none me-2">
                        <button class="topbar-link btn btn-icon" data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
                            <i class="ti ti-search fs-16"></i>
                        </button>
                    </div>
					
                    <!-- AI Assistance -->
					<a href="javascript:void(0);" class="btn btn-liner-gradient me-3 d-lg-flex d-none">AI Assistance<i class="ti ti-chart-bubble-filled ms-1"></i></a>

                    <div class="header-item">
                        <div class="dropdown me-2">
                            <a href="patient-appointments.html" class="btn topbar-link"><i class="ti ti-calendar-due"></i></a>
                        </div>
                    </div>                    

                    <div class="header-item">
                        <div class="dropdown me-2">
                            <a href="patient-profile-settings.html" class="btn topbar-link"><i class="ti ti-settings-2"></i></a>
                        </div> 
                    </div>                    

                    <!-- Light/Dark Mode Button -->
                    <div class="header-item d-none d-sm-flex me-2">
                        <button class="topbar-link btn btn-icon topbar-link" id="light-dark-mode" type="button">
                            <i class="ti ti-moon fs-16"></i>
                        </button>
                    </div>
                    
					
					<!-- Notification Dropdown -->
                    <div class="header-item">
						<div class="dropdown me-3">
						
							<button class="topbar-link btn btn-icon topbar-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" data-bs-offset="0,24" type="button" aria-haspopup="false" aria-expanded="false">
								<i class="ti ti-bell-check fs-16 animate-ring"></i>
								<span class="notification-badge"></span>
							</button>
							
							<div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg" style="min-height: 300px;">
							
								<div class="p-2 border-bottom">
									<div class="row align-items-center">
										<div class="col">
											<h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
										</div>
									</div>
								</div>
								
								<!-- Notification Body -->
								<div class="notification-body position-relative z-2 rounded-0" data-simplebar>
								 
									<!-- Item-->
									<div class="dropdown-item notification-item py-3 text-wrap border-bottom" id="notification-1">
										<div class="d-flex">
											<div class="me-2 position-relative flex-shrink-0">
												<img src="assets/img/doctors/doctor-01.jpg" class="avatar-md rounded-circle" alt="">
											</div>
											<div class="flex-grow-1">
												<p class="mb-0 fw-medium text-dark">Dr. Smith</p>
												<p class="mb-1 text-wrap">
													updated the <span class="fw-medium text-dark">surgery</span> schedule. 
												</p>
												<div class="d-flex justify-content-between align-items-center">
													<span class="fs-12"><i class="ti ti-clock me-1"></i>4 min ago</span>
													<div class="notification-action d-flex align-items-center float-end gap-2">
														<a href="javascript:void(0);" class="notification-read rounded-circle bg-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Make as Read" aria-label="Make as Read"></a>
														<button class="btn rounded-circle p-0" data-dismissible="#notification-1">
															<i class="ti ti-x"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
							
									<!-- Item-->
									<div class="dropdown-item notification-item py-3 text-wrap border-bottom" id="notification-2">
										<div class="d-flex">
											<div class="me-2 position-relative flex-shrink-0">
												<img src="assets/img/doctors/doctor-06.jpg" class="avatar-md rounded-circle" alt="">
											</div>
											<div class="flex-grow-1">
												<p class="mb-0 fw-medium text-dark">Dr. Patel</p>
												<p class="mb-1 text-wrap">
                                                    completed a <span class="fw-medium text-dark">follow-up</span> report for patient <span class="fw-medium text-dark">Emily</span>.
												</p>
												<div class="d-flex justify-content-between align-items-center">
													<span class="fs-12"><i class="ti ti-clock me-1"></i>8 min ago</span>
													<div class="notification-action d-flex align-items-center float-end gap-2">
														<a href="javascript:void(0);" class="notification-read rounded-circle bg-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Make as Read" aria-label="Make as Read"></a>
														<button class="btn rounded-circle p-0" data-dismissible="#notification-2">
															<i class="ti ti-x"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Item-->
									<div class="dropdown-item notification-item py-3 text-wrap border-bottom" id="notification-3">
										<div class="d-flex">
											<div class="me-2 position-relative flex-shrink-0">
												<img src="assets/img/doctors/doctor-02.jpg" class="avatar-md rounded-circle" alt="">
											</div>
											<div class="flex-grow-1">
												<p class="mb-0 fw-medium text-dark">Emily</p>
												<p class="mb-1 text-wrap">
                                                    booked an appointment with <span class="fw-medium text-dark">Dr. Patel</span> for <span class="fw-medium text-dark">April 15</span>
												</p>
												<div class="d-flex justify-content-between align-items-center">
													<span class="fs-12"><i class="ti ti-clock me-1"></i>15 min ago</span>
													<div class="notification-action d-flex align-items-center float-end gap-2">
														<a href="javascript:void(0);" class="notification-read rounded-circle bg-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Make as Read" aria-label="Make as Read"></a>
														<button class="btn rounded-circle p-0" data-dismissible="#notification-3">
															<i class="ti ti-x"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Item-->
									<div class="dropdown-item notification-item py-3 text-wrap" id="notification-4">
										<div class="d-flex">
											<div class="me-2 position-relative flex-shrink-0">
												<img src="assets/img/doctors/doctor-07.jpg" class="avatar-md rounded-circle" alt="">
											</div>
											<div class="flex-grow-1">
												<p class="mb-0 fw-medium text-dark">Amelia</p>
												<p class="mb-1 text-wrap">
                                                    completed the <span class="fw-medium text-dark">pre-visit</span> health questionnaire.
												</p>
												<div class="d-flex justify-content-between align-items-center">
													<span class="fs-12"><i class="ti ti-clock me-1"></i>20 min ago</span>
													<div class="notification-action d-flex align-items-center float-end gap-2">
														<a href="javascript:void(0);" class="notification-read rounded-circle bg-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="Make as Read" aria-label="Make as Read"></a>
														<button class="btn rounded-circle p-0" data-dismissible="#notification-4">
															<i class="ti ti-x"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									 
								</div>
								
								<!-- View All-->
								<div class="p-2 rounded-bottom border-top text-center">
									<a href="patient-notifications.html" class="text-center text-decoration-underline fs-14 mb-0">
										View All Notifications
									</a>
								</div>
								
							</div>
						</div>
					</div>
					
					<!-- User Dropdown -->
					<div class="dropdown profile-dropdown d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0);" class="topbar-link dropdown-toggle drop-arrow-none position-relative" data-bs-toggle="dropdown" data-bs-offset="0,22" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/img/users/user-02.jpg" width="32" class="rounded-circle d-flex" alt="user-image">
                            <span class="online text-success"><i class="ti ti-circle-filled d-flex bg-white rounded-circle border border-1 border"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
                        
                            <div class="d-flex align-items-center bg-light rounded-3 p-2 mb-2">
                                <img src="assets/img/users/user-02.jpg" class="rounded-circle" width="42" height="42" alt="">
                                <div class="ms-2">
                                    <p class="fw-medium text-dark mb-0">Carol Lam</p>
                                    <span class="d-block fs-13">Patient</span>
                                </div>
                            </div>

                            <!-- Item-->
                            <a href="patient-profile-settings.html" class="dropdown-item">
                                <i class="ti ti-user-circle me-1 align-middle"></i>
                                <span class="align-middle">Profile Settings</span>
                            </a>

                            <!-- item -->
                            <div class="form-check form-switch form-check-reverse d-flex align-items-center justify-content-between dropdown-item mb-0">
                                <label class="form-check-label" for="notify"><i class="ti ti-bell me-1"></i>Notifications</label>
                                <input class="form-check-input me-0" type="checkbox" role="switch" id="notify">
                            </div>

                            <!-- Item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="ti ti-receipt me-1 align-middle"></i>
                                <span class="align-middle">Activity Logs</span>
                            </a>

                             <!-- Item-->
                             <a href="javascript:void(0);" class="dropdown-item">
                                <i class="ti ti-help me-1 align-middle"></i>
                                <span class="align-middle">Help & Support</span>
                            </a>
                                        
                            
                            <!-- Item-->
                            <div class="pt-2 mt-2 border-top">
                                <a href="login.html" class="dropdown-item text-danger">
                                    <i class="ti ti-logout me-1 fs-17 align-middle"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </div>
                        </div>
                    </div>
						
                </div>
            </div>
        </header>
        <!-- Topbar End -->

        <!-- Search Modal -->
        <div class="modal fade" id="searchModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-transparent">
                    <div class="card shadow-none mb-0">
                        <div class="px-3 py-2 d-flex flex-row align-items-center" id="search-top">
                            <i class="ti ti-search fs-22"></i>
                            <input type="search" class="form-control border-0" placeholder="Search">
                            <button type="button" class="btn p-0" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x fs-22"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidenav Menu Start -->
        <div class="sidebar" id="sidebar">
            
            <!-- Start Logo -->
            <div class="sidebar-logo">
                <div>
                    <!-- Logo Normal -->
                    <a href="index.html" class="logo logo-normal">
                        <img src="assets/img/logo.svg" alt="Logo">
                    </a>

                    <!-- Logo Small -->
                    <a href="index.html" class="logo-small">
                        <img src="assets/img/logo-small.svg" alt="Logo">
                    </a>

                    <!-- Logo Dark -->
                    <a href="index.html" class="dark-logo">
                        <img src="assets/img/logo-white.svg" alt="Logo">
                    </a>
                </div>
                <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn"> 
                    <i class="ti ti-arrow-left text-body"></i>
                </button>

                <!-- Sidebar Menu Close -->
                <button class="sidebar-close">
                    <i class="ti ti-x align-middle"></i>
                </button>                
            </div>
            <!-- End Logo -->

            <!-- Sidenav Menu -->
            <div class="sidebar-inner" data-simplebar>                
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title"><span>Main Menu</span></li>
                        <li>
                            <ul>
                                <li class="active">
                                    <a href="patient-dashboard.html">
                                        <i class="ti ti-layout-dashboard"></i><span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="patient-appointments.html">
                                        <i class="ti ti-calendar-check"></i><span>Appointments</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="patient-doctors.html">
                                        <i class="ti ti-stethoscope"></i><span>Doctors</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="patient-prescriptions.html">
                                        <i class="ti ti-prescription"></i><span>Prescriptions</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="patient-invoices.html">
                                        <i class="ti ti-star"></i><span>Invoice</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-settings"></i><span>Settings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="patient-profile-settings.html">Profile Settings</a></li>
                                        <li><a href="patient-password-settings.html">Change Password</a></li>
                                        <li><a href="patient-notifications-settings.html">Notifications</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                                        
                    </ul>                   
                </div>
                <div class="sidebar-footer border-top mt-3">
                    <div class="trial-item mt-0 p-3 text-center">
                        <div class="trial-item-icon rounded-4 mb-3 p-2 text-center shadow-sm d-inline-flex">
                            <img src="assets/img/icons/sidebar-icon.svg" alt="img">
                        </div>
                        <div>
                            <h6 class="fs-14 fw-semibold mb-1">Upgrade To Pro</h6>
                            <p class="fs-13 mb-0">Check 1 min video and begin use Preclinic like a pro</p>
                        </div>
                        <a href="javascript:void(0);" class="close-icon shadow-sm"><i class="ti ti-x"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Sidenav Menu End -->

        <!-- ========================
			Start Page Content
		========================= -->
         
        <div class="page-wrapper">

            <!-- Start Content -->
            <div class="content pb-0">

                <!-- Page Header -->
                <div class="d-flex align-items-sm-center justify-content-between flex-wrap gap-2 mb-4">
                    <div>
                        <h4 class="fw-bold mb-0">Patient Dashboard</h4>
                    </div>
                    <div class="d-flex align-items-center flex-wrap gap-2">
                       <a href="javascript:void(0);" class="btn btn-primary d-inline-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#new_appointment"><i class="ti ti-plus me-1"></i>New Appointment</a>
                    </div>
				</div>
				<!-- End Page Header -->

                <!-- row start -->
                <div class="row">

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card flex-fill w-100 shadow-sm">
                           <div class="card-body">
                              <div class="d-flex align-items-center mb-4">
                                <span class="avatar bg-primary rounded-circle fs-20 d-inline-flex flex-shrink-0"><i class="ti ti-calendar-heart"></i></span>
                                <div class="ms-2">
                                    <p class="mb-1 text-truncate">Total Appointments</p>
                                    <h3 class="fw-bold mb-0">24</h3>
                                </div>
                              </div>
                              <div class="d-flex align-items-center">
                                <span class="badge fw-medium bg-success flex-shrink-0 me-2">+95%</span>
                                <p class="fs-13 mb-0">in last 7 Days </p>
                              </div>
                           </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card flex-fill w-100 shadow-sm">
                           <div class="card-body">
                              <div class="d-flex align-items-center mb-4">
                                <span class="avatar bg-danger rounded-circle fs-20 d-inline-flex flex-shrink-0"><i class="ti ti-users"></i></span>
                                <div class="ms-2">
                                    <p class="mb-1 text-truncate">Online Consultations</p>
                                    <h3 class="fw-bold mb-0">36</h3>
                                </div>
                              </div>
                              <div class="d-flex align-items-center">
                                <span class="badge fw-medium bg-danger flex-shrink-0 me-2">-15%</span>
                                <p class="fs-13 mb-0">in last 7 Days</p>
                              </div>
                           </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card flex-fill w-100 shadow-sm">
                           <div class="card-body">
                              <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <p class="mb-1 text-truncate">Blood Pressure</p>
                                    <span class="badge fw-medium bg-success flex-shrink-0 me-2">+95%</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <h3 class="fw-bold mb-0 me-1">89</h3>
                                    <p class="mb-0">g/dl</p>
                                </div>
                              </div>
                              <div id="s-col-8" class="chart-set"></div>
                           </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-3 col-md-6 d-flex">
                        <div class="card flex-fill w-100 shadow-sm">
                           <div class="card-body">
                              <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    <p class="mb-1 text-truncate">Heart Rate</p>
                                    <span class="badge fw-medium bg-success flex-shrink-0 me-2">+95%</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <h3 class="fw-bold mb-0 me-1">87</h3>
                                    <p class="mb-0">bpm</p>
                                </div>
                              </div>
                              <div id="s-col-9" class="chart-set"></div>
                           </div>
                        </div>
                    </div>
                    <!-- col end -->

                </div>
                <!-- row start -->

                <!-- row start -->
                <div class="row">
                    
                    <!-- col start -->
                    <div class="col-xl-4 col-lg-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">My Doctors</h5> 
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-01.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-semibold">Dr. Mick Thompson</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">Cardiologist</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-danger border border-danger flex-shrink-0">20 Bookings</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-02.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-semibold">Dr. Sarah Johnson</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">Orthopedic Surgeon</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-danger border border-danger flex-shrink-0">15 Bookings</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-03.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-semibold">Dr. Emily Carter</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">Pediatrician</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-danger border border-danger flex-shrink-0">12 Bookings</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-04.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-semibold">Dr. David Lee</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">Gynecologist</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-danger border border-danger flex-shrink-0">08 Bookings</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-0">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0">
                                            <img src="assets/img/doctors/doctor-05.jpg" alt="img" class="rounded-circle">
                                        </a>
                                        <div>
                                          <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-semibold">Dr. Anna Kim</a></h6>
                                          <p class="mb-0 fs-13 text-truncate">Psychiatrist</p>
                                        </div>
                                    </div>
                                    <span class="badge fw-medium badge-soft-danger border border-danger flex-shrink-0">06 Bookings</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 col-lg-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Prescriptions</h5> 
                            </div>
                            <div class="card-body">
                                <div class="overflow-auto">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="d-flex align-items-center flex-shrink-0">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0 bg-light rounded-circle text-dark">
                                               <i class="ti ti-file-description text-body fs-20"></i>
                                            </a>
                                            <div>
                                              <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-semibold">Cardiology Prescription</a></h6>
                                              <p class="mb-0 fs-13 text-truncate">20 Apr 2025</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="btn btn-outline-white d-inline-flex align-items-center shadow-sm me-2 p-1"><i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-outline-white d-inline-flex align-items-center shadow-sm p-1"><i class="ti ti-download"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="d-flex align-items-center flex-shrink-0">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0 bg-light rounded-circle text-dark">
                                               <i class="ti ti-file-description text-body fs-20"></i>
                                            </a>
                                            <div>
                                              <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-semibold">Dentist Prescription</a></h6>
                                              <p class="mb-0 fs-13 text-truncate">25 Mar 2025</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="btn btn-outline-white d-inline-flex align-items-center shadow-sm me-2 p-1"><i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-outline-white d-inline-flex align-items-center shadow-sm p-1"><i class="ti ti-download"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="d-flex align-items-center flex-shrink-0">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0 bg-light rounded-circle text-dark">
                                               <i class="ti ti-file-description text-body fs-20"></i>
                                            </a>
                                            <div>
                                              <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-semibold">Dentist Prescription</a></h6>
                                              <p class="mb-0 fs-13 text-truncate">16 Mar 2025</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="btn btn-outline-white d-inline-flex align-items-center shadow-sm me-2 p-1"><i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-outline-white d-inline-flex align-items-center shadow-sm p-1"><i class="ti ti-download"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="d-flex align-items-center flex-shrink-0">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0 bg-light rounded-circle text-dark">
                                               <i class="ti ti-file-description text-body fs-20"></i>
                                            </a>
                                            <div>
                                              <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-semibold">Dentist Prescription</a></h6>
                                              <p class="mb-0 fs-13 text-truncate">12 Feb 2025</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="btn btn-outline-white d-inline-flex align-items-center shadow-sm me-2 p-1"><i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-outline-white d-inline-flex align-items-center shadow-sm p-1"><i class="ti ti-download"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-0">
                                        <div class="d-flex align-items-center flex-shrink-0">
                                            <a href="javascript:void(0);" class="avatar me-2 flex-shrink-0 bg-light rounded-circle text-dark">
                                               <i class="ti ti-file-description text-body fs-20"></i>
                                            </a>
                                            <div>
                                              <h6 class="fs-14 mb-1 text-truncate"><a href="javascript:void(0);" class="fw-semibold">Cardiology Prescription</a></h6>
                                              <p class="mb-0 fs-13 text-truncate">04 Jan 2025</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="btn btn-outline-white d-inline-flex align-items-center shadow-sm me-2 p-1"><i class="ti ti-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-outline-white d-inline-flex align-items-center shadow-sm p-1"><i class="ti ti-download"></i></a>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Recent Activity</h5> 
                            </div>
                            <div class="card-body">
                                <div class="recent-activity">
                                    <div class="d-flex align-items-center mb-3">
                                        <span><i class="ti ti-point-filled fs-24 text-success"></i></span>
                                        <div class="ms-2">
                                          <p class="mb-1 text-truncate">Appointment with <a href="javascript:void(0);" class="fw-semibold">Primary Care Physician</a></p>
                                          <p class="fs-13 mb-0">24 Mar 2025, 10:55 AM</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span><i class="ti ti-point-filled fs-24 text-danger"></i></span>
                                        <div class="ms-2">
                                          <p class="mb-1 text-truncate"><a href="javascript:void(0);" class="fw-semibold">Blood Pressure Check</a> (Home Monitoring)</p>
                                          <p class="fs-13 mb-0">24 Apr 2025, 11:00 AM</p>
                                        </div>
                                    </div>    
                                    <div class="d-flex align-items-center mb-3">
                                        <span><i class="ti ti-point-filled fs-24 text-warning"></i></span>
                                        <div class="ms-2">
                                          <p class="mb-1"><a href="javascript:void(0);" class="fw-semibold">Physical Therapy Session</a> Knee strengthening exercises</p>
                                          <p class="fs-13 mb-0">24 Apr 2025, 11:00 AM</p>
                                        </div>
                                    </div>   
                                    <div class="d-flex align-items-center mb-0">
                                        <span><i class="ti ti-point-filled fs-24 text-info"></i></span>
                                        <div class="ms-2">
                                          <p class="mb-1"><a href="javascript:void(0);" class="fw-semibold">Discuss dietary changes</a> to manage blood sugar levels and weight</p>
                                          <p class="fs-13 mb-0">24 Apr 2025, 11:00 AM</p>
                                        </div>
                                    </div> 
                                </div>                           
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                </div>
                <!-- row end -->

                <!-- card start -->
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="fw-bold mb-0">Vitals</h5> 
                    </div>
                    <div class="card-body">

                        <!-- row start -->
                        <div class="row row-gap-3 row-cols-1 row-cols-xl-6 row-cols-md-3 row-cols-sm-2">

                            <!-- col start -->
                            <div class="col d-flex">
                                <div class="p-3 border shadow-sm flex-fill w-100 rounded-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar bg-primary rounded-circle flex-shrink-0"><img src="assets/img/icons/weight.svg" alt="img" class="w-auto h-auto"></span>
                                        <div class="ms-1">
                                            <p class="mb-1">Weight</p>
                                            <p class="text-truncate"><span class="fs-18 fw-bold text-dark">100</span> Kg</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col end -->

                            <!-- col start -->
                            <div class="col d-flex">
                                <div class="p-3 border shadow-sm flex-fill w-100 rounded-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar bg-primary rounded-circle flex-shrink-0"><img src="assets/img/icons/rotate-left.svg" alt="img" class="w-auto h-auto"></span>
                                        <div class="ms-1">
                                            <p class="mb-1">Height</p>
                                            <p class="text-truncate"><span class="fs-18 fw-bold text-dark">154</span> Cm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col end -->

                            <!-- col start -->
                            <div class="col d-flex">
                                <div class="p-3 border shadow-sm flex-fill w-100 rounded-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar bg-primary rounded-circle flex-shrink-0"><img src="assets/img/icons/user-cirlce-add.svg" alt="img" class="w-auto h-auto"></span>
                                        <div class="ms-1">
                                            <p class="mb-1">BMI</p>
                                            <p class="text-truncate"><span class="fs-18 fw-bold text-dark">19.2</span> kg/cm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col end -->

                            <!-- col start -->
                            <div class="col d-flex">
                                <div class="p-3 border shadow-sm flex-fill w-100 rounded-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar bg-primary rounded-circle flex-shrink-0"><img src="assets/img/icons/driver-2.svg" alt="img" class="w-auto h-auto"></span>
                                        <div class="ms-1">
                                            <p class="mb-1">Pulse</p>
                                            <p class="text-truncate"><span class="fs-18 fw-bold text-dark">97%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col end -->

                            <!-- col start -->
                            <div class="col d-flex">
                                <div class="p-3 border shadow-sm flex-fill w-100 rounded-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar bg-primary rounded-circle flex-shrink-0"><img src="assets/img/icons/wind.svg" alt="img" class="w-auto h-auto"></span>
                                        <div class="ms-1">
                                            <p class="mb-1">SPO2</p>
                                            <p class="text-truncate"><span class="fs-18 fw-bold text-dark">98%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col end -->

                            <!-- col start -->
                            <div class="col d-flex">
                                <div class="p-3 border shadow-sm flex-fill w-100 rounded-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar bg-primary rounded-circle flex-shrink-0"><img src="assets/img/icons/sun.svg" alt="img" class="w-auto h-auto"></span>
                                        <div class="ms-1">
                                            <p class="mb-1 text-truncate">Temprature</p>
                                            <p class="text-truncate"><span class="fs-18 fw-bold text-dark">101</span> C</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col end -->
        
                        </div>
                        <!-- row end -->

                    </div>
                </div>
                <!-- card end -->

                <!-- row start -->
                <div class="row">

                    <!-- col start -->
                    <div class="col-lg-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Consultation By Department</h5> 
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Monthly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="patient-dashboard.html#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="patient-dashboard.html#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="patient-dashboard.html#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <div id="s-col-10" class="chart-set"></div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-lg-6 d-flex">
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Recent Transactions</h5> 
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Weekly <i class="ti ti-chevron-down ms-1"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="patient-dashboard.html#">Monthly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="patient-dashboard.html#">Weekly</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="patient-dashboard.html#">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">

                                <!-- Table start -->
                                <div class="table-responsive table-nowrap">
                                    <table class="table">
                                        <tbody>
                                            <tr class="border">
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="assets/img/doctors/doctor-06.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-semibold">Dr. John Smith</a></h6>
                                                          <p class="mb-0 fs-13">Neurosurgeon</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="fs-14 fw-semibold">Consultation Fees</h6>
                                                    <p class="fs-13">$450</p>
                                                </td>
                                                <td class="pe-0 text-end"><span class="badge fs-13 py-1 badge-soft-success border border-success rounded text-success fw-medium">Success</span></td>
                                            </tr>
                                            <tr class="border">
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="assets/img/doctors/doctor-07.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-semibold">Dr. Lisa White</a></h6>
                                                          <p class="mb-0 fs-13">Oncologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="fs-14 fw-semibold">Consultation Fees</h6>
                                                    <p class="fs-13">$350</p>
                                                </td>
                                                <td class="pe-0 text-end"><span class="badge fs-13 py-1 badge-soft-success border border-success rounded text-success fw-medium">Success</span></td>
                                            </tr>
                                            <tr class="border">
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="assets/img/doctors/doctor-08.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-semibold">Dr. Patricia Brown</a></h6>
                                                          <p class="mb-0 fs-13">Pulmonologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="fs-14 fw-semibold">Consultation Fees</h6>
                                                    <p class="fs-13">$400</p>
                                                </td>
                                                <td class="pe-0 text-end"><span class="badge fs-13 py-1 badge-soft-danger border border-danger rounded text-danger fw-medium">Failed</span></td>
                                            </tr>
                                            <tr class="border">
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="assets/img/doctors/doctor-09.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-semibold">Dr. Rachel Green</a></h6>
                                                          <p class="mb-0 fs-13">Urologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="fs-14 fw-semibold">Consultation Fees</h6>
                                                    <p class="fs-13">$550</p>
                                                </td>
                                                <td class="pe-0 text-end"><span class="badge fs-13 py-1 badge-soft-success border border-success rounded text-success fw-medium">Success</span></td>
                                            </tr>
                                            <tr class="border">
                                                <td class="ps-0">
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="avatar me-2">
                                                            <img src="assets/img/doctors/doctor-10.jpg" alt="img" class="rounded-circle">
                                                        </a>
                                                        <div>
                                                          <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-semibold">Dr. Michael Smith</a></h6>
                                                          <p class="mb-0 fs-13">Cardiologist</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="fs-14 fw-semibold">Consultation Fees</h6>
                                                    <p class="fs-13">$600</p>
                                                </td>
                                                <td class="pe-0 text-end"><span class="badge fs-13 py-1 badge-soft-success border border-success rounded text-success fw-medium">Success</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Table end -->

                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                </div>
                <!-- row end -->

                <!-- card start -->
                <div class="card shadow-sm flex-fill w-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0">Recent Appointments</h5> 
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn btn-sm px-2 border shadow-sm btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Weekly <i class="ti ti-chevron-down ms-1"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="patient-dashboard.html#">Monthly</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="patient-dashboard.html#">Weekly</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="patient-dashboard.html#">Yearly</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Table start -->
                        <div class="table-responsive table-nowrap">
                            <table class="table border">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Name & Designation</th>
                                        <th>Date & Time</th>
                                        <th>Consultation Fees</th>
                                        <th>Mode</th>
                                        <th>Status</th>                                        
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar me-2">
                                                    <img src="assets/img/doctors/doctor-01.jpg" alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                  <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-semibold">Dr. Mick Thompson</a></h6>
                                                  <p class="mb-0 fs-13">Cardiologist</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>27 May 2025 - 09:30 AM</td>
                                        <td class="fw-semibold text-dark">$400</td>
                                        <td>Online</td>
                                        <td><span class="badge bg-success fw-medium">Checked Out</span></td>                                        
                                        <td>
                                            <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                <i class="ti ti-calendar-plus"></i>
                                            </a>
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar me-2">
                                                    <img src="assets/img/doctors/doctor-09.jpg" alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                  <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-semibold">Dr. Sarah Johnson</a></h6>
                                                  <p class="mb-0 fs-13">Orthopedic Surgeon</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>26 May 2025 - 10:15 AM</td>
                                        <td class="fw-semibold text-dark">$370</td>
                                        <td>Online</td>
                                        <td><span class="badge bg-warning fw-medium">Checked in</span></td>                                        
                                        <td>
                                            <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                <i class="ti ti-calendar-plus"></i>
                                            </a>
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar me-2">
                                                    <img src="assets/img/doctors/doctor-03.jpg" alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                  <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-semibold">Dr. Emily Carter</a></h6>
                                                  <p class="mb-0 fs-13">Pediatrician</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>25 May 2025 - 02:40 PM</td>
                                        <td class="fw-semibold text-dark">$450</td>
                                        <td>In-Person</td>
                                        <td><span class="badge bg-danger fw-medium">Cancelled</span></td>                                        
                                        <td>
                                            <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                <i class="ti ti-calendar-plus"></i>
                                            </a>
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar me-2">
                                                    <img src="assets/img/doctors/doctor-04.jpg" alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                  <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-semibold">Dr. David Lee</a></h6>
                                                  <p class="mb-0 fs-13">Gynecologist</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>24 May 2025 - 11:30 AM</td>
                                        <td class="fw-semibold text-dark">$310</td>
                                        <td>In-Person</td>
                                        <td><span class="badge bg-info fw-medium">Schedule</span></td>                                        
                                        <td>
                                            <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                <i class="ti ti-calendar-plus"></i>
                                            </a>
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="avatar me-2">
                                                    <img src="assets/img/doctors/doctor-05.jpg" alt="img" class="rounded-circle">
                                                </a>
                                                <div>
                                                  <h6 class="fs-14 mb-1"><a href="javascript:void(0);" class="fw-semibold">Dr. Anna Kim</a></h6>
                                                  <p class="mb-0 fs-13">Psychiatrist</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>23 May 2025 - 04:10 PM</td>
                                        <td class="fw-semibold text-dark">$400</td>
                                        <td>Online</td>
                                        <td><span class="badge bg-info fw-medium">Schedule</span></td>                                        
                                        <td>
                                            <a href="javascript:void(0);" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1 me-1">
                                                <i class="ti ti-calendar-plus"></i>
                                            </a>
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" class="shadow-sm fs-14 d-inline-flex border rounded-2 p-1">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#edit_appointment"><i class="ti ti-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Table end -->
                    </div>
                </div>
                <!-- card end -->
                                
            </div>
            <!-- End Content -->

            <!-- Footer Start -->
            <div class="footer text-center bg-white p-2 border-top">
                <p class="text-dark mb-0">2025 &copy; <a href="javascript:void(0);" class="link-primary">Preclinic</a>, All Rights Reserved</p>
            </div>
            <!-- Footer End -->

        </div>

        <!-- ========================
			End Page Content
		========================= -->

    </div>
    <!-- End Wrapper -->

    <!-- Start Add New Appointment -->
    <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1" id="new_appointment">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold">New Appointment</h5>
                <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
        </div>
        <div class="offcanvas-body pt-3">
            <form action="patient-dashboard.html#">

                <!-- start row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment ID <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control rounded bg-light" value="AP234354">
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Patient<span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Select
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Search">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/users/user-02.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Emily Clark
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-01.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>John Carter
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-16.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Sophia White
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-15.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Michael Johnson
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-14.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Olivia Harris
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-01.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>David Anderson
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment Type <span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Select
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li class="list-none">
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Online
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Member
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Date of Appointment <span class="text-danger">*</span></label>
                            <div class="input-icon-end position-relative">  
                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                <span class="input-icon-addon">
                                    <i class="ti ti-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Time <span class="text-danger">*</span></label>
                            <div class="input-icon-end position-relative">  
                                <input type="text" class="form-control timepicker" placeholder="-- : --">
                                <span class="input-icon-addon">
                                    <i class="ti ti-clock"></i>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div>
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment Reason</label>
                                <textarea rows="4" class="form-control rounded"> </textarea>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Status<span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Select
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Checked Out
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Checked In
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Cancelled
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Scheduled
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->
                </div>
                <!-- end row-->

                
            </form>
        </div>
        <div class="offcanvas-footer mb-1 mt-3 p-3 border-1 border-top">
            <div class=" d-flex justify-content-end gap-2">
                <a href="javascript:void(0);" class="btn btn-light btm-md">Cancel</a>
                <button data-bs-dismiss="offcanvas" class="btn btn-primary btm-md">Create Create Appointment</button>
            </div>
        </div>
    </div>
    <!-- End Add New Appointment-->

    <!-- Start View Details -->
    <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1" id="view_details">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold">Appointment Details <span class="badge badge-soft-primary border pt-1 px-2 border-primary fw-medium ms-2">#AP544658</span></h5>
                <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"></button>            </div>
        </div>
        <div class="offcanvas-body pt-0 px-0">
            <h6 class="bg-light py-2 px-3 text-dark fw-bold"> When & Where </h6>

            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 bg-light mx-3 p-3 rounded my-3">
                <div class="d-flex align-items-center gap-2">
                    <div class="avatar avatar-lg">
                        <img src="assets/img/doctors/doctor-01.jpg" alt="doctor-01" class="img-fluid img1 rounded-circle">
                    </div>
                    <h6 class="fs-14 fw-semibold m-0"> Dr. Emily Carter <span class="d-block fs-13 fw-normal text-body pt-1"> Pediatrician </span></h6>
                </div>
                <div class="gap-1 d-flex">
                    <a href="patient-dashboard.html" class="bg-white d-flex align-items-center justify-content-center p-1 border rounded"> <i class="ti ti-brand-hipchat fs-13"></i></a>
                    <a href="patient-dashboard.html" class="bg-white d-flex align-items-center justify-content-center p-1 border rounded"> <i class="ti ti-video fs-13"></i></a>
                </div>
            </div>

            <div class="px-3 my-4">
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Appointment On <span class="text-body fw-normal"> Saturday, 25 Apr 2025  </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Time <span class="text-body fw-normal"> 09:00 AM - 11:00 AM  </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Location <span class="text-body fw-normal">Newyork , USA   </span> </p>
                <p class="text-dark mb-3 fw-semibold d-flex align-items-center justify-content-between"> Appointment Type <span class="text-body fw-normal"> Online Consultation </span> </p>
            </div>
            <h6 class="bg-light py-2 px-3 text-dark fw-bold"> Appointment Details  </h6>
            <div class="px-3 my-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center"> 
                        Telehealth 
                        <label class="d-flex align-items-center form-switch ps-1">
                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                        </label>
                    </div>
                    <div>  <a href="https://preclinic.dreamstechnologies.com/html/template/online-consulation.html" class="btn-primary btn btn-sm rounded d-flex align-items-center"> <i class="ti ti-video me-1 fs-13"></i> Start </a></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p class="text-dark"> Status </p>
                    </div>
                    
                    <div class="col-lg-6 col-md-6"> 
                        <div class="mb-0">
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Pending
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-0 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Checked Out
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Checked In
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Cancelled
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Scheduled
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Add New Appointment-->

    <!-- Start Edit New Appointment -->
    <div class="offcanvas offcanvas-offset offcanvas-end" tabindex="-1" id="edit_appointment">
        <div class="offcanvas-header d-block pb-0 px-0">
            <div class="border-bottom d-flex align-items-center justify-content-between pb-3 px-3">
                <h5 class="offcanvas-title fs-18 fw-bold"> Edit Appointment</h5>
                <button type="button" class="btn-close custom-btn-close opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
        </div>
        <div class="offcanvas-body pt-3">
            <form action="patient-dashboard.html#">
                <!-- start row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment ID <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control rounded bg-light" value="AP234354">
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Patient<span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Emily Clark
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Search">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/users/user-02.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Emily Clark
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-01.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>John Carter
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-16.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Sophia White
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-15.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Michael Johnson
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-14.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>Olivia Harris
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                <span class="avatar avatar-sm rounded-circle me-2"><img src="assets/img/profiles/avatar-01.jpg" class="flex-shrink-0 rounded-circle" alt="img"></span>David Anderson
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment Type <span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    In Person
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-0 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                In Person
                                            </label>
                                        </li>
                                        <li class="list-none">
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Online
                                            </label>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Date of Appointment <span class="text-danger">*</span></label>
                            <div class="input-icon-end position-relative">  
                                <input type="text" class="form-control datetimepicker" placeholder="20/08/2025">
                                <span class="input-icon-addon">
                                    <i class="ti ti-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium"> Time <span class="text-danger">*</span></label>
                            <div class="input-icon-end position-relative">  
                                <input type="text" class="form-control timepicker" placeholder="01 : 20 : PM">
                                <span class="input-icon-addon">
                                    <i class="ti ti-clock"></i>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div>
                                <label class="form-label mb-1 text-dark fs-14 fw-medium">Appointment Reason</label>
                                <textarea rows="4" class="form-control rounded"> An account of the present illness, which includes the circumstances surrounding the onset of recent health changes and the Purpose. </textarea>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label mb-1 text-dark fs-14 fw-medium">Status<span class="text-danger">*</span></label>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle form-control rounded d-flex align-items-center justify-content-between border" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
                                    Checked Out
                                </a>
                                <div class="dropdown-menu shadow-lg w-100 dropdown-info">
                                    <div class="mb-3">
                                        <div class="input-icon-start position-relative">
                                            <span class="input-icon-addon fs-12">
                                                <i class="ti ti-search"></i>
                                            </span>
                                            <input type="text" class="form-control form-control-sm" placeholder="Select">
                                        </div>
                                    </div>
                                    <ul class="mb-3 list-style-none">
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Checked Out
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                                Checked In
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Cancelled
                                            </label>
                                        </li>
                                        <li>
                                            <label class="dropdown-item px-2 d-flex align-items-center text-dark">
                                                <input class="form-check-input m-0 me-2" type="checkbox">
                                                Scheduled
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->
                </div>
                <!-- end row-->
            </form>
        </div>
        <div class="offcanvas-footer mb-1 mt-3 p-3 border-1 border-top">
            <div class=" d-flex justify-content-end gap-2">
                <a href="javascript:void(0);" class="btn btn-light btm-md">Cancel</a>
                <button data-bs-dismiss="offcanvas" class="btn btn-primary btm-md">Create Create Appointment</button>
            </div>
        </div>
    </div>
    <!-- End Edit New Appointment-->

    <!-- Start Delete Modal  -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center position-relative">
                    <img src="assets/img/bg/delete-modal-bg-01.png" alt="" class="img-fluid position-absolute top-0 start-0 z-0">
                    <img src="assets/img/bg/delete-modal-bg-02.png" alt="" class="img-fluid position-absolute bottom-0 end-0 z-0">
                    <div class="mb-3 position-relative z-1">
                        <span class="avatar avatar-lg bg-danger text-white"><i class="ti ti-trash fs-24"></i></span>
                    </div>
                    <h5 class="fw-bold mb-1 position-relative z-1">Delete Confirmation</h5>
                    <p class="mb-3 position-relative z-1">Are you sure want to delete?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light position-relative z-1 me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="patient-dashboard.html" class="btn btn-danger position-relative z-1" data-bs-dismiss="modal">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Modal  -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js" type="931dfa7a0dd05b009326fb1e-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js" type="931dfa7a0dd05b009326fb1e-text/javascript"></script>    

	<!-- Simplebar JS -->
	<script src="assets/plugins/simplebar/simplebar.min.js" type="931dfa7a0dd05b009326fb1e-text/javascript"></script>

    <!-- Daterangepikcer JS -->
	<script src="assets/js/moment.min.js" type="931dfa7a0dd05b009326fb1e-text/javascript"></script>
	<script src="assets/plugins/daterangepicker/daterangepicker.js" type="931dfa7a0dd05b009326fb1e-text/javascript"></script>

    <!-- Datetimepicker JS -->
    <script src="assets/js/moment.min.js" type="931dfa7a0dd05b009326fb1e-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="931dfa7a0dd05b009326fb1e-text/javascript"></script> 

    <!-- Chart JS -->
    <script src="assets/plugins/apexchart/apexcharts.min.js" type="931dfa7a0dd05b009326fb1e-text/javascript"></script>
    <script src="assets/plugins/apexchart/chart-data.js" type="931dfa7a0dd05b009326fb1e-text/javascript"></script>

    <!-- Main JS -->
    <script src="assets/js/script.js" type="931dfa7a0dd05b009326fb1e-text/javascript"></script>

<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="931dfa7a0dd05b009326fb1e-|49" defer></script></body>

</html>