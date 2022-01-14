<?php 
	session_start();
	session_destroy();
	header('Location: loginADM.php');
 ?>