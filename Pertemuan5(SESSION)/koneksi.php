<?php
  $con= mysqli_connect("localhost","root","","akademik");
  if (!$con) {
    echo "Error: " . mysqli_connect_error();
  exit();
  }
?>