<?php
function salam(){
    echo 'Selamat Pagi';
}
salam();


function sayHello($nama, $umur){
    echo "<br>hello $nama, dan Umur $umur tahun <br>";
}

sayHello("Atanasius", 21);
sayHello("Putra", 1);
sayHello("Bagas", 91);

function tambah ($a, $b){
    $c = $a+$b;
    return $c;
}

$a=5;
$b=7;

echo 'Hasil a+b adalah ' .tambah($a,$b);

echo '<br>Hasil 50 + 30 = ' .tambah(50,30);


//rumus cek bilangan prima

function prima($bilangan){
    $prima = true;
    for($i=2; $i<$bilangan; $i++){
        if($bilangan % $i == 0){
            $prima = false;
            break;
        }
    }
    return $prima;
}

if(prima(7)){
    echo "<br>Bilangan prima";
}else {
    echo "<br>bukan bilangan prima";
}
?>  