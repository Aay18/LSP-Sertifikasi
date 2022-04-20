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
    <div>
        <br>
    </div>
  <div class="container">
    <div class="card shadow">
          <div class="card-body">
              <div class="text-center display-4">
                  Edit Data Elemen
              </div>
              <form method="POST" action="{{route('elemen.update', $elemens->id)}}">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" value="{{$elemens->id}}">
                  <div class="mb-3">
                    <label for="namaElemen" class="form-label">Nama Elemen</label>
                    <input name="namaElemen" value="{{$elemens->namaElemen}}" type="text" class="form-control" placeholder="Masukkan Nama Elemen">
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</div>
@include('admin.layout_admin.footer')

@endsection