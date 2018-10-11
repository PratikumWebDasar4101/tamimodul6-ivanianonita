<?php

require_once("dbposting.php");
?>
<table border=1>
	<head>
		<th>Id</th>
		<th>Nama</th>
		<th>Isi</th>
		<th>Gambar</th>
		
	</head>
	<tbody>
<?php
$sql = "SELECT * FROM posting";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	//output data of each row
	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		echo"<tr>";
		echo"<td>".$row["id"]."</td>";
		echo"<td>".$row["nama"]."</td>";
		echo"<td>".$row["isi"]."</td>";
		echo"<td>".$row["gambar"]."</td>";
		
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