<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Manajemen Kesehatan</title>

</head>
<body>
    <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Ini adalah halaman utama sistem manajemen kesehatan.</p>

    <div>
        <br>
        <p>Pelayanan Kesehatan</p>
         <div>
        <a href="list_patient.php">List Kunjugan Pasien</a>
        </div>
         <div>
        <a href="doctor_data.php">List Doktor yang betugas</a>
        </div>
         <div>
        <a href="drug_data.php">List daftar obat</a>
        </div>
        <div>
        <a href="add_doctor.php">Daftar Doctor</a>
        </div>
        <div>
        <a href="add_drug.php">Daftar Drug/Obat</a>
        </div>
        <div>
        <a href="add_patient.php">Daftar Paintet/Pasien</a>
        </div>
       
    </div>
</body>
</html>
