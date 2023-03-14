<?php
require_once 'layouts/header.php';
require_once 'layouts/menu.php';
require_once '../../praktikum2/proses_nilai.php';
?>

<?php 
$mhs1 = [
    "id" => 1,
    "nim" => '0110222035',
    "uts" => 90,
    "uas" => 95,
    "tugas" => 90,
];

$mhs2 = [
    "id" => 2,
    "nim" => '0110222036',
    "uts" => 76,
    "uas" => 90,
    "tugas" => 95,
];

$mhs3 = [
    "id" => 3,
    "nim" => '0110222037',
    "uts" => 80,
    "uas" => 85,
    "tugas" => 94,
];


$ar_nilai = [$mhs1, $mhs2, $mhs3];
?>

<div class="container py-4">
    <h2>Data Mahasiswa STT NF</h2>
    <table class="table table-striped text-center">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </tr>

    <?php foreach ($ar_nilai as $nilai) { 
        $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; 
    ?>
        <tr>
            <td><?= $nilai["id"]; ?></td>
            <td><?= $nilai["nim"]; ?></td>
            <td><?= $nilai["uts"]; ?></td>
            <td><?= $nilai["uas"]; ?></td>
            <td><?= $nilai["tugas"]; ?></td>
            <td><?= number_format($nilai_akhir, 1); ?></td>
        </tr>
    <?php } ?>

    </table>
    </div>

<?php require_once 'layouts/footer.php'; 
?>