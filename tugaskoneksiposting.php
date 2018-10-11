<?php
require_once("dbposting.php");
 
$id=$_POST['id'];
$nama=$_POST['nama'];
$isi=$_POST['isi'];
$gambar=$_POST['gambar']

$sql="INSERT INTO posting(id,nama,isi,gambar) values ('$id','$nama','$isi','$gambar')";

if(mysqli_query($conn,$sql)){
 header("Location:tampilkuposting");
}else{
	echo"Error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?> 