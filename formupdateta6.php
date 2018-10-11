<?php
    require_once("db6.php");
    $id = $_GET['id'];

    $sql = mysqli_query($conn, "SELECT * FROM daftar WHERE id = '$id'");
    $row = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Data</title>
    </head>
    <body>
        <form method="post">
            <table align="center">
                <tr>
                    <td colspan="2" align="center"><h2>Data Diri</h2></td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td><input type="number" name="nim" value="<?php echo $row['nim'] ?>"></td>
                </tr> 
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $row['nama'] ?>"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input type="radio" name="kelas" value="<?php echo $row['kelas'] ?>"></td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="radio" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin'] ?>"></td>
                </tr>

                <tr>
                    <td>Hobi</td>
                    <td><input type="checkbox" name="hobi" value="<?php echo $row['hobi'] ?>"></td>
                </tr>

                <tr>
                    <td>fakultas</td>
                    <td><input type="" name="fakultas" value="<?php echo $row['fakultas'] ?>"></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td><input type="textarea" name="alamat" value="<?php echo $row['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
    if (isset($_POST['nim'])) {
        $nim = $_POST['nama'];
        $nama = $_POST['kelas'];
        $tgl_lahir = $_POST['jenis_kelamin'];
        $tgl_lahir = $_POST['hobi'];
         $tgl_lahir = $_POST['fakultas'];
          $tgl_lahir = $_POST['alamat'];

        $sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', kelas='kelas' , jenis_kelamin='$jenis_kelamin', hobi='$hobi', fakultas='$fakultas', alamat='$alamat' WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
            header("location: list.php");
        }else {
            echo "Error: " . $sql . "<br?" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
?>