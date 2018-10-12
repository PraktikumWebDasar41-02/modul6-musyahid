<?php 

$koneksi = mysqli_connect("localhost","root","","mahasiswa");

session_start();
 
if($_SESSION['status'] !="login"){
	header("location:login.php");
}

echo "Hai, selamat datang";

$data = mysqli_query($koneksi, "SELECT * FROM mhs");
 
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Jenis Kelamin</th>
			<th>Hobi</th>
			<th>fakultas</th>
			<th>Alamat</th>
		</tr>

		<?php while ($row = mysqli_fetch_assoc($data)) : ?>
    <tr>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["nim"]; ?></td>
      <td><?= $row["jenis_kelamin"]; ?></td>
      <td><?= $row["hobi"]; ?></td>
      <td><?= $row["fakultas"]; ?></td>
      <td><?= $row["alamat"]; ?></td>
    </tr>

    <?php endwhile; ?>
	</table>

</body>
</html>


