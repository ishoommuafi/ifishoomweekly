<?php
    require "fungsi.php";

    $qmhs = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($qmhs);
    
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            DATA MAHASISWA INFORMATIKA 2026
        </title>
    </head>
    <body>
        <h1>Data Mahasiswa Informatika 2026</h1>
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td><a href="index.php">Home</a></td>
                <td><a href="profile.php">Profile</a></td>
                <td><a href="contact.php">Contact</a></td>
                <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
            </tr>
        </table>
        <hr/>
        <a href="tambahdata.php">
            <button>Tambah Data Mahasiswa</button>
        </a>
        <table border="1" cellpadding="10px" >
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>No. Hp</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>

            <?php
                $i = 1;
                foreach ($mahasiswas as $mhs) 
                {
            ?>
            
            <tr>
                <td align="center"><?= $i++; ?></td>
                <td><?php echo $mhs['nama']; ?></td>
                <td><?php echo $mhs['nim']; ?></td>
                <td><?= $mhs['jurusan']; ?></td>
                <td><?= $mhs['email']?></td>
                <td><?= $mhs['no_hp']?></td>
                <td><img src="assets/images/<?= $mhs['foto']?>" alt="foto" width="60px"></td>
                <td>
                    <a href="editdata.php">
                        <button>Edit</button>
                    </a>
                    <a href="hapusdata.php">
                        <button>Hapus</button>
                    </a>
                </td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td align="center">2</td>
                <td>Smokey</td>
                <td>Teknik Informatika</td>
                <td>smokey@email.com</td>
                <td>08987654321</td>
                <td><img src="assets/images/smokey.jpg" alt="foto" width="60px"></td>
                <td>
                    <a href="editdata.php">
                        <button>Edit</button>
                    </a>
                    <a href="hapusdata.php">
                        <button>Hapus</button>
                    </a>
                </td>
            </tr>
        </table>

        <br>

        <h3>Data Diri</h3>
        <table border="1" cellpadding="10px" >
            <tr>
                <th>No</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>EMAIL</th>
            </tr>
            <tr>
                <td align="center">1</td>
                <td rowspan="2" colspan="2">Akira Nakai</td>
                <td>Jl. Sakura No. 123, Tokyo</td>
            </tr>
            <tr>
                <td align="center">2</td>
                <td>smokey@email.com</td>
            </tr>
            <tr>
                <td>No</td>
                <td>NAMA</td>
                <td>ALAMAT</td>
                <td>EMAIL</td>
            </tr>
        </table>
        
        <!-- Internal source -->
        <a href="profile.php">Profile</a>
        <a href="contact.php">Contact</a>

        <!-- External source -->
         <a href="https://Youtube.com" target="_blank">Youtube</a>
    </body>
</html>