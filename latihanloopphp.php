<?php
//Jika tidak menggunakan looping
echo 'Bilangan 1';
echo '<br>Bilangan 2';
echo '<hr>';

//looping increment
for($x=1; $x <=10; $x++){
    echo '<br>Bilangan'.$x;
}

//looping decrement
for($y=10; $y >=1; $y--){
    echo '<br> Angka'.$y;}

//looping menggunakan while
$xz=1;
while($xz <= 5){
    echo '<br> Bilangan'.$xz;
    $xz++;
}

$xy=5;
while($xy >=1){
    echo '<br> Angka' .$xy;
    $xy--;
}

$d=1;
do{
    echo '<br>'.$d;
    $d++;
}while($d<=10);

?>