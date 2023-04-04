<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Obat</title>
</head>
<body>
    <h1>Edit Data Obat</h1>
    <?php
    include 'koneksi.php';

    $id_obat = $_GET['id_obat'];

    $query = "SELECT * FROM obat WHERE id_obat='$id_obat'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form method="post" action="process_edit_drug.php">
        <input type="hidden" name="id_obat" value="<?php echo $id_obat ?>">
        <div>
            <label>Nama Obat:</label>
            <input type="text" name="nama_obat" value="<?php echo $row['nama_obat'] ?>" required>
        </div>
        <div>
            <label>Stok Obat:</label>
            <input type="number" name="stok_obat" value="<?php echo $row['stok_obat'] ?>" required>
        </div>
        <div>
            <input type="submit" name="submit" value="Simpan">
        </div>
    </form>
</body>
</html>
