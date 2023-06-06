<!DOCTYPE html>
<html lang="en">
<!-- coding by erlangga handika | custom css -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ini adalah sebuah icon favorite erlangga -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- aos js slider -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- logo web appleria -->
    <!-- Site Icons erlangga -->
   <link rel="shortcut icon" href="../assets/erlanggaa/images/favicon.ico" type="image/x-icon" />
   <link rel="apple-touch-icon" href="../assets/erlanggaa/images/apple-touch-icon.png">

    <!-- google font  | by poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <!-- vanilla css  | custom by erlangga handika -->
    <link rel="stylesheet" href="../assets/css/daftar1.css">
    <title>Masuk | login untuk pengalaman yang baik</title>
</head>

<body>
    <div class="container">
        <div class="hi-text">
            <h2>HI!</h2>
        </div>
        <div class="top-container">

            <div class="bg-image">
                <div class="template-img" data-aos="fade-right" data-aos-delay="60">
                    <div class="row-card">

                        <div class="atur-img">
                            <div class="image-img"  data-aos="fade-up" data-aos-delay="90">

                            </div>
                        </div>

                        <div class="text-judul">
                            <div class="item-center" data-aos="fade-right" data-aos-delay="100">
                                <h2>Welcome To <span class="histo">Apple</span><span class="ria">ria</span></h2>
                            </div>
                            <div class="sign-intext"  data-aos="fade-right" data-aos-delay="100">
                                <h4>Sign up to continue</h4>
                            </div>
                            <div class="form-login">
                                <form action="<?= base_url('auth/daftar'); ?>" method="post">
                                    <div class="top-form">
                                        <div class="border-form" data-aos="fade-right" data-aos-delay="100">
                                            <div class="row-form">

                                                <div class="icon-form">
                                                    <i class='bx bx-user email'></i>
                                                </div>
                                                <div class="input-text">
                                                    <input type="text" id="nama" name="name" placeholder="Masukan Nama" value="<?= set_value('name'); ?>">
                                                    <small class="nameform"><?= form_error('name'); ?></small>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="top-form1">
                                        <div class="border-form" data-aos="fade-right" data-aos-delay="100">
                                            <div class="row-form">

                                                <div class="icon-form">
                                                    <i class='bx bx-envelope email'></i>
                                                </div>
                                                <div class="input-text">
                                                    <input type="text" id="email" name="email" placeholder="Masukan Email" value="<?= set_value('email'); ?>">
                                                    <small class="nameform"><?= form_error('email'); ?></small>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="top-form1">
                                        <div class="border-form" data-aos="fade-right" data-aos-delay="100">
                                            <div class="row-form">

                                                <div class="icon-form">
                                                    <i class='bx bx-lock email'></i>
                                                </div>
                                                <div class="input-text">
                                                    <input type="text" id="password" name="password" placeholder="Buat Password">
                                                    <small class="nameform"><?= form_error('password'); ?></small>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="check-box" data-aos="fade-right" data-aos-delay="100">
                                        <div class="input-check">
                                            <input type="checkbox" name="check" id="check">
                                        </div>
                                        <div class="remember-me">
                                            <h4>I Terms and Condition</h4>
                                        </div>

                                    </div>

                                    <div class="button-login" data-aos="fade-up" data-aos-delay="100">
                                        <div class="border-login">
                                            <div class="input-login">
                                                <input type="submit" value="Registrasi">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="garis-or" data-aos="fade-left" data-aos-delay="100">
                                        <div class="atur-garisnya">
                                            <div class="garis-kiri"></div>
                                        </div>
                                        <div class="row-tengah">
                                            <p>or</p>
                                        </div>
                                        <div class="atur-garisnya">
                                            <div class="garis-kiri"></div>
                                        </div>
                                    </div>
                                    <div class="sign-up" data-aos="fade-right" data-aos-delay="100">
                                        <div class="sign-text">
                                            <p>Have an account?</p>
                                        </div>
                                        <div class="sign-link">
                                            <a href="index">Sign.</a>
                                        </div>
                                    </div>

                                    <div class="social-media" data-aos="fade-right" data-aos-delay="100">
                                        <h4>Social Media Regis</h4>
                                        <div class="row-social">
                                            <div class="image1-sos">
                                                <a href="#"><img src="../assets/images/login/twit.jpg" alt=""></a>
                                            </div>
                                            <div class="image1-sos">
                                                <a href="#"><img src="../assets/images/login/fb.png" alt=""></a>
                                            </div>
                                            <div class="image1-sos">
                                                <a href="#"><img src="../assets/images/login/ig.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- erlangga start package -->

    <!-- aos js slider -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <!-- erlangga end package -->
</body>

</html>