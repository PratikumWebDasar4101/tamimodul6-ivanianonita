<?php
require_once("db6.php");
 
$id=$_POST['id'];
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$hobi=$_POST['hobi'];
$hobi = array($_POST['hobi']);
foreach ($_POST['hobi'] as $hobi) {
}
$fakultas=$_POST['fakultas'];
$alamat=$_POST['alamat'];

$sql="INSERT INTO daftar(id,nim,nama,kelas,jenis_kelamin,hobi,fakultas,alamat) values ('$id','$nim','$nama','$kelas','$jenis_kelamin','$hobi','$fakultas','$alamat')";

if(mysqli_query($conn,$sql)){
 header("Location:loginta6.html");
}else{
	echo"Error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?> 