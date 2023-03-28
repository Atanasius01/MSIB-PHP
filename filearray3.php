<?php
$m1 = ['NIM' => '10231231', 'Nama'=>'Atan', 'Nilai'=>90];
$m2 = ['NIM' => '10231232', 'Nama'=>'Alfi', 'Nilai'=>60];
$m3 = ['NIM' => '10231233', 'Nama'=>'Diyah', 'Nilai'=>70];
$m4 = ['NIM' => '10231234', 'Nama'=>'Siti', 'Nilai'=>30];
$m5 = ['NIM' => '10231235', 'Nama'=>'Rohen', 'Nilai'=>76];
$m6 = ['NIM' => '10231236', 'Nama'=>'Mila', 'Nilai'=>88];
$m7 = ['NIM' => '10231237', 'Nama'=>'Kirei', 'Nilai'=>68];
$m8 = ['NIM' => '10231238', 'Nama'=>'Gusi', 'Nilai'=>20];

$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8];
$ar_judul=['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];

$jumlah_mahasiswa = count($mahasiswa);
$jumlah_nilai =$m1['Nilai']+$m2['Nilai']+$m3['Nilai']+$m4['Nilai']+$m5['Nilai']+$m6['Nilai']+$m7['Nilai']+$m8['Nilai'];
$nilai_mhs =array_column($mahasiswa, 'Nilai');
$nilai_max=max($nilai_mhs);
$nilai_min=min($nilai_mhs);
$rata_rata = $jumlah_nilai/$jumlah_mahasiswa;
$keterangan_hasil = [
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Nilai Tertinggi' => $nilai_max,
    'Nilai Terendah' => $nilai_min,
    'Rata-Rata Nilai' => $rata_rata
];

?>

<table border="px" width="100%">
<thead>
    <tr bgcolor="yellow">
        <?php
        foreach($ar_judul as $j){
        ?>
        <th>
            <?= $j ?>
        </th>    
       <?php }
        ?>
    </tr>
</thead>
    <tbody>
        <?php
        $no =1;
        foreach($mahasiswa as $mhs){
            $ket =($mhs['Nilai']>=60) ? 'Lulus' : 'Tidak Lulus';
            $warna = ($mhs['Nilai']>=60) ? 'green': 'red';
            if($mhs['Nilai']>= 90 && $mhs['Nilai']<=100) $grade = 'A';
            else if($mhs['Nilai']>=75 && $mhs['Nilai']<=89) $grade = 'B';
            else if($mhs['Nilai']>=60 && $mhs['Nilai']<=74) $grade = 'C';
            else if($mhs['Nilai']>=30 && $mhs['Nilai']<=59) $grade = 'D';
            else if($mhs['Nilai']>=0 && $mhs['Nilai']<=29) $grade = 'E';

            switch($grade){
                case "A" : $predikat = "Memuaskan"; break;
                case "B" : $predikat = "Baik"; break;
                case "C" : $predikat = "Cukup Baik"; break;
                case "D" : $predikat = "Kurang Baik"; break;
                case "E" : $predikat = "Sangat Kurang"; break;
                default : $predikat = ""; 
            }
            ?>
            <tr bgcolor="<?=$warna?>">
            <td> <?= $no ?>
            </td>
            <td>
                <?= $mhs['NIM'] ?>
            </td>
            <td>
                <?= $mhs['Nama']?>
            </td>
            <td>
                <?= $mhs['Nilai']?>
            </td>
            <td>
                <?= $ket?>
            </td>
            <td>
                <?= $grade?>
            </td>
            <td>
                <?= $predikat?>
            </td>
            </tr>
      <?php  
      $no++;}
        ?>
    </tbody>
    <tfoot>
    <?php
    foreach($keterangan_hasil as $ket => $hasil){
        ?>
        <tr bgcolor="#F3DEBA">
            <th colspan="6">
            <?= $ket ?>
            </th>
            <th>
            <?= $hasil ?>
            </th>
        </tr>
    <?php } ?>
    </tfoot>
</table>
<style>
    td{
       text-align:center;
    }
</style>

<!--Tugas-->
<!--Buatlah Keterangan Jumlah Mahasiswa, Nilai Tertinggi, Nilai Terendah, Rata-rata kedalam Tfoot-->
<!-- Buatlah predikat dari nilai menggunakan switcase -->