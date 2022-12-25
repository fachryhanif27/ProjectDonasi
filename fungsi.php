<?php

$koneksi = mysqli_connect("localhost", "root", "", "web_donasi");

//Fungsi untuk menampilkan data dari databse
function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//
function konfirmasi($data)
{
    global $koneksi;

    $kode = $data["kode"];
    $jenis = htmlspecialchars($data["jenis"]);
    $nama = htmlspecialchars($data["nama"]);
    $notel = htmlspecialchars($data["notel"]);
    $nominal = htmlspecialchars($data["nominal"]);
    $metode = htmlspecialchars($data["metode"]);
    $status = htmlspecialchars($data["status"]);

    $query = "UPDATE transaksi SET
                jenis = '$jenis',
                nama = '$nama',
                notel = '$notel',
                nominal = '$nominal',
                metode = '$metode',
                status = '$status
            WHERE kode = $kode
            ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}


//untuk registrasi user
function daftar($data)
{
    global $koneksi;

    $nama = strtolower(stripslashes($data["nama"]));
    $email = strtolower(stripslashes($data["email"]));
    $notel = strtolower(stripslashes($data["notel"]));
    $alamat = strtolower(stripslashes($data["alamat"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    //cek nama
    $result = mysqli_query($koneksi, "SELECT nama FROM user WHERE nama = '$nama'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
               alert('nama sudah di gunakan');
             </script>";
        return false;
    }

    //cek email
    $result = mysqli_query($koneksi, "SELECT email FROM user WHERE email = '$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
               alert('email sudah digunakan / terdaftar');
             </script>";
        return false;
    }

    //cek notel
    $result = mysqli_query($koneksi, "SELECT notel FROM user WHERE notel = '$notel'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
               alert('No telphone sudah di gunakan / terdaftar');
             </script>";
        return false;
    }

    //cek konfirmasi
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai')       
              </script>";
        return false;
    }
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //masukan ke database
    mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama', '$email', '$notel', '$alamat','$password', '')");

    return mysqli_affected_rows($koneksi);
}

//fungsi untuk menghapus data user
function hapus1($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM user WHERE id = $id");

    return mysqli_affected_rows($koneksi);
}

//fungsi untuk menghapus data user
function hapus2($kode)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM transaksi WHERE kode = $kode");

    return mysqli_affected_rows($koneksi);
}

//fungsi untuk menambah data innfaq
function inf($tam)
{
    global $koneksi;
    $jenis = htmlspecialchars(($tam["jenis"]));
    $nama = htmlspecialchars(($tam["nama"]));
    $notel = htmlspecialchars($tam["notel"]);
    $pesan = htmlspecialchars($tam["pesan"]);
    $nominal = htmlspecialchars($tam["nominal"]);
    $metode = htmlspecialchars($tam["metode"]);

    $query = "INSERT INTO infaq
            VALUES
            ('', '$jenis', '$nama', '$notel', '$pesan', '$nominal', '$metode')
            ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

//fungsi untuk menambah data innfaq
function zkt($tam)
{
    global $koneksi;
    $jenis = htmlspecialchars(($tam["jenis"]));
    $nama = htmlspecialchars(($tam["nama"]));
    $notel = htmlspecialchars($tam["notel"]);
    $pesan = htmlspecialchars($tam["pesan"]);
    $nominal = htmlspecialchars($tam["nominal"]);
    $metode = htmlspecialchars($tam["metode"]);

    $query = "INSERT INTO zakat
            VALUES
            ('', '$jenis', '$nama', '$notel', '$pesan', '$nominal', '$metode')
            ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

//fungsi untuk menambah data innfaq

function sdq($tam)
{
    global $koneksi;
    $jenis = htmlspecialchars(($tam["jenis"]));
    $nama = htmlspecialchars(($tam["nama"]));
    $notel = htmlspecialchars($tam["notel"]);
    $pesan = htmlspecialchars($tam["pesan"]);
    $nominal = htmlspecialchars($tam["nominal"]);
    $metode = htmlspecialchars($tam["metode"]);

    $query = "INSERT INTO sodaqoh
            VALUES
            ('', '$jenis', '$nama', '$notel', '$pesan', '$nominal', '$metode')
            ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
