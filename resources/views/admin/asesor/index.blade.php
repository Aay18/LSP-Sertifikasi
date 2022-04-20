@extends('admin.layout_admin.main')

@section('container')
@include('admin.layout_admin.navbar')
@include('admin.layout_admin.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Asesor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Asesor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <a href="asesor/create" class="btn btn-primary mb-3">Tambah Data</a>
    <!-- Main content -->
    <section class="content">
      <table class="table table-striped table-hover" style="vertical-align: middle">
        <tr>
          <th>Id</th>
          <th>Nama Lengkap</th>
          <th>No Registrasi</th>
          <th>Alamat</th>
          <th>No HP</th>
          <th>Email</th>
          <th>Password</th>
          <th>Aksi</th>
        </tr>

        @foreach($asesors as $asesor)
        <tr>
          <td>{{ $asesor->id }}</td>
          <td>{{ $asesor->namaLengkap }}</td>
          <td>{{ $asesor->noRegistrasi }}</td>
          <td>{{ $asesor->alamat }}</td>
          <td>{{ $asesor->noHp }}</td>
          <td>{{ $asesor->email }}</td>
          <td>{{ $asesor->password }}</td>
          <td>
            <a href="{{route('asesor.edit', $asesor->id)}}" class="btn btn-primary fas fa-edit"></a>
            <form action="{{route('asesor.destroy', $asesor->id)}}" method="POST">
              @csrf    
              @method('delete')
              <button class="btn btn-danger fas fa-trash-alt"></button>
          </form>
          </td>
        </tr>
        @endforeach
      </table>
    </section>
    <!-- /.content -->
  </div>
@include('admin.layout_admin.footer')

@endsection