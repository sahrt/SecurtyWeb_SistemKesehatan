<!DOCTYPE html>
<html>
<head>
    <title>Data Obat</title>
</head>
<body>
    <h1>Data Obat</h1>
    <table>
        <tr>
            <th>ID Obat</th>
            <th>Nama Obat</th>
            <th>Stok Obat</th>
        </tr>
        <?php
        include 'koneksi.php';

        $query = "SELECT * FROM obat";
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_obat'] . "</td>";
            echo "<td>" . $row['nama_obat'] . "</td>";
            echo "<td>" . $row['stok_obat'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="logout.php">Logout</a>
</body>
</html>
