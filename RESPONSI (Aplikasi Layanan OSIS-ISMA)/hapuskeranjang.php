<?php
  session_start();
  $id_produk=$_GET['id_produk'];
  unset($_SESSION['keranjang'][$id_produk]);

  echo "<script>alert('produk dihapus dari keranjang');</script>";
  echo "<script>location='keranjang.php'</script>";
  ?> 