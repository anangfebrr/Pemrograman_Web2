<?php 
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM kartu WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA KARTU ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr><td>Kode</td><td><?=$row['kode']?></td></tr>
        <tr><td>Nama Vendor</td><td><?=$row['nama']?></td></tr>
        <tr><td>Kota</td><td><?=$row['diskon']?></td></tr>
        <tr><td>Kontak</td><td><?=$row['iuran']?></td></tr>
    </tbody>
</table>
