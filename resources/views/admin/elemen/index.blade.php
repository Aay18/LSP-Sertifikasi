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
            <h1>Data Elemen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Elemen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <button type="button" class="btn btn-primary fas fa-plus-square" data-toggle="modal" data-target="#exampleModal">
      Tambah Data
    </button>
    
    <style type="text/css">
      .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;
      }
    </style>

    <form action="/elemen/cari" method="GET">
      {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
      @csrf  
      <input type="text" name="cari" placeholder="Cari Elemen .." value="{{ old('cari') }}">
      <input type="submit" value="CARI">
    </form>
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
            {{-- Form tambah Elemen  --}}
            <form action="{{route('elemen.store')}}" method="POST">
              {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
              @method('POST')
              @csrf
              <div class="mb-3">
                <label for="namaElemen" class="form-label">Nomor Elemen</label>
                <input required name="namaElemen" type="text" class="form-control" placeholder="Masukkan Nama Elemen">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
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
          <th>Nama Elemen</th>
          <th>Aksi</th>
        </tr>

        @foreach($elemens as $elemen)
        <tr>
          <td>{{ $elemen->id }}</td>
          <td>{{ $elemen->namaElemen }}</td>
          <td>
            <a href="{{route('elemen.edit', $elemen->id)}}" class="btn btn-primary fas fa-edit"></a>
            <form action="{{route('elemen.destroy', $elemen->id)}}" method="POST">
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