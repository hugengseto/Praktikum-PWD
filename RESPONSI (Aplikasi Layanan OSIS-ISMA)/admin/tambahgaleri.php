<h2>Tambah Foto Kegiatan</h2>
<form method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Kegiatan</label>
		<input type="text" class="form-control" name="nama_kegiatan">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>

	<button class="btn btn-primary" name="save">Simpan</button>
	
</form>
<?php 
	if (isset($_POST['save'])) 
	{
		$namafoto = $_FILES['foto']['name'];
		$lokasi = $_FILES['foto']['tmp_name'];
		move_uploaded_file($lokasi, "../galeri/".$namafoto);
		$koneksi->query("INSERT INTO galeri (nama_kegiatan,foto)
		VALUES('$_POST[nama_kegiatan]','$namafoto')");

    echo "<script>alert('Foto Kegiatan Ditambahkan');</script>";
	 	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=galeri'>";
	}
 ?>
