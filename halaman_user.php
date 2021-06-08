<?php
//koneksi ke database
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Delicious Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
    <div class="container text-right">
      <i class="icofont-phone"></i> +62 85647450517
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="section-title"><a href="index.php">Selamat Datang</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="<?php if(!isset($_GET['halaman'])) { echo "active"; } ?>" ><a href="halaman_user.php">Home</a></li>
          <li class="<?php if(($_GET['halaman'] == "menu")) { echo "active"; } ?>"><a href="halaman_user.php?halaman=menu">Menu</a></li>
          <li class="<?php if(($_GET['halaman'] == "keranjang")) { echo "active"; } ?>"><a href="halaman_user.php?halaman=keranjang">Keranjang</a></li>
          <!-- <li><a href="halaman_user.php?halaman=transaksi">Transaksi</a></li> -->
          <li class="<?php if(($_GET['halaman'] == "contact")) { echo "active"; } ?>"><a href="halaman_user.php?halaman=contact">Contact Us</a></li>
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
            <!-- <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Anisha Klapertart</span> and Cake</h2>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <?php if (!isset($_GET['halaman'])) { ?>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">
        <?php 
          if(isset($_GET['alert'])){
            if($_GET['alert'] == "gagal") {
              echo "<div class='alert alert-danger text-center'>Gagal!</div>";
            } else if($_GET['alert'] == "sukses") {
              echo "<div class='alert alert-success text-center'>Sukses Pesan, Silakan Check Email Anda!</div>";
            }
          }
        ?>
            <div class="section-title">
                <h2>Anisha Klape<span>rtart and Cake</span></h2>
                <p>
                Anisha Klapertart and Cake merupakan usaha perorangan dalam bidang makanan. Produk yang kami jual yaitu kue dan roti, dibuat dengan bahan berkualitas yang terbaik dan halal.
                Berikut beberapa produk yang kami buat :
                </p>
                <ul>
                <li><i class="bx bx-check-double"></i> Klapertart</li>
                <li><i class="bx bx-check-double"></i> Cake Tape</li>
                <li><i class="bx bx-check-double"></i> Fudgy Brownies</li>
                <li><i class="bx bx-check-double"></i> Oat Cookies</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    <?php }
    else if($_GET['halaman']=='menu'){
      include 'menu.php';
    }
    else if($_GET['halaman']=='keranjang') {
      include 'keranjang.php';
    }
    else if($_GET['halaman']=='transaksi') {
      include 'transaksi.php';
    }
    else if($_GET['halaman']=='contact') {
      include 'contact.php';
    } 
    else if($_GET['halaman']=='checkout') {
      include 'checkout.php';
    }
    ?>
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