<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama_obat = $_POST['nama_obat'];
    $stok_obat = $_POST['stok_obat'];

    $query = "INSERT INTO obat (nama_obat, stok_obat) VALUES ('$nama_obat', '$stok_obat')";
    $result = mysqli_query($con, $query);

    if ($result) {
        header('Location: drug_data.php');
    } else {
        echo "Gagal menambahkan data obat";
    }
}
?>
