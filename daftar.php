<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath."/lib/Session.php";
Session::init();



spl_autoload_register(function($classes){

  include 'classes/'.$classes.".php";

});


$users = new Users();
Session::CheckLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Bootstrap Template - Daftar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/Restaurantly/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/Restaurantly/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/Restaurantly/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/Restaurantly/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/Restaurantly/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/Restaurantly/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/Restaurantly/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/Restaurantly/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.2.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Restaurantly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/Restaurantly/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
          <li><a class="nav-link scrollto" href="daftar.php">Daftar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
   
    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Daftar</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Daftar</li>
          </ol>
        </div>

      </div>
    </section>

    <section class="inner-page">
      <div class="container">
      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
      <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

            $register = $users->userRegistration($_POST);
        }
        
        if (isset($register)) {
            echo $register;
        }
        ?>
        <div class="section-title">
          <h2>Daftar</h2>
          <p>Daftar Terlebih Dahulu...</p>
        </div>
      </div>
            <form  method="post" enctype="multipart/form-data">
            <div class="php-email-form">
              <div class="form-group mt-3">
              <div class="form-group mt-3">
                <input type="name" class="form-control" name="name" id="subject" placeholder="Name" required>
              </div>
                <input type="email" class="form-control" name="email" id="subject" placeholder="Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="password" id="subject" placeholder="Password" required>
              </div>
              <div class="form-group mt-3">
                <input type="number" class="form-control" name="mobile" id="subject" placeholder="Number" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="address" rows="8" placeholder="Alamat" required></textarea>
              </div>
              <input type="hidden" name="roleid" value="2" class="form-control">
                Upload Logo
                <input id="input_message" class="input_ph input_message" type="file"  name="usr_img" required>
                <br><br>
              <div class="text-center"><button name="register" type="submit">Daftar</button></div>
              </div>
            </form>
        </div>

      </div>
    </section><!-- End Contact Section -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Restaurantly</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/Restaurantly/vendor/aos/aos.js"></script>
  <script src="assets/Restaurantly/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/Restaurantly/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/Restaurantly/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/Restaurantly/vendor/php-email-form/validate.js"></script>
  <script src="assets/Restaurantly/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/Restaurantly/js/main.js"></script>

</body>

</html>