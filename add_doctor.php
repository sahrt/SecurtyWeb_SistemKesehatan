<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Dokter</title>
</head>
<body>
    <h1>Tambah Data Dokter</h1>
    <a href="index.php">Kembali</a> <br>
    <form method="post" action="process_doctor.php">
        <div>
            <label>Nama Dokter:</label>
            <input type="text" name="nama_dokter" required>
        </div>
        <div>
            <label>Spesialis:</label>
            <input type="text" name="spesialis" required>
        </div>
        <div>
            <label>Telepon:</label>
            <input type="text" name="telepon" required>
        </div>
        <div>
            <input type="submit" name="submit" value="Simpan">
        </div>
    </form>
</body>
</html>
