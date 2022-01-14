<h2>FILE JSON PRODUK</h2>
<?php
  include "../config.php";
  $sql="SELECT * FROM produk";
  $tampil = mysqli_query($koneksi,$sql);
    if (mysqli_num_rows($tampil) > 0) {
    $no=1;
    $response = array();
    $response["data"] = array();
      while ($r = mysqli_fetch_array($tampil)) {
      $h['id_produk'] = $r['id_produk'];
      $h['namaBRG'] = $r['namaBRG'];
      $h['hargaBRG'] = $r['hargaBRG'];
      $h['stok'] = $r['stok'];
      $h['gambar'] = $r['gambar'];
      $h['deskripsi'] = $r['deskripsi'];
      array_push($response["data"], $h);
      }
    echo json_encode($response);
    }
    else {
    $response["message"]="tidak ada data";
    echo json_encode($response);
    }
?>