<?php

    require "fungsi.php";

    if(isset($_POST["submit"]))
    {
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $jurusan = $_POST["jurusan"];
        $email = $_POST["email"];
        $no_hp = $_POST["no_hp"];
        $foto = $_POST["foto"];

        $query = "INSERT INTO mahasiswa
        (nama,nim,jurusan,email,no_hp,foto) VALUES 
        ('$nama', '$nim', '$jurusan', '$email', '$no_hp', '$foto')";
        mysqli_query($koneksi,$query);

        if(mysqli_affected_rows($koneksi) > 0)
        {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan!');
                    window.location.href = 'mahasiswa.php';
                </script>
            ";
        }
        else
        {
            echo "
                <script>
                    alert('Data Gagal Ditambahkan!');
                    window.location.href = 'tambahdata.php';
                </script>
            ";
        }
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            TAMBAH DATA MAHASISWA INFORMATIKA 2026
        </title>
    </head>
    <body>
        <h2>Tambah Data Mahasiswa Informatika 2026</h2>
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td><a href="index.php">Home</a></td>
                <td><a href="profile.php">Profile</a></td>
                <td><a href="contact.php">Contact</a></td>
                <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
            </tr>
        </table>
        <hr/>
        <!-- Internal source -->
        <form action="" method="post">
            <table cellpadding="5px">
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" id="nama" name="nama" require></td>
                </tr>
                <tr>
                    <td><label for="nim">NIM</label></td>
                    <td>:</td>
                    <td><input type="number" id="nim" name="nim" require></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan</label></td>
                    <td>:</td>
                    <td><input type="text" id="jurusan" name="jurusan" require></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>:</td>
                    <td><input type="text" id="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="nohp">No. Hp</label></td>
                    <td>:</td>
                    <td><input type="number" id="nohp" name="no_hp" require></td>
                </tr>
                <tr>
                    <td><label for="foto">Foto</label></td>
                    <td>:</td>
                    <td><input type="text" id="foto" name="foto"></td>
                </tr>
                <tr>
                    <td colspan="3" >
                        <button type="submit" name="submit">
                            Tambah
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
     <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td><a href="index.php">Home</a></td>
                <td><a href="profile.php">Profile</a></td>
                <td><a href="contact.php">Contact</a></td>
                <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
            </tr>
        </table>
</html>