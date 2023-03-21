<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
</head>
<body>
    <h1>Perhitungan Luas dan Keliling Jajar Genjang</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Alas :</td>
                <td><input type="number" name="alas" require></td>
            </tr>
            <tr>
                <td>Tinggi :</td>
                <td><input type="number" name="tinggi" require></td>
            </tr>
            <tr>
                <td>Sisi Miring :</td>
                <td><input type="number" name="simir" require></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];
            $simir = $_POST['simir'];

            $luas_jajar_genjang = 0.5*$alas*$tinggi;
            $keliling = 2*($simir+$alas );

            echo '<br> Diketahui :';
            echo '<br> Alas :' .$alas ;
            echo '<br> Tinggi :' .$tinggi;
            echo '<br> Sisi Miring :' .$simir;
            echo '<hr>';
            echo '<br> Luas Jajar Genjang : ' .$luas_jajar_genjang. ' cm<sup>2</sup>';
            echo '<br> Keliling Jajar Genjang : ' .$keliling. ' cm';
        }


    ?>

</body>
</html>
