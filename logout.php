<?php
session_start();
session_destroy(); // menghapus semua data session
header("Location: login.php"); // redirect ke halaman login
exit;
?>
