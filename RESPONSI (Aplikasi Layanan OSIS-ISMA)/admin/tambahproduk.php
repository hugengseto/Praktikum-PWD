<h2>Tambah Produk</h2>
<form method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="namaBRG">
	</div>
	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="hargaBRG">
	</div>
	<div class="form-group">
		<label>Stok</label>
		<input type="number" class="form-control" name="stok">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="gambar">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea> 
	</div>

	<button class="btn btn-primary" name="save">Simpan</button>
	
</form>
<?php 
	if (isset($_POST['save'])) 
	{
		$nama = $_FILES['gambar']['name'];
		$lokasi = $_FILES['gambar']['tmp_name'];
		move_uploaded_file($lokasi, "foto_produk/".$nama);
		$koneksi->query("INSERT INTO produk (namaBRG,hargaBRG,stok,gambar,deskripsi)
		VALUES('$_POST[namaBRG]','$_POST[hargaBRG]','$_POST[stok]','$nama','$_POST[deskripsi]')");

		echo "<div class='alert alert-info'>Data tersimpan</div>";
	 	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
	}
 ?>
