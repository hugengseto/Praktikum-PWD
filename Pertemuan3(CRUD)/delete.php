<?php
    // include database connection file
    include_once("koneksi.php");
    // Get id from URL to delete that user
    $NIM = $_GET['NIM'];
    // Delete user row from table based on given id
    $result = mysqli_query($con, "DELETE FROM mahasiswa WHERE NIM='$NIM'");
    // After delete redirect to Home, so that latest user list will be displayed.
    header("Location:index.php");
?>