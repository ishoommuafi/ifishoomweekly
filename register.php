<?php
    require 'fungsi.php';

    if(isset($_POST["register"]))
    {
        if(register($_POST) > 0)
        {
            echo "<script>
                    alert('user baru berhasil ditambahkan');
                    window.location.href='login.php';
                </script>
                ";
        }
        else
        {
            echo mysqli_error($koneksi);
        }
    }

    
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            REGISTER MAHASISWA INFORMATIKA 2026
        </title>
    </head>
    <body>
        <h1>Register User</h1>
        <hr>
        <form action="" method="post">
            <label>username</label><br>
            <input type="text" name="username" required><br><br>
            <label>password</label><br>
            <input type="password" name="password1"><br><br>
            <label>konfirmasi password</label><br>
            <input type="password" name="password2"><br><br>
            <button type="submit" name="register">Register</button>
        </form>
        <br>
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td><a href="index.php">Home</a></td>
                <td><a href="profile.php">Profile</a></td>
                <td><a href="contact.php">Contact</a></td>
                <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
                <td><a href="register.php">Register</a></td>`
            </tr>
        </table>
        <hr/>
    </body>
</html>