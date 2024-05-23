<?php

include_once 'valid.php';

if(isset($_SESSION['role'])){
    if($_SESSION['role'] != 'Condidate'){
        header('location: index.php');

    }

}else{
    header('location: Views/Auth/login.php');
}


?>




<!doctype html>
<html lang="en">
	
<!-- Mirrored from shreethemes.in/jobnova/layouts/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 13:09:17 GMT -->
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
        <link href="Views/images/favicon.ico" rel="shortcut icon">
		<!-- Bootstrap core CSS -->
	    <link href="Views/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="Views/css/tiny-slider.css" rel="stylesheet" type="text/css" />
        <link href="Views/css/tobii.min.css" rel="stylesheet" type="text/css" />
        <link href="Views/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
	    <!-- Custom  Css -->
	    <link href="Views/css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
	</head>

	<body>
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <a class="logo" href="index.php">
                    <span class="logo-light-mode">
                        <img src="Views/images/logo-dark.png" class="l-dark" alt="">
                        <img src="Views/images/logo-white.png" class="l-light" alt="">
                    </span>
                    <img src="Views/images/logo-white.png" class="logo-dark-mode" alt="">
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
                                <img src="Views/images/team/01.jpg" class="img-fluid rounded-pill" alt="">
                            </button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white rounded shadow border-0 mt-3">
                                <a href="candidate-profile.php" class="dropdown-item fw-medium fs-6"><i data-feather="user" class="fea icon-sm me-2 align-middle"></i>Profile</a>
                                <a href="Views/Condidate/candidate-profile-setting.php" class="dropdown-item fw-medium fs-6"><i data-feather="settings" class="fea icon-sm me-2 align-middle"></i>Settings</a>
                                <div class="dropdown-divider border-top"></div>
                                <a href="lock-screen.html" class="dropdown-item fw-medium fs-6"><i data-feather="lock" class="fea icon-sm me-2 align-middle"></i>Lockscreen</a>
                                <a href="Views/Auth/logout.php" class="dropdown-item fw-medium fs-6"><i data-feather="log-out" class="fea icon-sm me-2 align-middle"></i>Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-right nav-light">
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="index.html" class="sub-menu-item">Hero One</a></li>
                                <li><a href="index-two.html" class="sub-menu-item">Hero Two</a></li>
                                <li><a href="index-three.html" class="sub-menu-item">Hero Three</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)"> Jobs </a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="job-categories.html" class="sub-menu-item">Job Categories</a></li>
                        
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Job Grids </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="job-grid-one.html" class="sub-menu-item">Job Grid One</a></li>
                                        <li><a href="job-grid-two.html" class="sub-menu-item">Job Grid Two</a></li>
                                        <li><a href="job-grid-three.html" class="sub-menu-item">Job Grid Three</a></li>
                                        <li><a href="Views/Condidate/job-grid-four.php" class="sub-menu-item">Job Grid Four </a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Job Lists </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="job-list-one.html" class="sub-menu-item">Job List One</a></li>
                                        <li><a href="job-list-two.html" class="sub-menu-item">Job List Two</a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Job Detail </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="job-detail-one.html" class="sub-menu-item">Job Detail One</a></li>
                                        <li><a href="Views/Condidate/job-detail-two.php" class="sub-menu-item">Job Detail Two</a></li>
                                        <li><a href="job-detail-three.html" class="sub-menu-item">Job Detail Three</a></li>
                                    </ul>  
                                </li>
                
                                <li><a href="Views/Condidate/job-apply.php" class="sub-menu-item">Job Apply</a></li>
                
                                <li><a href="job-post.html" class="sub-menu-item">Job Post </a></li>
                
                                <li><a href="career.html" class="sub-menu-item">Career </a></li>
                            </ul>  
                        </li>
                
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Employers</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="employers.html" class="sub-menu-item">Employers</a></li>
                                <li><a href="employer-profile.html" class="sub-menu-item">Employer Profile</a></li>
                            </ul>
                        </li>
                
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Candidates</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="candidates.html" class="sub-menu-item">Candidates</a></li>
                                <li><a href="candidate-profile.php" class="sub-menu-item">Candidate Profile</a></li>
                                <li><a href="Views/Condidate/candidate-profile-setting.php" class="sub-menu-item">Profile Setting</a></li>
                            </ul>
                        </li>
                
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="aboutus.html" class="sub-menu-item">About Us</a></li>
                                <li><a href="services.html" class="sub-menu-item">Services</a></li>
                                <li><a href="pricing.html" class="sub-menu-item">Pricing </a></li>

                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="helpcenter-overview.html" class="sub-menu-item">Overview</a></li>
                                        <li><a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a></li>
                                        <li><a href="helpcenter-guides.html" class="sub-menu-item">Guides</a></li>
                                        <li><a href="helpcenter-support.html" class="sub-menu-item">Support</a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blogs.html" class="sub-menu-item"> Blogs</a></li>
                                        <li><a href="blog-sidebar.html" class="sub-menu-item"> Blog Sidebar</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item"> Blog Detail</a></li>
                                    </ul> 
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="Views/Auth/login.php" class="sub-menu-item"> Login</a></li>
                                        <li><a href="Views/Auth/signup.php" class="sub-menu-item"> Signup</a></li>
                                        <li><a href="reset-password.html" class="sub-menu-item"> Forgot Password</a></li>
                                        <li><a href="lock-screen.html" class="sub-menu-item"> Lock Screen</a></li>
                                    </ul> 
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="terms.html" class="sub-menu-item">Terms of Services</a></li>
                                        <li><a href="privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="comingsoon.html" class="sub-menu-item"> Coming Soon</a></li>
                                        <li><a href="maintenance.html" class="sub-menu-item"> Maintenance</a></li>
                                        <li><a href="error.html" class="sub-menu-item"> 404! Error</a></li>
                                    </ul> 
                                </li>
                            </ul>
                        </li>
                
                        <li><a href="Views/Condidate/contactus.php" class="sub-menu-item">Contact Us</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div>
        </header>
        <!-- Navbar End -->

        <!-- Hero Start -->
        <section class="bg-half-170 d-table w-100 bg-primary" style="background: url('Views/images/bg2.png') center;">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <div class="title-heading">
                            <h1 class="heading text-white fw-bold">Get hired <br> by the popular <br> candidates.</h1>
                            <p class="para-desc text-white-50 mb-0">Find Jobs, Employment & Career Opportunities. Some of the companies we've helped recruit excellent applicants over the years.</p>

                            <div class="text-center subscribe-form mt-4">
                                <form style="max-width: 800px;">
                                    <div class="mb-0">
                                        <div class="position-relative">
                                            <i data-feather="search" class="fea icon-20 position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                            <input type="text" id="help" name="name" class="shadow rounded-pill bg-white ps-5" required="" placeholder="Search jobs & candidates ...">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-pills">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6">
                        <div class="position-relative ms-lg-5">
                            <img src="Views/images/hero1.png" class="img-fluid p-5" alt="">

                            <div class="spinner">
                                <div class="position-absolute top-0 start-0 mt-lg-5 mt-4 ms-lg-5 ms-4">
                                    <img src="Views/images/company/circle-logo.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">
                                </div>
                                <div class="position-absolute top-0 start-50 translate-middle-x">
                                    <img src="Views/images/company/facebook-logo.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">
                                </div>
                                <div class="position-absolute top-0 end-0 mt-lg-5 mt-4 me-lg-5 me-4">
                                    <img src="Views/images/company/google-logo.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">
                                </div>
                                <div class="position-absolute top-50 start-0 translate-middle-y">
                                    <img src="Views/images/company/lenovo-logo.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">
                                </div>
                                <div class="position-absolute top-50 end-0 translate-middle-y">
                                    <img src="Views/images/company/android.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">
                                </div>
                                <div class="position-absolute bottom-0 start-0 mb-lg-5 mb-4 ms-lg-5 ms-4">
                                    <img src="Views/images/company/linkedin.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x">
                                    <img src="Views/images/company/skype.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">
                                </div>
                                <div class="position-absolute bottom-0 end-0 mb-lg-5 mb-4 me-lg-5 me-4">
                                    <img src="Views/images/company/snapchat.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 col-md-6 mb-5">
                        <div class="about-left">
                            <div class="position-relative shadow rounded img-one">
                                <img src="Views/images/about/ab01.jpg" class="img-fluid rounded" alt="work-image">
                            </div>

                            <div class="img-two shadow rounded p-2 bg-white">
                                <img src="Views/images/about/ab02.jpg" class="img-fluid rounded" alt="work-image">

                                <div class="position-absolute top-0 start-50 translate-middle">
                                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow card d-flex justify-content-center align-items-center lightbox">
                                        <i class="mdi mdi-play mdi-24px text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6">
                        <div class="section-title ms-lg-5">
                            <h4 class="title mb-3">Millions of jobs. <br> Find the one that's right for you.</h4>
                            <p class="text-muted para-desc mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        
                            <ul class="list-unstyled text-muted mb-0 mt-3">
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                                <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                            </ul>

                            <div class="mt-4">
                                <a href="aboutus.html" class="btn btn-primary">About Us <i class="mdi mdi-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center mb-4 pb-2">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h4 class="title mb-3">Popular Categories</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="tiny-five-item">
                            <div class="tiny-slide">
                                <div class="position-relative job-category text-center px-4 py-5 rounded shadow m-2">
                                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                        <i data-feather="airplay" class="fea icon-ex-md"></i>
                                    </div>
            
                                    <div class="mt-4">
                                        <a href="#" class="title h5 text-dark">Business <br> Development</a>
                                        <p class="text-muted mb-0 mt-3">74 Jobs</p>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="tiny-slide">
                                <div class="position-relative job-category text-center px-4 py-5 rounded shadow m-2">
                                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                        <i data-feather="award" class="fea icon-ex-md"></i>
                                    </div>
            
                                    <div class="mt-4">
                                        <a href="#" class="title h5 text-dark">Marketing & <br> Communication</a>
                                        <p class="text-muted mb-0 mt-3">20 Jobs</p>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="tiny-slide">
                                <div class="position-relative job-category text-center px-4 py-5 rounded shadow m-2">
                                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                        <i data-feather="at-sign" class="fea icon-ex-md"></i>
                                    </div>
            
                                    <div class="mt-4">
                                        <a href="#" class="title h5 text-dark">Project <br> Management</a>
                                        <p class="text-muted mb-0 mt-3">35 Jobs</p>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="tiny-slide">
                                <div class="position-relative job-category text-center px-4 py-5 rounded shadow m-2">
                                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                        <i data-feather="codesandbox" class="fea icon-ex-md"></i>
                                    </div>
            
                                    <div class="mt-4">
                                        <a href="#" class="title h5 text-dark">Customer <br> Service</a>
                                        <p class="text-muted mb-0 mt-3">46 Jobs</p>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="tiny-slide">
                                <div class="position-relative job-category text-center px-4 py-5 rounded shadow m-2">
                                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                        <i data-feather="chrome" class="fea icon-ex-md"></i>
                                    </div>
            
                                    <div class="mt-4">
                                        <a href="#" class="title h5 text-dark">Software <br> Engineering</a>
                                        <p class="text-muted mb-0 mt-3">60 Jobs</p>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="tiny-slide">
                                <div class="position-relative job-category text-center px-4 py-5 rounded shadow m-2">
                                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                        <i data-feather="copy" class="fea icon-ex-md"></i>
                                    </div>
            
                                    <div class="mt-4">
                                        <a href="#" class="title h5 text-dark">Human Resource <br> HR</a>
                                        <p class="text-muted mb-0 mt-3">74 Jobs</p>
                                    </div>
                                </div>
                            </div><!--end col-->
        
                            <div class="tiny-slide">
                                <div class="position-relative job-category text-center px-4 py-5 rounded shadow m-2">
                                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                        <i data-feather="cpu" class="fea icon-ex-md"></i>
                                    </div>
            
                                    <div class="mt-4">
                                        <a href="#" class="title h5 text-dark">It & <br> Networking</a>
                                        <p class="text-muted mb-0 mt-3">20 Jobs</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>
                    </div>
                </div>
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-end mb-4 pb-2">
                    <div class="col-lg-6 col-md-9">
                        <div class="section-title text-md-start text-center">
                            <h4 class="title mb-3">Explore Jobs</h4>
                            <p class="text-muted para-desc mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-3 d-none d-md-block">
                        <div class="text-md-end">
                            <a href="job-grid-one.html" class="btn btn-link primary text-muted">See More Jobs <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row g-4 mt-0">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="job-post rounded shadow p-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="Views/images/company/facebook-logo.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
    
                                    <div class="ms-3">
                                        <a href="employer-profile.html" class="h5 company text-dark">Facebook</a>
                                        <span class="text-muted d-flex align-items-center small mt-2"><i data-feather="clock" class="fea icon-sm me-1"></i> 2 days ago</span>
                                    </div>
                                </div>

                                <span class="badge bg-soft-primary">Full Time</span>
                            </div>

                            <div class="mt-4">
                                <a href="job-detail-one.html" class="text-dark title h5">Web Designer / Developer</a>

                                <span class="text-muted d-flex align-items-center mt-2"><i data-feather="map-pin" class="fea icon-sm me-1"></i>Australia</span>

                                <div class="progress-box mt-3">
                                    <div class="progress mb-2">
                                        <div class="progress-bar position-relative bg-primary" style="width:50%;"></div>
                                    </div>

                                    <span class="text-dark">20 applied of <span class="text-muted">40 vacancy</span></span>
                                </div>
                            </div>
                        </div><!--end job post-->
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="job-post rounded shadow p-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="Views/images/company/google-logo.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
    
                                    <div class="ms-3">
                                        <a href="employer-profile.html" class="h5 company text-dark">Google</a>
                                        <span class="text-muted d-flex align-items-center small mt-2"><i data-feather="clock" class="fea icon-sm me-1"></i> 2 days ago</span>
                                    </div>
                                </div>

                                <span class="badge bg-soft-primary">Part Time</span>
                            </div>

                            <div class="mt-4">
                                <a href="job-detail-one.html" class="text-dark title h5">Marketing Director</a>

                                <span class="text-muted d-flex align-items-center mt-2"><i data-feather="map-pin" class="fea icon-sm me-1"></i>Australia</span>

                                <div class="progress-box mt-3">
                                    <div class="progress mb-2">
                                        <div class="progress-bar position-relative bg-primary" style="width:50%;"></div>
                                    </div>

                                    <span class="text-dark">20 applied of <span class="text-muted">40 vacancy</span></span>
                                </div>
                            </div>
                        </div><!--end job post-->
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="job-post rounded shadow p-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="Views/images/company/android.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
    
                                    <div class="ms-3">
                                        <a href="employer-profile.html" class="h5 company text-dark">Android</a>
                                        <span class="text-muted d-flex align-items-center small mt-2"><i data-feather="clock" class="fea icon-sm me-1"></i> 2 days ago</span>
                                    </div>
                                </div>

                                <span class="badge bg-soft-primary">Remote</span>
                            </div>

                            <div class="mt-4">
                                <a href="job-detail-one.html" class="text-dark title h5">Application Developer</a>

                                <span class="text-muted d-flex align-items-center mt-2"><i data-feather="map-pin" class="fea icon-sm me-1"></i>Australia</span>

                                <div class="progress-box mt-3">
                                    <div class="progress mb-2">
                                        <div class="progress-bar position-relative bg-primary" style="width:50%;"></div>
                                    </div>

                                    <span class="text-dark">20 applied of <span class="text-muted">40 vacancy</span></span>
                                </div>
                            </div>
                        </div><!--end job post-->
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="job-post rounded shadow p-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="Views/images/company/lenovo-logo.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
    
                                    <div class="ms-3">
                                        <a href="employer-profile.html" class="h5 company text-dark">Lenovo</a>
                                        <span class="text-muted d-flex align-items-center small mt-2"><i data-feather="clock" class="fea icon-sm me-1"></i> 2 days ago</span>
                                    </div>
                                </div>

                                <span class="badge bg-soft-primary">WFH</span>
                            </div>

                            <div class="mt-4">
                                <a href="job-detail-one.html" class="text-dark title h5">Senior Product Designer</a>

                                <span class="text-muted d-flex align-items-center mt-2"><i data-feather="map-pin" class="fea icon-sm me-1"></i>Australia</span>

                                <div class="progress-box mt-3">
                                    <div class="progress mb-2">
                                        <div class="progress-bar position-relative bg-primary" style="width:50%;"></div>
                                    </div>

                                    <span class="text-dark">20 applied of <span class="text-muted">40 vacancy</span></span>
                                </div>
                            </div>
                        </div><!--end job post-->
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="job-post rounded shadow p-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="Views/images/company/spotify.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
    
                                    <div class="ms-3">
                                        <a href="employer-profile.html" class="h5 company text-dark">Spotify</a>
                                        <span class="text-muted d-flex align-items-center small mt-2"><i data-feather="clock" class="fea icon-sm me-1"></i> 2 days ago</span>
                                    </div>
                                </div>

                                <span class="badge bg-soft-primary">Full Time</span>
                            </div>

                            <div class="mt-4">
                                <a href="job-detail-one.html" class="text-dark title h5">C++ Developer</a>

                                <span class="text-muted d-flex align-items-center mt-2"><i data-feather="map-pin" class="fea icon-sm me-1"></i>Australia</span>

                                <div class="progress-box mt-3">
                                    <div class="progress mb-2">
                                        <div class="progress-bar position-relative bg-primary" style="width:50%;"></div>
                                    </div>

                                    <span class="text-dark">20 applied of <span class="text-muted">40 vacancy</span></span>
                                </div>
                            </div>
                        </div><!--end job post-->
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="job-post rounded shadow p-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="Views/images/company/linkedin.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">
    
                                    <div class="ms-3">
                                        <a href="employer-profile.html" class="h5 company text-dark">Linkedin</a>
                                        <span class="text-muted d-flex align-items-center small mt-2"><i data-feather="clock" class="fea icon-sm me-1"></i> 2 days ago</span>
                                    </div>
                                </div>

                                <span class="badge bg-soft-primary">Remote</span>
                            </div>

                            <div class="mt-4">
                                <a href="job-detail-one.html" class="text-dark title h5">Php Developer</a>

                                <span class="text-muted d-flex align-items-center mt-2"><i data-feather="map-pin" class="fea icon-sm me-1"></i>Australia</span>

                                <div class="progress-box mt-3">
                                    <div class="progress mb-2">
                                        <div class="progress-bar position-relative bg-primary" style="width:50%;"></div>
                                    </div>

                                    <span class="text-dark">20 applied of <span class="text-muted">40 vacancy</span></span>
                                </div>
                            </div>
                        </div><!--end job post-->
                    </div><!--end col-->

                    <div class="col-12 d-md-none d-block">
                        <div class="text-center">
                            <a href="job-grid-one.html" class="btn btn-link primary text-muted">See More Jobs <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center mb-4 pb-2">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h4 class="title mb-3">Here's why you'll love it Jobnova</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                        <div class="position-relative features text-center p-4 rounded shadow bg-white">
                            <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                <i data-feather="phone" class="fea icon-ex-md"></i>
                            </div>
    
                            <div class="mt-4">
                                <a href="#" class="title h5 text-dark">24/7 Support</a>
                                <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                                <div class="mt-3">
                                    <a href="#" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                        <div class="position-relative features text-center p-4 rounded shadow bg-white">
                            <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                <i data-feather="cpu" class="fea icon-ex-md"></i>
                            </div>
    
                            <div class="mt-4">
                                <a href="#" class="title h5 text-dark">Tech & Startup Jobs</a>
                                <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                                <div class="mt-3">
                                    <a href="#" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                        <div class="position-relative features text-center p-4 rounded shadow bg-white">
                            <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                <i data-feather="activity" class="fea icon-ex-md"></i>
                            </div>
    
                            <div class="mt-4">
                                <a href="#" class="title h5 text-dark">Quick & Easy</a>
                                <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                                <div class="mt-3">
                                    <a href="#" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                        <div class="position-relative features text-center p-4 rounded shadow bg-white">
                            <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                <i data-feather="clock" class="fea icon-ex-md"></i>
                            </div>
    
                            <div class="mt-4">
                                <a href="#" class="title h5 text-dark">Save Time</a>
                                <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                                <div class="mt-3">
                                    <a href="#" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 col-md-6 mb-5  order-md-2 order-1">
                        <div class="about-right">
                            <div class="position-relative shadow rounded img-one">
                                <img src="Views/images/about/ab03.jpg" class="img-fluid rounded" alt="work-image">
                            </div>

                            <div class="img-two shadow rounded p-2 bg-white">
                                <img src="Views/images/about/ab04.jpg" class="img-fluid rounded" alt="work-image">

                                <div class="position-absolute top-0 start-50 translate-middle">
                                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow card d-flex justify-content-center align-items-center lightbox">
                                        <i class="mdi mdi-play mdi-24px text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 order-md-1 order-2">
                        <div class="section-title mb-4 me-lg-5">
                            <h4 class="title mb-3">Find Best Companies.</h4>
                            <p class="text-muted para-desc mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        </div>

                        <div class="row g-4 mt-0">
                            <div class="col-md-6">
                                <div class="employer-card rounded shadow p-2 bg-light">
                                    <div class="d-flex align-items-center">
                                        <img src="Views/images/company/google-logo.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">
        
                                        <div class="content ms-3">
                                            <a href="employer-profile.html" class="h5 title text-dark">Google</a>
                                            <span class="text-muted d-flex align-items-center small mt-1">10 vacancy</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="employer-card rounded shadow p-2 bg-light">
                                    <div class="d-flex align-items-center">
                                        <img src="Views/images/company/facebook-logo.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">
        
                                        <div class="content ms-3">
                                            <a href="employer-profile.html" class="h5 title text-dark">Facebook</a>
                                            <span class="text-muted d-flex align-items-center small mt-1">10 vacancy</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="employer-card rounded shadow p-2 bg-light">
                                    <div class="d-flex align-items-center">
                                        <img src="Views/images/company/android.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">
        
                                        <div class="content ms-3">
                                            <a href="employer-profile.html" class="h5 title text-dark">Android</a>
                                            <span class="text-muted d-flex align-items-center small mt-1">10 vacancy</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="employer-card rounded shadow p-2 bg-light">
                                    <div class="d-flex align-items-center">
                                        <img src="Views/images/company/circle-logo.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">
        
                                        <div class="content ms-3">
                                            <a href="employer-profile.html" class="h5 title text-dark">Circle CI</a>
                                            <span class="text-muted d-flex align-items-center small mt-1">10 vacancy</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="employer-card rounded shadow p-2 bg-light">
                                    <div class="d-flex align-items-center">
                                        <img src="Views/images/company/lenovo-logo.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">
        
                                        <div class="content ms-3">
                                            <a href="employer-profile.html" class="h5 title text-dark">Lenovo</a>
                                            <span class="text-muted d-flex align-items-center small mt-1">10 vacancy</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="employer-card rounded shadow p-2 bg-light">
                                    <div class="d-flex align-items-center">
                                        <img src="Views/images/company/linkedin.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">
        
                                        <div class="content ms-3">
                                            <a href="employer-profile.html" class="h5 title text-dark">Linkedin</a>
                                            <span class="text-muted d-flex align-items-center small mt-1">10 vacancy</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="employers.html" class="btn btn-link primary text-muted">See More Companies <i class="mdi mdi-arrow-right align-middle"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Latest Blog or News</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row g-4 mt-0">
                    <div class="col-lg-4 col-md-6">
                        <div class="card blog blog-primary shadow rounded overflow-hidden border-0">
                            <div class="card-img blog-image position-relative overflow-hidden rounded-0">
                                <div class="position-relative overflow-hidden">
                                    <img src="Views/images/blog/01.jpg" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>
                                </div>
                            </div>

                            <div class="card-body blog-content position-relative p-0">
                                <div class="blog-tag px-4">
                                    <a href="#" class="badge bg-primary rounded-pill">Arts</a>
                                </div>
                                <div class="p-4">
                                    <ul class="list-unstyled text-muted small mb-2">
                                        <li class="d-inline-flex align-items-center me-2"><i data-feather="calendar" class="fea icon-ex-sm me-1 text-dark"></i>31st October 2023</li>
                                        <li class="d-inline-flex align-items-center"><i data-feather="clock" class="fea icon-ex-sm me-1 text-dark"></i>5 min read</li>
                                    </ul>

                                    <a href="blog-detail.html" class="title fw-semibold fs-5 text-dark">11 Tips to Help You Get New Clients Through Cold Calling</a>
                                    
                                    <ul class="list-unstyled d-flex justify-content-between align-items-center text-muted mb-0 mt-3">
                                        <li class="list-inline-item me-2"><a href="#" class="btn btn-link primary text-dark">Read Now <i class="mdi mdi-arrow-right"></i></a></li>
                                        <li class="list-inline-item"><span class="text-dark">By</span> <a href="#" class="text-muted link-title">Google</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6">
                        <div class="card blog blog-primary shadow rounded overflow-hidden border-0">
                            <div class="card-img blog-image position-relative overflow-hidden rounded-0">
                                <div class="position-relative overflow-hidden">
                                    <img src="Views/images/blog/02.jpg" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>
                                </div>
                            </div>

                            <div class="card-body blog-content position-relative p-0">
                                <div class="blog-tag px-4">
                                    <a href="#" class="badge bg-primary rounded-pill">Illustration</a>
                                </div>
                                <div class="p-4">
                                    <ul class="list-unstyled text-muted small mb-2">
                                        <li class="d-inline-flex align-items-center me-2"><i data-feather="calendar" class="fea icon-ex-sm me-1 text-dark"></i>31st October 2023</li>
                                        <li class="d-inline-flex align-items-center"><i data-feather="clock" class="fea icon-ex-sm me-1 text-dark"></i>5 min read</li>
                                    </ul>

                                    <a href="blog-detail.html" class="title fw-semibold fs-5 text-dark">DigitalOcean launches first Canadian data centre in Toronto</a>
                                    
                                    <ul class="list-unstyled d-flex justify-content-between align-items-center text-muted mb-0 mt-3">
                                        <li class="list-inline-item me-2"><a href="#" class="btn btn-link primary text-dark">Read Now <i class="mdi mdi-arrow-right"></i></a></li>
                                        <li class="list-inline-item"><span class="text-dark">By</span> <a href="#" class="text-muted link-title">Facebook</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="card blog blog-primary shadow rounded overflow-hidden border-0">
                            <div class="card-img blog-image position-relative overflow-hidden rounded-0">
                                <div class="position-relative overflow-hidden">
                                    <img src="Views/images/blog/03.jpg" class="img-fluid" alt="">
                                    <div class="card-overlay"></div>
                                </div>
                            </div>

                            <div class="card-body blog-content position-relative p-0">
                                <div class="blog-tag px-4">
                                    <a href="#" class="badge bg-primary rounded-pill">Music</a>
                                </div>
                                <div class="p-4">
                                    <ul class="list-unstyled text-muted small mb-2">
                                        <li class="d-inline-flex align-items-center me-2"><i data-feather="calendar" class="fea icon-ex-sm me-1 text-dark"></i>31st October 2023</li>
                                        <li class="d-inline-flex align-items-center"><i data-feather="clock" class="fea icon-ex-sm me-1 text-dark"></i>5 min read</li>
                                    </ul>

                                    <a href="blog-detail.html" class="title fw-semibold fs-5 text-dark">Using Banner Stands To Increase Trade Show Traffic</a>
                                    
                                    <ul class="list-unstyled d-flex justify-content-between align-items-center text-muted mb-0 mt-3">
                                        <li class="list-inline-item me-2"><a href="#" class="btn btn-link primary text-dark">Read Now <i class="mdi mdi-arrow-right"></i></a></li>
                                        <li class="list-inline-item"><span class="text-dark">By</span> <a href="#" class="text-muted link-title">Linkedin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Footer Start -->
        <footer class="bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="py-5">
                            <div class="row align-items-center">
                                <div class="col-sm-3">
                                    <div class="text-center text-sm-start">
                                        <a href="#"><img src="Views/images/logo-light.png" alt=""></a>
                                    </div>
                                </div>
        
                                <div class="col-sm-9 mt-4 mt-sm-0">
                                    <ul class="list-unstyled footer-list terms-service text-center text-sm-end mb-0">
                                        <li class="list-inline-item my-2"><a href="index.html" class="text-foot fs-6 fw-medium me-2"><i class="mdi mdi-circle-small"></i> Home</a></li>
                                        <li class="list-inline-item my-2"><a href="services.html" class="text-foot fs-6 fw-medium me-2"><i class="mdi mdi-circle-small"></i> How it works</a></li>
                                        <li class="list-inline-item my-2"><a href="job-post.html" class="text-foot fs-6 fw-medium me-2"><i class="mdi mdi-circle-small"></i> Create a job</a></li>
                                        <li class="list-inline-item my-2"><a href="aboutus.html" class="text-foot fs-6 fw-medium me-2"><i class="mdi mdi-circle-small"></i> About us</a></li>
                                        <li class="list-inline-item my-2"><a href="pricing.html" class="text-foot fs-6 fw-medium"><i class="mdi mdi-circle-small"></i> Plans</a></li>
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
	    <script src="Views/js/bootstrap.bundle.min.js"></script>
        <script src="Views/js/tiny-slider.js"></script>
        <script src="Views/js/tobii.min.js"></script>
        <script src="Views/js/feather.min.js"></script>
	    <!-- Custom -->
	    <script src="Views/js/plugins.init.js"></script>
	    <script src="Views/js/app.js"></script>
    </body>

<!-- Mirrored from shreethemes.in/jobnova/layouts/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 13:09:19 GMT -->
</html>