<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang dikirim dari URL
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
