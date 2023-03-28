<?php

//array scalar
$b1 = ['kode'=>'a1', 'buah'=>'Apel','harga'=>25000, 'jml' => 5];
$b2 = ['kode'=>'a2', 'buah'=>'Durian','harga'=>27000, 'jml' => 9];
$b3 = ['kode'=>'a3', 'buah'=>'Kelengkeng','harga'=>30000, 'jml' => 15];
$b4 = ['kode'=>'a4', 'buah'=>'Mangga','harga'=>14000, 'jml' => 8];
$b5 = ['kode'=>'a5', 'buah'=>'Jeruk','harga'=>9000, 'jml' => 12];

//array assosiative
$buah2an=[$b1,$b2,$b3,$b4,$b5];
$ar_judul=['No','Kode','Buah','Harga','Jumlah (Kg)'];

$jumlah_data = count($buah2an);
$jml_kg = array_column($buah2an, 'jml');
$total_kg = array_sum($jml_kg);
$harga_total = array_sum($buah2an);
$max_kg = max($jml_kg);
$min_kg = min($jml_kg);
$keterangan = [
    'Jumlah Data' => $jumlah_data,
    'Total Kg' => $total_kg,
    'Jumlah Tertinggi' => $max_kg,
    'Jumlah Terendah' => $min_kg,
];


?>

<table border="1" cellpadding="10px" width="100%"><thead>
    <tr >
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
    foreach($buah2an as $b){
        $warna = $no % 2 == 1 ? 'blue' : 'yellow';

    ?>
    <tr bgcolor="<?= $warna;?>">
        <td><?= $no ?></td>
        <td><?= $b['kode'] ?></td>
        <td><?= $b['buah'] ?></td>
        <td><?= $b['harga'] ?></td>
        <td><?= $b['jml'] ?></td>
    </tr>
    <?php
    $no++;
    }
    ?>
</tbody>
<tfoot>
    <?php
    foreach($keterangan as $ket => $hasil){
        ?>
        <tr>
            <th colspan="4">
            <?= $ket ?>
            </th>
            <th>
            <?= $hasil ?>
            </th>
        </tr>
    <?php } ?>
</tfoot>
</table>
