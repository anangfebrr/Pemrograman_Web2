@extends('admin.layout.index')
@section('table')


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
            <tr>
              <td>1</td>
              <td>1001 Cara Pintar Photoshop Dalam 1 Menit</td>
              <td>69</td>
              <td>
                <button type="button" class="btn btn-primary">View</button>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Cara Berlari Seperti Naruto Saipudin</td>
              <td>1</td>
              <td>
                <button type="button" class="btn btn-primary">View</button>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
                <td>3</td>
                <td><p class="text-danger">10 Dosa Besar Suharto</p></td>
                <td> SOLD OUT</td>
                <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-warning">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
              </tr>
            <tr>
              <td>4</td>
              <td>List Tikus Berdasi Yang Mendiami Kantor DPR</td>
              <td>666</td>
              <td>
                <button type="button" class="btn btn-primary">View</button>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </td>            
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection