<?php
require_once 'BangunDatar.php';

class Lingkaran extends Bentuk2D{
    public $jari;
    public $nama;
    public function __construct($nama,$jari){
        $this->nama=$nama;
        $this->jari=$jari;
    }

public function namaBidang(){
    $namaBidang = $this->nama;
    return $namaBidang;
}
public function luasBidang(){
    $luas = 3.14*($this->jari)*($this->jari);
    return $luas;
}

public function kelilingBidang(){
    $keliling = 2*3.14*$this->jari;
    return $keliling;
}

public function cetak(){
    
    echo '<table border="1px" width="100%">';
    echo '<thead bgcolor="#F3DEBA" >';
    echo '<tr>';
    echo '<th colspan="2">Bangun 2 Dimensi';
    echo '</th>';
    echo '</tr>';
    echo '<thead>';
    echo '<tbody bgcolor="E4DCCF">';
    echo '<tr>';
    echo '<td width="50%" >Jenis';
    echo '</td>';
    echo '<td width="50%" >'.$this->namaBidang();
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Luas';
    echo '</td>';
    echo '<td>'.$this->luasBidang(). ' cm<sup>2</sup>';
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