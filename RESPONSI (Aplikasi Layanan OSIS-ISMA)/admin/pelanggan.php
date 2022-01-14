<h2>Pelanggan</h2>   
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>no</th>
                              <th>Nama</th>
                              <th>Email</th>
                              <th>NIS</th>
                              <th>Kelas</th>
                              <th>Alamat</th>
                              <th>No Handphone</th>
                              <th>aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $nomor=1; ?>
                            <?php $ambil=$koneksi->query("SELECT * FROM loginuser");?>
                            <?php while($pecah = $ambil->fetch_assoc()){?>
                            <tr>
                              <td><?php echo $nomor; ?></td>
                              <td><?php echo $pecah['nama']; ?></td>
                              <td><?php echo $pecah['email']; ?></td>
                              <td><?php echo $pecah['NIS']; ?></td>
                              <td><?php echo $pecah['kelas']; ?></td>
                              <td><?php echo $pecah['alamat']; ?></td>
                              <td><?php echo $pecah['NoWA']; ?></td>
                              <td>
                                <a href="index.php?halaman=hapuspelanggan&id=<?php echo $pecah['id'] ?>" class="btn-danger btn">hapus</a>
                              </td>
                            </tr>
                          <?php  $nomor++; ?>
                          <?php } ?>
                          </tbody>
                        </table>