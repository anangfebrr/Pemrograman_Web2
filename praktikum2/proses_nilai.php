<?php
$nama = $_GET['name'];
$matkul = $_GET['matkul'];
$uts = $_GET['UTS'];
$uas = $_GET['UAS'];
$tugas = $_GET['TUGAS'];
$total_nilai = ($uts + $uas + $tugas) / 3;

if ($total_nilai >= 75) {
    $keterangan = "Lulus";
} else {
    $keterangan = "Tidak Lulus";
}


?>