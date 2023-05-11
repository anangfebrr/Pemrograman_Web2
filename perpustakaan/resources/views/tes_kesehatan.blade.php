<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form tes kesehatan</title>
</head>
<body>

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
<br>
    <label for="tanggal_pemeriksaan">Tanggal Pemeriksaan:</label>
    <input type="date" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan">
<br>
    <label for="usia">Usia:</label>
    <input type="number" id="usia" name="usia">
<br>
    <label>Jenis kelamin:</label>
        <label>
            <input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki
        </label>
        <label>
            <input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan
        </label>
<hr>

<div>
    <table border="1">
        <tr>
            <td>Jenis Tes</td>
            <td>Hasil Pemeriksaan</td>
            <td>Normal</td>
        </tr>

        <tr>
            <td>Tekanan Darah</td>
            <td>110/80</td>
            <td>120/80mmhg</td>
        </tr>

        <tr>
            <td>Asam Urat</td>
            <td>130</td>
            <td>7mg</td>
        </tr>

        <tr>
            <td>Kolestrol Total</td>
            <td>190</td>
            <td>200mg/dl</td>
        </tr>

        <tr>
            <td>Gula Darah</td>
            <td>90</td>
            <td>Puasa: 70-11mg/dl</td>
        </tr>        
</table>
</div>

    </body>
</html>