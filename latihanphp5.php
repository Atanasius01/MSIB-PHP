<?php
$nama = "Atan";
$nilai = 90;

if ($nilai >= 85 && $nilai <=100) $grade = "A";
else if ($nilai >= 75 && $nilai <=84) $grade = "B";
else if ($nilai >= 60 && $nilai <=74) $grade = "C";
else if ($nilai >= 30 && $nilai <=59) $grade = "D";
else if ($nilai >= 0 && $nilai <=29) $grade = "E";
else $grade = "";

switch ($grade){
    case "A" : $predikat = "Memuaskan"; break;
    case "B" : $predikat = "Baik"; break;
    case "C" : $predikat = "Cukup Baik"; break;
    case "D" : $predikat = "Kurang Baik"; break;
    case "E" : $predikat = "Sangat Kurang"; break;
    default : $predikat = "";
}

?>

Nama : <?= $nama ?>
<br> Nilai : <?= $nilai ?>
<br> Grade : <?=$grade?>
<br> Predikat : <?= $predikat?>