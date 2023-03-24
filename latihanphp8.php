<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan Pemrosesan Form</title>
</head>
<body>
    <form method="POST">
        <p>Form Input Nilai</p>
    <label>Nama</label>
    <input type="text" name="nama" placeholder="Masukkan Nama"><br> 
    <label for="">Matakuliah</label><br>
    <select name="matkul" id="">
        <option value="">-----Pilih Matakuliah-----</option>
        <option value="html">HTML</option>
        <option value="css">CSS</option>
        <option value="php">PHP</option>
        <option value="js">Javascript</option>
    </select><br>
    <label for="">Nilai</label>
    <input type="text" name="nilai" placeholder="Masukkan nilai">
    <input name="proses" type="submit" value="submit"></input>
    </form>

    <?php
    error_reporting(0); 
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $tombol = $_POST['proses'];

    $ket = ($nilai >= 60)? "lulus" : "gagal";
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

if(isset($tombol)){
?>

    Nama Mahasiswa : <?= $nama ?>
   <br> Mata Kuliah : <?= $matkul ?>
   <br>Nilai : <?= $nilai ?>
   <br>Keterangan : <?= $ket ?>
   <br>Grade : <?= $grade ?>
   <br>Predikat : <?= $predikat ?>

   <?php } ?>
</body>
</html>