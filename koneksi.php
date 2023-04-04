<?php
$host = "localhost"; // sesuaikan dengan host Anda
$user = "root"; // sesuaikan dengan username Anda
$pass = ""; // sesuaikan dengan password Anda
$db   = "sistemkesehatan"; // sesuaikan dengan nama database Anda

// membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// mengecek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
}
?>
