<?php
session_start();
include "config.php";

?>
<html>
  <head>
    <title>nota pembelian</title>
    <link rel="stylesheet" href="style.css">
		<style>
			h2{
				color: #fff;
			}

			.konten{
				padding-left:30px;
				padding-bottom: 30px;
				padding-top: 10px;
				background-color: #026E05;
			}
			.konten p{
				font-size:15px;
				font-family:Arial, Helvetica, sans-serif;
			}
			#peringatanbayar{
				margin: 0px;
				margin-left:10px;
				width: 70%;
  			height: 30px;
				background-color: red;
				border-radius: 10px;
			}
			#peringatanbayar p{
				font-size: 15px;
				padding-top: 4px;
				text-align: center;
				font-family: cursive;
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
			span{
				color: yellow;
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
    </div>
  	</div>

      <section class ="konten">
          <!-- NOTA -->
          <h2>Detail Pembelian</h2>
<?php 
	$ambil = $koneksi->query("SELECT * FROM pembelian JOIN loginuser 
		ON pembelian.id=loginuser.id 
		WHERE pembelian.id_pembelian='$_GET[id]'");
	$detail = $ambil->fetch_assoc();
	?>
	<!--<pre>
		<?php print_r($detail); ?>
	</pre>-->
			<!-- jika pelanggan yang beli tidak sama dengan pelanggan yang login, maka dilarikan di rewayat.php karena dia tidak berhak melihat nota orang lain-->
			<!-- pelanggan yang beli harus pelanggan yang login -->
		<?php
		//mendapatkan id pelanggan yang beli
		$idpelangganyangbeli = $detail["id"];
		//mendapatkan id pelanggan yang login
		$idpelangganyanglogin = $_SESSION['id'];
		if($idpelangganyangbeli !== $idpelangganyanglogin){
			echo "<script>alert('tidak dapat diakses');</script>";
			echo "location='riwayat.php';";
			exit();
		}
		?>


	<p>
	<strong>Nama &nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $detail['nama']; ?></strong><br>
		Email &nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $detail['email']; ?><br>
		Tanggal : <?php echo $detail['tanggal_pembelian']; ?><br>
		Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. <?php echo number_format($detail['total_pembelian']);?>
	</p>

	<table class="table table-bordered">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama Produk</th>
 			<th>Harga</th>
 			<th>Jumlah</th>
 			<th>Subtotal</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $nomor=1; ?>
 		<?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk 
 		JOIN produk ON pembelian_produk.id_produk = produk.id_produk
 		WHERE pembelian_produk.id_pembelian='$_GET[id]'"); ?>
 		<?php while($pecah=$ambil->fetch_assoc()){ ?>
 		<tr>
 			<td><?php echo $nomor; ?></td>
 			<td><?php echo $pecah['namaBRG']; ?></td>
 			<td><?php echo $pecah['hargaBRG']; ?></td>
 			<td><?php echo number_format($pecah['jumlah']); ?></td>
 			<td>
 				<?php echo number_format($pecah['hargaBRG']*$pecah['jumlah']); ?>
 				</td>

 		</tr>
 		<?php $nomor++; ?>
 		<?php } ?>
 	</tbody>
 </table>
					<div id="peringatanbayar">
						<p>
							Silahkan tunjukan bukti ini ke admin kantor ISMA dan lakukan pembayaran Rp. <?php echo number_format($detail['total_pembelian']); ?> ke <strong>Kantor ISMA di Sekolah</strong> 
						</p>
					</div>
				</center>
      
      
      </section>
			<script>
        window.print();
      </script>
			
    </div>

  </body>
</html>