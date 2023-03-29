<?php
$ar_prodi = ["SI" =>"Sistem Informasi", "TI"=>"Teknik Informatika","ILKOM"=>"Ilmu Komputer","TE"=>"Teknik Elektro"];
$ar_skill = ["HTML" =>10, "CSS"=>10, "JS"=>20, "RWD Bootstrap"=>20, "PHP"=>30, "MySQL"=>30, "Laravel"=>40];
$domisili = ["Jakarta", "Bandung", "Bekasi", "Malang", "Surabaya", "Bogor"];

function kategori_nilai($total){
    if($total == 0) $kategori= "Tidak Memadai";
    else if($total >=1 && $total<=40) $kategori = "Kurang";
    else if($total >=41 && $total<=60) $kategori = "Cukup";
    else if($total >=61 && $total<=100) $kategori = "Baik";
    else if($total >=101 && $total<=160) $kategori = "Sangat Baik";
    return $kategori;
}

?>
<fieldset style="background-color:aquamarine;">
    <legend>
    Form Registrasi Kelompok Belajar
    </legend>
    <table>
        <thead>
            <tr>
                <th>Form Registrasi</th>
            </tr>
        </thead>
        <tbody>
            <form method="POST">
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki">Laki-laki
                        <input type="radio" name="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td>
                        <select name="prodi" id="">
                            <?php

                            foreach($ar_prodi as $prodi => $v){
                                ?>
                                <option value="<?= $prodi ?>"><?= $v ?></option>
                          <?php  }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Skill Programming</td>
                    <td>:</td>
                    <td>
                        <?php
                        foreach($ar_skill as $skill => $s){
                            ?>
                        <input type="checkbox" name="skill[]" value="<?= $skill ?>"><?= $skill ?>

                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Domisili</td>
                    <td>:</td>
                    <td>
                        <select name="domisili" id="">
                            <?php

                            foreach($domisili as $d){
                                ?>
                                <option value="<?= $d ?>"><?= $d ?></option>
                          <?php  }
                            ?>
                        </select>
                    </td>
                </tr> 
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                        <input type="email" name="email" >
                    </td>
                </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2">
                    <button name="proses">Submit</button>
                </th>
            </tr>
        </tfoot>
    </form>
    </table>
</fieldset>

<?php
error_reporting(0);
if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];

    foreach($skill as $item){  
          
        if($item == ''){ 
        $skor_nilai=0; 
        }elseif($item =='HTML'){
        $skor_nilaihtml=10;
        }elseif($item =='CSS'){ 
        $skor_nilaicss=10; 
        }elseif($item =='JS'){ 
        $skor_nilaijs=20; 
        }elseif($item =='RWD Bootstrap'){ 
        $skor_nilaiRB=20; 
        }elseif($item =='PHP'){ 
        $skor_nilaiphp=30; 
        }elseif($item =='MySQL'){ 
        $skor_nilaimysql=30; 
        }elseif($item =='Laravel'){ 
        $skor_nilailaravel=40; 
    } 
}
    $total = $skor_nilaihtml+$skor_nilaicss+$skor_nilaijs+$skor_nilaiRB+$skor_nilaiphp+$skor_nilaimysql+$skor_nilailaravel;
    $kategori = kategori_nilai($total);

}
?>

<fieldset style="background-color:aquamarine;">
NIM : <?= $nim ?> <br>
NAMA : <?= $nama ?> <br>
JENIS KELAMIN : <?= $gender ?> <br>
PROGRAM STUDI : <?= $prodi ?> <br>
DOMISILI : <?= $domisili ?> <br>
SKILL :
<?php
foreach($skill as $s ){
    ?>
    <?= $s ?>,
<?php } ?> <br>
SKOR SKILL : <?= $total ?><br>
KATEGORI : <?= $kategori ?><br>
EMAIL : <?= $email ?>
</fieldset>
