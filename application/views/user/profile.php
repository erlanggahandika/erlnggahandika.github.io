<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appleria | Profile</title>
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
  <!-- <link rel="stylesheet" href="../assets/erlngga/css/profile1.css"> -->

   <!-- vanilla css by erlangga -->
   <link rel="stylesheet" href="../assets/css/ubahpass.css">

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

      <h1 class="logo me-auto me-lg-0"><a href="<?= base_url('user/profile');?>">Appleria<span>.</span></a></h1>
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

      <a href="<?= base_url('user/account');?>" class="get-started-btn scrollto">Kembali</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200"> 
          <h2>My Profile Information.</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      <div class="form-prof">
                  <div class="template-prof" data-aos="fade-up" data-aos-delay="250">
                     <div class="yr-profil" data-aos="fade-right" data-aos-delay="300">
                        <h4>Your Profile Information</h4>
                     </div>
                     <div class="garis-bawah">
                        <div class="garisnya"></div>
                     </div>
                     <?= form_open_multipart('user/profile');?>
                       <?= $this->session->flashdata('eror'); ?>
                      
                       <?= $this->session->flashdata('berhasil'); ?>

                    <div class="row-testt">

                       <div class="top-input"  data-aos="fade-right" data-aos-delay="350">
                        <h5>Name:</h5>
                        <div class="row-lgi">
                            <div class="logo-atuh">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill:  rgb(5, 72, 255);transform: ;msFilter:;"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>
                            </div>
                            <div class="txt-input">
                            <input type="text" id="name" name="name" value="<?= $user['name'];?>">
                            </div>
                        </div>
                       </div>

                       <div class="top-inputt" data-aos="fade-right" data-aos-delay="350">
                        <h5>Email:</h5>
                        <div class="row-lgi">
                            <div class="logo-atuh">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(5, 72, 255);transform: ;msFilter:;"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>
                            </div>
                            <div class="txt-inputr">
                            <input type="text" id="email" name="email" value="<?= $user['email'];?>" readonly>
                            </div>
                        </div>
                       </div>

                    </div>

                    <div class="row-testting">
                        
                       <div class="top-input" data-aos="fade-right" data-aos-delay="400">
                        <h5>Addres:</h5>
                        <div class="row-lgi">
                            <div class="logo-atuh">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(5, 72, 255);transform: ;msFilter:;"><path d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"></path><path d="M11.42 21.814a.998.998 0 0 0 1.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819zM12 4c3.309 0 6 2.691 6 6.005.021 4.438-4.388 8.423-6 9.73-1.611-1.308-6.021-5.294-6-9.735 0-3.309 2.691-6 6-6z"></path></svg>
                            </div>
                            <div class="txt-input">
                            <input type="text" id="addres" name="addres" value="<?= $user['addres'];?>">
                            </div>
                        </div>
                       </div>

                       <div class="top-inputt" data-aos="fade-right" data-aos-delay="400">
                        <h5>Status:</h5>
                        <div class="row-lgi">
                            <div class="logo-atuh">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(5, 72, 255);transform: ;msFilter:;"><path d="M20.29 8.29 16 12.58l-1.3-1.29-1.41 1.42 2.7 2.7 5.72-5.7zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z"></path></svg>
                            </div>
                            <div class="txt-inputr">
                            <input type="text" id="roleacc" name="roleacc" value="<?= $user['roleacc'];?>" readonly>
                            </div>
                        </div>
                       </div>

                    </div>

                    <div class="row-testting">
                        
                       <div class="top-input" data-aos="fade-right" data-aos-delay="450">
                        <h5>No Handphone:</h5>
                        <div class="row-lgi">
                            <div class="logo-atuh">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(5, 72, 255);transform: ;msFilter:;"><path d="M17.707 12.293a.999.999 0 0 0-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 0 0 0-1.414l-4-4a.999.999 0 0 0-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 0 0 0-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414 9.586 7 8.293 8.293a1 1 0 0 0-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 0 0 .912-.271L17 14.414 19.586 17l-2.006 2.005z"></path></svg>
                            </div>
                            <div class="txt-input">
                            <input type="text" id="no_hp" name="no_hp" value="<?= $user['no_hp'];?>">
                            </div>
                        </div>
                       </div>

                       <div class="top-inputt" data-aos="fade-right" data-aos-delay="450">
                        <h5>Date Created:</h5>
                        <div class="row-lgi">
                            <div class="logo-atuh">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(5, 72, 255);transform: ;msFilter:;"><path d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z"></path><path d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z"></path></svg>
                            </div>
                            <div class="txt-inputr">
                            <input type="text" id="date_created" name="date_created" value="<?= date('d M Y', $user['date_created']);?>" readonly>
                            </div>
                        </div>
                       </div>

                    </div>

                    <div class="submit-type" data-aos="zoom-in" data-aos-delay="450">
                        <input type="submit" placeholder="Kirim">
                    </div>
                   
                     </form>
                  </div>

                  <div class="tmpt-sos">
                    <div class="tmplttnya" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pt-prf" data-aos="fade-right" data-aos-delay="350">
                            <h4>Profile</h4>
                        </div>
                        <div class="gris-profil">
                            <div class="grispf"></div>
                        </div>

                        <div class="image-pt">
                            <div class="tpt-img">
                                <img src="../assets/img/profile/<?= $user['image'];?>" alt="">
                            </div>
                        </div>

                        <div class="pt-pws" data-aos="fade-right" data-aos-delay="400">
                                <div class="template-pws">
                                    <a href="<?= base_url('user/ubahpass');?>">
                                    <div class="row-pws">

                                        <div class="icon-pws">
                                            <div class="icon-tmplt">
                                                <div class="atur-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(125, 55, 255);transform: ;msFilter:;"><path d="M12 2C9.243 2 7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zm6 10 .002 8H6v-8h12zm-9-2V7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9z"></path></svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-pass">
                                            <h4>Password</h4>
                                        </div>

                                        <div class="roww-ic">
                                            <div class="atur-ic">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(174, 172, 175);transform: ;msFilter:;"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
                                            </div>
                                        </div>

                                    </div>
                                    </a>
                                </div>
                        </div>

                        <div class="pt-pws1" data-aos="fade-right" data-aos-delay="500">
                                <div class="template-pws">
                                    <a href="#">
                                    <div class="row-pws">

                                        <div class="icon-pws">
                                            <div class="icon-tmplt">
                                                <div class="atur-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(125, 55, 255);transform: ;msFilter:;"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-pass">
                                            <h4>Email</h4>
                                        </div>

                                        <div class="roww-ic1">
                                            <div class="atur-ic">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(174, 172, 175);transform: ;msFilter:;"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
                                            </div>
                                        </div>

                                    </div>
                                    </a>
                                </div>
                        </div>

                        <div class="pt-pws1" data-aos="fade-right" data-aos-delay="550">
                                <div class="template-pws">
                                    <a href="#">
                                    <div class="row-pws">

                                        <div class="icon-pws">
                                            <div class="icon-tmplt">
                                                <div class="atur-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(125, 55, 255);transform: ;msFilter:;"><path d="M17.707 12.293a.999.999 0 0 0-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 0 0 0-1.414l-4-4a.999.999 0 0 0-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 0 0 0-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414 9.586 7 8.293 8.293a1 1 0 0 0-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 0 0 .912-.271L17 14.414 19.586 17l-2.006 2.005z"></path></svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-pass">
                                            <h4>Telp</h4>
                                        </div>

                                        <div class="roww-ic3">
                                            <div class="atur-ic">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(174, 172, 175);transform: ;msFilter:;"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
                                            </div>
                                        </div>

                                    </div>
                                    </a>
                                </div>
                        </div>

                        <div class="pt-pws1" data-aos="fade-right" data-aos-delay="600">
                                <div class="template-pws">
                                    <a href="<?= base_url('auth/logout');?>">
                                    <div class="row-pws">

                                        <div class="icon-pws">
                                            <div class="icon-tmplt">
                                                <div class="atur-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(125, 55, 255);transform: ;msFilter:;"><path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-pass">
                                            <h4>LogOut</h4>
                                        </div>

                                        <div class="roww-ic2">
                                            <div class="atur-ic">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(174, 172, 175);transform: ;msFilter:;"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
                                            </div>
                                        </div>

                                    </div>
                                    </a>
                                </div>
                        </div>



                    </div>
                  </div>
               </div>
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
           
            <form action="<?= base_url('user/homee');?>" method="post">
            <h4><?= $this->session->flashdata('gagal');?></h4>
            <h4><?= $this->session->flashdata('gagal22');?></h4>
              <div class="row php-email-form">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="<?= $user['name'];?>" readonly>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="<?= $user['email'];?>" readonly>
                </div>
              </div>
              <div class="form-group mt-3 php-email-form">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3 php-email-form">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              
             <div class="pt-submit">
             <div class="text-center php-email-form mt-3"><button type="Submit">Send Message</button></div>
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