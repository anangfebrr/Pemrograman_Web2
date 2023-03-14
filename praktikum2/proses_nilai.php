<?php
if (isset ($_POST['submit'])) {
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['UTS'];
    $uas = $_POST['UAS'];
    $tugas = $_POST['TUGAS'];
    $total_nilai = ($uts + $uas + $tugas) / 3;

    if ($total_nilai >= 75) {
        $keterangan = "Lulus";
    } else {
        $keterangan = "Tidak Lulus";
    }
}
