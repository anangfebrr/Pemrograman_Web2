<?php
class lingkaran {
    //property
    public $jari;
    public const PHI = 3.14;

//     //method tanpa construct
//     public function getLuas($r){
//         $this->jari = $r;
//         return self::PHI * $this->jari * $this->jari;
//         return self::PHI * 2 * $this->jari;
//     }
//     public function getKeliling($r){
//         $this->jari = $r;    
//         return self::PHI * 2 * $this->jari;
//     }
// }

    //method dengan construct
    public function __construct($r){
        $this->jari = $r;
    }
    public function getLuas(){
        return self::PHI * $this->jari * $this->jari;
        return self::PHI * 2 * $this->jari;
    }
    public function getKeliling(){
        return self::PHI * 2 * $this->jari;
    }
}



// //objek tanpa construct
// $lingkaran1 = new lingkaran();
// echo "Luas lingkaran 1 = " . $lingkaran1->getLuas(10);
// echo "<br>";
// echo "Keliling lingkaran 1 = " . $lingkaran1->getKeliling(10);
// echo "<hr>";

//objek dengan construct
$lingkaran2 = new lingkaran(20);
echo "Luas lingkaran 2 = " . $lingkaran2->getLuas();
echo "<br>";
echo "Keliling lingkaran 2 = " . $lingkaran2->getKeliling();
echo "<hr>";