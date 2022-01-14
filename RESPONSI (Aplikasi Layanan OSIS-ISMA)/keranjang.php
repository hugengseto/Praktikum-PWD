<?php
session_start();
include "config.php";

if (!isset($_SESSION["username"])) {
	header("location:loginADM.php");
}

if(empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])){
  echo "<script>alert('keranjangmu kosong, silahkan belanja dulu :)');</script>";
  echo "<script>location='pertokoan.php';</script>";
}
?>  
<!DOCTYPE html>
<html> 
<head>
  <title>Keranjang Belanja</title>
  <link rel="stylesheet" href="style.css">
  <style>
    h1{
      color:#fff;
    }
    table{
	font-family: Arial, Helvetica, sans-serif;
	color: #666;
	text-shadow: 1px 1px 0px #fff;
	background: #eaebec;
	border: #ccc 1px solid;
}

table th{
	padding: 15px 35px;
	border-left: 1px solid #e0e0e0;
	border-bottom: 1px solid #e0e0e0;
	background: #ededed;
}

table th: first-child{
	border-left: none;
}

table tr{
	text-align: center;
	padding-left: 20px;
}

table td : first-child{
	text-align: left;
	padding-left: 20px;
	border-left: 0;
}

table td{
	padding: 15px 35px;
	border-top: 1px solid #ffffff;
	border-bottom: 1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
	background: #fafafa;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}

table tr: last-child td{
	border-bottom: 0;
}

table tr: last-child td: last-child{
	-moz-border-radius-bottom-right: 3px;
	-webkit-border-bottom-right-radius: 3px;
}

table tr:hover td{
	background: #f2f2f2;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
.kontent{
  margin-left:20px;
}
.kontent a{
  padding: 5px;
  text-decoration: none;
  border:1px solid transparant;
  border-radius:5px;
  height: 30px;
  
  background:#ededed;
  color:#000;
  font-size:15px;
  text-shadow:none;
}
.kontent a:hover{
  background: red;
  color:white;
}
.concheck p a{
  padding: 5px;
  text-decoration: none;
  border:1px solid transparant;
  background: #ededed;
  height: 30px;
  color:#000;
  font-size:20px;
}
.concheck p a:hover{
  background: #000;
  color:#ededed;
  transition: all .5s ease 0s;
}
  </style>
</head>
<body>
<div class="container">
    <header>
      <div class="judul">
        <img src="img/logo2.jpg" alt="">
        
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
  </div>

  <div class="kontent">
  <section>
    <h1>Keranjang Belanja</h1>

    <table cellspacing="0" >
        <thead>
          <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subharga</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor=1;?>
          <?php
          foreach ($_SESSION['keranjang'] as $id_produk => $jumlah):?>

          <?php
          $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
          $pecah = $ambil->fetch_assoc();
          $subharga = $pecah['hargaBRG']*$jumlah;
          ?>
          <tr>
            <td><?php echo $nomor;?></td>
            <td><?php echo $pecah['namaBRG'];?></td>
            <td>Rp.<?php echo number_format($pecah['hargaBRG']) ;?></td>
            <td><?php echo $jumlah;?></td>
            <td><?php echo number_format($subharga);?></td>
            <td>
              <a href="hapuskeranjang.php?id_produk=<?php echo $id_produk?>">Hapus</a>
            </td>
          </tr> 
          <?php $nomor++;?>
          <?php endforeach ?>
        </tbody>
      </table>
    </section>
    <div class="concheck">
          <p><a href="pertokoan.php">Lanjutkan Belanja</a>
                <a href="checkout.php">Checkout</a></p>
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
      </div>
</body>
</html>