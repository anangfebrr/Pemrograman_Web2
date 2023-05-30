@extends('admin.layout.index')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <button type="button" class="btn btn-success">+ Tambah Buku</button> 
        <p class="card-description">
        <h4 class="card-title">Daftar Buku Tersedia</h4>
        </p>
        <table  class="table table-hover table-bordered">
          <thead style="background-color:blue; color: white;">
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Jumlah Tersedia</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($books as $book)
            <tr>
              <td> {{ $loop->iteration }}</td>
              <td> {{ $book->title}} </td>
              <td> {{ $book->stok}} </td>
              <td>
                <button type="button" class="btn btn-primary">View</button>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </td>
            </tr>
            @endforeach            
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection