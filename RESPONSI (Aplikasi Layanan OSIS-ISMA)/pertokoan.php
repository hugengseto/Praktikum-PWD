<?php
include "config.php";
session_start();

if (!isset($_SESSION["username"])) {
	header("location:loginADM.php");
}

$id=$_SESSION["id"];
$username=$_SESSION["username"];
$email=$_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style.css">
  <style>
    #KS p a{
      text-decoration : none;
      text-align:center;
      float: left;
      padding: 8px;
      margin-top:50px;
      margin-left: 20px;
      margin-right: 100px;
      font-size: 20px;
      border: 1px solid transparant;
      border-radius: 15px;
      width:140px;
      height: 30px;
      background:yellow;
      font-family: cursive;
      font-size:15px;
      color:green;
    }
    #KS p a:hover{
    background-color: #20B2AA;
    color:#fff;
    font-size:18px;
    transition: all .5s ease 0s;
    }
  </style>

  <title>Pertokoan ISMA</title>
</head>
<body>
  <div class="container">
    <header>
      <div class="judul">
        <img src="img/logo2.jpg" alt="">
     </div>
    <nav>
      <a href="logout.php" onClick="return confirm('Jika anda keluar dari halaman ini maka anda harus login kembali ...')">Home</a>
      <a href="logout.php" onClick="return confirm('Jika anda keluar dari halaman ini maka anda harus login kembali ...')">Struktur</a>
      <a href="logout.php" onClick="return confirm('Jika anda keluar dari halaman ini maka anda harus login kembali ...')">Berita</a>
      <a href="#">Pertokoan</a>
      <a href="logout.php" onClick="return confirm('Jika anda keluar dari halaman ini maka anda harus login kembali ...')">Galeri</a>
      <div class="animation start-home"></div>
    </nav>
    </header>
    <p>IKATAN SANTRI MA'HAD AS-SALAM</p>
    <hr>
    <!--  fitur pencarian -->
    <form action="pencarian.php" method="get">
	    <input type="text" name="cari">
	    <button type="submit">Cari</button>
    </form>
    <div class="pengguna">
    <p>
      <?php
			  if(!isset($_SESSION['nama'])){
									
				} else {
						echo 'Hallo, '.$_SESSION['nama'].'!';
				}
			?></p>
    <a href="logout.php" onClick="return confirm('Apakah Anda Ingin Keluar?')">Logout</a>
  </div>
</div>
    <div class="judul2">
      <h1>Selamat Berbelanja dan Penuhi Kebutuhan Sekolahmu</h1>
    </div>
    <div id="KS">
        <p><a href="keranjang.php">Keranjang Saya</a></p>
        <p><a href="riwayat.php">Riwayat Belanja</a></p>
    </div>
    
    <div class="barang">
      <?php
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
          <a href="produk.php?id_produk=<?=$data->id_produk;?>">Beli Sekarang</a>
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