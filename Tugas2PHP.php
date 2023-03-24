<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
</head>
<body>
    <form method="POST">
        <h2>INFORMASI GAJI PEGAWAI</h2>
        <table>
            <tr>
                <td><label>Nama :</label></td>
                <td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td><label>Jabatan :</label></td>
                <td><select name="jabatan" id="">
                    <option value="">--Jabatan--</option>
                    <option value="manager">Manager</option>
                    <option value="asisten">Asisten</option>
                    <option value="kabag">Kabag</option>
                    <option value="staff">Staff</option>
                </select>
            </td>
            </tr>
            <tr>
                <td><label>Status :</label></td>
                <td><select name="status" id="">
                    <option value="">Pilih Status</option>
                    <option value="menikah">Menikah</option>
                    <option value="belum">Belum Menikah</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="">Jumlah Anak :</label></td>
                <td><input type="number" name="anak" placeholder="Masukkan Jumlah Anak"></td>
            </tr>
            <tr>
                <td><label>Agama :</label></td>
                <td><select name="agama" id="">
                    <option value="">---Pilih Agama---</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                </select></td>
            </tr>
            <tr>
                <td><input type="submit" name="info" value ="Informasi"></td>
            </tr>
        </table>
    </form>

    <?php
    error_reporting(0);
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $anak = $_POST['anak'];
    $status =$_POST['status'];
    $agama = $_POST['agama'];
    $tombol = $_POST['info'];


  
    switch($jabatan){
        case "manager" : $gapok = 20000000;break;
        case "asisten" : $gapok = 15000000;break;
        case "kabag" : $gapok = 10000000;break;
        case "staff" : $gapok = 4000000;break;
    }


    if($status == "menikah" && $anak == 0) $tunjangan_keluarga=0;
    elseif($status == "menikah" &&$anak>0 && $anak <=2) $tunjangan_keluarga=0.05;
    elseif($status == "menikah" &&$anak>2 && $anak <=5) $tunjangan_keluarga=0.1;
    else $tunjangan_keluarga= 0;

    
    
    if(isset($tombol)){
        $tunjangan_jabatan = $gapok*0.2;
        $tunjaga = $tunjangan_keluarga*$gapok;
        $gaji_kotor = $gapok+$tunjangan_jabatan+$tunjaga;
        $zakat = ($agama == "Islam" && $gaji_kotor >=6000000)? (2.5/100) : 0;
        $zakat_profesi = $zakat*$gaji_kotor;
        $gaji_bersih = $gaji_kotor-$zakat_profesi;
    ?>

<form>
    <table>
   <tr><td>Nama : </td> <td><?= $nama?></td>
   </tr> 
   <tr><td><br> Agama : </td> <td><?= $agama?></td></tr> 
   <tr><td><br> Jumlah Anak : </td> <td><?= $anak?>
   <tr><td><br> Gaji : </td> <td> Rp.<?= $gapok?>
   <tr><td> <br>Tunjangan Jabatan : </td> <td> Rp.<?= $tunjangan_jabatan?></td></tr> 
   <tr><td> <br>Tunjangan Keluarga : </td> <td> Rp. <?= $tunjaga?></td></tr> 
   <tr><td><br>Gaji Kotor : </td> <td> Rp.<?= $gaji_kotor?></td></tr> 
   <tr><td><br>Zakat : </td> <td> Rp.<?= $zakat_profesi?></td></tr> 
   <tr><td> <br>Gaji Bersih : </td> <td> Rp.<?= $gaji_bersih?></td></tr> 
    </table>
</form>
    <?php } ?>

</body>
</html>