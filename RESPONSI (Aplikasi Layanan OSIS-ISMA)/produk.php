<?php
session_start();
include "config.php";

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
    #detail img{
              width: 300px;
              height: 200px;
              margin-left: 180px;
              border: 3px solid rgb(56, 55, 55);
              padding: 15px;
              background: #8FBC8F;
    }
    #detail p{
      font-size: 18px;
      margin:0;
      text-align:center;
      font-family: monospace;
    }
    #detail h3{
      color:#fff;
    }
    #keranjang{
      margin-top: 20px;
      margin-left: 220px;
      text-align:center;
      border:1px solid transparant;
      border-radius: 20px;
      width:300px;
      height: 30px;
      padding-top: 5px;
      background:#20B2AA;
    }
    #keranjang a{
      text-decoration: none;
      font-family: cursive;
      color:#fff;
    }
    #keranjang:hover{
  background-color: gold;
    }
  </style>
 
  <title>Detail Produk</title>
</head>
<body>
  <div class="container">
    <header>
      <div class="judul">
        <img src="img/logo2.jpg" alt="">
        <a href="pertokoan.php">Halaman Sebelumnya...</a>
    </div>
    
    </header>
    <p>IKATAN SANTRI MA'HAD AS-SALAM</p>
    <hr>
  <div class="pengguna">
    <p><?php
			  if(!isset($_SESSION['nama'])){
									
				} else {
						echo 'Hallo, '.$_SESSION['nama'].'!';
				}
			?></p>
    <a href="logout.php" onClick="return confirm('Apakah Anda Ingin Keluar?')">Logout</a>
  </div>
  <div class="pemesanan">
    <?php
      $id_produk = $_GET['id_produk'];
      $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = $id_produk");
      $data = mysqli_fetch_array($query);
      ?>
    <h2>Detail Produk</h2>
        <div id="detail">
        <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <img src="admin/foto_produk/<?php echo $data['gambar']; ?>">
            <h2><?php echo $data['namaBRG'];?></h2>
            <h3>Deskripsi</h3>
            <p><?php echo $data['deskripsi'];?></p>
            <p>Rp.<?php echo number_format($data['hargaBRG']);?></p>
            <p>Stock Tersisa : <?php echo $data['stok'];?></p>
          </tr>
          
        </table>
        <div id="keranjang">
        <a href="beli.php?id=<?php echo $data['id_produk'];?>">Masukkan Keranjang</a>
        </div>  
      </div>
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