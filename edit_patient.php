<?php
session_start();
// Cek apakah user sudah login
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

// Mengambil koneksi ke database
include "koneksi.php";

// Cek apakah ada parameter id_pasien pada URL
if(isset($_GET['id'])){
	$id_pasien = $_GET['id'];
	// Mengambil data pasien dengan id_pasien yang sesuai
	$query = "SELECT * FROM pasien WHERE id_pasien = '$id_pasien'";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
}else{
	// Jika tidak ada parameter id_pasien pada URL, redirect ke halaman list_patient.php
	header("Location: list_patient.php");
	exit();
}

// Jika form disubmit dengan method POST
if($_SERVER['REQUEST_METHOD'] == "POST"){
	// Mengambil data dari form
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];

	// Update data pasien pada tabel pasien
	$query = "UPDATE pasien SET nama = '$nama', umur = '$umur', jk = '$jk', alamat = '$alamat' WHERE id_pasien = '$id_pasien'";
	mysqli_query($con, $query);

	// Redirect ke halaman list_patient.php setelah data pasien berhasil diupdate
	header("Location: list_patient.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Pasien</title>
</head>
<body>
	<h1>Edit Pasien</h1>
	<form method="post">
		<label>Nama Pasien:</label><br>
		<input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
		<label>Umur:</label><br>
		<input type="number" name="umur" value="<?php echo $row['umur']; ?>"><br>
		<label>Jenis Kelamin:</label><br>
		<input type="radio" name="jk" value="Laki-laki" <?php if($row['jk'] == "Laki-laki") echo "checked"; ?>> Laki-laki
		<input type="radio" name="jk" value="Perempuan" <?php if($row['jk'] == "Perempuan") echo "checked"; ?>> Perempuan<br>
		<label>Alamat:</label><br>
		<textarea name="alamat"><?php echo $row['alamat']; ?></textarea><br>
		<input type="submit" value="Simpan">
	</form>
	<a href="list_patient.php">Batal</a>
	<a href="logout.php">Logout</a>
</body>
</html>

<?php
// Menutup koneksi ke database
mysqli_close($con);
?>
