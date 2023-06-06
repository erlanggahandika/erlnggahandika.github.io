<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Site Icons erlangga -->
<link rel="shortcut icon" href="../assets/erlanggaa/images/favicon.ico" type="image/x-icon" />

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- ============================ css native by erlangga ============================== -->
    <link rel="stylesheet" href="../assets/css/keluar.css">
    <title>Appleria | Logout</title>
</head>
<body>
    <div class="container">
        <div class="aturbg">
           
            <div class="pt-lg">
            <div class="bglgi" data-aos="fade-right" data-aos-delay="550">
                <div class="rowbg">
                    <div class="plnya">
                    <div class="bgnnya" data-aos="fade-right" data-aos-delay="700">
                    </div>
                    </div>

                    <div class="kananisi">
                        <p>Apakah anda yakin ingin keluar?</p>

                        <div class="bgtest">
                            <div class="bgnys">

                            </div>
                        </div>


                        <?= form_open_multipart('user/keluar');?>
                       <?= $this->session->flashdata('eror'); ?>
                      
                       <?= $this->session->flashdata('berhasil'); ?>


                       <div class="top-input" data-aos="fade-right" data-aos-delay="400">
                        <h5>name:</h5>
                        <div class="row-lgi">
                            <div class="logo-atuh">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(5, 72, 255);transform: ;msFilter:;"><path d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"></path><path d="M11.42 21.814a.998.998 0 0 0 1.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819zM12 4c3.309 0 6 2.691 6 6.005.021 4.438-4.388 8.423-6 9.73-1.611-1.308-6.021-5.294-6-9.735 0-3.309 2.691-6 6-6z"></path></svg>
                            </div>
                            <div class="txt-input">
                            <input type="text" id="addres" name="name" value="<?= $user['name'];?>">
                            </div>
                        </div>
                       </div>
                        

                       <div class="top-input" data-aos="fade-right" data-aos-delay="400">
                        <h5>email:</h5>
                        <div class="row-lgi">
                            <div class="logo-atuh">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(5, 72, 255);transform: ;msFilter:;"><path d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"></path><path d="M11.42 21.814a.998.998 0 0 0 1.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819zM12 4c3.309 0 6 2.691 6 6.005.021 4.438-4.388 8.423-6 9.73-1.611-1.308-6.021-5.294-6-9.735 0-3.309 2.691-6 6-6z"></path></svg>
                            </div>
                            <div class="txt-input">
                            <input type="text" id="addres" name="email" value="<?= $user['email'];?>">
                            </div>
                        </div>
                       </div>
                        
                       <div class="top-input" data-aos="fade-right" data-aos-delay="400">
                        <h5>waktu:</h5>
                        <div class="row-lgi">
                            <div class="logo-atuh">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(5, 72, 255);transform: ;msFilter:;"><path d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"></path><path d="M11.42 21.814a.998.998 0 0 0 1.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819zM12 4c3.309 0 6 2.691 6 6.005.021 4.438-4.388 8.423-6 9.73-1.611-1.308-6.021-5.294-6-9.735 0-3.309 2.691-6 6-6z"></path></svg>
                            </div>
                            <div class="txt-input">
                            <input type="text" id="waktu" name="waktu" value="<?= date('d M Y H:i:s:a');?>">
                            </div>
                        </div>
                       </div>

                     
                      <div class="row-lg">
                        <div class="testt" data-aos="zoom-in" data-aos-delay="800">
                          <a href="<?= base_url('user/homee');?>">Tidak</a>
                        </div>

                    <div class="submit-type" data-aos="zoom-in" data-aos-delay="800">
                       <input type="submit" value="keluar">
                    </div>
                      </div>
                   
                     </form>
                    </div>
                </div>

        
            </div>
            </div>
        </div>
    </div>
    <script>
  AOS.init();
  </script>

</body>
</html>