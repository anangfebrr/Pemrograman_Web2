@extends('admin.layout.index')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        <meta http-equiv="refresh" content="3;url=/member">
        @endif
        <a href="{{ url('/member/create') }}" class="btn btn-success">+ Tambah Anggota</a> 
        <p class="card-description">
        <h4 class="card-title">Daftar Anggota</h4>
        </p>
        <table  class="table table-hover table-bordered">
          <thead style="background-color:blue; color: white;">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Gender</th>
              <th>Status</th>
              <th>Address</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($members as $member)
            <tr>
              <td> {{ $loop->iteration }}</td>
              <td> {{ $member->name}} </td>
              <td> {{ $member->email}} </td>
              <td> {{ $member->gender}} </td>
              <td> {{ $member->status}} </td>
              <td> {{ $member->address}} </td>
              <td>
                <a href="{{ url('/member/show', $member->id) }}" class="btn btn-primary btn-sm">View</a> 
                <a href="{{ url('/member/edit', $member->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ url('/member/destroy', $member->id) }}" method="post" class="d-inline"
                    onclick="if(!confirm('Anda Yakin Hapus Data Buku {{ $member->name}}?')) {return false}">
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