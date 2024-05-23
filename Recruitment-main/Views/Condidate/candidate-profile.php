<?php

include_once "../Auth/valid.php";
include "../../Classes/User.php";

if(isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 'con') {
        header('location: ../Auth/login.php');

    }
}


$user = new User();

if(isset($_SESSION['id'])){
    $cl = $user->GetUser($_SESSION['id']);
}

if(isset($_SESSION['email'])){
    $profile = $user->GetProfile($_SESSION['email']);
}

if(isset($_SESSION['email'])){
    $experience = $user->GetExperience($_SESSION['email']);
}

if(isset($_POST['send'])){
$user->AjouterMessage($_POST);
}

?>
<!doctype html>
<html lang="en">
	
<!-- Mirrored from shreethemes.in/jobnova/layouts/candidate-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 13:09:19 GMT -->
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
        <link href="../css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
	    <!-- Custom  Css -->
	    <link href="../css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
	</head>

	<body>
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <a class="logo" href="index.php">
                    <img src="../images/logo-dark.png" class="logo-light-mode" alt="">
                    <img src="../images/logo-light.png" class="logo-dark-mode" alt="">
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
                                <a href="candidate-profile.html" class="dropdown-item fw-medium fs-6"><i data-feather="user" class="fea icon-sm me-2 align-middle"></i>Profile</a>
                                <a href="candidate-profile-setting.php" class="dropdown-item fw-medium fs-6"><i data-feather="settings" class="fea icon-sm me-2 align-middle"></i>Settings</a>
                                <div class="dropdown-divider border-top"></div>
                                <a href="../../lock-screen.html" class="dropdown-item fw-medium fs-6"><i data-feather="lock" class="fea icon-sm me-2 align-middle"></i>Lockscreen</a>
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
                                        <li><a href="job-detail-two.php" class="sub-menu-item">Job Detail Two</a></li>
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
                                <li><a href="candidate-profile.html" class="sub-menu-item">Candidate Profile</a></li>
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
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative">
                            <div class="candidate-cover">
                                <img src="../images/hero/bg5.jpg" class="img-fluid rounded shadow" alt="">
                            </div>
                            <div class="candidate-profile d-flex align-items-end justify-content-between mx-2">
                                <div class="d-flex align-items-end">
                                    <img src="../images/team/01.jpg" class="rounded-pill shadow border border-3 avatar avatar-medium" alt="">

                                    <div class="ms-2">
                                        <h5 class="mb-0"><?php echo $cl['prenom']; ?><?php echo " ",$cl['nom']; ?></h5>
                                        <p class="text-muted mb-0"><?php echo $profile['occup']; ?></p>
                                    </div>
                                </div>

                                <a href="candidate-profile-setting.php" class="btn btn-sm btn-icon btn-pills btn-soft-primary"><i data-feather="settings" class="icons"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-4">
                <div class="row g-4">
                    <div class="col-lg-8 col-md-7 col-12">
                        <h5 class="mb-4">Introduction:</h5>

                        <p class="text-muted"><?php echo $profile['intro']; ?> </p>

                        <h5 class="mt-4">Skills:</h5>

                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="progress-box mt-4">
                                    <h6 class="font-weight-normal">HTML</h6>
                                    <div class="progress">
                                        <div class="progress-bar position-relative bg-primary" style="width:84%;">
                                            <div class="progress-value d-block text-dark h6">84%</div>
                                        </div>
                                    </div>
                                </div><!--end process box-->
                                <div class="progress-box mt-4">
                                    <h6 class="font-weight-normal">CSS</h6>
                                    <div class="progress">
                                        <div class="progress-bar position-relative bg-primary" style="width:75%;">
                                            <div class="progress-value d-block text-dark h6">75%</div>
                                        </div>
                                    </div>
                                </div><!--end process box-->
                                <div class="progress-box mt-4">
                                    <h6 class="font-weight-normal">JQuery</h6>
                                    <div class="progress">
                                        <div class="progress-bar position-relative bg-primary" style="width:79%;">
                                            <div class="progress-value d-block text-dark h6">79%</div>
                                        </div>
                                    </div>
                                </div><!--end process box-->
                            </div><!--end col-->

                            <div class="col-lg-6 col-12">
                                <div class="progress-box mt-4">
                                    <h6 class="font-weight-normal">WordPress</h6>
                                    <div class="progress">
                                        <div class="progress-bar position-relative bg-primary" style="width:79%;">
                                            <div class="progress-value d-block text-dark h6">79%</div>
                                        </div>
                                    </div>
                                </div><!--end process box-->
                                <div class="progress-box mt-4">
                                    <h6 class="font-weight-normal">Figma</h6>
                                    <div class="progress">
                                        <div class="progress-bar position-relative bg-primary" style="width:85%;">
                                            <div class="progress-value d-block text-dark h6">85%</div>
                                        </div>
                                    </div>
                                </div><!--end process box-->
                                <div class="progress-box mt-4">
                                    <h6 class="font-weight-normal">Illustration</h6>
                                    <div class="progress">
                                        <div class="progress-bar position-relative bg-primary" style="width:65%;">
                                            <div class="progress-value d-block text-dark h6">65%</div>
                                        </div>
                                    </div>
                                </div><!--end process box-->
                            </div><!--end col-->
                        </div><!--end row-->

                        <h5 class="mt-4">Experience:</h5>

                        <div class="row">
                            <div class="col-12 mt-4">
                                <div class="d-flex">
                                    <div class="text-center">
                                        <img src="../images/company/linkedin.png" class="avatar avatar-small bg-white shadow p-2 rounded" alt="">
                                        <h6 class="text-muted mt-2 mb-0"><?php echo $experience['date']; ?> </h6>
                                    </div>

                                    <div class="ms-3">
                                        <h6 class="mb-0"><?php echo $experience['job_name']; ?></h6>
                                        <p class="text-muted"><?php echo $experience['location']; ?></p>
                                        <p class="text-muted mb-0"><?php echo $experience['description']; ?>.</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="p-4 rounded shadow mt-4">
                            <h5>Get in touch !</h5>
                            <form class="mt-4" method="POST">
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Your Name <span class="text-danger">*</span></label>
                                            <input name="name" id="name" type="text" class="form-control" value="<?php echo $cl['prenom']," ",$cl['nom']?>">
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Your Email <span class="text-danger">*</span></label>
                                            <input name="email" id="email" type="email" class="form-control" value="<?php echo $cl['email']?>">
                                        </div> 
                                    </div><!--end col-->
    
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Subject</label>
                                            <input name="subject" id="subject" class="form-control" placeholder="Subject :">
                                        </div>
                                    </div><!--end col-->
    
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">Comments <span class="text-danger">*</span></label>
                                            <textarea name="message" id="message" rows="4" class="form-control" placeholder="Message :"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" name="send" class="btn btn-primary">Send Message</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="card bg-light p-4 rounded shadow sticky-bar">
                            <h5 class="mb-0">Personal Detail:</h5>
                            <div class="mt-3">
                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <span class="d-inline-flex align-items-center text-muted fw-medium"><i data-feather="mail" class="fea icon-sm me-2"></i> Email:</span>
                                    <span class="fw-medium"><?php echo $cl['email']?></span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <span class="d-inline-flex align-items-center text-muted fw-medium"><i data-feather="gift" class="fea icon-sm me-2"></i> D.O.B.:</span>
                                    <span class="fw-medium"><?php echo $profile['intro']; ?></span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <span class="d-inline-flex align-items-center text-muted fw-medium"><i data-feather="home" class="fea icon-sm me-2"></i> Address:</span>
                                    <span class="fw-medium"><?php echo $profile['birth']; ?></span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <span class="d-inline-flex align-items-center text-muted fw-medium"><i data-feather="map-pin" class="fea icon-sm me-2"></i> City:</span>
                                    <span class="fw-medium"><?php echo $profile['loc']; ?></span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <span class="d-inline-flex align-items-center text-muted fw-medium"><i data-feather="globe" class="fea icon-sm me-2"></i> Country:</span>
                                    <span class="fw-medium"><?php echo $profile['city']; ?></span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <span class="d-inline-flex align-items-center text-muted fw-medium"><i data-feather="phone" class="fea icon-sm me-2"></i> Mobile:</span>
                                    <span class="fw-medium"><?php echo $profile['tel']; ?></span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-3">
                                    <span class="text-muted fw-medium">Social:</span>
                                    
                                    <ul class="list-unstyled social-icon text-sm-end mb-0">
                                        <li class="list-inline-item"><a href="../../../dribbble.com/shreethemes.html" target="_blank" class="rounded"><i data-feather="dribbble" class="fea icon-sm align-middle" title="dribbble"></i></a></li>
                                        <li class="list-inline-item"><a href="../../../linkedin.com/company/shreethemes" target="_blank" class="rounded"><i data-feather="linkedin" class="fea icon-sm align-middle" title="Linkedin"></i></a></li>
                                        <li class="list-inline-item"><a href="../../../www.facebook.com/shreethemes.html" target="_blank" class="rounded"><i data-feather="facebook" class="fea icon-sm align-middle" title="facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="../../../www.instagram.com/shreethemes/index.html" target="_blank" class="rounded"><i data-feather="instagram" class="fea icon-sm align-middle" title="instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="../../../twitter.com/shreethemes.html" target="_blank" class="rounded"><i data-feather="twitter" class="fea icon-sm align-middle" title="twitter"></i></a></li>
                                    </ul><!--end icon-->
                                </div>

                                <div class="p-3 rounded shadow bg-white mt-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <i data-feather="file-text" class="fea icon-md"></i>
                                        <h6 class="mb-0 ms-2"><?php echo $profile['cv']; ?></h6>
                                    </div>

                                    <a href="../images/calvin-carlo-resume.pdf" class="btn btn-primary w-100" download><i data-feather="download" class="fea icon-sm me-1"></i> Download CV</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
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
                                <a href="job-grid-four.php" class="btn btn-primary me-1 my-1">Apply Now</a>
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
                                        <a href="#"><img src="../images/logo-light.png" alt=""></a>
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
        <script src="../js/feather.min.js"></script>
	    <!-- Custom -->
	    <script src="../js/plugins.init.js"></script>
	    <script src="../js/app.js"></script>
    </body>

<!-- Mirrored from shreethemes.in/jobnova/layouts/candidate-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 13:09:23 GMT -->
</html>