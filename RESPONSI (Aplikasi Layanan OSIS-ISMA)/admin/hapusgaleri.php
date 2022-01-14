<?php 
	$ambil = $koneksi->query("SELECT * FROM galeri WHERE id_galeri='$_GET[id]'");
	$pecah = $ambil->fetch_assoc(); 
	$fotokegiatan = $pecah['foto'];
	if(file_exists("../galeri/$fotokegiatan"))
	{
		unlink("../galeri/$fotokegiatan");
	}

	$koneksi->query("DELETE FROM galeri WHERE id_galeri='$_GET[id]'");
	echo "<script>alert('Foto Kegiatan Terhapus');</script>";
	echo "<script>location='index.php?halaman=galeri';</script>";
 ?>