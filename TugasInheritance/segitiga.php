<?php
require_once 'BangunDatar.php';

class Segitiga extends Bentuk2D{
    public $tinggi;
    public $alas;
    public $sisimiring;
    public $nama;
    public function __construct($nama,$tinggi,$alas,$sisimiring){
        $this->nama=$nama;
        $this->tinggi=$tinggi;
        $this->alas=$alas;
        $this->sisimiring=$sisimiring;
    }

public function namaBidang(){
    $namaBidang = $this->nama;
    return $namaBidang;
}
public function luasBidang(){
    $luas = 0.5*$this->alas*$this->tinggi;
    return $luas;
}

public function kelilingBidang(){
    $keliling = $this->alas+$this->tinggi+$this->sisimiring;;;
    return $keliling;
}

public function cetak(){
    echo '<br><br>';
    echo '<table border="1px" width="100%">';
    echo '<thead bgcolor="#F3DEBA">';
    echo '<tr>';
    echo '<th colspan="2">Bangun 2 Dimensi';
    echo '</th>';
    echo '</tr>';
    echo '<thead>';
    echo '<tbody bgcolor="E4DCCF">';
    echo '<tr>';
    echo '<td width="50%">Jenis';
    echo '</td>';
    echo '<td width="50%">'.$this->namaBidang();
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Tinggi';
    echo '</td>';
    echo '<td >'.$this->tinggi. ' cm';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Alas';
    echo '</td>';
    echo '<td >'.$this->alas. ' cm';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Sisi Miring';
    echo '</td>';
    echo '<td >'.$this->sisimiring. ' cm';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Luas';
    echo '</td>';
    echo '<td >'.$this->luasBidang(). ' cm<sup>2</sup>';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Keliling';
    echo '</td>';
    echo '<td>'.$this->kelilingBidang(). ' cm';
    echo '</td>';
    echo '</tr>';
    echo '<tbody>';
    echo '</table>';
}
}
?>
<style>
    td{
       text-align:center;
    }
</style>