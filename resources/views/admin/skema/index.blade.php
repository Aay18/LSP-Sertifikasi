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
            <h1>Data Skema</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Skema</li>
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
            {{-- Form tambah skema  --}}
            <form action="{{route('skema.store')}}" method="POST">
              {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
              @method('POST')
              @csrf
              <div class="mb-3">
                <label for="namaSkema" class="form-label">Nama Skema</label>
                <input required name="namaSkema" type="text" class="form-control" placeholder="Masukkan Nama Skema">
              </div>
              <div class="mb-3">
                <label for="kodeSkema" class="form-label">Kode Skema</label>
                <input required name="kodeSkema" type="text" class="form-control" placeholder="Masukkan Kode Skema">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>              
            </div>
              {{-- <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input required name="status" type="date" class="form-control" placeholder="Masukkan tanggal pembayaran">
              </div> --}}
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary" >Simpan</button>
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
          <th>Nama Skema</th>
          <th>Kode Skema</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>

        @foreach($skemas as $skema)
        <tr>
          <td>{{ $skema->id }}</td>
          <td>{{ $skema->namaSkema }}</td>
          <td>{{ $skema->kodeSkema }}</td>
          <td>{{ $skema->status }}</td>
          <td>
            <a href="{{route('skema.edit', $skema->id)}}" class="btn btn-primary fas fa-edit"></a>
            <form action="{{route('skema.destroy', $skema->id)}}" method="POST">
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