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
            <h1>Unit Kompetensi</h1>
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
    <div>
        <br>
    </div>
    <div>
        <br>
    </div>
<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <div class="text-center display-4">
                Edit Unit Kompetensi
            </div>
            <form method="POST" action="{{route('unitkompetensi.update', $unitKompetensi->id)}}">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" value="{{$unitKompetensi->id}}">
                  <div class="mb-3">
                    <label for="kodeUnit" class="form-label">Kode Unit Kompetensi</label>
                    <input name="kodeUnit" value="{{$unitKompetensi->kodeUnit}}" type="text" class="form-control" placeholder="Masukkan Kode Unit Kompetensi">
                  </div>
                  <div class="mb-3">
                    <label for="judulUnit" class="form-label">Judul Unit Kompetensi</label>
                    <input name="judulUnit" value="{{$unitKompetensi->judulUnit}}" type="text" class="form-control" placeholder="Masukkan Judul Unit Kompetensi">
                  </div>
                  <div class="mb-3">
                    <label for="jenisStandar" class="form-label">Jenis Standar Unit Kompetensi</label>
                    <input name="jenisStandar" value="{{$unitKompetensi->jenisStandar}}" type="text" class="form-control" placeholder="Masukkan Jenis Standar Unit Kompetensi">
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</div>
@include('admin.layout_admin.footer')

@endsection