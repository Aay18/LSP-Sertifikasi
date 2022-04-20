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
            <h1>Data Jadwal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Jadwal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
            {{-- <div class="card-header">
                <h3 class="card-title">Tambah @yield('title')</h3>
            </div> --}}
            <div class="card-body">
                <form action="{{route('jadwal.store')}}" method="POST">
                    {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                      <label for="skema" class="form-label">Skema Kompetensi</label>
                      <input required name="skema" type="text" class="form-control" placeholder="Masukkan Skema Kompetensi">
                    </div>
                    <div class="mb-3">
                      <label for="tanggalAwal" class="form-label">Tanggal Mulai Pelaksanaan</label>
                      <input required name="tanggalAwal" type="text" class="form-control" placeholder="Masukkan Tanggal Akhir Pelaksanaan">
                    </div>
                    <div class="mb-3">
                        <label for="tanggalAkhir" class="form-label">Tanggal Akhir Pelaksanaan</label>
                        <input required name="tanggalAkhir" type="text" class="form-control" placeholder="Masukkan Tanggal Akhir Pelaksanaan">
                      </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                    </div>
                </form>
              </div>
            </div>
        </div>
     </div>
  @include('admin.layout_admin.footer')
@endsection
      