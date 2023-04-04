<!DOCTYPE html>
<html>
<head>
    <title>Data Dokter</title>
</head>
<body>
    <h1>Data Dokter</h1>
       <a href="index.php">Kembali</a> <br>
    
    <table>
        <tr>
            <th>Id Dokter</th>
            <th>Nama Dokter</th>
            <th>Spesialis</th>
            <th>Telepon</th>
        </tr>
        <?php
        include 'koneksi.php';

        $query = "SELECT * FROM dokter";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_dokter'] . "</td>";
            echo "<td>" . $row['nama_dokter'] . "</td>";
            echo "<td>" . $row['spesialis'] . "</td>";
            echo "<td>" . $row['telepon'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="logout.php">Logout</a>
</body>
</html>
