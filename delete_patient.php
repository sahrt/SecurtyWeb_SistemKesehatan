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
	// Menghapus data pasien dengan id_pasien yang sesuai
	$query = "DELETE FROM pasien WHERE id_pasien = '$id_pasien'";
	mysqli_query($conn, $query);
}

// Redirect ke halaman list_patient.php setelah data pasien berhasil dihapus
header("Location: list_patient.php");
exit();

?>

<?php
// Menutup con ke database
mysqli_close($conn);
?>
