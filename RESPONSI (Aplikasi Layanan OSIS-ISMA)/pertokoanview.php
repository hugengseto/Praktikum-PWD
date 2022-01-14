<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style.css">

  <title>ISMA Pertokoan</title>
</head>
<body>
  <div class="container">
    <header>
      <div class="judul">
        <img src="img/logo2.jpg" alt="">
     </div>
    <nav>
      <a href="index.html">Home</a>
      <a href="struktur.php">Struktur</a> 
      <a href="berita.php">Berita</a>
      <a href="#">Pertokoan</a>
      <a href="galeri.php">Galeri</a>
      <div class="animation start-home"></div>
    </nav>
    </header>
    <p>IKATAN SANTRI MA'HAD AS-SALAM</p>
    <hr>
</div>
 <div class="judul2">
      <h1>Selamat Berbelanja dan Penuhi Kebutuhan Sekolahmu</h1>
      <a href="loginADM.php">Login</a>
    </div>
    <div class="barang">
      
      <?php
        include "config.php";
        $no=0;
        $query = mysqli_query($koneksi, "SELECT * FROM produk ");
        ?>
 
        <?php
 
          $jml_kolom=3;
 
          $cnt = 0;
   
            while($data=mysqli_fetch_object($query))
            {
              if ($cnt >= $jml_kolom) 
            {
              echo "</tr><tr>";
              $cnt = 0;
            }
 
              $cnt++;
          ?>
      <div class="produk">
          
       <div>
         <img src="admin/foto_produk/<?php echo $data->gambar; ?>">
       </div>     
       <div>
         <h2><?php echo $data->namaBRG; ?></h2>
         <p>Harga : Rp.<?php echo number_format($data->hargaBRG); ?></p> 
         <a href="loginADM.php" onClick="return confirm('anda harus login terlebih dahulu?....')">Beli Sekarang</a>
        </div>  
      
     </div>
     
      
      <?php
      }
      ?>

    </div> 
  
      <div class="footer">
        <div class="media">
          <p>SOCIAL MEDIA</p>
          <a href="https://instagram.com/lpi.assalam_official?igshid=1rbldw0yagt3s" target="_blank"><img src="img/instagram.png" alt="instagram" ></a>
          <a href="https://web.facebook.com/lpi.assalam.official" target="_blank"><img src="img/facebook.png" alt="facebook"></a>
          <a href="https://youtube.com/c/LpiAssalamChannel" target="_blank"><img src="img/youtube.png" alt="youtube"></a>
        </div>
      <hr>
      <p>Copyright © 2021 by  <a href="https://wa.me/6282299049310" target="_blank">HUGENG SETO PRANOWO</a> </p>
      </div>
</body>
</html>
