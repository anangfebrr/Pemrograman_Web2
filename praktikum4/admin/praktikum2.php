<?php
require_once 'layouts/header.php';
require_once 'layouts/menu.php';
require_once '../../praktikum2/proses_nilai.php';
?>

<div class="container py-3">
    <h2>Form Input Nilai Mahasiswa</h2>
    <form action="form_hasil.php" method="$_GET" class="py-4">
    <div class="form-group row">
        <label for="name" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
        <input id="name" name="name" placeholder="Masukkan nama anda!" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select" required="required">
            <option value="Pemrograman Web">Pemrograman Web</option>
            <option value="Basis Data">Basis Data</option>
            <option value="UI/UX">UI/UX</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="UTS" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
        <input id="UTS" name="UTS" placeholder="Masukkan nilai anda!" type="text" required="required" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="UAS" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
        <input id="UAS" name="UAS" placeholder="Masukkan nilai anda!" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="TUGAS" class="col-4 col-form-label">Nilai Tugas</label> 
        <div class="col-8">
        <input id="TUGAS" name="TUGAS" placeholder="Masukkan nilai tugas anda!" type="text" class="form-control" required="required">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
</div>

<?php require_once 'layouts/footer.php'; 
?>