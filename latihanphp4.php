<?php
$nama = "Atan";
$totalBelanjaan = 300000;
$keterangan = "";

if ($totalBelanjaan > 100000){
    $keterangan = " Selamat $nama anda mendapatkan hadiah";
} else {
    $keterangan = "Terimakasih $nama telah berbelanja";
}
?>

Nama Pelanggan : <?=$nama?>
<br> Total Belanjaan : <?=$totalBelanjaan?>
<br> $keterangan : <?= $keterangan ?>