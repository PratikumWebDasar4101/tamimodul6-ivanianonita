<?php
session_start();
	
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "ivania" && $password == "6701174075") {
	$_SESSION['username'] = $username;
	header("location: tampilkuta6.php");

} else{
	echo "gagal";
}

?>