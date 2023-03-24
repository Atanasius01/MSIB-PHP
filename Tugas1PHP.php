<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
</head>
<style>
    body{
        
    }
</style>
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
                <td><input type="number" name="simir" value="0"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Hitung" ></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];
            $simir = $_POST['simir'];

            $luas_jajar_genjang = 0.5*$alas*$tinggi;
            $keliling = 2*($simir+$alas);

            echo '<form>';
            echo '<table>';
            echo '<br><tr><td>Diketahui :</td></tr>';
            echo '<br> <tr><td>Alas </td>' ;
            echo '<td> :' .$alas. 'cm</td></tr>' ;
            echo '<br> <tr><td>Tinggi </td>' ;
            echo '<td> :' .$tinggi. 'cm</td></tr>' ;
            echo '<br> <tr><td>Sisi Miring </td>' ;
            echo '<td> :' .$simir. 'cm</td></tr>' ;
            echo '<br> <tr><td>Luas Jajar Genjang </td>' ;
            echo '<td> :' .$luas_jajar_genjang. 'cm<sup>2</sup></td></tr>' ;
            echo '<br> <tr><td>Keliling Jajar Genjang </td>' ;
            echo '<td> :' .$keliling. 'cm</td></tr>' ;
            echo '</table>';
            echo '</form>';
        }


    ?>

</body>
</html>