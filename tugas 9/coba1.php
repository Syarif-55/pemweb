<?php
$umur=20;

if($umur >= 50){
     $hasil="Tua";
} else if ($umur >= 49){
    $hasil ="Paruh baya";    
}
else if ($umur >= 29){
    $hasil ="Dewasa";    
}
else if ($umur >= 19){
    $hasil ="remaja";    
}
echo "Umur Kamu :$umur <br>";
echo "Kategori :$hasil";

?>