<h2>Produk</h2>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>no</th>
                              <th>nama</th>
                              <th>deskripsi</th>
                              <th>harga</th>
                              <th>foto</th>
                              <th>stok</th>
                              <th>aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $nomor=1; ?>
                            <?php $ambil=$koneksi->query("SELECT * FROM produk");?>
                            <?php while($pecah = $ambil->fetch_assoc()){?>
                            <tr>
                              <td><?php echo $nomor; ?></td>
                              <td><?php echo $pecah['namaBRG']; ?></td>
                              <td><?php echo $pecah['deskripsi']; ?></td>
                              <td><?php echo number_format($pecah['hargaBRG']); ?></td>
                              <td>
                                <img src="foto_produk/<?php echo $pecah['gambar']; ?>" width="100">
                              </td>
                              <td><?php echo $pecah['stok']; ?></td>
                              <td>
                                <a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk'];?>" class="btn-danger btn">hapus</a>
                                <a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-warning">ubah</a>
                              </td>
                            </tr>
                          <?php  $nomor++; ?>
                          <?php } ?>
                          </tbody>
                        </table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Data</a>
                   
