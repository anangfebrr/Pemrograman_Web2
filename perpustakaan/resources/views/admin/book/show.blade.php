@extends('admin.layout.index')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        <meta http-equiv="refresh" content="3;url=/book">
        @endif
        <p class="card-description">
        <h4 class="card-title">Daftar Buku Tersedia</h4>
        </p>
        <table  class="table table-hover table-bordered">
          <thead style="background-color:blue; color: white;">
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Jumlah Tersedia</th>
              <th>No ISBN</th>
            </tr>
          </thead>
          <tbody>            
            <tr>
              <td> {{ $book->id }}</td>
              <td> {{ $book->title}} </td>
              <td> {{ $book->stok}} </td>
              <td> {{ $book->isbn}} </td>                            
            </tr>                      
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection