<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require 'fungsi.php';
$id = $_GET["id"];
if (hapus2($id) > 0) {
    header("location: table.php");
}
