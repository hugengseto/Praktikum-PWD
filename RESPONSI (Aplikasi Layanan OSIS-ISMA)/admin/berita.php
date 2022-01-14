<h2>Berita Kegiatan</h2>
<table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Kegiatan</th>
                              <th>Gambar</th>
                              <th>Deskripsi</th>
                              <th>Tanggal</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $nomor=1; ?>
                            <?php $ambil=$koneksi->query("SELECT * FROM berita");?>
                            <?php while($pecah = $ambil->fetch_assoc()){?>
                            <tr>
                              <td><?php echo $nomor; ?></td>
                              <td><?php echo $pecah['judul_berita']; ?></td>
                              <td>
                                <img src="berita/<?php echo $pecah['gambar_berita']; ?>" width="100">
                              </td>
                              <td><?php echo $pecah['deskripsi_berita']; ?></td>
                              <td><?php echo $pecah['tanggal_berita']; ?></td>
                              <td>
                                <a href="index.php?halaman=hapusberita&id=<?php echo $pecah['id_berita'];?>" class="btn-danger btn" onClick="return confirm('Apakah anda yakin ingin menghapus data ini')">hapus</a>
                                <a href="index.php?halaman=ubahberita&id=<?php echo $pecah['id_berita']; ?>" class="btn btn-warning">ubah</a>
                              </td>
                            </tr>
                          <?php  $nomor++; ?>
                          <?php } ?>
                          </tbody>
                        </table>
<a href="index.php?halaman=tambahberita" class="btn btn-primary">Tambah Data</a>