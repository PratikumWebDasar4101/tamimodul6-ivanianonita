<?php
require_once("db6.php");

$id=$_GET['id'];

$query=mysqli_query($conn,"select * from daftar where id='$id'");
$row=mysqli_fetch_array($query);

function acive_radio_button($value,$input){
	$result = $value == $input?'checked':'';
	return $result;
}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['id'];?>" name="id">
	<table>
	<form action="update6.php" method="POST">
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $row['id']; ?>" name="id"></td>
		<tr>

		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="number" value="<?php echo $row['nim']; ?>" name="nim"></td>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
		</tr>

		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" value="<?php echo $row['kelas']; ?>" name="kelas"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" value="<?php echo $row['jenis_kelamin']; ?>" name="jenis_kelamin"></td>
		</tr>

		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" value="<?php echo $row['hobi']; ?>" name="hobi"></td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $row['fakultas']; ?>" name="fakultas"></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="textarea" value="<?php echo $row['alamat']; ?>" name="alamat"></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>
	</form>
</table>

</body>
</html>