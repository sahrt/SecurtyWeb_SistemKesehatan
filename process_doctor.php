<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama_dokter = $_POST['nama_dokter'];
    $spesialis = $_POST['spesialis'];
    $telepon = $_POST['telepon'];

    $query = "INSERT INTO dokter (nama_dokter, spesialis, telepon) VALUES ('$nama_dokter', '$spesialis', '$telepon')";
    $result = mysqli_query($con, $query);

    if ($result) {
        header('Location: doctor_data.php');
    } else {
        echo "Gagal menambahkan data dokter";
    }
}
?>