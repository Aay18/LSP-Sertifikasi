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
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="container">
      <div class="card shadow">
        <div class="card-body">
          <div class="text-center display-4">
            Tambah Data Asesor
          </div>
          <div>
            <br>
          </div>
          {{-- Form tambah asesor  --}}
          <form action="{{route('asesor.store')}}" method="POST">
            {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
            @csrf
            <div class="mb-3">
              <label for="namaLengkap" class="form-label">Nama Lengkap</label>
              <input required name="namaLengkap" type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
            </div>
            <div class="mb-3">
              <label for="noRegistrasi" class="form-label">Nomor Registrasi</label>
              <input required name="noRegistrasi" type="text" class="form-control" placeholder="Masukkan Nomor Registrasi">
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <input required name="alamat" type="text" class="form-control" placeholder="Masukkan Alamat">
            </div>
            <div class="mb-3">
              <label for="noHp" class="form-label">Nomor HP</label>
              <input required name="noHp" type="text" class="form-control" placeholder="Masukkan Nomor HP ">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input required name="email" type="text" class="form-control" placeholder="Masukkan Email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input required name="password" type="text" class="form-control" placeholder="Masukkan Password">
            </div>
            <div class="modal-footer">
              <a href="{{route('asesor.index')}}" class="btn btn-success" data-bs-dismiss="modal">Tutup</a>
              <button type="submit" class="btn btn-primary" data-dismiss="modal">Simpan</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    </section>
    <!-- /.content -->
  </div>
  @include('admin.layout_admin.footer')
  
  @endsection
  