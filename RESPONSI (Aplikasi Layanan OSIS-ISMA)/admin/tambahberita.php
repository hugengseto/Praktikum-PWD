<h2>Tambah Berita</h2>
<form method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Berita Kegiatan</label>
		<input type="text" class="form-control" name="judul_berita">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="gambar_berita">
	</div>
	<div class="form-group">
		<label>Isi Berita</label>
		<textarea class="form-control" name="deskripsi_berita" rows="10"></textarea> 
	</div>
  <div class="form-group">
		<label>Tanggal Berita</label>
		<input type="date"class="form-control" name="tanggal_berita"></input> 
	</div>

	<button class="btn btn-primary" name="save">Simpan</button>
	
</form>
<?php 
	if (isset($_POST['save'])) 
	{
		$nama = $_FILES['gambar_berita']['name'];
		$lokasi = $_FILES['gambar_berita']['tmp_name'];
		move_uploaded_file($lokasi, "berita/".$nama);
		$koneksi->query("INSERT INTO berita (judul_berita,gambar_berita,deskripsi_berita,tanggal_berita)
		VALUES('$_POST[judul_berita]','$nama','$_POST[deskripsi_berita]','$_POST[tanggal_berita]')");

    echo "<script>alert('Data Tersimpan');</script>";
	 	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=berita'>";
	}
 ?>
