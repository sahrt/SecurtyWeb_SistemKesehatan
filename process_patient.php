<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO pasien (nama, umur, jk, alamat) VALUES ('$nama', '$umur', '$jk', '$alamat')";
    $result = mysqli_query($con, $query);

    if ($result) {
        header('Location: list_patient.php');
    } else {
        echo "Gagal menambahkan data pasien";
    }
}
?>
