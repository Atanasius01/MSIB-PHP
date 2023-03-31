<?php

require_once 'lingkaran.php';
require_once 'persegipanjang.php';
require_once 'segitiga.php';

$l = new Lingkaran('Lingkaran',7);
$pp = new Persegi_Panjang('Persegi Panjang',10,7);
$s = new Segitiga('Segitiga',6,8,7);

$ar_data = [$l,$pp,$s];


foreach($ar_data as $d){
    $d->cetak();
}
?>