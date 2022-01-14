<?php 
    include "config.php";
    $result=mysqli_query($koneksi, "SELECT * FROM loginuser WHERE username='$_POST[username]'");
    $cek_user = mysqli_num_rows($result);
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("Username Sudah Ada Yang Menggunakan");
              window.location="registrasi.php";
              </script>';
              exit();
    }
    else {
       mysqli_query($koneksi, "INSERT INTO loginuser (username, password, email, nama, NIS, kelas, alamat, NoWA )
        VALUES ('$_POST[username]','$_POST[password]', '$_POST[email]', '$_POST[nama]', '$_POST[nis]','$_POST[kelas]','$_POST[alamat]','$_POST[WA]')");
        
        echo '<script language="javascript">
        alert ("Registrasi Berhasil Di Lakukan!");
        window.location="loginADM.php";
        </script>';
              exit();  
    }
?>
