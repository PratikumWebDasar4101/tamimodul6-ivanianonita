<?php
require_once("db6.php");

$id=$_POST['id'];
$nim= $_POST['nim'];
$nama= $_POST['nama'];
$kelas= $_POST['kelas'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$hobi= $_POST['hobi'];
$fakultas= $_POST['fakultas'];
$alamat= $_POST['alamat'];


$sql= " UPDATE daftar SET nim='$nim', nama='$nama' ,kelas='$kelas',jenis_kelamin='$jenis_kelamin', hobi='$hobi', fakultas='$fakultas', alamat='$alamat' where id='$id'";
if(mysqli_query($conn, $sql)){
	header("Location:tampilkuta6.php");
}else{
	echo "Error :".$sql."<br>". mysql_error($conn);
}
?>