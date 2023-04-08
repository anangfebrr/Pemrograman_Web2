<?php
class BMI{
    public $berat;
    public $tinggi;
    public $hasil;
    public $keterangan;

    public function __construct($bb, $tb){
        $this->berat = $bb;
        $this->tinggi = $tb;
    }
    public function getHasil(){
        $this->hasil = $this->berat / ($this->tinggi * $this->tinggi);
        return $this->hasil;
    }
    public function getKeterangan(){
        if($this->hasil < 18.5){
            $this->keterangan = "Kekurangan berat badan";
        }elseif($this->hasil >= 18.5 && $this->hasil <= 24.9){
            $this->keterangan = "Normal (ideal)";
        }elseif($this->hasil >= 25 && $this->hasil <= 29.9){
            $this->keterangan = "Kelebihan berat badan";
        }elseif($this->hasil >= 30){
            $this->keterangan = "Kegemukan (Obesitas)";
        }
        return $this->keterangan;
    }
    


}