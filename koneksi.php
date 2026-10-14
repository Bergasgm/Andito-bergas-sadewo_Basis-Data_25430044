<?php
$host = "localhost";
$user = "root";
$pass = "Bergasgm121";
$db   = "flayora"; // Sesuaikan dengan nama database praktikum Anda

$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi berhasil atau tidak
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>