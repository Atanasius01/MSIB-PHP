<?php
require 'pegawai.php';

$pegawai1 = new pegawai('01001', 'Atanasius', 'Manager', 'Islam', 'Menikah');
$pegawai2 = new pegawai('01002', 'Rohendi', 'Asisten Manager', 'Islam', 'Belum Menikah');
$pegawai3 = new pegawai('01003', 'Yuda', 'Kepala Bagian', 'Islam', 'Menikah');
$pegawai4 = new pegawai('01004', 'Debora', 'Asisten Manager', 'Kristen', 'Belum Menikah');
$pegawai5 = new pegawai('01005', 'Alfi', 'Staff', 'Islam', 'Menikah');
$pegawai6 = new pegawai('01006', 'Karyn', 'Manager', 'Islam', 'Belum Menikah');
$pegawai7 = new pegawai('01007', 'Diyah', 'Kepala Bagian', 'Islam', 'Menikah');

$ar_data= [$pegawai1, $pegawai2, $pegawai3,$pegawai4,$pegawai5, $pegawai6, $pegawai7];

foreach($ar_data as $dp){
    $dp->cetak();
}


?>