<?php 
require_once 'dbkoneksi.php';
if (isset($_GET["idedit"])) {
  $idedit = $_GET["idedit"];
  $query = "SELECT * FROM pelanggan WHERE id = '$idedit'";
  $sql = $dbh->query($query);
  $row = $sql->fetch();
}
?>
            
<form method="POST" action="proses_pelanggan.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control"
        value="<?php if (isset($_GET["idedit"])) {echo $row["kode"];} ?>">
        <?php if (isset($_GET["idedit"])) {
          echo '<input id="" name="idedit" type="hidden" class="form-control"
          value="'.$_GET["idedit"].'">';
        }
        ?>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" 
        value="<?php if (isset($_GET["idedit"])) {echo $row["nama"];} ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="jk" name="jk" 
        value="L" type="radio" class="form-control" <?php if(isset($_GET["idedit"])) {if($row["jk"] == "L"){echo "checked";}} ?>>Laki - Laki
        <input id="jk" name="jk" 
        value="P" type="radio" class="form-control" <?php if(isset($_GET["idedit"])) {if($row["jk"] == "P"){echo "checked";}} ?>>Perempuan
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="tmp_lahir" name="tmp_lahir" value="<?php if (isset($_GET["idedit"])) {echo $row["tmp_lahir"];} ?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="min_stok" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="tgl_lahir" name="tgl_lahir" 
        value="<?php if (isset($_GET["idedit"])) {echo $row["tgl_lahir"];} ?>"
        type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="min_stok" class="col-4 col-form-label">email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="email" name="email" 
        value="<?php if (isset($_GET["idedit"])) {echo $row["email"];} ?>"
        type="email" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Kartu</label> 
    <div class="col-8">
        <?php 
            $sqljenis = "SELECT * FROM kartu";
            $rsjenis = $dbh->query($sqljenis);
        ?>
      <select id="kartu_id" name="kartu_id" class="custom-select">
          <?php 
            if (isset($_GET["idedit"])) {
              $id_kartu = $row["kartu_id"];
              $query2 = "SELECT * FROM kartu WHERE id = '$id_kartu'";
              $sql2 = $dbh->query($query2);
              $row2 = $sql2->fetch();
              echo '<option value="'.$row2['id'].'">'.$row2['nama'].'</option>';
            }
            foreach($rsjenis as $rowjenis){
         ?>
            <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
         <?php
            }
        ?>
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="<?php if (isset($_GET["idedit"])) {echo "Update";} else{echo "Simpan";} ?>"/>
    </div>
  </div>
</form>
