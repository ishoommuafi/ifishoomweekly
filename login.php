<?php
require 'fungsi.php';
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

$error = false;

if (isset($_POST["login"])) {
    $user = login($_POST);
    if ($user) {
        $_SESSION["login"] = true;
        $_SESSION["username"] = $user["username"];
        header("Location: index.php");
        exit;
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mahasiswa Informatika 2026</title>
</head>
<body>
    <h1>Login User</h1>

    <?php if ($error): ?>
        <p style="color: red;">Username atau password salah.</p>
    <?php endif; ?>

    <form action="" method="post">
        <label>username</label><br>
        <input type="text" name="username" required><br><br>

        <label>password</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="login">Login</button>
    </form>

    <p>Belum punya akun? <a href="register.php">Register</a></p>

    <hr>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
            <td><a href="register.php">Register</a></td>
        </tr>
    </table>
</body>
</html>

