<?php

require 'Gempa.php';
$g1 = new Gempa('Banten', 0.1);
$g2 = new Gempa('Bogor', 2);
$g3 = new Gempa('Bandung', 7);
$g4 = new Gempa('Aceh', 4);
$g5 = new Gempa('Samarinda', 9);

$dataGempa = [$g1,$g2,$g3,$g4,$g5];

foreach ($dataGempa as $d){
    $d->cetak();
}

?>