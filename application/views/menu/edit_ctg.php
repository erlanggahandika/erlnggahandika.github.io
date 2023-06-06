<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Dashboard Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/elegant-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/admin/images/favicon.png');?>">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/admin/css/style.css'); ?>" rel="stylesheet">

    
    <!-- =================== Box Icons ================= -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    
    <!-- Custom styles by erlangga for this template -->
    <link href="<?= base_url('assets/admin/css/style2.css'); ?>" rel="stylesheet">

    <!-- ================ custom css by erlangga ================================== -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/edit2.css'); ?>">

    <!-- aos js slider -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
               <span class="logo">Appleria</span>
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
                                    <span class="hide-menu">Owner Page</span></a></li>
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
                <div class="info" data-aos="fade-right" data-aos-delay="300">
                    <div class="noted-bordering">
                        <div class="atur-border">
                            <h4>Catatan!</h4>

                            <div class="text-info" data-aos="fade-right" data-aos-delay="400">
                                <p>1. Nama menu disi dengan maksimal 10 kata tanpa karakter angka atau yang lain.</p>
                            </div>
                            <div class="text-infow" data-aos="fade-right" data-aos-delay="500">
                                <p>2. khusus untuk icon contohnya  xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" style="fill: rgb(255, 200, 50 );transform: samakan dengan width, height dan rgb ini dengan yang diedit</p>
                            <div class="text-infow" data-aos="fade-right" data-aos-delay="600">
                                <p>3. untuk link halaman bisa ditutup dengan halaman 'opss' ketik opss jika ingin memblokir situs halaman</p>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="form-add">
                   <div class="border-formi" data-aos="zoom-in" data-aos-delay="400">
                        <div class="text-add" data-aos="fade-right" data-aos-delay="500">
                            <h4>Edit Halaman</h4>
                        </div>
                        <div class="garisss">
                            <div class="garitsnya"></div>
                        </div>
                   <form action="<?= base_url('menu/updatecuy');?>" method="post">
                            <div class="border-toper" data-aos="fade-right" data-aos-delay="600">
                                <p>Nama menu:</p>
                                <div class="bordernyae">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $data_cat->id; ?>">
                                   <input type="text" name="menu" value="<?= $data_cat->menu; ?>">
                               </div>
                            </div>

                            <div class="border-toper" data-aos="fade-right" data-aos-delay="700">
                                <p>Icon:</p>
                                <div class="bordernyae">
                                   <textarea name="icon" id="" cols="60" rows="4"><?= $data_cat->icon; ?></textarea>
                               </div>
                            </div>

                            <div class="border-toper" data-aos="fade-right" data-aos-delay="800">
                                <p>Link halaman:</p>
                                <div class="bordernyae">
                                   <input type="text" name="link" value="<?= $data_cat->link; ?>">
                               </div>
                            </div>

                            <div class="submit-inpuit" data-aos="zoom-in" data-aos-delay="300">
                                <input type="submit" value="tambah sekarang">
                            </div>
                
                   </form>
                   </div>
                </div>
   
    
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