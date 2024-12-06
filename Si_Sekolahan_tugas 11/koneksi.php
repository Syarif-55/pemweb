<?php
$koneksi = mysqli_connect("localhost", "root", "", "nyar");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>