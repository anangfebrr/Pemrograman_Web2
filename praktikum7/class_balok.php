<?php
//buatlah class balok yang memiliki:
//1. property panjang, lebar, tinggi
//2. method __construct, getLuas, getKeliling, getVolume

class balok {
    public $panjang;
    public $lebar;
    public $tinggi;

    public function __construct($p, $l, $t){
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    public function getLuas(){
        return 2 * ($this->panjang*$this->lebar + $this->panjang*$this->tinggi + $this->lebar*$this->tinggi);
    }
    public function getKeliling(){
        return 4 * ($this->panjang  + $this->lebar + $this->tinggi);
    }
    public function getVolume(){
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}

//objek
$balok1 = new balok(5, 10, 15);
echo "Luas balok = " . $balok1->getLuas();
echo "<br>";
echo "keliling balok = " . $balok1->getKeliling();
echo "<br>";
echo "Volume balok = " . $balok1->getVolume();
echo "<hr>";

//objek 2
$balok2 = new balok(15, 15, 20);
echo "Luas balok = " . $balok2->getLuas();
echo "<br>";
echo "keliling balok = " . $balok2->getKeliling();
echo "<br>";
echo "Volume balok = " . $balok2->getVolume();
echo "<hr>";

