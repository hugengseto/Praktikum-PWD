<?php 
	$ambil = $koneksi->query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
	$pecah = $ambil->fetch_assoc(); 
	$fotoberita = $pecah['gambar_berita'];
	if(file_exists("../berita/$fotoberita"))
	{
		unlink("../foto_produk/$fotoberita");
	}

	$koneksi->query("DELETE FROM berita WHERE id_berita='$_GET[id]'");
	echo "<script>alert('Berita Terhapus');</script>";
	echo "<script>location='index.php?halaman=berita';</script>";
 ?>