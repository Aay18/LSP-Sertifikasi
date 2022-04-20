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
    <button type="button" class="btn btn-primary fas fa-plus-square" data-toggle="modal" data-target="#exampleModal">
        Tambah Data
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{-- Form tambah Kriteria Unjuk Kerja  --}}
              <form action="{{route('jadwal.store')}}" method="POST">
                {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
                @method('POST')
                @csrf
                <div class="mb-3">
                  <label for="skema" class="form-label">Skema Kompetensi</label>
                  <input required name="skema" type="text" class="form-control" placeholder="Masukkan Skema Kompetensi">
                </div>
                <div class="mb-3">
                  <label for="tanggalMulai" class="form-label">Tanggal Mulai Pelaksanaan</label>
                  <input required name="tanggalMulai" type="text" class="form-control" placeholder="Masukkan Tanggal Akhir Pelaksanaan">
                </div>
                <div class="mb-3">
                  <label for="tanggalAkhir" class="form-label">Tanggal Akhir Pelaksanaan</label>
                  <input required name="tanggalAkhir" type="date" class="form-control" placeholder="Masukkan Tanggal Akhir Pelaksanaan">
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
  
      <!-- Main content -->
      <section class="content">
        <table class="table table-striped table-hover" style="vertical-align: middle">
          <tr>
            <th>Id</th>
            <th>Skema</th>
            <th>Tanggal Mulai Pelaksanaan</th>
            <th>Tanggal Akhir Pelaksanaan</th>
            <th>Aksi</th>
          </tr>
  
          @foreach($jadwals as $jadwal)
          <tr>
            <td>{{ $jadwal->id }}</td>
            <td>{{ $jadwal->skema }}</td>
            <td>{{ $jadwal->tanggalMulai }}</td>
            <td>{{ $jadwal->tanggalAkhir }}</td>
            <td>
              <a href="{{route('jadwal.edit', $jadwal->id)}}" class="btn btn-primary fas fa-edit"></a>
              <form action="{{route('jadwal.destroy', $jadwal->id)}}" method="POST">
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