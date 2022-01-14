<h2>Ubah Foto Kegiatan</h2> 

<?php 
	$ambil = $koneksi->query("SELECT * FROM galeri WHERE id_galeri='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
	
	/*echo "<pre>";
	print_r($pecah);
	echo "</pre>";*/
 ?>

 <form method="POST" enctype="multipart/form-data">
	<div class="form-group">
  <label>Nama Kegiatan</label>
		<input type="text" class="form-control" name="nama_kegiatan" value="<?php echo $pecah['nama_kegiatan'] ?>">
	</div>
	<div class="form-group">
  <label>Foto</label>
    <input type="file" name="foto" class="form-control">
	</div>
	<div class="form-group">
	
	<button class="btn btn-primary" name="ubah">Ubah</button>
	
</form>
<?php 
	if (isset($_POST['ubah'])) 
	{
		$namafoto = $_FILES['foto']['name'];
		$lokasifoto = $_FILES['foto']['tmp_name'];
		//jika foto dirubah
		if (!empty($lokasifoto)) {
			move_uploaded_file($lokasifoto, "../galeri/$namafoto");

			$koneksi->query("UPDATE galeri SET nama_kegiatan='$_POST[nama_kegiatan]',foto='$namafoto' WHERE id_galeri='$_GET[id]'");
		}
		//jia foto tidak dirubah
		else
		{
			$koneksi->query("UPDATE galeri SET nama_kegiatan='$_POST[nama_kegiatan]' WHERE id_galeri='$_GET[id]'");
		}
		
		

		echo "<script>alert('Data diupdate');</script>";
		echo "<script>location='index.php?halaman=galeri';</script>";
	}
 ?>
