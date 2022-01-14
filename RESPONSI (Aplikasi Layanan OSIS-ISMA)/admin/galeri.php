<h2>Galeri Kegiatan</h2>
<table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>No</th>
                              <td>Nama Kegiatan</td>
                              <th>Gambar</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $nomor=1; ?>
                            <?php $ambil=$koneksi->query("SELECT * FROM galeri");?>
                            <?php while($pecah = $ambil->fetch_assoc()){?>
                            <tr>
                              <td><?php echo $nomor; ?></td>
                              <td><?php echo $pecah['nama_kegiatan']; ?></td>
                              <td>
                                <img src="../galeri/<?php echo $pecah['foto']; ?>" width="100">
                              </td>
                              <td>
                                <a href="index.php?halaman=hapusgaleri&id=<?php echo $pecah['id_galeri'];?>" class="btn-danger btn" onClick="return confirm('Apakah anda yakin ingin menghapus data ini')">hapus</a>
                                <a href="index.php?halaman=ubahgaleri&id=<?php echo $pecah['id_galeri']; ?>" class="btn btn-warning">ubah</a>
                              </td>
                            </tr>
                          <?php  $nomor++; ?>
                          <?php } ?>
                          </tbody>
                        </table>
<a href="index.php?halaman=tambahgaleri" class="btn btn-primary">Tambah Data</a>