<?php
// error_reporting(0);
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    public $gajibersih;
    public $gajikotor;
    public $zakat;
    static $jumlah=0;
    const PT = 'DATA GAJI PEGAWAI PT. HTP INDONESIA';

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jumlah++;
    }

    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager' : $gapok = 15000000; break;
            case 'Asisten Manager' : $gapok = 10000000; break;
            case 'Kepala Bagian' : $gapok = 7000000; break;
            case 'Staff' : $gapok = 5000000; break;
            default : $gapok;
        }
        return $gapok;
    }
   
    public function setTunjab($jabatan){
        $this->jabatan = $jabatan;
        $tunjab = $this->setGajiPokok($this->jabatan)*0.2;
        return $tunjab;
    }
    
    public function setTunkel($status){
        $this->status = $status;
        $tunkel = ($status == "Menikah") ? $this->setGajiPokok($this->jabatan)*0.1 :  0;
        return $tunkel;
    }

    public function setGajikotor($gajikotor){
        $this->gajikotor = $gajikotor;
        $gajikotor = $this->setGajiPokok($this->jabatan)+$this->setTunjab($this->jabatan)+$this->setTunkel($this->status);
        return $gajikotor;
    }

    public function setZakatProfesi($zakat){
        $this->zakat = $zakat;
        if(($this->agama) == 'Islam' && ($this->setGajikotor($this->gajikotor)) >= 6000000) $zakat = $this->setGajiPokok($this->jabatan)*(2.5/100);
        else $zakat = 0; 
        return $zakat;
    }

    public function setGajiBersih($gajibersih){
       $this->gajibersih=$gajibersih;
       $gajibersih = $this->setGajikotor($this->gajikotor)-$this->setZakatProfesi($this->zakat);
       return $gajibersih;
    }

    public function cetak(){
        echo '<b><u>'.self::PT.'</u></b>';
        echo '<br>NIP : '.$this->nip;
        echo '<br>Nama : '.$this->nama;
        echo '<br>Jabatan : '.$this->jabatan;
        echo '<br>Agama : '.$this->agama;
        echo '<br>Status : '.$this->status;
        echo '<br>Gaji Pokok : Rp.'.number_format($this->setGajiPokok($this->jabatan),0,',','.');
        echo '<br>Tunjangan Jabatan : Rp.' .number_format($this->setTunjab($this->jabatan),0,',','.');
        echo '<br>Tunjangan Keluarga : Rp.' .number_format($this->setTunkel($this->status),0,',','.');
        echo '<br> Gaji Kotor : Rp. ' .number_format($this->setGajikotor($this->gajikotor),0,',','.');
        echo '<br> Zakat : Rp. ' .number_format($this->setZakatProfesi($this->zakat),0,',','.');
        echo '<br> Gaji Bersih : Rp. ' .number_format($this->setGajiBersih($this->gajibersih),0,',','.');
        echo '<hr>';
    }
}
?>