<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // menggunakan parameterized query dan escape string untuk mencegah SQL injection
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $password1 = mysqli_real_escape_string($conn, $password);
  
    $stmt->bind_param('ss', $username, $password1);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
    } else {
        $error = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Sistem Manajemen Kesehatan</title>
</head>
<body>
    <h1>Login Sistem Manajemen Kesehatan</h1>
    <?php if (isset($error)) { ?>
        <div style="color:  red;"><?php echo $error; ?></div>
    <?php } ?>
    <form method="post" action="">
        <div>
            <label>Username:</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <input type="submit" name="submit" value="Login">
        </div>
    </form>
</body>
</html>
