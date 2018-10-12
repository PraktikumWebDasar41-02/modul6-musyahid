<?php  

$koneksi = mysqli_connect("localhost","root","","mahasiswa");

$errorNma = "";
$errorNim = "";


if (isset($_POST["kirim"])) {
	
	$nama = $_POST["nama"];

	if (strlen($_POST['nama']) > 35) {
		$errorNma = "Nama Tidak Boleh lebih dari 35";
	}

	$nim = $_POST["nim"];

	if (!is_numeric($nim)) {
		$errorNim = "NIM harus berupa angka";
	}

	$jenis_kelamin = $_POST["jenis_kelamin"];
	$hobi = $_POST["hobi"];
	$fakultas = $_POST["fakultas"];
	$alamat = $_POST ["alamat"];



	if ($errorNma === "" && $errorNim === "") {
		$query =  ("INSERT INTO mhs VALUES('$nama', '$nim','$jenis_kelamin','$hobi','$fakultas','$alamat')");

	$simpan = mysqli_query($koneksi, $query);

	if ($simpan) {
		echo "<script>
			alert('Data Berhasil Disimpan');
		</script>";
	}

	
	} 

	
}




?>




<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>



<body>



	<table>
		<form method="post" >
			<tr>
				<div style="color:red"><?php echo $errorNma; ?></div>
				<td>NAMA : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<div style="color:red"><?php echo $errorNim; ?></div>
				<td>NIM : </td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				
			</tr>
			<tr>
				<td>KELAS</td>
				<td>
					<input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-01
				<input type="radio" name="kelas" value="D3MI-41-02">D3MI-41-02
				<input type="radio" name="kelas" value="D3MI-41-03">D3MI-41-03
				<input type="radio" name="kelas" value="D3MI-41-04">D3MI-41-04
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin : </td>
				<td>
					<input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki Laki
					<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
				</td>
			</tr>

				<tr>
				<td>Hobi : </td>
				<td>
					<input type="checkbox" name="hobi" value="BULU TANGKIS">BULU TANGKIS
					<input type="checkbox" name="hobi" value="SEPAKBOLA">SEPAKBOLA
					<input type="checkbox" name="hobi" value="BOLA">BOLA VOLI
				</td>
			</tr>
			
			<tr>
				<td>FAKULTAS</td>
				<td>
					<select name="fakultas">
						<option></option>
						<option value="FAKULTAS ILMU TERAPAN">FAKULTAS ILMU TERAPAN</option>
						<option value="FAKULTAS INFORMATIKA">FAKULTAS INFORMATIKA</option>
						<option value="FAKULTAS TEKNIK ELEKTRO">FAKULTAS TEKNIK ELEKTRO</option>
						<option value="FAKULTAS REKAYASA INDUSTRI">FAKULTAS REKAYASA INDUSTRI</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>ALAMAT</td>
				<td><input type="textarea" name="alamat"></td>
			</tr>
			<tr>
				<td><input type="submit" name="kirim"></td>
			</tr>
			
		</form>
	</table><br><br>


	
</body>
</html>


