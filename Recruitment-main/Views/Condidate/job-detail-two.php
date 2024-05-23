<?php

include_once '../Auth/valid.php';
include_once '../../Classes/Job.php';


if(isset($_SESSION['role'])){
    if($_SESSION['role'] != 'con'){
        header('location: ../Auth/login.php');

    }

}

$job = new Job();

if (isset($_GET['jobid'])){
    $j = $job->GetJob($_GET['jobid']);
}


?>
<!doctype html>
<html lang="en">
	
<!-- Mirrored from shreethemes.in/jobnova/layouts/job-detail-two.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 13:09:24 GMT -->
<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Jobnova - Job Board & Job Portal Bootstrap 5 Template</title>
	    <meta name="description" content="Job Listing Bootstrap 5 Template" />
	    <meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean, Job Listing, Job Board, Job, Job Portal" />
	    <meta name="author" content="Shreethemes" />
	    <meta name="website" content="https://shreethemes.in/" />
	    <meta name="email" content="support@shreethemes.in" />
	    <meta name="version" content="1.0.0" />
	    <!-- favicon -->
        <link href="../images/favicon.ico" rel="shortcut icon">
		<!-- Bootstrap core CSS -->
	    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="../css/tobii.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/choices.min.css" rel="stylesheet" />
        <link href="../css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
	    <!-- Custom  Css -->
	    <link href="../css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
	</head>

	<body>
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <a class="logo" href="index.php">
                    <img src="Views/images/logo-dark.png" class="logo-light-mode" alt="">
                    <img src="Views/images/logo-light.png" class="logo-dark-mode" alt="">
                </a>

                <div class="menu-extras">
                    <div class="menu-item">
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>

                <ul class="buy-button list-inline mb-0">
                    <li class="list-inline-item ps-1 mb-0">
                        <div class="dropdown">
                            <button type="button" class="dropdown-toggle btn btn-sm btn-icon btn-pills btn-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="search" class="icons"></i>
                            </button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white rounded border-0 mt-3 p-0" style="width: 240px;">
                                <div class="search-bar">
                                    <div id="itemSearch" class="menu-search mb-0">
                                        <form role="search" method="get" id="searchItemform" class="searchform">
                                            <input type="text" class="form-control rounded border" name="s" id="searchItem" placeholder="Search...">
                                            <input type="submit" id="searchItemsubmit" value="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="list-inline-item ps-1 mb-0">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="dropdown-toggle btn btn-sm btn-icon btn-pills btn-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../images/team/01.jpg" class="img-fluid rounded-pill" alt="">
                            </button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white rounded shadow border-0 mt-3">
                                <a href="candidate-profile.php" class="dropdown-item fw-medium fs-6"><i data-feather="user" class="fea icon-sm me-2 align-middle"></i>Profile</a>
                                <a href="candidate-profile-setting.php" class="dropdown-item fw-medium fs-6"><i data-feather="settings" class="fea icon-sm me-2 align-middle"></i>Settings</a>
                                <div class="dropdown-divider border-top"></div>
                                <a href="../Auth/login.php" class="dropdown-item fw-medium fs-6"><i data-feather="log-out" class="fea icon-sm me-2 align-middle"></i>Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-right">
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="index.php" class="sub-menu-item">Hero One</a></li>
                                <li><a href="../../index-two.html" class="sub-menu-item">Hero Two</a></li>
                                <li><a href="../../index-three.html" class="sub-menu-item">Hero Three</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)"> Jobs </a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="../../job-categories.html" class="sub-menu-item">Job Categories</a></li>
                        
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Job Grids </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="../../job-grid-one.html" class="sub-menu-item">Job Grid One</a></li>
                                        <li><a href="../../job-grid-two.html" class="sub-menu-item">Job Grid Two</a></li>
                                        <li><a href="../../job-grid-three.html" class="sub-menu-item">Job Grid Three</a></li>
                                        <li><a href="job-grid-four.php" class="sub-menu-item">Job Grid Four </a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Job Lists </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="../../job-list-one.html" class="sub-menu-item">Job List One</a></li>
                                        <li><a href="../../job-list-two.html" class="sub-menu-item">Job List Two</a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Job Detail </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="../../job-detail-one.html" class="sub-menu-item">Job Detail One</a></li>
                                        <li><a href="job-detail-two.html" class="sub-menu-item">Job Detail Two</a></li>
                                        <li><a href="../../job-detail-three.html" class="sub-menu-item">Job Detail Three</a></li>
                                    </ul>  
                                </li>
                
                                <li><a href="job-apply.php" class="sub-menu-item">Job Apply</a></li>
                
                                <li><a href="../../job-post.html" class="sub-menu-item">Job Post </a></li>
                
                                <li><a href="../../career.html" class="sub-menu-item">Career </a></li>
                            </ul>  
                        </li>
                
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Employers</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="../../employers.html" class="sub-menu-item">Employers</a></li>
                                <li><a href="../../employer-profile.html" class="sub-menu-item">Employer Profile</a></li>
                            </ul>
                        </li>
                
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Candidates</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="../../candidates.html" class="sub-menu-item">Candidates</a></li>
                                <li><a href="candidate-profile.php" class="sub-menu-item">Candidate Profile</a></li>
                                <li><a href="candidate-profile-setting.php" class="sub-menu-item">Profile Setting</a></li>
                            </ul>
                        </li>
                
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="../../aboutus.html" class="sub-menu-item">About Us</a></li>
                                <li><a href="../../services.html" class="sub-menu-item">Services</a></li>
                                <li><a href="../../pricing.html" class="sub-menu-item">Pricing </a></li>

                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="../../helpcenter-overview.html" class="sub-menu-item">Overview</a></li>
                                        <li><a href="../../helpcenter-faqs.html" class="sub-menu-item">FAQs</a></li>
                                        <li><a href="../../helpcenter-guides.html" class="sub-menu-item">Guides</a></li>
                                        <li><a href="../../helpcenter-support.html" class="sub-menu-item">Support</a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="../../blogs.html" class="sub-menu-item"> Blogs</a></li>
                                        <li><a href="../../blog-sidebar.html" class="sub-menu-item"> Blog Sidebar</a></li>
                                        <li><a href="../../blog-detail.html" class="sub-menu-item"> Blog Detail</a></li>
                                    </ul> 
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="../Auth/login.php" class="sub-menu-item"> Login</a></li>
                                        <li><a href="../Auth/signup.php" class="sub-menu-item"> Signup</a></li>
                                        <li><a href="../../reset-password.html" class="sub-menu-item"> Forgot Password</a></li>
                                        <li><a href="../../lock-screen.html" class="sub-menu-item"> Lock Screen</a></li>
                                    </ul> 
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="../../terms.html" class="sub-menu-item">Terms of Services</a></li>
                                        <li><a href="../../privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="../../comingsoon.html" class="sub-menu-item"> Coming Soon</a></li>
                                        <li><a href="../../maintenance.html" class="sub-menu-item"> Maintenance</a></li>
                                        <li><a href="../../error.html" class="sub-menu-item"> 404! Error</a></li>
                                    </ul> 
                                </li>
                            </ul>
                        </li>
                
                        <li><a href="contactus.php" class="sub-menu-item">Contact Us</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div>
        </header>
        <!-- Navbar End -->

        <!-- Start -->
        <section class="bg-half d-table w-100 bg-light">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8 col-md-6 col-12">

                        <div class="d-lg-flex align-items-center p-4 rounded shadow bg-white mb-4">
                            <img src="../images/company/lenovo-logo.png" class="avatar avatar-medium p-4 rounded-pill shadow bg-white" alt="">

                            <div class="ms-lg-3 mt-3 mt-lg-0">
                                <h4><?php echo $j['job_name'];?></h4>

                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-flex align-items-center text-muted me-2"><i data-feather="layout" class="fea icon-sm text-primary me-1"></i> Tek-UP</li>
                                    <li class="d-inline-flex align-items-center text-muted"><i data-feather="map-pin" class="fea icon-sm text-primary me-1"></i><?php echo $j['Loc'];?></li>
                                </ul>
                            </div>
                        </div>

                        <h5>Job Description: </h5>
                        <p class="text-muted"><?php echo $j['description'];?></p>
                        
                        <h5 class="mt-4">Responsibilities and Duties: </h5>
                        <p class="text-muted"><?php echo $j['Responsibilities_Duties'];?></p>

                        <h5 class="mt-4">Required Experience, Skills and Qualifications: </h5>
                        <p class="text-muted"><?php echo $j['RESQ'];?></p>


                        <div class="mt-4">
                            <a href="job-apply.php?jobid=<?php echo $j['id'];?>" class="btn btn-outline-primary">Apply Now <i class="mdi mdi-send"></i></a>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card bg-white rounded shadow sticky-bar">
                            <div class="p-4">
                                <h5 class="mb-0">Job Information</h5>
                            </div>

                            <div class="card-body p-4 border-top">
                                <div class="d-flex widget align-items-center">
                                    <i data-feather="layout" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Company Name:</h6>
                                        <small class="text-primary mb-0">TEK-UP</small>
                                    </div>
                                </div>

                                <div class="d-flex widget align-items-center mt-3">
                                    <i data-feather="user-check" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Employee Type:</h6>
                                        <small class="text-primary mb-0"><?php echo $j['Employee_Type'];?></small>
                                    </div>
                                </div>

                                <div class="d-flex widget align-items-center mt-3">
                                    <i data-feather="map-pin" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Location:</h6>
                                        <small class="text-primary mb-0"><?php echo $j['Loc'];?></small>
                                    </div>
                                </div>

                                <div class="d-flex widget align-items-center mt-3">
                                    <i data-feather="monitor" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Job Type:</h6>
                                        <small class="text-primary mb-0"><?php echo $j['job_name'];?></small>
                                    </div>
                                </div>

                                <div class="d-flex widget align-items-center mt-3">
                                    <i data-feather="briefcase" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Experience:</h6>
                                        <small class="text-primary mb-0"><?php echo $j['Experience'];?></small>
                                    </div>
                                </div>

                                <div class="d-flex widget align-items-center mt-3">
                                    <i data-feather="book" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Qualifications:</h6>
                                        <small class="text-primary mb-0"><?php echo $j['Qualification'];?></small>
                                    </div>
                                </div>

                                <div class="d-flex widget align-items-center mt-3">
                                    <i data-feather="dollar-sign" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Salary:</h6>
                                        <small class="text-primary mb-0"><?php echo $j['Salary'];?>TND</small>
                                    </div>
                                </div>

                                <div class="d-flex widget align-items-center mt-3">
                                    <i data-feather="clock" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Date posted:</h6>
                                        <small class="text-primary mb-0 mb-0"><?php echo $j['Date_Post'];?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center mb-4 pb-2">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h4 class="title mb-3">Related Vacancies</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="job-post rounded shadow bg-white">
                            <div class="p-4">
                                <a href="job-detail-two.html" class="text-dark title h5">Web Designer / Developer</a>

                                <p class="text-muted d-flex align-items-center small mt-3"><i data-feather="clock" class="fea icon-sm text-primary me-1"></i>Posted 3 Days ago</p>

                                <ul class="list-unstyled d-flex justify-content-between align-items-center mb-0 mt-3">
                                    <li class="list-inline-item"><span class="badge bg-soft-primary">Full Time</span></li>
                                    <li class="list-inline-item"><span class="text-muted d-flex align-items-center small"><i data-feather="dollar-sign" class="fea icon-sm text-primary me-1"></i>$950 - $1100/mo</span></li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center p-4 border-top">
                                <img src="../images/company/facebook-logo.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">

                                <div class="ms-3">
                                    <a href="../../employer-profile.html" class="h5 company text-dark">Facebook</a>
                                    <span class="text-muted d-flex align-items-center mt-1"><i data-feather="map-pin" class="fea icon-sm me-1"></i>Australia</span>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="job-post rounded shadow bg-white">
                            <div class="p-4">
                                <a href="job-detail-two.html" class="text-dark title h5">Marketing Director</a>

                                <p class="text-muted d-flex align-items-center small mt-3"><i data-feather="clock" class="fea icon-sm text-primary me-1"></i>Posted 3 Days ago</p>

                                <ul class="list-unstyled d-flex justify-content-between align-items-center mb-0 mt-3">
                                    <li class="list-inline-item"><span class="badge bg-soft-primary">Part Time</span></li>
                                    <li class="list-inline-item"><span class="text-muted d-flex align-items-center small"><i data-feather="dollar-sign" class="fea icon-sm text-primary me-1"></i>$950 - $1100/mo</span></li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center p-4 border-top">
                                <img src="../images/company/google-logo.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">

                                <div class="ms-3">
                                    <a href="../../employer-profile.html" class="h5 company text-dark">Google</a>
                                    <span class="text-muted d-flex align-items-center mt-1"><i data-feather="map-pin" class="fea icon-sm me-1"></i>Australia</span>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="job-post rounded shadow bg-white">
                            <div class="p-4">
                                <a href="job-detail-two.html" class="text-dark title h5">Php Developer</a>

                                <p class="text-muted d-flex align-items-center small mt-3"><i data-feather="clock" class="fea icon-sm text-primary me-1"></i>Posted 3 Days ago</p>

                                <ul class="list-unstyled d-flex justify-content-between align-items-center mb-0 mt-3">
                                    <li class="list-inline-item"><span class="badge bg-soft-primary">Remote</span></li>
                                    <li class="list-inline-item"><span class="text-muted d-flex align-items-center small"><i data-feather="dollar-sign" class="fea icon-sm text-primary me-1"></i>$950 - $1100/mo</span></li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center p-4 border-top">
                                <img src="../images/company/whatsapp.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">

                                <div class="ms-3">
                                    <a href="../../employer-profile.html" class="h5 company text-dark">Whatsapp</a>
                                    <span class="text-muted d-flex align-items-center mt-1"><i data-feather="map-pin" class="fea icon-sm me-1"></i>Australia</span>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!-- End -->

        <!-- Footer Start -->
        <footer class="bg-footer">
            <div class="py-5">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-md-7">
                            <div class="section-title">
                                <div class="d-flex align-items-center">
                                    <i data-feather="bookmark" class="fea icon-lg"></i>
                                    <div class="flex-1 ms-3">
                                        <h4 class="fw-bold text-white mb-2">Explore a job now!</h4>
                                        <p class="text-white-50 mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-5 mt-4 mt-sm-0">
                            <div class="text-md-end ms-5 ms-sm-0">
                                <a href="job-apply.php" class="btn btn-primary me-1 my-1">Apply Now</a>
                                <a href="contactus.php" class="btn btn-soft-primary my-1">Contact Us</a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div><!--end div-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="py-5 footer-bar">
                            <div class="row align-items-center">
                                <div class="col-sm-3">
                                    <div class="text-center text-sm-start">
                                        <a href="#"><img src="Views/images/logo-light.png" alt=""></a>
                                    </div>
                                </div>
        
                                <div class="col-sm-9 mt-4 mt-sm-0">
                                    <ul class="list-unstyled footer-list terms-service text-center text-sm-end mb-0">
                                        <li class="list-inline-item my-2"><a href="index.php" class="text-foot fs-6 fw-medium me-2"><i class="mdi mdi-circle-small"></i> Home</a></li>
                                        <li class="list-inline-item my-2"><a href="../../services.html" class="text-foot fs-6 fw-medium me-2"><i class="mdi mdi-circle-small"></i> How it works</a></li>
                                        <li class="list-inline-item my-2"><a href="../../job-post.html" class="text-foot fs-6 fw-medium me-2"><i class="mdi mdi-circle-small"></i> Create a job</a></li>
                                        <li class="list-inline-item my-2"><a href="../../aboutus.html" class="text-foot fs-6 fw-medium me-2"><i class="mdi mdi-circle-small"></i> About us</a></li>
                                        <li class="list-inline-item my-2"><a href="../../pricing.html" class="text-foot fs-6 fw-medium"><i class="mdi mdi-circle-small"></i> Plans</a></li>
                                    </ul>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="py-4 footer-bar">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="text-sm-start">
                                <p class="mb-0 fw-medium">© <script>document.write(new Date().getFullYear())</script> Jobnova. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <ul class="list-unstyled social-icon foot-social-icon text-sm-end mb-0">
                                <li class="list-inline-item"><a href="../../../themeforest.net/item/jobnova-job-board-job-portal-and-job-listing-bootstrap-5-template/49414406f6d8.html" target="_blank" class="rounded"><i data-feather="shopping-cart" class="fea icon-sm align-middle" title="Buy Now"></i></a></li>
                                <li class="list-inline-item"><a href="../../../dribbble.com/shreethemes.html" target="_blank" class="rounded"><i data-feather="dribbble" class="fea icon-sm align-middle" title="dribbble"></i></a></li>
                                <li class="list-inline-item"><a href="../../../linkedin.com/company/shreethemes" target="_blank" class="rounded"><i data-feather="linkedin" class="fea icon-sm align-middle" title="Linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="../../../www.facebook.com/shreethemes.html" target="_blank" class="rounded"><i data-feather="facebook" class="fea icon-sm align-middle" title="facebook"></i></a></li>
                                <li class="list-inline-item"><a href="../../../www.instagram.com/shreethemes/index.html" target="_blank" class="rounded"><i data-feather="instagram" class="fea icon-sm align-middle" title="instagram"></i></a></li>
                                <li class="list-inline-item"><a href="../../../twitter.com/shreethemes.html" target="_blank" class="rounded"><i data-feather="twitter" class="fea icon-sm align-middle" title="twitter"></i></a></li>
                            </ul><!--end icon-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded fs-5"><i data-feather="arrow-up" class="fea icon-sm align-middle"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
	    <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/tobii.min.js"></script>
        <script src="../js/choices.min.js"></script>
        <script src="../js/feather.min.js"></script>
	    <!-- Custom -->
	    <script src="../js/plugins.init.js"></script>
	    <script src="../js/app.js"></script>
    </body>

<!-- Mirrored from shreethemes.in/jobnova/layouts/job-detail-two.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 13:09:24 GMT -->
</html>