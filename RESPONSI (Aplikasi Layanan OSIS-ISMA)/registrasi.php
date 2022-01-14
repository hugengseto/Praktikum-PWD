<html>
<head>
    <title>Membuat Form Pendaftaran Registrasi Dengan PHP MySQL - Tutorial</title> 
    <style tyoe=text/css>
      body{
        background-color: #2DBABF;
			  font-family: "Segoe UI";
      }

      #DFR{
      border: 2px solid #707070;
			background-color: #fff;
			width: 400px;
			height: 400px;
			margin-top: 120px;
			margin-left: auto;
			margin-right: auto;
			padding: 20px;
			border-radius: 23px;
		}
    </style>   
</head>
<body>
<div id="DFR">
    <h2> Mendaftar Akun Baru</h2>
    <h4>Silahkan Isi Data Pada Kolom Tersedia!</h4>
    <form action="registercontroller.php" method="post" name="form1">        
        <table>
            <tr>
                <td width="120">Nama Lengkap</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="120">NIS</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <td width="120">Username</td>
                <td><input type="text" name="username"></td>
            </tr> 
            <tr>
                <td width="120">Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td width="120">Email</td>
                <td><input type="text" name="email"></td>
            </tr>
           
            <tr> 
                <td width="120">Kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td width="120">Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td width="120">No Whatsapp</td>
                <td><input type="text" name="WA"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Daftar"></td>
            </tr>
        </table>
    </form>
    </div>
    
</body>
</html>