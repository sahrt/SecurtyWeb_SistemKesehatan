<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pasien</title>
</head>
<body>
    <h1>Tambah Data Pasien</h1>
    <a href="index.php">Kembali</a> <br>
    <form method="post" action="process_patient.php">
        <div>
            <label>Nama:</label>
            <input type="text" name="nama" required>
        </div>
        <div>
            <label>Umur:</label>
            <input type="number" name="umur" required>
        </div>
        <div>
            <label>Jenis Kelamin:</label>
            <select name="jk" required>
                <option value="">Pilih jenis kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div>
            <label>Alamat:</label>
            <textarea name="alamat" required></textarea>
        </div>
        <div>
            <input type="submit" name="submit" value="Simpan">
        </div>
    </form>
</body>
</html>
