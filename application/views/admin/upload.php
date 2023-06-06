<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appleria | Upload Gambar</title>

      <!-- Favicon icon -->
      <link rel="icon" type="image/png" sizes="16x16" href="../assets/admin/images/favicon.png">

      <!-- ================= css native by erlangga ==================== -->
      <link rel="stylesheet" href="../assets/css/upload.css">

      <!-- =================== animated js ======================= -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

      <!-- ======================= box icons ========================= -->
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="ataslg">
            <a href="<?= base_url('admin/index');?>">
            <div class="borderback">
                <div class="aturbck">
                <i class='bx bx-arrow-back icon'></i>
                </div>
            </div>
            </a>
        </div>
       
       <div class="text-tngh">
       <div class="syarat" data-aos="fade-right" data-aos-delay="300">
            <p>Noted!</p>
        </div>
        <diiv class="isi-syarat">
            <p data-aos="fade-right" data-aos-delay="500">1. Upload gambar dalam bentuk format jpg/png dengan max size 500kb</p>
            <p data-aos="fade-right" data-aos-delay="650">2. Salin nama gambar yang di upload jika ingin mengupdate berita</p>
        </diiv>
       </div>

       <div class="eror">
       <?= $this->session->flashdata('message'); ?>
      
       </div>
     

       <div class="wrapper">
        <div class="wrapper-brdr">
            <div class="atr-wrpper">

            <div class="judul" data-aos="zoom-in" data-aos-delay="500">
        <h4>Upload Gambar Disini</h4>
       </div>
                
        
 
 <?php echo form_open_multipart('admin/aksi_upload');?>

 <div class="txt-inpt" data-aos="fade-right" data-aos-delay="700">
 <input type="file" name="berkas" />
 </div>

 <br /><br />


<div class="atur-atas" data-aos="fade-right" data-aos-delay="750">
    <div class="border-hias">
        <div class="aturlg">
        <div class="submitt">
<input type="submit" value="upload" />
</div>
        </div>
    </div>
</div>

</form>

	
 
            </div>
        </div>
       </div>
    </div>
<script>
  AOS.init();
</script>
</body>
</html>