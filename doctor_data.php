<!DOCTYPE html>
<html>
<head>
    <title>Data Dokter</title>
</head>
<body>
    <h1>Data Dokter</h1>
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
        $result = mysqli_query($con, $query);

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
    <a href="logout.php">Logout</a>
</body>
</html>
