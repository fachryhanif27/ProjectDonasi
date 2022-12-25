<?php
session_start();

if (isset($_SESSION["login"])) {
    header("location: home.php");
    exit;
}

require 'fungsi.php';
//login
if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT *FROM user WHERE email = '$email'");

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            //set sesion
            $_SESSION["login"] = true;

            if ($row["admin"] == 1) {
                header("Location: dashboard.php");
                exit;
            } else {
                header("Location: home.php");
                exit;
            }
        }
    } else {
        $error = true;
        echo "<script>
                alert('Email/Password yang di masukan salah!!!');
                window.location.href='login.php'
             </script>";
    }
}

//register account
if (isset($_POST["daftar"])) {
    if (daftar($_POST) > 0) {
        echo "<script>
                alert('Registrasi Account Anda Berhasil');
                window.location.href='login.php'
             </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}

?>

<html>

<head>
    <link rel="stylesheet" href="assets/css/stylelog.css">

</head>
<link rel="icon" href="assets/img/brand/box2.png" type="image/png">
<title>Login Form</title>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="" method="POST">
                <h1>Create Account</h1>
                <input type="text" id="nama" name="nama" placeholder="Name" required />
                <input type="email" id="email" name="email" placeholder="Email" required />
                <input type="text" id="notel" name="notel" placeholder="No.Telp" required />
                <input type="text" id="alamat" name="alamat" placeholder="Alamat" required />
                <input type="password" id="password" name="password" placeholder="Password" required />
                <input type="password" id="password2" name="password2" placeholder="Confirm Password" required />
                <button type="submit" name="daftar">Register</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="" method="POST">
                <h1>Login</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"> <img src="assets/img/main/fb.png" alt="" height="34"></i></a>
                    <a href="https://accounts.google.com/signin/v2/identifier?hl=id&continue=https%3A%2F%2Fwww.google.com%2F&ec=GAlAmgQ&flowName=GlifWebSignIn&flowEntry=AddSession" class="social"><i class="fab fa-google-plus-g"> <img src="assets/img/main/go.png" alt="google" height="33"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="email" id="email" name="email" placeholder="Email" required />
                <input type="password" id="password" name="password" placeholder="Password" required />

                <button type="submit" name="login">Login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Silakan Login Dengan Data Diri Anda</p>
                    <button class="ghost" id="login">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Silakan Daftarkan Data Diri Anda</p>
                    <button class="ghost" id="register">Register</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="assets/js/script.js"></script>

</html>