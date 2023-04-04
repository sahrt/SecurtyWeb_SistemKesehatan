<?php
session_start();
// Cek apakah user sudah login
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

// Mengambil koneksi ke database
include "koneksi.php";

// Mengambil data pasien dari tabel pasien
$query = "SELECT * FROM pasien";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pasien</title>
</head>
<body>
	<h1>Daftar Pasien</h1>
	<a href="index.php">Kembali</a> <br>
	<a href="add_patient.php">Tambah Pasien</a>
	<table>
		<tr>
			<th>No.</th>
			<th>Nama Pasien</th>
			<th>Umur</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php
		$i = 1;
		while($row = mysqli_fetch_assoc($result)){
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['umur']; ?></td>
				<td><?php echo $row['jk']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td>
					<a href="edit_patient.php?id=<?php echo $row['id_pasien']; ?>">Edit</a>
					<a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="delete_patient.php?id=<?php echo $row['id_pasien']; ?>">Hapus</a>
				</td>
			</tr>
			<?php
			$i++;
		}
		?>
	</table>
	<a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="logout.php">Logout</a>
</body>
</html>

<?php
// Menutup con ke database
mysqli_close($conn);
?>
