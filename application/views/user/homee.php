<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appleria | home of artikel</title>
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

  <!-- Custom styles for this template -->
  <link href="../assets/erlanggaa/css/style1.css" rel="stylesheet">

  <!-- Responsive styles for this template -->
  <link href="../assets/erlanggaa/css/responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="../assets/erlanggaa/css/colors.css" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="../assets/erlanggaa/css/bootstrap.css" rel="stylesheet">

<!-- box icons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


  <!-- =======================================================
  * Template Name: Gp
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/

  *edit by erlangga handika
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="<?= base_url('user/homee');?>">Appleria<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto " href="<?= base_url('user/index');?>">About</a></li>
          <li class="dropdown"><a href=""><span>Category</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <?php foreach ($data_cat as $row) : ?>
                <li><a href="<?= $row->link; ?>"><?= $row->menu; ?></a></li>
              <?php endforeach; ?>
            </ul>
          </li>
          

          <?php foreach($data_nav as $row) : ?>
            <li><a class="nav-link scrollto" href="<?= base_url($row->link);?>"><?= $row->menu; ?></a></li>
          <?php endforeach; ?>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="<?= base_url('user/logot');?>" class="get-started-btn scrollto">Logout</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Powerful Artikel With Appleria<span>.</span></h1>
          <h2>We are team of talented digital marketers</h2>
        </div>
      </div>

      

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <?php foreach ($data_cat as $row) : ?>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <?= $row->icon; ?>
            <h3><a href="<?= base_url($row->link);?>"><?= $row->menu; ?></a></h3>
          </div>
       </div>
        <?php endforeach; ?>
      
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

  <section class="section first-section">
            <div class="container-fluid" data-aos="fade-up" data-aos-delay="150">
                <div class="masonry-blog clearfix">
                    <div class="left-side">
                        <div class="masonry-box post-media">
                            <?php foreach($data_display as $row): ?>
                             <img src="../assets/erlanggaa/trial/<?= $row->gambar ?>" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-aqua"><a href="<?= base_url($row->link);?>" title=""><?= $row->tag ?></a></span>
                                        <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul ?></a></h4>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu ?></a></small>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->uplodby ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                            <?php endforeach; ?>
                        </div><!-- end post-media -->
                    </div><!-- end left-side -->

                    <?php foreach ($data_diss as $row) : ?>
                    <div class="center-side">
                        <div class="masonry-box post-media">
                             <img src="../assets/erlanggaa/trial/<?= $row->gambar1 ?>" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-green"><a href="<?= base_url($row->link1);?>" title=""><?= $row->tag1  ?></a></span>
                                        <h4><a href="<?= base_url($row->link1);?>" title=""><?= $row->judul1 ?></a></h4>
                                        <small><a href="<?= base_url($row->link1);?>" title=""><?= $row->waktu1 ?></a></small>
                                        <small><a href="<?= base_url($row->link1);?>" title=""><?= $row->uplodby1 ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                        <?php endforeach; ?>

                        <?php foreach ($data_fasr as $row) :?>
                            <div class="masonry-box small-box post-media">
                             <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                             <div class="shadoweffect">       
                                <div class="shadow-desc">
                                       
                                    <div class="blog-meta">
                                        <span class="bg-green"><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></span>
                                        <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                        <?php endforeach; ?>

                        <?php foreach ($data_disti as $row) : ?>
                            <div class="masonry-box small-box post-media">
                             <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                       
                                    <div class="blog-meta">
                                        <span class="bg-green"><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></span>
                                        <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                        <?php endforeach; ?>
                    </div><!-- end left-side -->

                    <?php foreach($data_las as $row) : ?>
                    <div class="right-side hidden-md-down">
                        <div class="masonry-box post-media">
                             <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-aqua"><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></span>
                                        <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->uplodby; ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end right-side -->
                    <?php endforeach; ?>
                </div><!-- end masonry -->
            </div>
        </section>

        <section class="section">
            <div class="container" data-aos="fade-up" data-aos-delay="150">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h3 class="color-aqua"><a href="#" title="">Lifestyle</a></h3>
                        </div><!-- end title -->

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <?php foreach ($data_dist as $row) : ?>
                                <div class="blog-box" data-aos="fade-right" data-aos-delay="150">
                                    <div class="post-media">
                                        <a href="<?= base_url($row->link);?>" title="">
                                            <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                           
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                        <p><?= $row->textdiss1; ?></p>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->uplodby; ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <?php endforeach; ?>

                                <hr class="invis">

                                <?php foreach ($data_distq as $row) : ?>
                                <div class="blog-box" data-aos="fade-right" data-aos-delay="150">
                                    <div class="post-media">
                                        <a href="<?= base_url($row->link);?>" title="">
                                            <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                        <p><?= $row->textdiss1; ?></p>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->uplodby; ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                               <?php endforeach; ?>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h3 class="color-pink"><a href="#" title="">All</a></h3>
                        </div><!-- end title -->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <?php foreach ($data_fas as $row) : ?>
                                <div class="blog-box" data-aos="fade-up" data-aos-delay="150">
                                    <div class="post-media">
                                        <a href="<?= base_url($row->link);?>" title="">
                                            <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                            
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <?php endforeach; ?>

                                <hr class="invis">

                                <?php foreach ($data_fasq as $row) :?>
                                <div class="blog-box" data-aos="fade-up" data-aos-delay="150">
                                    <div class="post-media">
                                        <a href="<?= base_url($row->link);?>" title="">
                                            <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                               <?php endforeach; ?>
                            </div><!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <?php foreach ($data_fasw as $row) :?>
                                <div class="blog-box" data-aos="fade-up" data-aos-delay="150">
                                    <div class="post-media">
                                        <a href="<?= base_url($row->link);?>" title="">
                                            <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                            
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                               <?php endforeach;?>

                                <hr class="invis">

                                <?php foreach ($data_fase as $row) :?>
                                    <div class="blog-box" data-aos="fade-up" data-aos-delay="150">
                                    <div class="post-media">
                                        <a href="<?= base_url($row->link);?>" title="">
                                            <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                        <small><a href="<?= base_url($row->link);?>" title=""><?=  $row->waktu; ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <?php endforeach;?>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis1">

                <div class="row">
                    <div class="col-lg-10 offset-lg-1" data-aos="fade-up" data-aos-delay="150">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="../assets/erlanggaa/images/umko.jpg" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis1">

                <div class="row" data-aos="fade-left" data-aos-delay="100">
                    <div class="col-lg-9">
                        <div class="blog-list clearfix">
                            <div class="section-title">
                                <h3 class="color-green"><a href="<?= base_url('user/opss');?>" title="">Travel</a></h3>
                            </div><!-- end title -->

                            <?php foreach ($data_erlngga as $row) : ?>
                                <div class="blog-box row" data-aos="fade-left" data-aos-delay="100">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="<?= base_url($row->link);?>" title="">
                                            <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                    <p><?= $row->textdiss1; ?></p>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->uplodby; ?></a></small>
                                    
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                            <?php endforeach; ?>


                            <hr class="invis">

                            <?php foreach ($data_diss12 as $row) : ?>
                                <div class="blog-box row" data-aos="fade-left" data-aos-delay="100">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="<?= base_url($row->link);?>" title="">
                                            <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                    <p><?= $row->textdiss1; ?></p>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->uplodby; ?></a></small>
                                   
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                            <?php endforeach; ?>

                            <hr class="invis">

                            <?php foreach ($data_disss13 as $row) :?>
                                <div class="blog-box row" data-aos="fade-left" data-aos-delay="100">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="<?= base_url($row->link);?>" title="">
                                            <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                    <p><?= $row->textdiss1; ?></p>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->uplodby; ?></a></small>
                                   
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                            <?php endforeach; ?>
                        </div><!-- end blog-list -->

                        <hr class="invis">

                        <div class="blog-list clearfix">
                            <div class="section-title">
                                <h3 class="color-red"><a href="#" title="">Food</a></h3>
                            </div><!-- end title -->

                            <?php foreach ($data_diss14 as $row) : ?>
                            <div class="blog-box row" data-aos="fade-right" data-aos-delay="100">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="<?= base_url($row->link);?>" title="">
                                            <img src="../assets/erlanggaa/trial/rsz_f2.jpg" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                    <p><?= $row->textdiss1; ?></p>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->uplodby; ?></a></small>
                                   
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                           <?php endforeach; ?>

                            <hr class="invis">

                            
                           <?php foreach ($data_diss15 as $row) : ?>
                            <div class="blog-box row" data-aos="fade-right" data-aos-delay="100">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="<?= base_url($row->link);?>" title="">
                                            <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                    <p><?= $row->textdiss1; ?></p>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->uplodby?></a></small>
                                    
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                           <?php endforeach; ?>

                            <hr class="invis">

                            
                           <?php foreach ($data_diss16 as $row) : ?>
                            <div class="blog-box row" data-aos="fade-right" data-aos-delay="100">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="<?= base_url($row->link);?>" title="">
                                            <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                    <p><?= $row->textdiss1; ?></p>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                                    <small><a href="<?= base_url($row->link);?>" title=""><?= $row->uplodby; ?></a></small>
                                    
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                           <?php endforeach; ?>

                           <hr class="invis">

<?php foreach ($data_artikel as $row) : ?>
 <div class="blog-box row" data-aos="fade-right" data-aos-delay="100">
     <div class="col-md-4">
         <div class="post-media">
             <a href="<?= base_url($row->link);?>" title="">
                 <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                 <div class="hovereffect"></div>
             </a>
         </div><!-- end media -->
     </div><!-- end col -->

     <div class="blog-meta big-meta col-md-8">
         <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
         <p><?= $row->textdiss1; ?></p>
         <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
         <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
         <small><a href="<?= base_url($row->link);?>" title=""><?= $row->uplodby?></a></small>
     </div><!-- end meta -->
 </div><!-- end blog-box -->

<?php endforeach; ?>
                        </div><!-- end blog-list -->
                    </div><!-- end col -->

                    <div class="col-lg-3">
                        <div class="section-title">
                            <h3 class="color-yellow"><a href="<?= base_url('user/opss');?>" title="">Vlogs</a></h3>
                        </div><!-- end title -->

                        <?php foreach ($data_diss18 as $row) :?>
                        <div class="blog-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-media">
                                <a href="<?= base_url($row->link);?>" title="">
                                    <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span class="videohover"></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                            
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <?php endforeach; ?>

                        <hr class="invis">

                        <?php foreach ($data_diss19 as $row) :?>
                            <div class="blog-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-media">
                                <a href="<?= base_url($row->link);?>" title="">
                                    <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                       
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <?php endforeach;?>

                        <hr class="invis">

                        <?php foreach ($data_diss20 as $row) : ?>
                        <div class="blog-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-media">
                                <a href="<?= base_url($row->link);?>" title="">
                                    <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span class="videohover"></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                              
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                       <?php endforeach; ?>
                        <hr class="invis">

                        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="color-grey"><a href="<?= base_url('user/opss');?>" title="">Health</a></h3>
                        </div><!-- end title -->

                        <?php foreach ($data_diss21 as $row) : ?>
                        <div class="blog-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-media">
                                <a href="<?= base_url($row->link);?>" title="">
                                    <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                              
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                       <?php endforeach; ?>

                        <hr class="invis">

                        <?php foreach ($data_diss22 as $row) : ?>
                        <div class="blog-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-media">
                                <a href="<?= base_url($row->link);?>" title="">
                                    <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                                
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <?php endforeach; ?>
                        <hr class="invis">

                        <?php foreach ($data_diss23 as $row) : ?>
                            <div class="blog-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-media">
                                <a href="<?= base_url($row->link);?>" title="">
                                    <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                <small><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></small>
                                <small><a href="<?= base_url($row->link);?>" title=""><?= $row->waktu; ?></a></small>
                          
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <?php endforeach; ?>
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis1">

                <div class="row">
                    <div class="col-lg-10 offset-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="../assets/erlanggaa/images/umko.jpg" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
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
              
              <div class="text-center php-email-form"><button type="Submit">Send Message</button></div>
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