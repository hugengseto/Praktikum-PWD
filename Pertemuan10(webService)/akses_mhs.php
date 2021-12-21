<?php
  $url = "http://localhost/Praktikum%20PWD21/Praktikum-PWD/Pertemuan10(webService)/getdatamhs.php";
  $client = curl_init($url);
  curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
  $response = curl_exec($client);
  $result = json_decode($response);
  foreach ($result as $r) {
  echo "<p>";
  echo "NIM : " . $r->NIM . "<br />";
  echo "Nama : " . $r->nama . "<br />";
  echo "jenis kel : " . $r->jkel . "<br />";
  echo "Alamat : " . $r->alamat . "<br />";
  echo "Tgl Lahir : " . $r->tgllhr . "<br />";
  echo "</p>";
}
?>