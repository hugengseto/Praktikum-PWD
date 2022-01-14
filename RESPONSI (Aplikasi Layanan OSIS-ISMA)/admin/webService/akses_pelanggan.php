<h1>WEB SERVICE</h1>
<?php
  $url = "http://localhost/Praktikum%20PWD21/Praktikum-PWD/RESPONSI%20(Aplikasi%20Layanan%20OSIS-ISMA)/admin/webService/getdatapelanggan.php";
  $client = curl_init($url);
  curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
  $response = curl_exec($client);
  $result = json_decode($response);
  foreach ($result as $r) {
  echo "<p>";
  echo "ID : " . $r->id . "<br />";
  echo "Username : " . $r->username . "<br />";
  echo "Email : " . $r->email . "<br />";
  echo "Nama : " . $r->nama . "<br />";
  echo "NIS : " . $r->NIS . "<br />";
  echo "Kelas : " . $r->kelas . "<br />";
  echo "Alamat : " . $r->alamat . "<br />";
  echo "Whatsapp : " . $r->NoWA . "<br />";
  echo "</p>";
}
?>