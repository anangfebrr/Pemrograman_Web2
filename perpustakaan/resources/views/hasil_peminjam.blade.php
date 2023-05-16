<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Success Registrasi</title>
</head>
<body>
    <div class="container">
        <h2>Succss Registrasi</h2>
        <table class="table">
            <tr class="table-primary">
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Pinjaman</th>
                <th>Tema Buku</th>
                <th>No ISBN</th>                
            </tr>
            <tr>
                <td>{{$data->nama}}</td>
                <td>{{$data->jenis_kelamin}}</td>
                <td>{{$data->tanggal}}</td>
                <td>{{$data->tema}}</td>
                <td>{{$data->isbn}}</td>                
            </tr>
        </table>
    </div>
</body>
</html>