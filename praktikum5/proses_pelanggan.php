<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_jk = $_POST['jk'];
   $_tmp_lahir = $_POST['tmp_lahir'];
   $_tgl_lahir = $_POST['tgl_lahir'];
   $_email = $_POST['email'];
   $_kartu_id = $_POST['kartu_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_jk;// 3
   $ar_data[]=$_tmp_lahir; // ? 4
   $ar_data[]=$_tgl_lahir; // ? 5
   $ar_data[]=$_email; // ? 6
   $ar_data[]=$_kartu_id; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pelanggan (kode,nama,jk,tmp_lahir,tgl_lahir,
    email,kartu_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pelanggan SET kode=?,nama=?,harga_beli=?,harga_jual=?,
    stok=?,min_stok=?,jenis_produk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_pelanggan.php');
?>