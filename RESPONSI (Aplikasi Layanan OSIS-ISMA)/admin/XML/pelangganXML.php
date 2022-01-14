<?php
  $con= mysqli_connect("localhost","root","","isma");

  header('Content-Type: text/xml');
  $query = "SELECT * FROM loginuser";
  $hasil = mysqli_query($con,$query);
  $jumField = mysqli_num_fields($hasil);
      echo "<?xml version='1.0'?>";
      echo "<data>";
      while ($data = mysqli_fetch_array($hasil))
      {
        echo "<pelanggan>";
        echo"<id_pelanggan>",$data['id'],"</id_pelanggan>";
        echo"<username>",$data['username'],"</username>";
        echo"<email>",$data['email'],"</email>";
        echo"<nama>",$data['nama'],"</nama>";
        echo"<NIS>",$data['NIS'],"</NIS>";
        echo"<kelas>",$data['kelas'],"</kelas>";
        echo"<alamat>",$data['alamat'],"</alamat>";
        echo"<WA>",$data['NoWA'],"</WA>";
        echo "</pelanggan>";
      }
      echo "</data>";
?>