<?php
require_once 'Dosen.php';
require_once 'Mahasiswa.php';
require_once 'staf.php';
$d1 = new Dosen ('Budi','L','111','M.Kom');
$d2 = new Dosen ('Rizki','L','112','M.Pd');
$m1 = new Mahasiswa ('Atan', 'L', '6', 'Sistem Informasi');
$m2 = new Mahasiswa ('Lili', 'P', '1', 'Ilkom');
$s1 = new Staff('Dadang', 'L','2910', 'Admin', 3000000);
$s2 = new Staff('lani', 'P','2912', 'Pendidikan', 3500000);

$ar_data = [$d1,$d2, $s1, $s2];
$ar_mahasiswa = [$m1,$m2];

foreach ($ar_data as $ds){
    $ds->cetak();
}
foreach ($ar_mahasiswa as $m){
    $m->cetak();
}

?>