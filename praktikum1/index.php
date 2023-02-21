<?php 
//ini sebuah komentar

/*
ini sebuah komentar panjang

komentar adalah sejenis anotasi yang biasa digunakan untuk mengklarifikasi. tujuan dan maksud dari sebuah kode program.

*/

echo "hello world <br>";
print_r("Nama saya anang <br>");
var_dump("Kuliah di STT Terpadu nurul fikri <br><br>");

//membuat variabel user
$nama = "Anang Febryan";
$umur = 19;
$berat = 50.1;
$mahasiswa = true;

echo "Nama saya adalah $nama <br>";
echo "Umur saya adalah $umur <br>";
echo "berat saya adalah $berat <br><br>";

//membuat variabel sistem
echo "Dokumen root " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "Nama File " . $_SERVER['PHP_SELF'] . "<br><br>";

//Membuat variabel Konstanta
define("phi", 3.14);
$jari = 8  ;
$Luas = phi * $jari * $jari;
$keliling = 2 * phi * $jari;
    echo "Luas lingkaran dengan jari-jari $jari adalah $Luas <br>";
    echo "Keliling lingkaran dengan jari-jari $jari adalah $keliling <br><br>";

//membuat variabel array
$programs = ["HTML", "CSS", "PHP", "JS", "JQUERY"];
    echo $programs[0] . "<br>";
    echo count($programs) . "<br>";
$programs[] = "JAVA";
    echo $programs[5] . "<br>";
    echo count($programs) . "<br>";

unset($programs[3]);
    echo "<br>" . $programs[4];

    echo "<ol>";
    foreach ($programs as $language) {
        echo "<li>$language</li>";
    }
    echo "</ol>";   

    ?>