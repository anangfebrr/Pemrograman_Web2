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
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> {{ $member->id }}</td>
              <td> {{ $member->name}} </td>
              <td> {{ $member->email}} </td>
              <td> {{ $member->gender}} </td>
              <td> {{ $member->status}} </td>
              <td> {{ $member->address}} </td>
            </tr>       
          </tbody>
        </table>
      </div>
    </div>
  </div>
    
@endsection