<?php

    $koneksi = mysqli_connect("localhost", "root", "", "ifishoomweekly");

    function tampildata($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi,$query);

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

function tambahdata($data, $files)
    {
        global $koneksi;

        $nama = htmlspecialchars ($data["nama"]);
        $nim = htmlspecialchars ($data["nim"]);
        $jurusan = htmlspecialchars ($data["jurusan"]);
        $email = htmlspecialchars ($data["email"]);
        $no_hp = htmlspecialchars ($data["no_hp"]);

        $namafoto = $files["name"];
        $tmpfoto = $files["tmp_name"];

        $newnamefoto = date("YmdHis").$namafoto;

        $path = "assets/images/$newnamafoto";

        if(move_uploaded_file($tmpfoto, $path))
        {
        $query = "INSERT INTO mahasiswa
            (nama,nim,jurusan,email,no_hp,foto) VALUES 
            ('$nama', '$nim', '$jurusan', '$email', '$no_hp', '$newnamafoto')";
        
        mysqli_query($koneksi,$query);
        }
        return mysqli_affected_rows($koneksi);
    }

function hapusdata($id)
    {
        global $koneksi;

        mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($koneksi);
    }

function editdata($data, $id)
    {
        global $koneksi;

        $nama = htmlspecialchars ($data["nama"]);
        $nim = htmlspecialchars ($data["nim"]);
        $jurusan = htmlspecialchars ($data["jurusan"]);
        $email = htmlspecialchars ($data["email"]);
        $no_hp = htmlspecialchars ($data["no_hp"]);
        $foto = htmlspecialchars ($data["foto"]);

        $query = "UPDATE mahasiswa SET
                    nama = '$nama',
                    nim = '$nim',
                    jurusan = '$jurusan',
                    email = '$email',
                    no_hp = '$no_hp',
                    foto = '$foto'
                WHERE id = $id
                ";

        mysqli_query($koneksi,$query);

        return mysqli_affected_rows($koneksi);
    }

function register($data)
    { 
        global $koneksi;

        $username = stripslashes($data["username"]);
        $password1 = mysqli_real_escape_string($koneksi, $data["password1"]);
        $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

        if($password1 != $password2)
            {   
                echo "<script>
                        alert('konfirmasi password tidak sesuai');
                    </script>";
                return false;
            }
        //// enkripsi password
        $password_hash = password_hash($password1, PASSWORD_DEFAULT);

        $query = "INSERT INTO user (username, password) VALUES
        ('$username', '$password_hash')";

        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }

function login($data)
{
    global $koneksi;

    $username = mysqli_real_escape_string($koneksi, strtolower($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            return $row;
        }
    }
    return false;
}
?>"