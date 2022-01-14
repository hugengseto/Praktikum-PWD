<?php 
	$ambil = $koneksi->query("SELECT * FROM loginuser WHERE id='$_GET[id]'");
	$pecah = $ambil->fetch_assoc(); 

	$koneksi->query("DELETE FROM loginuser WHERE id='$_GET[id]'");

	echo "<script>alert('Data pelanggan dihapus');</script>";
	echo "<script>location='index.php?halaman=pelanggan';</script>";
 ?>