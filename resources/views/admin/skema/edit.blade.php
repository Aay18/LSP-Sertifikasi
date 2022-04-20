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
    <div>
        <br>
    </div>
  <div class="container">
    <div class="card shadow">
          <div class="card-body">
              <div class="text-center display-4">
                  Edit Data Skema
              </div>
              <form method="POST" action="{{route('skema.update', $skema->id)}}">
                  @method('PUT')
                  @csrf
                  <input type="hidden" name="id" value="{{$skema->id}}">
                    <div class="mb-3">
                      <label for="namaSkema" class="form-label">Nama Skema</label>
                      <input name="namaSkema" value="{{$skema->namaSkema}}" type="text" class="form-control" placeholder="Masukkan Nama Skema">
                    </div>
                    <div class="mb-3">
                      <label for="kodeSkema" class="form-label">Kode Skema</label>
                      <input name="kodeSkema" value="{{$skema->kodeSkema}}" type="text" class="form-control" placeholder="Masukkan kode skema">
                    </div>
                    <div class="mb-3">
                      <label for="status" class="form-label">Status</label>
                      <input name="status" value="{{$skema->status}}" type="text" class="form-control" placeholder="Masukkan status">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
              </form>
          </div>
      </div>
  </div>
</div>

@include('admin.layout_admin.footer')

@endsection