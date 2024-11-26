<?php

$nilai = [80, 90, 75, 85, 100];


$totalNilai = 0;

foreach ($nilai as $n) {
    $totalNilai += $n;
}


$rataRata = $totalNilai / count($nilai);

echo "Jumlah total nilai: $totalNilai<br>";
echo "Rata-rata nilai: $rataRata\n";
?>
