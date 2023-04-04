<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $id_obat = $_POST['id_obat'];
    $nama_obat = $_POST['nama_obat'];
    $stok_obat = $_POST['stok_obat'];

    $query = "UPDATE obat SET nama_obat='$nama_obat', stok_obat='$stok_obat' WHERE id_obat='$id_obat'";
    $result = mysqli_query($con, $query);

    if ($result) {
        header('Location: drug_data.php');
    } else {
        echo "Gagal mengedit data obat";
    }
}
?>
