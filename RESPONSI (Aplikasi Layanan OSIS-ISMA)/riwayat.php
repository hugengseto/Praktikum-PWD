<?php
session_start();
include "config.php";

if (!isset($_SESSION["username"])) {
	header("location:loginADM.php");
}

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
      <section class="konten">
        <h2>Riwayat belanja pelanggan <?php echo $_SESSION['nama']?></h2>
        <table>
          <thead>
            <tr>
              <td>No</td>
              <td>Tanggal</td>
              <td>Total</td>
              <td>Opsi</td>
            </tr>
          </thead>
          <tbody>
          <?php $nomor=1; ?>
          <?php 
          $id_pelanggan=$_SESSION['id'];
          $ambil=$koneksi->query("SELECT * FROM pembelian WHERE id='$id_pelanggan'");
          ?>
          <?php while($pecah = $ambil->fetch_assoc()){?>
            <tr>
              <td><?php echo $nomor;?></td>
              <td><?php echo $pecah['tanggal_pembelian']?></td>
              <td>Rp.<?php echo number_format($pecah['total_pembelian'])?></td>
              <td>
                <a href="nota.php?id=<?php echo $pecah['id_pembelian']?>">Nota</a>
              </td>
            </tr>
            <?php  $nomor++; ?>
            <?php } ?>
          </tbody>
        </table>
      </section>
</div>
      
  
</body>
</html>