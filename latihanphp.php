<?php

    echo 'Document PHP saya ada di ' .$_SERVER['DOCUMENT_ROOT'];
    echo '<br> Nama File' .$_SERVER['SCRIPT_FILENAME'];
    echo '<br>';
    echo "Hallo Gaes";

    $namaSiswa = "Atan";
    $umur = 21;
    $berat_badan = 60;
    $pekerjaan = "Mahasiswa";

    echo '<hr>';
    echo ' <br>Nama saya : ' .$namaSiswa;
    echo ' <br>Usia : ' .$umur;
    echo ' <br>Berat Badan : ' .$berat_badan; 
    echo ' <br>Pekerjaan : ' .$pekerjaan;
?>

<hr>

<br>Nama Saya : <?= $namaSiswa ?>
<br>Usia : <?= $umur ?>
<br>Berat Badan : <?= $berat_badan ?>
<br>Pekerjaan : <?= $pekerjaan ?>
