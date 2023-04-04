<?php

class fruit {
    //membuat property
    public $name;
    public $color;
    public $shape;

    //membuat method
    public function getName(){
        return $this->name;
    }
    public function getColor(){
        return $this->color;
    }
    public function getShape(){
        return $this->shape;
    }
    public function getInfo(){
        return  "<hr>Nama buah = " . $this->name . 
                "<br>Warna buah = " . $this->color . 
                "<br>Bentuk buah = " . $this->shape;
    }
}

//instance / membuat objek
$fruit1 = new fruit();
$fruit1->name = "Apel";
$fruit1->color = "Merah";
$fruit1->shape = "Bulat";

echo "nama buah = " . $fruit1->getName();
echo "<br>";
echo "warna buah = " . $fruit1->getColor();
echo $fruit1->getInfo();

//instance / membuat objek 2
$fruit2 = new fruit();
$fruit2->name = "Pisang";
$fruit2->color = "Kuning";
$fruit2->shape = "Lonjong";

echo $fruit2->getInfo();