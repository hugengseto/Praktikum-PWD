<h2>Ubah Data Produk</h2> 
<?php 
	$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
	
	/*echo "<pre>";
	print_r($pecah);
	echo "</pre>";*/
 ?>

 <form method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="namaBRG" value="<?php echo $pecah['namaBRG'] ?>">
	</div>
	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="hargaBRG" value="<?php echo $pecah['hargaBRG']?>">
	</div>
	<div class="form-group">
		<label>Stok</label>
		<input type="number" class="form-control" name="stok" value="<?php echo $pecah['stok']?>">
	</div>
	<div class="form-group">
		<img src="foto_produk/<?php echo $pecah['gambar'] ?>" width='200'>
	</div>
	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="gambar" class="form-control">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"><?php echo $pecah['deskripsi']?></textarea> 
	</div>

	<button class="btn btn-primary" name="ubah">Ubah</button>
	
</form>
<?php 
	if (isset($_POST['ubah'])) 
	{
		$namafoto = $_FILES['gambar']['name'];
		$lokasifoto = $_FILES['gambar']['tmp_name'];
		//jika foto dirubah
		if (!empty($lokasifoto)) {
			move_uploaded_file($lokasifoto, "foto_produk/$namafoto");

			$koneksi->query("UPDATE produk SET namaBRG='$_POST[namaBRG]',hargaBRG='$_POST[hargaBRG]',stok='$_POST[stok]',gambar='$namafoto',deskripsi='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
		}
		//jia foto tidak dirubah
		else
		{
			$koneksi->query("UPDATE produk SET namaBRG='$_POST[namaBRG]',hargaBRG='$_POST[hargaBRG]',stok='$_POST[stok]',deskripsi='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
		}
		
		

		echo "<script>alert('Data produk berhasil dirubah');</script>";
		echo "<script>location='index.php?halaman=produk';</script>";
	}
 ?>
