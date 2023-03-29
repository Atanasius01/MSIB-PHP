<?php
function hitung($a1, $a2, $tombol){
    if($tombol == "+") $hasil = $a1+$a2;
    else if($tombol == "-") $hasil = $a1-$a2;
    else if($tombol == "*") $hasil = $a1*$a2;
    else if($tombol == "/") $hasil = $a1/$a2;
    else $hasil = 0;
    return $hasil;
}


?>

<h1>Kalkulator</h1>
<form method="POST">
    <div>
        <label>
            Angka 1 <input type="text" id="a1" name="a1"><br>
        </label>
        <label for="">
            Angka 2 <input type="text" id="a2" name="a2"><br>
        </label>
        <input type="submit" name="tombol" value="+">
        <input type="submit" name="tombol" value="-">
        <input type="submit" name="tombol" value="*">
        <input type="submit" name="tombol" value="/">
    </div>
    <div class="hasil">
        <?php
        if(isset($_POST['tombol'])){
            $a1 = $_POST['a1'];
            $a2 = $_POST['a2'];
            $tombol = $_POST['tombol'];
            $hasil = hitung($a1, $a2, $tombol);
            echo "Hasilnya adalah $hasil";
        }
        ?>
    </div>
</form>