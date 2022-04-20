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
    <div class="container">
      <div class="card shadow">
        <div class="card-body">
            <div class="text-center display-4">
                Edit Data Jadwal
            </div>
            <div>
              <br>
            </div>
            <form method="POST" action="{{route('asesor.update', $asesor->id)}}">
              @method("PUT")
              @csrf
            <div class="mb-3">
                <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                <input name="namaLengkap" value="{{$asesor->namaLengkap}}" type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
            </div>
            <div class="mb-3">
                <label for="noRegistrasi" class="form-label">Nomor Registrasi</label>
                <input name="noRegistrasi" value="{{$asesor->noRegistrasi}}" type="text" class="form-control" placeholder="Masukkan Nomor Registrasi">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input name="alamat" value="{{$asesor->alamat}}" type="text" class="form-control" placeholder="Masukkan Alamat">
            </div>
            <div class="mb-3">
                <label for="noHp" class="form-label">Nomor HP</label>
                <input name="noHP" value="{{$asesor->noHp}}" type="text" class="form-control" placeholder="Masukkan Nomor HP">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" value="{{$asesor->email}}" type="text" class="form-control" placeholder="Masukkan Email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" value="{{$asesor->password}}" type="text" class="form-control" placeholder="Masukkan Password">
            </div>
            <button type="button" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@include('admin.layout_admin.footer')
@endsection
