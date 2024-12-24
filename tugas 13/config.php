<?php
$server="localhost";
$user ="root";
$pass ="";
$database="data";
$conn = mysqli_connect($server,$user ,$pass ,$database );
if (!$conn){
    die("koneksi gagal ke database  :".mysqli_connect_error());
    
}
?>