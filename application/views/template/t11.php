<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appleria | News</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Site Icons erlangga -->
<link rel="shortcut icon" href="../assets/erlanggaa/images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="../assets/erlanggaa/images/apple-touch-icon.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/erlngga/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/erlngga/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/erlngga/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/erlngga/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/erlngga/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/erlngga/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/erlngga/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/erlngga/css/style.css" rel="stylesheet">

  <!-- Template native css | custom by erlangga -->
  <link rel="stylesheet" href="../assets/erlngga/css/temp1.css">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/

  * edit by erlangga handika.
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="<?= base_url('user/opss');?>">Appleria<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="<?= base_url('user/index');?>">About</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('user/homee');?>">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="<?= base_url('user/homee');?>" class="get-started-btn scrollto">Kembali</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

      <?php foreach ($data_erlngga as $row ) : ?>

        <div class="d-flex justify-content-between align-items-center" data-aos="fade-up" data-aos-delay="200"> 
          <h2><?= $row->judul ?></h2>
          <ol>
            <li><a href="<?= base_url('user/index');?>">News</a></li>
            <li>Detail</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <div class="nama-post" data-aos="fade-right" data-aos-delay="200">
            <p><?= $row->uplodby ?></p>
            <p>-</p>
            <p><?= $row->waktu ?></p>
            
        </div>

        <div class="gambar-top" data-aos="fade-up" data-aos-delay="200">
            <div class="gambarnya">
                <img src="../assets/erlanggaa/trial/<?= $row->gambar ?>" alt="">
            </div>
        </div>

        <div class="text-awal" data-aos="fade-up" data-aos-delay="220">
            <p class="text-appleria">Jakarta, Appleria.com - <span class="named">
            <?= $row->textdiss1 ?>
            </span></p>
        </div>

        <div class="text-tengah">
            <div class="text-inti" data-aos="fade-up" data-aos-delay="240">
                <p>
                  <?= $row->textdiss2 ?>
                </p>
            </div>

            <div class="text-isian" data-aos="fade-up" data-aos-delay="260">
                <p>
                <?= $row->textdiss3 ?>
                </p>
            </div>

            <div class="text-footer" data-aos="fade-up" data-aos-delay="280">
                <p>
                <?= $row->textdiss4 ?>
                </p>
            </div>

            <div class="" data-aos="fade-up" data-aos-delay="300">
                <p>
                <?= $row->textdiss5 ?>
                </p>
            </div>

            
        </div>

        <?php endforeach; ?>
      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
          
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63457.02840674015!2d106.8022458493774!3d-6.255262836483691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3b2b5f25827%3A0xfb448f6e57a7a372!2sKalibata%20City%2C%20Jl.%20Raya%20Kalibata%20No.1%2C%20RT.9%2FRW.4%2C%20Rawajati%2C%20Kec.%20Pancoran%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012750!5e0!3m2!1sid!2sid!4v1682382916190!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jakarta Selatan, Kalibata City</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>Appleriaa@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+628 13 7932 3578</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
           
            <form action="<?= base_url('template/index');?>" method="post">
            <h4><?= $this->session->flashdata('gagal');?></h4>
            <h4><?= $this->session->flashdata('gagal22');?></h4>
              <div class="row php-email-form">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" value="<?= $user['name'];?>" readonly>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" value="<?= $user['email'];?>" readonly>
                </div>
              </div>
              <div class="form-group mt-3 php-email-form">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3 php-email-form">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              
             <div class="pt-submit">
             <div class="text-center php-email-form"><button type="Submit">Send Message</button></div>
             </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Appleria<span>.</span></h3>
              <p>
                Jakarta Selatan <br>
                Kalibata City, ID<br><br>
                <strong>Phone:</strong> +628 13 7932 3578<br>
                <strong>Email:</strong> Appleriaa@gmail.com<br>
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

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sejarah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Travel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Business</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">News</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sports</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Drop your email to follow this website</p>
            <form action="" method="post">
              <input type="email" name="email" placeholder="Drop here..">
              <input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
       
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
          &copy; Copyright <strong><span><?= date('Y');?> Appleria</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/erlngga/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/erlngga/vendor/aos/aos.js"></script>
  <script src="../assets/erlngga/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/erlngga/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/erlngga/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/erlngga/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/erlngga/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/erlngga/js/main.js"></script>

</body>

</html>