<?php

    require "fungsi.php";

    $id = $_GET["id"];

    $query = "SELECT * FROM mahasiswa WHERE id = $id";
    $mhs = tampildata($query)[0];

    if(isset($_POST["submit"]))
    {
    
        // cek tambah data masuk / tidak

        if (editdata($_POST, $id) > 0) 
        {
            echo "
                <script>
                    alert('Data Berhasil diubah !');
                    window.location.href = 'mahasiswa.php';
                </script>
            ";
        }
        else
        {
            echo "
                <script>
                    alert('Data Gagal diubah !');
                    window.location.href = 'tambahdata.php';
                </script>
            ";
        }

        if(mysqli_affected_rows($koneksi) > 0)
        {
            echo "
                <script>
                    alert('Data Berhasil diubah !');
                    window.location.href = 'mahasiswa.php';
                </script>
            ";
        }
        else
        {
            echo "
                <script>
                    alert('Data Gagal diubah !');
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
            EDIT DATA MAHASISWA INFORMATIKA 2026
        </title>
    </head>
    <body>
        <h2>Edit Data Mahasiswa Informatika 2026</h2>
        <hr/>
        <!-- Internal source -->
        <form action="" method="post">
            <table cellpadding="5px">
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" id="nama" name="nama" required value="<?=$mhs["nama"]?>"></td>
                </tr>
                <tr>
                    <td><label for="nim">NIM</label></td>
                    <td>:</td>
                    <td><input type="number" id="nim" name="nim" required value="<?=$mhs["nim"]?>"></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan</label></td>
                    <td>:</td>
                    <td><input type="text" id="jurusan" name="jurusan" required value="<?=$mhs["jurusan"]?>"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>:</td>
                    <td><input type="text" id="email" name="email" required value="<?=$mhs["email"]?>">
                </tr>
                <tr>
                    <td><label for="nohp">No. Hp</label></td>
                    <td>:</td>
                    <td><input type="number" id="nohp" name="no_hp" required value="<?=$mhs["no_hp"]?>"></td>
                </tr>
                <tr>
                    <td><label for="foto">Foto</label></td>
                    <td>:</td>
                    <td><input type="text" id="foto" name="foto" required value="<?=$mhs["foto"]?>">
                </tr>
                <tr>
                    <td colspan="3" >
                        <button type="submit" name="submit">
                            Ubah
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>