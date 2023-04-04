<?php
$host = "localhost"; // sesuaikan dengan host Anda
$user = "username"; // sesuaikan dengan username Anda
$pass = ""; // sesuaikan dengan password Anda
$db   = "sistem_kesehatan"; // sesuaikan dengan nama database Anda

// membuat koneksi
$con = mysqli_connect($host, $user, $pass, $db);

// mengecek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
}
?>
