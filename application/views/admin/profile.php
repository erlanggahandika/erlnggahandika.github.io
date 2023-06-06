<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="appleria , appleria news , appleria artikel online">
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

    
    <!-- Custom styles by erlangga for this template -->
    <link href="../assets/admin/css/style2.css" rel="stylesheet">

     <!-- by erlanggga anim -->
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- vanilla css by erlangga -->
    <link rel="stylesheet" href="../assets/admin/css/profile.css">

   
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
                        <li> <a class="waves-effect waves-dark" href="<?= base_url('admin/index');?>" aria-expanded="false">
                        <i class='bx bx-tachometer icon'></i>
                                    <span class="hide-menu">Dashboard</span></a></li>
                        <!-- ===================================  -->

                        <!-- ================= bagian logout ========== -->
                        <?php foreach ($data_admin as $row) : ?>
                         <div class="pt-2">
                       <li> <a class="waves-effect waves-dark" href="<?= base_url($row->link);?>" aria-expanded="false">
                       <i class='<?= $row->icon ?>'></i>
                                    <span class="hide-menu"><?= $row->menu ?></span></a></li>
                       </div>
                       <?php endforeach; ?>
                       <!-- ============================================== -->

                        <!-- ========= bagian dashboard ======== -->
                        <li> <a class="waves-effect waves-dark" href="<?= base_url('display/log');?>" aria-expanded="false">
                        <i class='bx bx-log-out icon'></i>
                                    <span class="hide-menu">Logout</span></a></li>
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
                      <?= $this->session->flashdata('eror'); ?>  
                      <?= $this->session->flashdata('berhasil'); ?>
                <div class="form-prof">
                  <div class="template-prof" data-aos="fade-up" data-aos-delay="250">
                     <div class="yr-profil" data-aos="fade-right" data-aos-delay="300">
                        <h4>Your Profile Information</h4>
                     </div>
                     <div class="garis-bawah">
                        <div class="garisnya"></div>
                     </div>
                     <?= form_open_multipart('admin/profile');?>
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
                        <h5>Street Addres:</h5>
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
                                    <a href="<?= base_url('admin/account');?>">
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

     <!-- by erlanggga anim -->
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
     AOS.init();
    </script>
    <!-- Wrapper End-->

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