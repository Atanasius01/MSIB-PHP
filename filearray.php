<?php
$ar_buah = ['pepaya', 'mangga', 'pisang', 'Jambu'];


foreach($ar_buah as $id => $buah){
    echo '<br> Tampilkan key' .$id;
}

foreach($ar_buah as $buah){
    echo '<br> Tampilkan data ' .$buah;
}
?>