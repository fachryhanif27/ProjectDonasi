<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require 'fungsi.php';

$kode = $_GET["kode"];
$transaksi = query("SELECT * FROM transaksi WHERE kode = $kode")[0];

if (isset($_POST["submit"])) {
    if (konfirmasi($_POST) > 0) {
        echo "<script>
                alert('Konfirmasi pembayaran berhasil dilalukan');
                window.location.href='tabels.php'
             </script>";
    } else {
        echo "<script>
                alert('Gagal mengkonfirmasi pembayaran');
            </script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
</head>

<body class="p-3 mb-2 bg-info bg-gradient text-white">

    <div class="text-center">
        <a href="home.php"><img src="assets/img/icons/box2.png" class="rounded" alt="box2" width="100"></a>
        <h4>Konfirmasi pembayaran</h4><br>
    </div>
    <div class="container col-8">
        <div class="row">
            <form action="" method="POST">
                <div class="col">
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode Pembayaran</label>
                        <input type="text" class="form-control" name="kode" id="kode" value="<?= $transaksi["kode"]; ?>">

                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Donasi</label>
                        <input type="text" class="form-control" name="jenis" id="jenis" value="<?= $transaksi["jenis"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Donatur</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $transaksi["nama"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="notel" class="form-label">No.Tel</label>
                        <input type="text" class="form-control" name="notel" id="notel" value="<?= $transaksi["notel"]; ?>">
                    </div>
                    <label for="nominal" class="form-label">Nominal</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="nominal">Rp.</span>
                        <input type="text" class="form-control" name="nominal" aria-label="nominal" aria-describedby="nominal" value="<?= $transaksi["nominal"]; ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="metode" class="form-label">metode Pembayaran</label>
                        <input type="text" class="form-control" name="metode" id="metode" value="<?= $transaksi["metode"]; ?>">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Pending" id="status" checked>
                        <label class="form-check-label" for="status">
                            Pending
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Complate" id="status">
                        <label class="form-check-label" for="status">
                            Complate
                        </label>
                    </div>
                </div>
                <br>
                <button type=" submit" name="submit" class="btn btn-success">Konfirm Pembayaran</button>
            </form>
        </div>
    </div>
    <footer class="footer pt-4 text-white">
        <div class="row align-items-center ">
            <div class="col-lg-6">
                <div class="copyright text-center  text-lg-left  text-muted">
                    &copy; 2022 <a href="#" class="font-weight-bold ml-1" target="_blank">Tim APPL</a>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>