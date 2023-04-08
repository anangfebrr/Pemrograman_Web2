<?php require_once ('class_bmi.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <hr>
        <h2 class="font-weight-bold d-flex justify-content-center">Data Pasien</h2>
    <hr>
<div class="container py-2">
    <form method="POST">
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-address-card"></i>
            </div>
            </div> 
            <input id="nama" name="nama" placeholder="Masukkan nama lengkap anda!" type="text" class="form-control" required="required">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="umur" class="col-4 col-form-label">Umur</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-birthday-cake"></i>
            </div>
            </div> 
            <input id="umur" name="umur" placeholder="Masukkan umur anda!" type="text" class="form-control" required="required"> 
            <div class="input-group-append">
            <div class="input-group-text">Tahun</div>
            </div>
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label> 
        <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
            <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" required="required" class="custom-control-input" value="laki-laki"> 
            <label for="jenis_kelamin_0" class="custom-control-label">Laki - Laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" required="required" class="custom-control-input" value="perempuan"> 
            <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="bb" class="col-4 col-form-label">Berat Badan</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-eye-slash"></i>
            </div>
            </div> 
            <input id="bb" name="bb" placeholder="Masukkan berat badan anda!" type="text" class="form-control" required="required"> 
            <div class="input-group-append">
            <div class="input-group-text">Kg</div>
            </div>
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="tb" class="col-4 col-form-label">Tinggi Badan</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-eye"></i>
            </div>
            </div> 
            <input id="tb" name="tb" placeholder="Masukkan tinggi badan anda!" type="text" class="form-control" required="required"> 
            <div class="input-group-append">
            <div class="input-group-text">M</div>
            </div>
        </div>
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
</div> 

<div class="container">
    <table class="table table-borderless">
        <thead>
            <tr class="table-bordered table-primary">
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Hasil BMI</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if (isset($_POST['submit'])) {
                    $nama = $_POST['nama'];
                    $umur = $_POST['umur'];
                    $jenis_kelamin = $_POST['jenis_kelamin'];
                    $bb = $_POST['bb'];
                    $tb = $_POST['tb'];
                    $bmi = new Bmi($bb, $tb);
                    $hasil = $bmi->getHasil();
                    $keterangan = $bmi->getKeterangan();                                
            ?>
            <tr>
                <td><?= $nama ?></td>
                <td><?= $umur ?></td>
                <td><?= $jenis_kelamin ?></td>
                <td><?= $bb ?></td>
                <td><?= $tb ?></td>
                <td><?= number_format($hasil, 1); ?></td>
                <td><?= $keterangan ?></td>
            </tr>
            <?php  } ?>

                
        </tbody>
    </table>
</div>


</body>
</html>