<?php 
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT DISTINCT produk.*, pesanan_items.produk_id as is_pesanan_items, pembelian.produk_id as is_pembelian  FROM produk
   LEFT JOIN pesanan_items
   ON produk.id = pesanan_items.produk_id
   LEFT JOIN pembelian
   on produk.id = pembelian.produk_id;";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_produk.php" role="button">Create Produk</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th><th>Kode</th><th>Nama</th>
                    <th>Harga Jual</th><th>Qty</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['kode']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['harga_jual']?></td>
                        <td><?=$row['stok']?></td>
                        <td>
<a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="edit_produk.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_produk.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
>Delete</a>
                    <?php if ($row['is_pembelian'] || $row['is_pesanan_items']) { ?>
                        <a class="btn btn-primary" href="" onclick="alert('Produk memiliki relasi!')">Delete</a>
                    <?php } else { ?>
                        <a class="btn btn-primary" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="return confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')">Delete</a>
                    <?php } ?>

</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
