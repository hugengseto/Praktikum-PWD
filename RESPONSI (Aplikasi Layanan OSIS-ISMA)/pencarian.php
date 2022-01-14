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
<?php
      $cari = $_GET['cari'];

      $semuadata = array();
      $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE namaBRG LIKE '%$cari%' OR deskripsi LIKE '%$cari%' ");
      while($data = mysqli_fetch_array($query))
      { 
        $semuadata[] = $data;
      }

      //echo "<pre>";
      //print_r($semuadata);
      //echo "</pre>";
?>
<html>
  <head>
    <title>Pencarian</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="container">
    <header>
      <div class="judul">
        <img src="img/logo2.jpg" alt="">
     </div>
    <nav>
      <a href="logout.php" onClick="return confirm('Jika anda keluar dari halaman ini maka anda harus login kembali ...')">Home</a>
      <a href="#">Struktur</a>
      <a href="#">Berita</a>
      <a href="pertokoan.php">Pertokoan</a>
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
    <div class="judul2">
      <h1>Hasil Pencarian : <?php echo $cari ?>
      <?php if (empty($semuadata)):?>
      <?php
      echo " <p>produk $cari tidak ditemukan</p>"?>
      <?php endif?>
      </h1>
    </div>
    
    <div class="barang">
    

      <?php foreach($semuadata as $cari =>  $value):?>
      <div class="produk"> 
        
        <div>
          <img src="admin/foto_produk/<?php echo $value['gambar']; ?>">
        </div>     
        <div>
          <h2><?php echo $value['namaBRG']; ?></h2>
          <p>Harga : Rp.<?php echo number_format($value['hargaBRG']); ?></p> 
          <a href="produk.php?id_produk=<?=$value['id_produk'];?>">Beli Sekarang</a>
          </div> 
          
      </div>
      <?php endforeach ?>
    </div>
    
  </body>
</html>