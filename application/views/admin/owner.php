<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, AdminWrap lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Elegant admin lite design, Elegant admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Elegant Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Dashboard Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/elegant-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/admin/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../assets/admin/css/style.css" rel="stylesheet">

    
    <!-- =================== Box Icons ================= -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- aos js slider -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    
  <!-- Custom styles by erlangga for this template -->
  <link href="../assets/admin/css/style2.css" rel="stylesheet">

  <!-- ============ css by | erlangga ============= -->
  <link rel="stylesheet" href="../assets/admin/css/update.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elegant admin</p>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    
                        
                        <h4 class="text-ap">Appleria</h4>
                        
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item hidden-sm-up"> <a 
                                href="javascript:void(0)"><i class='bx bx-menu icon'></i>
                            </a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgb(173, 173, 173);transform: ;msFilter:;"><path d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path></svg>
                            </a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" style="fill: rgb(204, 24, 24);transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>
                                </a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="../assets/img/profile/<?= $user['image'];?>" alt="user" class="img-circle" width="40"></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
               <div class="akalin">
               <span class="logo">Owner</span>
               </div>
                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)">
                <div class="pl-3">
                <i class='bx bx-menu iconn'></i>
                </div>
                </a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" style="fill: rgb(46, 20, 194);transform: ;msFilter:;"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <div class="line-h">

                          <!-- ================= bagian login ========== -->
                       <div class="pt-2">
                       <li> <a class="waves-effect waves-dark" href="<?= base_url('admin/leader');?>" aria-expanded="false">
                       <i class='bx bx-crown icon'></i>
                                    <span class="hide-menu">Beranda User</span></a></li>
                       </div>
                       <!-- ============================================== -->

                       <!-- ========= bagian dashboard ======== -->
                       <li> <a class="waves-effect waves-dark" href="<?= base_url('menu/admin');?>" aria-expanded="false">
                        <i class='bx bxs-edit-alt icon'></i>
                                    <span class="hide-menu">Edit User</span></a></li>
                        <!-- ===================================  -->

                        <!-- ========= bagian dashboard ======== -->
                       <li> <a class="waves-effect waves-dark" href="<?= base_url('menu/tabel');?>" aria-expanded="false">
                        <i class='bx bxs-edit-alt icon'></i>
                                    <span class="hide-menu">Menu Staff</span></a></li>
                        <!-- ===================================  -->

                         <!-- ========= bagian dashboard ======== -->
                       <li> <a class="waves-effect waves-dark" href="<?= base_url('menu/list');?>" aria-expanded="false">
                        <i class='bx bxs-edit-alt icon'></i>
                                    <span class="hide-menu">Menu User</span></a></li>
                        <!-- ===================================  -->

                        <!-- ========= bagian dashboard ======== -->
                       <li> <a class="waves-effect waves-dark" href="<?= base_url('menu/catalog');?>" aria-expanded="false">
                        <i class='bx bxs-edit-alt icon'></i>
                                    <span class="hide-menu">Menu Catagory</span></a></li>
                        <!-- ===================================  -->



                        <!-- ========= bagian dashboard ======== -->
                        <li> <a class="waves-effect waves-dark" href="<?= base_url('admin/index');?>" aria-expanded="false">
                        <i class='bx bx-log-out icon'></i>
                                    <span class="hide-menu">Kembali</span></a></li>
                        <!-- ===================================  -->
                      

                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-admin">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                           
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <section class="section first-section">
            <div class="container-fluid" data-aos="fade-up" data-aos-delay="150">
                <div class="masonry-blog clearfix">
                    <div class="left-side">
                        <div class="masonry-box post-media">
                        <?php foreach ($data_display as $row) : ?>
                             <img src="../assets/erlanggaa/trial/<?= $row->gambar ?>" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                        <div class="link">
                                           <div class="border-link">
                                            <div class="aturats">
                                            <a href="<?= site_url('edit/check/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a>
                                            </div>
                                           </div>
                                        </div>
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        
                                        <span class="bg-aqua"><a href="<?= base_url($row->link); ?>" title=""><?= $row->tag ?></a></span>
                                        <h4><a href="<?= base_url($row->link); ?>" title=""><?= $row->judul ?></a></h4>
                                        <small><a href="<?= base_url($row->link); ?>" title=""><?= $row->waktu ?></a></small>
                                        <small><a href="<?= base_url($row->link); ?>" title=""><?= $row->uplodby ?></a></small>
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
                                        <div class="link">
                                            <div class="border-link">
                                                <div class="aturats">
                                                <a href="<?= site_url('edit/check1/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-green"><a href="<?= base_url($row->link1);?>" title=""><?= $row->tag1 ?></a></span>
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
                                        <div class="link">
                                            <div class="border-link">
                                                <div class="aturats">
                                                <a href="<?= site_url('edit/check9/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a>
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="link">
                                            <div class="border-link">
                                                <div class="aturats">
                                                <a href="<?= site_url('edit/check10/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="blog-meta">
                                        <span class="bg-green"><a href="<?= base_url($row->link);?>" title=""><?= $row->tag; ?></a></span>
                                        <h4><a href="<?= base_url($row->link);?>" title=""><?= $row->judul; ?></a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                        <?php endforeach; ?>
                    </div><!-- end left-side -->

                    <?php foreach ($data_las as $row) : ?>
                    <div class="right-side hidden-md-down">
                        <div class="masonry-box post-media">
                             <img src="../assets/erlanggaa/trial/<?= $row->gambar; ?>" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                       <div class="link">
                                            <div class="border-link">
                                                <div class="aturats">
                                                <a href="<?= site_url('edit/check2/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a>
                                                </div>
                                            </div>
                                        </div>
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
                                            <div class="link">
                                                <div class="border-link">
                                                    <div class="aturats">
                                                      <a href="<?= site_url('edit/check3/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <div class="link">
                                                <div class="border-link">
                                                    <div class="aturats">
                                                      <a href="<?= site_url('edit/check4/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <div class="link">
                                                <div class="border-link">
                                                    <div class="aturats">
                                                      <a href="<?= site_url('edit/check5/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <div class="link">
                                                <div class="border-link">
                                                    <div class="aturats">
                                                      <a href="<?= site_url('edit/check6/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <div class="link">
                                                <div class="border-link">
                                                    <div class="aturats">
                                                      <a href="<?= site_url('edit/check7/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <div class="link">
                                                <div class="border-link">
                                                    <div class="aturats">
                                                      <a href="<?= site_url('edit/check8/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a>
                                                    </div>
                                                </div>
                                            </div>
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
                                    <small> <a href="<?= site_url('edit/check11/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a></small>
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
                                    <small> <a href="<?= site_url('edit/check12/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a></small>
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
                                    <small> <a href="<?= site_url('edit/check13/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a></small>
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
                                    <small> <a href="<?= site_url('edit/check14/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a></small>
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
                                    <small> <a href="<?= site_url('edit/check15/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a></small>
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
                                    <small> <a href="<?= site_url('edit/check16/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a></small>
                                   
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
                                    <small> <a href="<?= site_url('edit/check17/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a></small>
                                    
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
                                <small> <a href="<?= site_url('edit/check18/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a></small>
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
                                <small> <a href="<?= site_url('edit/check19/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a></small>
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
                                <small> <a href="<?= site_url('edit/check20/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                       <?php endforeach; ?>
                        <hr class="invis">

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
                                <small> <a href="<?= site_url('edit/check21/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                       <?php endforeach; ?>

                        <hr class="invis">

                        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="color-grey"><a href="<?= base_url('user/opss');?>" title="">Health</a></h3>
                        </div><!-- end title -->

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
                                <small> <a href="<?= site_url('edit/check22/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <?php endforeach; ?>

                        <hr class="invis">

                        

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
                                <small> <a href="<?= site_url('edit/check23/' . $row->id) ?>">Update<i class='bx bx-edit'></i></a></small>
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
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
         <h4 class="footer-text">Powered by Appleria | copyright © <?= date('Y');?> Appleria.com</h4>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

     <!-- aos js slider -->
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <script src="../assets/admin/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/admin/assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/admin/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/admin/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="../assets/admin/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../assets/admin/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/admin/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/admin/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../assets/admin/js/custom.min.js"></script>
</body>

</html>