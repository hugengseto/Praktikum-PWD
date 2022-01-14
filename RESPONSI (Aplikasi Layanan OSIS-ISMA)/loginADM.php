<!DOCTYPE html>
<html>
<head>
	<title>Login webISMA</title>
	<style type="text/css">
		body {
			background-color: #2DBABF;
			font-family: "Segoe UI";
		}
		#kembali p a{
            text-decoration: none;
            color: #fff;
						font-size:20px;
						background:red;
        }
				#kembali p a:hover{
  			color:black;
				background:yellow;
  			transition: all .5s ease 0s;
}
		#wrapper {
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
        #wrapper #buat{
            border-radius: 2px;
			padding: 10px;
			width: 200px;
			background-color: #00F619;
			border: none;
            border-radius: 11px;
			font-weight: bold;
        }
        #wrapper a{
            text-decoration: none;
            color: #fff;
        }
		input[type=text], input[type=password] {
            border: none;
			border-bottom: 1px solid #67C7CA;
			padding: 10px;
			width: 95%;
			border-radius: 2px;
			outline: none;
			margin-top: 10px;
			margin-bottom: 20px;
		}
		label, h1 {
			text-transform: uppercase;
			font-weight: bold;
		}
		h1 {
			text-align: center;
			font-size: 40px;
            text-transform : none;
			color: #06979B;
		}
		button {
			border-radius: 2px;
			padding: 10px;
			width: 380px;
			background-color: #06979B;
			border: none;
            border-radius: 11px;
			color: #fff;
			font-weight: bold;
            cursor
		}
		.error {
			background-color: #f72a68;
			width: 400px;
			height: auto;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			padding: 20px;
			border-radius: 4px;
			color: #fff;

		}
	</style>
</head>
<body>
	<div id = "kembali">
	<p><a href="index.html">Home</a></p>	
	</div>

	<div id="wrapper">
		<form action="logincontroller.php" method="POST">
			<h1>Login webISMA</h1>
			<input type="text" name="username" placeholder="masukkan username" required="" autofocus="">
			<input type="password" name="password" placeholder="masukkan password" required="" >
            <center>
              <button type="submit">Masuk</button>
              <p>atau</p>
              <div id="buat">
                <a href="registrasi.php">Buat Akun</a>  
              </div>
              
            </center>
			
		</form>
	</div>
	
		<?php if(isset($_GET['pesan'])) { ?>
			<div class="error">
				<label>Oopps... <?php echo $_GET['pesan']; ?></label>
			</div>
		<?php } ?>
	
</body>
</html>