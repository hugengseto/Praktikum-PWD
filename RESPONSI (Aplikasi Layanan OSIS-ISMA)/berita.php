<?php
include "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css">

  <title>Berita Kegiatan</title>
  <style>
    p, h5, h3, h2,td {
      color:#fff;
      text-align:left;
    }
    h5{
      margin-top:-20px;
    }
    img{
      position: sticky;
      top:0;
    }
    .konten{
      background-color:#026E05;
      height: 250px;
      width:1000px;
      overflow: auto;
      border: 2px solid #fff;
      border-radius:7px;
      padding-left:10px;
      margin-top:20px;
      
    }
    .konten img{
      width: 200px;
      
    }
    
    }
    table{
      margin:-50px;
      padding:20px
    }
  </style>
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
      <a href="#">Berita</a>
      <a href="pertokoanview.php">Pertokoan</a>
      <a href="galeri.php">Galeri</a>
      <div class="animation start-home"></div>
    </nav>
    </header>
    <p>IKATAN SANTRI MA'HAD AS-SALAM</p>
    <hr>
    
    <h2>Berita Kegiatan</h2>
    <center>
    <div class="berita">
      <?php
        $no=0;
        $query = mysqli_query($koneksi, "SELECT * FROM berita ");
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
        <div class="konten">
          <h3><?php echo $data->judul_berita?></h3>
          <h5><?php echo $data->tanggal_berita?></h5>
          <d>
            
          <table>
            <tr>
              <td rowspan="2"> <img src="admin/berita/<?php echo $data->gambar_berita; ?>"></td>
            </tr>
            <tr>
              <td><?php echo $data->deskripsi_berita?></td>
            </tr>
          </table>
          
        </div>
        <?php
        }
        ?>
      </center>
      
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
 </div>
</body>
</html>