<?php 
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pelanggan";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_pelanggan.php" role="button">Create Produk</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th><th>Kode</th><th>Nama</th>
                    <th>Jenis Kelamin</th><th>Kartu</th>
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
                        <td><?=$row['jk']?></td>
                        <td><?=$row['kartu_id']?></td>
                        <td>
<a class="btn btn-primary" href="view_pelanggan.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="edit_pelanggan.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_produk.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
