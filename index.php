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
</body>
</html>
