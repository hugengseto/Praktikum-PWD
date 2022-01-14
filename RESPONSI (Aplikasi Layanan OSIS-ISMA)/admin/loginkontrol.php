<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
$koneksi = new mysqli("localhost","root","","isma");
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM admin where username='$username' and password='$password'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['username'] = $username;
	$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
	$_SESSION['id_admin'] = $data['id_admin'];
	$_SESSION['email'] = $data['email'];
	header("location:index.php");
} else {
	header("location:login.php?pesan=gagal login data tidak ditemukan/tidak valid");
}
?>