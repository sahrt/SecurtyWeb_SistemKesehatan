<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 0) {
        // simpan data pengguna ke dalam session
        $_SESSION['username'] = $username;
        header('Location: index.php');
    } else {
        // tampilkan pesan error jika username atau password salah
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
        <div><?php echo $error; ?></div>
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
