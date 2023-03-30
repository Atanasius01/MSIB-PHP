<?php
require 'bank.php';

$n1 = new Bank('0010', 'Siti',5000000);
$n2 = new Bank('0010', 'Atan',10000000);
$n3 = new Bank('0010', 'Rohen',5000000);
$n4 = new Bank('0010', 'Yuda',8000000);
$n5 = new Bank('0010', 'Yuda',8000000);

$n1->ambil(500000);
$n3->setor(350000);

$dataNasabah = array($n1, $n2, $n3, $n4, $n5);

foreach ($dataNasabah as $nasabah) {
      $nasabah->cetak();}


    echo '<br> Jumlah Nasabah '.Bank::$jml.' Orang';
?>