<h2>Ubah Data Berita</h2> 

<?php 
	$ambil = $koneksi->query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
	
	/*echo "<pre>";
	print_r($pecah);
	echo "</pre>";*/
 ?>

 <form method="POST" enctype="multipart/form-data">
	<div class="form-group">
  <label>Berita Kegiatan</label>
		<input type="text" class="form-control" name="judul_berita" value="<?php echo $pecah['judul_berita'] ?>">
	</div>
	<div class="form-group">
  <label>Foto</label>
    <input type="file" name="gambar_berita" class="form-control">
	</div>
	<div class="form-group">
	<label>Isi Berita</label>
		<textarea class="form-control" name="deskripsi_berita" rows="10"><?php echo $pecah['deskripsi_berita']?></textarea> 
	</div>
  <div class="form-group">
		<label>Tanggal Berita</label>
		<input type="date"class="form-control" name="tanggal_berita" value="<?php echo $pecah['tanggal_berita']?>"></input> 
	</div>

	<button class="btn btn-primary" name="ubah">Ubah</button>
	
</form>
<?php 
	if (isset($_POST['ubah'])) 
	{
		$namafoto = $_FILES['gambar_berita']['name'];
		$lokasifoto = $_FILES['gambar_berita']['tmp_name'];
		//jika foto dirubah
		if (!empty($lokasifoto)) {
			move_uploaded_file($lokasifoto, "berita/$namafoto");

			$koneksi->query("UPDATE berita SET judul_berita='$_POST[judul_berita]',gambar_berita='$namafoto',deskripsi_berita='$_POST[deskripsi_berita]', tanggal_berita='$_POST[tanggal_berita]' WHERE id_berita='$_GET[id]'");
		}
		//jia foto tidak dirubah
		else
		{
			$koneksi->query("UPDATE berita SET judul_berita='$_POST[judul_berita]',deskripsi_berita='$_POST[deskripsi_berita]', tanggal_berita='$_POST[tanggal_berita]' WHERE id_berita='$_GET[id]'");
		}
		
		

		echo "<script>alert('Data berita berhasil dirubah');</script>";
		echo "<script>location='index.php?halaman=berita';</script>";
	}
 ?>
