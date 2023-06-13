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
        <a href="{{ url('/book/create') }}" class="btn btn-success">+ Tambah Buku</a> 
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
                <a href="{{ url('/book/show', $book->id) }}" class="btn btn-primary btn-sm">View</a> 
                <a href="{{ url('/book/edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a> 
                <form action="{{ url('/book/destroy', $book->id) }}" method="post" class="d-inline"
                    onclick="if(!confirm('Anda Yakin Hapus Data Buku {{ $book->title}}?')) {return false}">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>                
              </td>
            </tr>
            @endforeach            
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection