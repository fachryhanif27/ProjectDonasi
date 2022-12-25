<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require 'fungsi.php';
if (isset($_POST["submit"])) {
    if (zkt($_POST) > 0) {
        echo "<script>
                alert('Zakat Anda Berhasil di tambahkan');
                window.location.href='home.php'       
            </script>";
    } else {
        echo "<script>
                alert('Zakat Gagal di lakukan')       
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

    <link rel="icon" href="assets/img/brand/box2.png" type="image/png">
    <title></title>
</head>

<body class="p-3 mb-2 bg-info bg-gradient text-white">

    <div class="text-center">
        <a href="home.php"><img src="assets/img/icons/give.png" class="rounded" alt="zakat" width="100"></a>
        <h4>Zakat</h4><br>
    </div>
    <div class="container col-8">
        <div class="row">
            <form action="" method="POST">
                <div class="col">
                    <div class="mb-3" hidden>
                        <input type="text" id="jenis" name="jenis" value="Zakat">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="notel" class="form-label">No.tel</label>
                        <input type="text" class="form-control" name="notel" id="notel" required>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" name="pesan" rows="3"></textarea>
                    </div>
                    <label for="nominal" class="form-label">Nominal</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="nominal">Rp.</span>
                        <input type="text" class="form-control" name="nominal" aria-label="nominal" aria-describedby="nominal" required>
                    </div>
                </div>
                <div class="col">
                    <select class="form-select" aria-label="Default select example" name="metode" id="metode" required>
                        <option selected>Pilih Metode Pembayara</option>
                        <option value="BNI">BNI</option>
                        <option value="BRI">BRI</option>
                        <option value="Mandiri">Mandiri</option>
                        <option value="BCA">BCA</option>
                        <option value="Indomart">Indomart</option>
                        <option value="Alfamart">Alfamart</option>
                        <option value="OVO">OVO</option>
                        <option value="Gopay">Gopay</option>
                    </select>
                </div>
                <br>
                <button type=" submit" name="submit" class="btn btn-success">Pembayaran</button>

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