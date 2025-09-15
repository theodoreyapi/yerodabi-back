
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payroll - Bootstrap 5 Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dreams Technologies">
	
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">

    <!-- Theme Config Js -->
    <script src="assets/js/theme-script.js" type="f7d600ad40aca58baa5b200b-text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

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
                    <a id="mobile_btn" class="mobile-btn" href="payroll-2.html#sidebar">
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
                    <!-- AI Assistance -->

                    <!-- Appointment -->
                    <div class="header-item">
                        <div class="dropdown me-2">
                            <a href="new-appointment.html" class="btn topbar-link"><i class="ti ti-calendar-due"></i></a>
                        </div>
                    </div>                    
                    <!-- Appointment -->

                    <!-- Settings -->
                    <div class="header-item">
                        <div class="dropdown me-2">
                            <a href="profile-settings.html" class="btn topbar-link"><i class="ti ti-settings-2"></i></a>
                        </div> 
                    </div> 
                    <!-- Settings -->                   

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
									<a href="notifications.html" class="text-center text-decoration-underline fs-14 mb-0">
										View All Notifications
									</a>
								</div>
								
							</div>
						</div>
					</div>
					
					<!-- User Dropdown -->
					<div class="dropdown profile-dropdown d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0);" class="topbar-link dropdown-toggle drop-arrow-none position-relative" data-bs-toggle="dropdown" data-bs-offset="0,22" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/img/users/user-01.jpg" width="32" class="rounded-circle d-flex" alt="user-image">
                            <span class="online text-success"><i class="ti ti-circle-filled d-flex bg-white rounded-circle border border-1 border-white"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
                        
                            <div class="d-flex align-items-center bg-light rounded-3 p-2 mb-2">
                                <img src="assets/img/users/user-01.jpg" class="rounded-circle" width="42" height="42" alt="">
                                <div class="ms-2">
                                    <p class="fw-medium text-dark mb-0">Jimmy Anderson</p>
                                    <span class="d-block fs-13">Administrator</span>
                                </div>
                            </div>

                            <!-- Item-->
                            <a href="profile-settings.html" class="dropdown-item">
                                <i class="ti ti-user-circle me-1 align-middle"></i>
                                <span class="align-middle">Profile Settings</span>
                            </a>

                            <!-- Item-->
                            <a href="https://preclinic.dreamstechnologies.com/html/template/account-settings.html" class="dropdown-item">
                                <i class="ti ti-settings me-1 align-middle"></i>
                                <span class="align-middle">Account Settings</span>
                            </a>

                            <!-- item -->
                            <div class="form-check form-switch form-check-reverse d-flex align-items-center justify-content-between dropdown-item mb-0">
                                <label class="form-check-label" for="notify"><i class="ti ti-bell me-1"></i>Notifications</label>
                                <input class="form-check-input me-0" type="checkbox" role="switch" id="notify">
                            </div>

                            <!-- Item-->
                            <a href="transactions.html" class="dropdown-item">
                                <i class="ti ti-transition-right me-1 align-middle"></i>
                                <span class="align-middle">Transactions</span>
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
                    <div class="sidebar-top shadow-sm p-2 rounded-1 mb-3 dropend">
                        <a href="javascript:void(0);" class="drop-arrow-none" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-offset="0,22" aria-haspopup="false" aria-expanded="false">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <span class="avatar rounded-circle flex-shrink-0 p-2"><img src="assets/img/icons/trustcare.svg" alt="img"></span>
                                    <div class="ms-2">
                                        <h6 class="fs-14 fw-semibold mb-0">Trustcare Clinic</h6>
                                        <p class="fs-13 mb-0">Lasvegas</p>
                                    </div>
                                </div>
                                <i class="ti ti-arrows-transfer-up"></i>                            
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg">
                            <div class="p-2"> 
                                <label class="dropdown-item d-flex align-items-center justify-content-between p-1">
                                    <span class="d-flex align-items-center">
                                        <span class="me-2"><img src="assets/img/icons/clinic-01.svg" alt=""></span>
                                        <span class="fw-semibold text-dark">CureWell Medical Hub<small class="d-block text-muted fw-normal fs-13">Ohio</small></span>
                                    </span>
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                </label> 
                                <label class="dropdown-item d-flex align-items-center justify-content-between p-1">
                                    <span class="d-flex align-items-center">
                                        <span class="me-2"><img src="assets/img/icons/clinic-02.svg" alt=""></span>
                                        <span class="fw-semibold text-dark">Trustcare Clinic<small class="d-block text-muted fw-normal fs-13">Lasvegas</small></span>
                                    </span>
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                </label> 
                                <label class="dropdown-item d-flex align-items-center justify-content-between p-1">
                                    <span class="d-flex align-items-center">
                                        <span class="me-2"><img src="assets/img/icons/clinic-03.svg" alt=""></span>
                                        <span class="fw-semibold text-dark">NovaCare Medical<small class="d-block text-muted fw-normal fs-13">Washington</small></span>
                                    </span>
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                </label> 
                                <label class="dropdown-item d-flex align-items-center justify-content-between p-1">
                                    <span class="d-flex align-items-center">
                                        <span class="me-2"><img src="assets/img/icons/clinic-04.svg" alt=""></span>
                                        <span class="fw-semibold text-dark">Greeny Medical Clinic<small class="d-block text-muted fw-normal fs-13">Illinios</small></span>
                                    </span>
                                    <input class="form-check-input m-0 me-2" type="checkbox">
                                </label> 
                            </div>
                        </div>
                    </div>
                    <ul>
                        <li class="menu-title"><span>Main Menu</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-layout-dashboard"></i><span>Dashboard</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="index.html">Admin Dashboard</a></li>
                                        <li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
                                        <li><a href="patient-dashboard.html">Patient Dashboard</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-apps"></i><span>Applications</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="chat.html">Chat</a></li>
                                        <li class="submenu submenu-two">
                                            <a href="payroll-2.html#">Calls<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="voice-call.html">Voice Call</a></li>
                                                <li><a href="video-call.html">Video Call</a></li>
                                                <li><a href="outgoing-call.html">Outgoing Call</a></li>
                                                <li><a href="incoming-call.html">Incoming Call</a></li>
                                                <li><a href="call-history.html">Call History</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="calendar.html">Calendar</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>		
                                        <li><a href="email.html">Email</a></li>
                                        <li class="submenu submenu-two">
                                            <a href="payroll-2.html#">Invoices<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="invoice.html">Invoices</a></li>
                                                <li><a href="invoice-details.html">Invoice Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="todo.html">To Do</a></li>
                                        <li><a href="notes.html">Notes</a></li>
                                        <li><a href="kanban-view.html">Kanban Board</a></li>
                                        <li><a href="file-manager.html">File Manager</a></li>
                                        <li><a href="social-feed.html">Social Feed</a></li>
                                        <li><a href="search-list.html">Search Result</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-layout-sidebar"></i><span>Layouts</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="index.html">Default</a></li>
                                        <li><a href="layout-mini.html">Mini</a></li>
                                        <li><a href="layout-hover-view.html">Hover View</a></li>
                                        <li><a href="layout-hidden.html">Hidden</a></li>
                                        <li><a href="layout-full-width.html">Full Width</a></li>
                                        <li><a href="layout-rtl.html">RTL</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Clinic</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-user-plus"></i><span>Doctors</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="doctors.html">Doctors</a></li>
                                        <li><a href="doctor-details.html">Doctor Details</a></li>
                                        <li><a href="add-doctor.html">Add Doctor</a></li>
                                        <li><a href="doctor-schedule.html">Doctor Schedule</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-user-heart"></i><span>Patients</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="patients.html">Patients</a></li>
                                        <li><a href="patient-details.html">Patient Details</a></li>
                                        <li><a href="create-patient.html">Create Patient</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-calendar-check"></i><span>Appointments</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="appointments.html">Appointments</a></li>
                                        <li><a href="new-appointment.html">New Appointment</a></li>
                                        <li><a href="appointment-calendar.html">Calendar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="locations.html">
                                        <i class="ti ti-map-pin"></i><span>Locations</span>
                                    </a>
                                </li>  
                                <li>
                                    <a href="services.html">
                                        <i class="ti ti-user-cog"></i><span>Services</span>
                                    </a>
                                </li>  
                                <li>
                                    <a href="specializations.html">
                                        <i class="ti ti-user-shield"></i><span>Specializations</span>
                                    </a>
                                </li> 
                                <li>
                                    <a href="assets.html">
                                        <i class="ti ti-asset"></i><span>Assets</span>
                                    </a>
                                </li>  
                                <li>
                                    <a href="activities.html">
                                        <i class="ti ti-activity"></i><span>Activities</span>
                                    </a>
                                </li> 
                                <li>
                                    <a href="messages.html">
                                        <i class="ti ti-messages"></i><span>Messages</span>
                                    </a>
                                </li>                           
                            </ul>
                        </li>
                        <li class="menu-title"><span>HRM</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="staffs.html">
                                        <i class="ti ti-users-group"></i><span>Staffs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="hrm-departments.html">
                                        <i class="ti ti-building-bank"></i><span>Departments</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="designation.html">
                                        <i class="ti ti-user-cog"></i><span>Designation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="attendance.html">
                                        <i class="ti ti-user-check"></i><span>Attendance</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-users-minus"></i><span>Leaves</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="leaves.html">Leaves</a></li>
                                        <li><a href="leave-type.html">Leave Type</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="holidays.html">
                                        <i class="ti ti-home-exclamation"></i><span>Holidays</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="payroll.html">
                                        <i class="ti ti-coin"></i><span>Payroll</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Finance & Accounts</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-credit-card"></i><span>Expenses</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="expenses.html">Expenses</a></li>
                                        <li><a href="expense-category.html">Expense Category</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="income.html">
                                        <i class="ti ti-coins"></i><span>Income</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-file-invoice"></i><span>Invoices</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="invoices.html">Invoices</a></li>
                                        <li><a href="invoices-details.html">Invoice Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="payments.html">
                                        <i class="ti ti-cards"></i><span>Payments</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="transactions.html">
                                        <i class="ti ti-transition-right"></i><span>Transactions</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Administration</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-user"></i><span>Users</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="roles-and-permissions.html">Roles & Permissions</a></li>
                                        <li><a href="delete-account-request.html">Delete Account Request</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-report"></i><span>Reports</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="income-report.html">Income Report</a></li>
                                        <li><a href="expense-report.html">Expense Report</a></li>
                                        <li><a href="profit-and-loss.html">Profit & Loss</a></li>
                                        <li><a href="appointment-report.html">Appointment Report</a></li>
                                        <li><a href="patient-report.html">Patient Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Content</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="pages.html">
                                        <i class="ti ti-brand-pagekit"></i><span>Pages</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-brand-blogger"></i><span>Blogs</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="add-blog.html">Add Blog</a></li>
                                        <li><a href="blogs.html">Blogs</a></li>
                                        <li><a href="blog-categories.html">Blog Categories</a></li>
                                        <li><a href="blog-comments.html">Blog Comments</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-map-pins"></i><span>Location</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="countries.html">Countries</a></li>
                                        <li><a href="states.html">States</a></li>
                                        <li><a href="cities.html">Cities</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="testimonials.html">
                                        <i class="ti ti-brand-wechat"></i><span>Testimonials</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html">
                                        <i class="ti ti-question-mark"></i><span>FAQ</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Support</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="contact-messages.html">
                                        <i class="ti ti-message-dots"></i><span>Contact Messages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tickets.html">
                                        <i class="ti ti-ticket"></i><span>Tickets</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="announcements.html">
                                        <i class="ti ti-speakerphone"></i><span>Announcements</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="newsletters.html">
                                        <i class="ti ti-mail-bolt"></i><span>Newsletters</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Pages</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="starter.html">
                                        <i class="ti ti-player-play"></i><span>Starter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="profile.html">
                                        <i class="ti ti-user-circle"></i><span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html">
                                        <i class="ti ti-photo"></i><span>Gallery</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="timeline.html">
                                        <i class="ti ti-timeline-event-text"></i><span>Timeline</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="pricing.html">
                                        <i class="ti ti-tag"></i><span>Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="coming-soon.html">
                                        <i class="ti ti-sparkles"></i><span>Coming Soon</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="under-maintenance.html">
                                        <i class="ti ti-settings-down"></i><span>Under Maintenance</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">
                                        <i class="ti ti-shield-check"></i><span>Privacy Policy</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="terms-and-conditions.html">
                                        <i class="ti ti-file-time"></i><span>Terms & Conditions</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Authentication</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-login"></i><span>Login</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="login-cover.html">Cover</a></li>
                                        <li><a href="login-illustration.html">Illustration</a></li>
                                        <li><a href="login-basic.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-file-pencil"></i><span>Register</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="register-cover.html">Cover</a></li>
                                        <li><a href="register-illustration.html">Illustration</a></li>
                                        <li><a href="register-basic.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-lock-exclamation"></i><span>Forgot Password</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="forgot-password-cover.html">Cover</a></li>
                                        <li><a href="forgot-password-illustration.html">Illustration</a></li>
                                        <li><a href="forgot-password-basic.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-restore"></i><span>Reset Password</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="reset-password-cover.html">Cover</a></li>
                                        <li><a href="reset-password-illustration.html">Illustration</a></li>
                                        <li><a href="reset-password-basic.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-mail-check"></i><span>Email Verification</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="email-verification-cover.html">Cover</a></li>
                                        <li><a href="email-verification-illustration.html">Illustration</a></li>
                                        <li><a href="email-verification-basic.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-discount-check"></i><span>2 Step Verification</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="two-step-verification-cover.html">Cover</a></li>
                                        <li><a href="two-step-verification-illustration.html">Illustration</a></li>
                                        <li><a href="two-step-verification-basic.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="lock-screen.html">
                                        <i class="ti ti-lock"></i><span>Lock Screen</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-exclamation-mark-off"></i><span>Error Pages</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="error-404.html">404 Error</a></li>
                                        <li><a href="error-500.html">500 Error</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Settings</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-user-cog"></i><span>Account Settings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="profile-settings.html">Profile</a></li>
                                        <li><a href="security-settings.html">Security</a></li>
                                        <li><a href="notifications-settings.html">Notifications</a></li>
                                        <li><a href="integrations-settings.html">Integrations</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-world-cog"></i><span>Website Settings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="organization-settings.html">Organization</a></li>
                                        <li><a href="localization-settings.html">Localization</a></li>
                                        <li><a href="prefixes-settings.html">Prefixes</a></li>
                                        <li><a href="seo-setup-settings.html">SEO Setup</a></li>
                                        <li><a href="language-settings.html">Language</a></li>
                                        <li><a href="maintenance-mode-settings.html">Maintenance Mode</a></li>
                                        <li><a href="login-and-register-settings.html">Login & Register</a></li>
                                        <li><a href="preferences-settings.html">Preferences</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-building-hospital"></i><span>Clinic Settings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="appointment-settings.html">Appointment</a></li>
                                        <li><a href="working-hours-settings.html">Working Hours</a></li>
                                        <li><a href="cancellation-reason-settings.html">Cancellation Reason</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-device-mobile-cog"></i><span>App Settings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="invoice-settings.html">Invoice Settings</a></li>
                                        <li><a href="invoice-templates-settings.html">Invoice Templates</a></li>
                                        <li><a href="signatures-settings.html">Signatures</a></li>
                                        <li><a href="custom-fields-settings.html">Custom Fields</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-device-desktop-cog"></i><span>System Settings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="email-settings.html">Email Settings</a></li>
                                        <li><a href="email-templates-settings.html">Email Templates</a></li>
                                        <li><a href="sms-gateways-settings.html">SMS Gateways</a></li>
                                        <li><a href="sms-templates-settings.html">SMS Templates</a></li>
                                        <li><a href="gdpr-cookies-settings.html">GDPR Cookies</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-settings-dollar"></i><span>Finance & Accounts</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="payment-methods-settings.html">Payment Methods</a></li>
                                        <li><a href="bank-accounts-settings.html">Bank Accounts</a></li>
                                        <li><a href="tax-rates-settings.html">Tax Rates</a></li>
                                        <li><a href="currencies-settings.html">Currencies</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-settings-2"></i><span>Other Settings</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="sitemap-settings.html">Sitemap</a></li>
                                        <li><a href="clear-cache-settings.html">Clear Cache</a></li>
                                        <li><a href="storage-settings.html">Storage</a></li>
                                        <li><a href="cronjob-settings.html">Cronjob</a></li>
                                        <li><a href="ban-ip-address-settings.html">Ban IP Address</a></li>
                                        <li><a href="system-backup-settings.html">System Backup</a></li>
                                        <li><a href="database-backup-settings.html">Database Backup</a></li>
                                        <li><a href="system-update.html">System Update</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>UI Interface</span></li>
                        <li>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-chart-pie"></i><span>Base UI</span><span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="ui-accordion.html">Accordion</a></li>
                                        <li><a href="ui-alerts.html">Alerts</a></li>
                                        <li><a href="ui-avatar.html">Avatar</a></li>
                                        <li><a href="ui-badges.html">Badges</a></li>
                                        <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                                        <li><a href="ui-buttons.html">Buttons</a></li>
                                        <li><a href="ui-buttons-group.html">Button Group</a></li>
                                        <li><a href="ui-cards.html">Card</a></li>
                                        <li><a href="ui-carousel.html">Carousel</a></li>
                                        <li><a href="ui-collapse.html">Collapse</a></li>
                                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                        <li><a href="ui-ratio.html">Ratio</a></li>
                                        <li><a href="ui-grid.html">Grid</a></li>
                                        <li><a href="ui-images.html">Images</a></li>
                                        <li><a href="ui-links.html">Links</a></li>
                                        <li><a href="ui-list-group.html">List Group</a></li>
                                        <li><a href="ui-modals.html">Modals</a></li>
                                        <li><a href="ui-offcanvas.html">Offcanvas</a></li>
                                        <li><a href="ui-pagination.html">Pagination</a></li>
                                        <li><a href="ui-placeholders.html">Placeholders</a></li>
                                        <li><a href="ui-popovers.html">Popovers</a></li>
                                        <li><a href="ui-progress.html">Progress</a></li>
                                        <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                                        <li><a href="ui-spinner.html">Spinner</a></li>
                                        <li><a href="ui-nav-tabs.html">Tabs</a></li>
                                        <li><a href="ui-toasts.html">Toasts</a></li>
                                        <li><a href="ui-tooltips.html">Tooltips</a></li>
                                        <li><a href="ui-typography.html">Typography</a></li>
                                        <li><a href="ui-utilities.html">Utilities</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-radar"></i><span>Advanced UI</span><span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="extended-dragula.html">Dragula</a></li>
                                        <li><a href="ui-clipboard.html">Clipboard</a></li>
                                        <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                        <li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
										<li><a href="ui-lightbox.html">Lightbox</a></li>
										<li><a href="ui-rating.html">Rating</a></li>
										<li><a href="ui-scrollbar.html">Scrollbar</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-forms"></i><span>Forms</span><span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);">Form Elements<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="form-basic-inputs.html">Basic Inputs</a></li>
                                                <li><a href="form-checkbox-radios.html">Checkbox & Radios</a></li>
                                                <li><a href="form-input-groups.html">Input Groups</a></li>
                                                <li><a href="form-grid-gutters.html">Grid & Gutters</a></li>
                                                <li><a href="form-mask.html">Input Masks</a></li>
                                                <li><a href="form-fileupload.html">File Uploads</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);">Layouts<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="form-horizontal.html">Horizontal Form</a></li>
                                                <li><a href="form-vertical.html">Vertical Form</a></li>
                                                <li><a href="form-floating-labels.html">Floating Labels</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="form-validation.html">Form Validation</a></li>
                                        <li><a href="form-select2.html">Select2</a></li>
                                        <li><a href="form-wizard.html">Form Wizard</a></li>
                                        <li><a href="form-pickers.html">Form Picker</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-table-row"></i><span>Tables</span><span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="tables-basic.html">Basic Tables </a></li>
                                        <li><a href="data-tables.html">Data Table </a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-chart-donut"></i>
                                        <span>Charts</span><span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="chart-apex.html">Apex Charts</a></li>
                                        <li><a href="chart-c3.html">Chart C3</a></li>
                                        <li><a href="chart-js.html">Chart Js</a></li>
                                        <li><a href="chart-morris.html">Morris Charts</a></li>
                                        <li><a href="chart-flot.html">Flot Charts</a></li>
                                        <li><a href="chart-peity.html">Peity Charts</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-icons"></i>
                                        <span>Icons</span><span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                        <li><a href="icon-tabler.html">Tabler Icons</a></li>
                                        <li><a href="icon-bootstrap.html">Bootstrap Icons</a></li>
                                        <li><a href="icon-remix.html">Remix Icons</a></li>
                                        <li><a href="icon-feather.html">Feather Icons</a></li>
                                        <li><a href="icon-ionic.html">Ionic Icons</a></li>
                                        <li><a href="icon-material.html">Material Icons</a></li>
                                        <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                                        <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                                        <li><a href="icon-themify.html">Themify Icons</a></li>
                                        <li><a href="icon-weather.html">Weather Icons</a></li>
                                        <li><a href="icon-typicons.html">Typicons Icons</a></li>
                                        <li><a href="icon-flag.html">Flag Icons</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Help</span></li>
                        <li>
                            <ul>
                                <li>
                                    <a href="javascript:void(0);"><i class="ti ti-file-dots"></i><span>Documentation</span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="ti ti-status-change"></i><span>Changelog</span><span class="badge bg-danger ms-2 badge-md rounded-2 fs-12 fw-medium">v1.6.8</span></a>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <i class="ti ti-versions"></i><span>Multi Level</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Multilevel 1</a></li>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);">Multilevel 2<span
                                                    class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="javascript:void(0);">Multilevel 2.1</a></li>
                                                <li class="submenu submenu-two submenu-three">
                                                    <a href="javascript:void(0);">Multilevel 2.2<span
                                                            class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                                    <ul>
                                                        <li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
                                                        <li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);">Multilevel 3</a></li>
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
            <div class="content">

                <!-- start row -->
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <!-- Start Page Header -->
                        <div class="mb-3">
                                <h6 class="fs-14 fw-bold mb-3 me-2"><a href="payroll.html"><i class="ti ti-chevron-left me-1"></i>Payroll</a></h6>

                                <div class="card rounded-5">
                                    <div class="card-header px-0 mx-3">
                                        <h4 class="fw-bold text-center mb-3">Payslip for the Month of March 2025</h4>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                            <h6 class="fs-14 fw-semibold mb-0">Salary Month: March,2025</h6>
                                            <div class="d-flex align-items-center">
                                                <h6 class="fs-14 fw-semibold mb-0 me-2">Status:</h6>
                                                <span class="badge bg-success fw-medium">Sucess</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
                                            <div>
                                                <div class="invoice-logo">
                                                    <img src="assets/img/logo.svg" class="logo-white" alt="logo">
                                                    <img src="assets/img/logo-white.svg" class="logo-dark" alt="logo">
                                                </div>
                                                <p class="mb-0">3864 Quiet Valley Lane,</p>
                                                <p class="mb-0">Sherman Oaks, CA, 91403</p>
                                                <p class="mb-0">GST No:2914035</p>
                                            </div>
                                            <div class="text-end">
                                                <h6 class="fs-14 fw-semibold mb-1">Andrew Fletcher</h6>
                                                <p class="mb-0">Employee ID : <span class="text-dark fw-medium">ST-0001</span></p>
                                                <p class="mb-0">Joining Date : <span class="text-dark fw-medium">7 May 2015</span></p>
                                            </div>
                                        </div>
                                        
                                        <!-- start row -->
                                        <div class="row row-gap-2 mb-3">
                                            <div class="col-md-6">
                                                <h5 class="mb-3 fw-bold">Earnings</h5>
                                                <div class="mb-3">
                                                    <label class="form-label">Basic Salary</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">House Rent Allowance (H.R.A)</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Conveyance</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Other Allowance</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mb-0">
                                                    <label class="form-label">Total Earnings</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-md-6">
                                                <h5 class="mb-3 fw-bold">Deductions</h5>
                                                <div class="mb-3">
                                                    <label class="form-label">Tax Deducted at Sources (T.D.S)</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Provident Fund</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">ESI</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Loan</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mb-0">
                                                    <label class="form-label">Total Deductions</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <h6 class="fs-14 fw-semibold mb-2">Net Salary: $9698 (Nine Thousand Six Hundred and Ninety Eight Only)</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus.</p>
                                    </div><!-- end card body -->
                                    
                                    <div class="card-footer px-0 mx-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="javascript:void(0);" class="btn btn-primary me-2">Send Payslip</a>
                                            <a href="javascript:void(0);" class="btn btn-light"><i class="ti ti-printer me-1"></i>Print</a>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                        </div>
                        <!-- End Page Header -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                
                                
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

    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js" type="f7d600ad40aca58baa5b200b-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js" type="f7d600ad40aca58baa5b200b-text/javascript"></script>    

	<!-- Simplebar JS -->
	<script src="assets/plugins/simplebar/simplebar.min.js" type="f7d600ad40aca58baa5b200b-text/javascript"></script>

    <!-- Daterangepikcer JS -->
    <script src="assets/js/moment.min.js" type="f7d600ad40aca58baa5b200b-text/javascript"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js" type="f7d600ad40aca58baa5b200b-text/javascript"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="f7d600ad40aca58baa5b200b-text/javascript"></script>
    
    <!-- Datatable JS -->
    <script src="assets/js/jquery.dataTables.min.js" type="f7d600ad40aca58baa5b200b-text/javascript"></script>
    <script src="assets/js/dataTables.bootstrap5.min.js" type="f7d600ad40aca58baa5b200b-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js" type="f7d600ad40aca58baa5b200b-text/javascript"></script>

    <!-- Main JS -->
    <script src="assets/js/doctors.js" type="f7d600ad40aca58baa5b200b-text/javascript"></script>
    <script src="assets/js/script.js" type="f7d600ad40aca58baa5b200b-text/javascript"></script>

<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="f7d600ad40aca58baa5b200b-|49" defer></script></body>

</html>