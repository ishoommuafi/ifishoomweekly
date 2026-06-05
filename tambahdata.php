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
        <form action="mahasiswa.php" method="post">
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
                <tr>
                    <td colspan="3" align="center">
                        <button type="submit" value="Submit">
                            Submit
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