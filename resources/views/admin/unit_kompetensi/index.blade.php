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
            <h1>Data Unit Kompetensi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Unit Kompetensi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <button type="button" class="btn btn-success fas fa-plus-square" data-toggle="modal" data-target="#exampleModal">
       Tambah Data
    </button>
    <div>
      <br>
    </div>

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
            {{-- Form tambah unit kompetensi  --}}
           
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-body">
          <table class="table table-striped table-hover" style="vertical-align: middle">
            <tr>
              <th>Id</th>
              <th>Kode Unit Kompetensi</th>
              <th>Judul Unit Kompetensi</th>
              <th>Jenis Standar</th>
              <th>Skema</th>
              <th>Aksi</th>
            </tr>
    
            @foreach($unitKompetensis as $unitKompetensi)
            <tr>
              <td>{{ $unitKompetensi->id }}</td>
              <td>{{ $unitKompetensi->kodeUnit }}</td>
              <td>{{ $unitKompetensi->judulUnit }}</td>
              <td>{{ $unitKompetensi->jenisStandar }}</td>
              <td>{{ $unitKompetensi->skema }}</td>
              <td>
                <a href="{{route('unitkompetensi.edit', $unitKompetensi->id)}}" class="btn btn-primary fas fa-edit"></a>
                <form action="{{route('unitkompetensi.destroy', $unitKompetensi->id)}}" method="POST">
                    @csrf    
                    @method('delete')
                    <button class="btn btn-danger fas fa-trash-alt"></button>
                </form>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <form action="{{route('unitkompetensi.store')}}" method="POST">
            {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
            @method('POST')
            @csrf
            <div class="mb-3">
              <label for="kodeUnit" class="form-label">Kode Unit Kompetensi</label>
              <input required name="kodeUnit" type="text" class="form-control" placeholder="Masukkan Kode Unit Kompetensi">
            </div>
            <div class="mb-3">
              <label for="judulUnit" class="form-label">Judul Unit Kompetensi</label>
              <input required name="judulUnit" type="text" class="form-control" placeholder="Masukkan Judul Unit Kompetensi">
            </div>
            <div class="mb-3">
              <label for="jenisStandar" class="form-label">Jenis Standar Unit Kompetensi</label>
              <input required name="jenisStandar" type="text" class="form-control" placeholder="Masukkan Jenis Standar Unit Kompetensi">
            </div>
            <div class="mb-3">
              <label for="skema" class="form-label">Skema</label>
              <input required name="skema" type="text" class="form-control" placeholder="Masukkan Skema">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
          </form>
        </div>
      </div>
    </section>
    
    <!-- /.content -->
  </div>
@include('admin.layout_admin.footer')

@endsection
