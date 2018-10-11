<?php

require_once("db6.php");
?>
<table border=1>
	<head>
		<th>Id</th>
		<th>Nim</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Jenis Kelamin</th>
		<th>Hobi</th>
		<th>Fakultas</th>
		<th>Alamat</th>
	</head>
	<tbody>
<?php
$sql = "SELECT * FROM daftar";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	//output data of each row
	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		echo"<tr>";
		echo"<td>".$row["id"]."</td>";
		echo"<td>".$row["nim"]."</td>";
		echo"<td>".$row["nama"]."</td>";
		echo"<td>".$row["kelas"]."</td>";
		echo"<td>".$row["jenis_kelamin"]."</td>";
		echo"<td>".$row["hobi"]."</td>";
		echo"<td>".$row["fakultas"]."</td>";
		echo"<td>".$row["alamat"]."</td>";
		echo"<td>"."<a href='ubah6.php?id=$id'>Edit</a>||<a href='posting.html?id=$id'>Posting</a></td>";
		echo"</tr>";
	}
}else{
	echo "0 results";
}
mysqli_close($conn);
?>
</tbody>
</table>