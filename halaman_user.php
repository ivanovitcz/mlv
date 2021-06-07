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
<<<<<<< HEAD
          <li class="active"><a href="halaman_user.php">Home</a></li>
          <li><a href="halaman_user.php#menu">Menu</a></li>
          <li><a href="halaman_user.php?halaman=keranjang">Keranjang</a></li>
          <!-- <li><a href="halaman_user.php?halaman=transaksi">Transaksi</a></li> -->
          <li><a href="halaman_user.php#contact">Contact Us</a></li>
          <li class="book-a-table text-center"><a href="#pesan">Pesan Makanan</a></li>
=======
          <li class="<?php if(!isset($_GET['halaman'])) { echo "active"; } ?>" ><a href="halaman_user.php">Home</a></li>
          <li class="<?php if(($_GET['halaman'] == "menu")) { echo "active"; } ?>"><a href="halaman_user.php?halaman=menu">Menu</a></li>
          <li class="<?php if(($_GET['halaman'] == "keranjang")) { echo "active"; } ?>"><a href="halaman_user.php?halaman=keranjang">Keranjang</a></li>
          <!-- <li><a href="halaman_user.php?halaman=transaksi">Transaksi</a></li> -->
          <li class="<?php if(($_GET['halaman'] == "contact")) { echo "active"; } ?>"><a href="halaman_user.php?halaman=contact">Contact Us</a></li>
>>>>>>> ce39603f86a18b523e1d548d31a177d2101e3408
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
<<<<<<< HEAD
    <!-- ======= Menu Section ======= -->
    <section id="harga" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Harga <span>Menu</span></h2>
        </div>
        <div class="row menu-container">
            <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
            <?php while($perproduk = $ambil->fetch_assoc()){ ?>
            <div class="col-lg-3 menu-item filter-starters">
              <img src="foto_produk/<?php echo $perproduk['foto_produk'];?>" alt="" class="img-fluid">
                  <div class="menu-content mt-3">
                    <p><?php echo $perproduk ['nama_produk']; ?></p>
                    <p>Rp. <?php echo number_format($perproduk ['harga_produk']); ?></p>
                    <p><?php echo $perproduk ['deskripsi_produk']; ?></p>
                    <p><a class="btn btn-warning" href="keranjang_masukkan.php?id=<?php echo $perproduk['id_produk']; ?>"> Masukkan Keranjang</a></p>
                  </div>
              </div><?php }?>
            </div>
          </div>
    </section><!-- End Menu Section -->


    <!-- ======= Book A Table Section ======= -->
    <section id="pesan" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Pesan<span>Makanan</span></h2>
          <p>Setelah memesan makanan diharapkan segera mengkonfirmasi penjual, beserta bukti PDF.</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Your Address " data-rule="alamat" data-msg="Please enter a valid address">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
        </div>
      </div>

      <div class="map">
        <center><iframe style="border:0; width: 1000px; height: 350px;" src="https://g.co/kgs/G9q5Da" frameborder="0" allowfullscreen></iframe></center>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="icofont-google-map"></i>
              <h4>Lokasi:</h4>
              <p>Jalan Edelweis No. C9, Gumpang, Kartasura, Dusun I, Gumpang, Sukoharjo, Kabupaten Sukoharjo, Jawa Tengah 57169</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Buka Jam:</h4>
              <p>Senin-Sabtu:<br>08.00-17.00 WIB</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>dearluluk75@gmail.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call/WA:</h4>
              <p>+62 85647450517 </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
    
    <?php } else if($_GET['halaman']=='keranjang') {
      include 'keranjang.php';
    } else if($_GET['halaman']=='transaksi') {
      include 'transaksi.php';
    }?>
=======
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
    ?>
>>>>>>> ce39603f86a18b523e1d548d31a177d2101e3408
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