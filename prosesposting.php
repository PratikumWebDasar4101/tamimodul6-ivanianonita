<?php
require_once("db6.php");

$isi=$_POST['isi'];

$dir = "upload/";
$nama_file= $_FILES["File_gbr"]['name'];
$nama_file_tmp = $_FILES["File_gbr"]['tmp_name'];
$target = $dir . $nama_file;

$sql = "insert into koneksi values('$isi','$nama_file')";

if(mysqli_query($conn,$sql)and move_uploaded_file($nama_file_tmp, $target)){
	echo "berhasil";
}else{
	echo"gagal";
}
?>
