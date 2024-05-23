<?php

include "../../Classes/Admin.php";


if(isset($_SESSION['role'])){

    if($_SESSION['role'] != 'admin'){
        header('location: ../Auth/login.php');

    }

}


$user = new Admin();

if(isset($_GET['updateid'])){
    $cl = $user->GetContact($_GET['updateid']);
}

if(isset($_POST['update'])){
    $user->UpdateContact($_POST,$_GET['updateid']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TekJob</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/download.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/styleness.css" rel="stylesheet">


    <style>



        ol {list-style-type: katakana-iroha;}

        button{
            border: none;
            color: white;
            padding: 2px 22px;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .button1{
            background-color: #f44336;;
        }
        .button2{
            background-color: #008CBA;
        }


    </style>


    <!-- =======================================================
    * Template Name: iPortfolio - v3.7.0
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <h1 class="text-light"><a href="home.php">TekJOB</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="https://www.facebook.com/gonsergroupofficial" class="facebook"><i class="bx bxl-facebook bx-tada-hover"></i></a>
                <a href="https://www.linkedin.com/company/gonsergroup" class="linkedin"><i class="bx bxl-linkedin bx-tada-hover"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="home.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Accuiell</span></a></li>
                <li><a href="home.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Ajouter Utilisateur</span></a></li>
                <li><a href="Consult.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Consulter Utilisateurs</span></a></li>
                <li><a href="Contacts.php" class="nav-link scrollto"><i class="bx bx-archive"></i> <span>Consulter Contacts</span></a></li>
                <li><a href="CreateJob.php" class="nav-link scrollto"><i class="bx bx-user-check"></i> <span>Ajouter Job</span></a></li>
                <li><a href="ConsultJobs.php" class="nav-link scrollto"><i class="bx bx-user-check"></i> <span>Consult Jobs</span></a></li>


            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Welcome TekJOB Administrateur</h2>
                <?php echo date("d/m/Y"); ?>
                <?php echo date("h:i:s");?>
                <ol>

                    <li><strong><button type="button" class="button1"><a href="../Auth/logout.php" class="text-light">Déconnecter</a></button></strong></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Update Section ======= -->
    <section id="Update" class="Update">
        <div class="container">

            <div class="section-title">
                <h2>Mise a jour Status et consulter</h2>
                <form id="update" class="clearfix" method="POST" action="">
                    <strong><div class="section_subtitle left">Message </div></strong>
                    <form action="" id="manage_employee">
                        <div class="row">
                            <div class="col-md-6 border-right">
                                <h3><?php echo $cl['message'];?></h3>
                                <label for="" class="control-label">Reponse :</label>
                                <textarea name="message" class="form-control form-control-sm"><?php echo $cl['reponse'];?></textarea>
                                <label for="" class="control-label">Status :</label>
                                <select name="status" class="form-control form-control-sm" required>
                                    <option value="<?php echo $cl['status'];?>"><?php echo $cl['status'];?></option>
                                    <option value="Complete">Complete</option>
                                    <option value="En cours">En cours</option>
                                </select>
                                <center><button type="submit" name="update" class="btn btn-primary mr-2">Update Contact</button></center>


                            </div>

                    </form>

            </div>

        </div>
    </section><!-- End Update Section -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>TEK-JOB</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
                Designed by <a href="https://www.linkedin.com/in/wannes-chayeb-4a61501a1/">Love ♥</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>