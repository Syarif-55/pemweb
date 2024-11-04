<?php

$pemasukan = 50000000;
$hutang_a = 16500000;
$bunga_hutang_a = 5 / 100;
$hutang_b = 9500000;
$bunga_hutang_b = 4.5 / 100;

$total_bunga_hutang_a = $hutang_a * $bunga_hutang_a;
$total_bunga_hutang_b = $hutang_b * $bunga_hutang_b;
$total_bunga_hutang = $total_bunga_hutang_a + $total_bunga_hutang_b;

$total_hutang = $hutang_a + $hutang_b + $total_bunga_hutang;

$sisa_uang = $pemasukan - $total_hutang;

echo "Sisa uang: Rp " . number_format($sisa_uang, 0, ',', '.') . "<br>";
echo "Jumlah total bunga hutang: Rp " . number_format($total_bunga_hutang, 0, ',', '.') . "<br>";
echo "Jumlah total hutang: Rp " . number_format($total_hutang, 0, ',', '.') . "<br>";
?>

