<?php
session_start();
//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","akac");
// if (!isset($_SESSION['admin']))
// {
//   echo "<script>alert('Anda Harus Login');</script>";
//   echo "<script>location='login.php';</script>";
//   header('location:login.php');
//   exit();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Anisha Klapertart and Cake - Halaman Admin</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/malvin.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v2.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PMBar ======= -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="halaman_admin.php"><span>Anisha Klapertart and Cake</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="<?php if(!isset($_GET['halaman'])) { echo "active"; } ?>" ><a href="halaman_admin.php">Home</a></li>
          <li class="<?php if(($_GET['halaman'] == "produk") || ($_GET['halaman'] == "ubahproduk")) { echo "active"; } ?>"><a href="halaman_admin.php?halaman=produk">Data Produk</a></li>
          <li class="<?php if(($_GET['halaman'] == "pemesanan") || ($_GET['halaman'] == "detail")) { echo "active"; } ?>"><a href="halaman_admin.php?halaman=pemesanan">Pemesanan</a></li>
          <li class="<?php if(($_GET['halaman'] == "customer") || ($_GET['halaman'] == "ubahcustomer")) { echo "active"; } ?>"><a href="halaman_admin.php?halaman=customer">Customer</a></li>
          <li class="book-a-table text-center"><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg);">
            <!--<div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Klapertart</span> & Cake</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>-->
      </div>
    </div>
  </section><!-- End Hero -->
    <?php
        if (!isset($_GET['halaman']))
          { ?>
      <section id="menu" class="menu">
        <div class="container">
            <div class="section-title">
            <h2>Selamat Dat<span>ang Admin</span></h2>
            </div>
        </div>
      </section>
    <?php } ?>
  <main id="main">
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">
        <?php
        if (isset($_GET['halaman']))
        {
          if($_GET['halaman']=='produk')
          {
            include 'produk.php';
          }
          elseif($_GET['halaman']=='pemesanan')
          {
            include 'pemesanan.php';
          }
          elseif($_GET['halaman']=='customer')
          {
            include 'customer.php';
          }
          elseif($_GET['halaman']=='hapuscustomer')
          {
            include 'hapuscustomer.php';
          }
          elseif($_GET['halaman']=='ubahcustomer')
          {
            include 'ubahcustomer.php';
          }
          elseif($_GET['halaman']=='detail')
          {
            include 'detail.php';
          }
          elseif($_GET['halaman']=='tambahproduk')
          {
            include 'tambahproduk.php';
          }
          elseif($_GET['halaman']=='hapusproduk')
          {
            include 'hapusproduk.php';
          }
          elseif($_GET['halaman']=='ubahproduk')
          {
            include 'ubahproduk.php';
          }
          elseif($_GET['halaman']=='login')
          {
            include 'login.php';
          }
          elseif($_GET['halaman']=='logout')
          {
            include 'logout.php';
          }
        }
        else
        {
          include 'home_admin.php';
        }
        ?>
      </div>
    </section>
    <!-- End Menu Section -->
    <!-- ======= Tabel Pemesanan Section ======= -->
    <!-- End Tabel Pemesanan Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>