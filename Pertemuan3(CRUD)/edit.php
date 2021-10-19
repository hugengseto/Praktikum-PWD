<?php
// include database connection file
include_once("koneksi.php");
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
  { 
    $NIM = $_POST['NIM'];
    $nama=$_POST['nama'];
    $jkel=$_POST['jkel'];
    $alamat=$_POST['alamat'];
    $tgllhr=$_POST['tgllhr'];
    $prodi=$_POST['prodi'];
    // update user data
    $result = mysqli_query($con, "UPDATE mahasiswa SET 
    nama='$nama',jkel='$jkel',alamat='$alamat',tgllhr='$tgllhr',prodi='$prodi' WHERE NIM='$NIM'");
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
  }
?>
<?php
  // Display selected user data based on id
  // Getting id from url
  $NIM = $_GET['NIM'];
  // Fetech user data based on id
  $result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE NIM='$NIM'");
  while($user_data = mysqli_fetch_array($result))
  {
    $NIM = $user_data['NIM'];
    $nama = $user_data['nama'];
    $jkel = $user_data['jkel'];
    $alamat = $user_data['alamat'];
    $tgllhr = $user_data['tgllhr'];
    $prodi = $user_data['prodi'];
  }
?>
<html>
<head>
  <title>Edit Data Mahasiswa</title>
</head>
<body>
  <a href="index.php">Home</a>
  <br/><br/>
    <form name="update_mahasiswa" method="post" action="edit.php">
      <table border="0">
        <tr> 
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
        </tr>
        <tr> 
        <td>Gender</td>
        <td><input type="text" name="jkel" value="<?php echo $jkel;?>"></td>
        </tr>
        <tr> 
        <td>alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
        </tr>
        <tr> 
        <td>Tgl Lahir</td>
        <td><input type="date" name="tgllhr" value="<?php echo $tgllhr;?>"></td>
        </tr>
        <tr> 
        <td>prodi</td>
        <td><input type="text" name="prodi" value="<?php echo $prodi;?>"></td>
        </tr>
        <tr>
        <td><input type="hidden" name="NIM" value=<?php echo $_GET['NIM'];?>></td>
        <td><input type="submit" name="update" value="Update"></td>
        </tr>
      </table>
    </form>
  </body>
</html>