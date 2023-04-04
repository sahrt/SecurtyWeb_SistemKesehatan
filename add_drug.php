<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Obat</title>
</head>
<body>
    <h1>Tambah Data Obat</h1>
    <a href="index.php">Kembali</a> <br>
    <form method="post" action="process_drug.php">
        <div>
            <label>Nama Obat:</label>
            <input type="text" name="nama_obat" required>
        </div>
        <div>
            <label>Stok Obat:</label>
            <input type="number" name="stok_obat" required>
        </div>
        <div>
            <input type="submit" name="submit" value="Simpan">
        </div>
    </form>
</body>
</html>
