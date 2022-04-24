@extends('templates.master')
@section('content')
    
<main id="main" class="main">

    <!-- Page Heading -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">user</li>
      </ol>

    <!-- Alert notifikasi -->
      @if ($message = Session::get('sukses'))
      <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
        </div>
      @endif

      @if ($message = Session::get('update'))
      <div class="alert alert-warning" role="alert">
          <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
        </i>
        </div>
      @endif

      @if ($message = Session::get('hapus'))
      <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
        </div>
      @endif

     <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Rapat Acara Kelurahan Airlangga</h6>
            <a href="" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#Medium-modal" type="button">
                Tambah Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Rapat</th>
                            <th>Tanggal</th>
                            <th>Tempat</th>
                            <th>Kategori</th>
                            <th>Status</th>                         
                            <th>Aksi</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($rapat as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama_rapat }}</td>
                            <td>{{ $item->tanggal}}</td>
                            <td>{{ $item->tempat }}</td>
                            <td>{{ $item->kategori->jenis_kategori }}</td>
                            <td>{{ $item->status->nama_status }}</td>
                            <td>
                                <a href="/jadwal_rapat/{{ $item->id_rapat }}/edit" class="btn-sm btn-warning "><i class="fas fa-fw fa-edit"></i></a>
                                <a href="/jadwal_rapat/{{ $item->id_rapat }}/delete" class="btn-sm btn-danger "><i class="fas fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div> 
</main>

<!-- modal -->

<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myLargeModalLabel">Tambah Daftar Rapat Baru</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
  
        <div class="modal-body">
          <form action="/rapat/create" method="POST">
            @csrf
              <div class="form-group row">
                <label class="col-sm-12 col-md-4 col-form-label">Nama Rapat</label>
                <div class="col-sm-12 col-md-12">
                  <input class="form-control" type="text" name="nama_rapat" placeholder="Masukkan Nama Jabatan">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-12 col-md-4 col-form-label">Nama Admin</label>
                <div class="col-sm-12 col-md-12">
                  <input class="form-control" type="text" name="nik_admin" placeholder="Masukkan Nama Jabatan">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-12 col-md-4 col-form-label">Tanggal Mulai</label>
                <div class="col-sm-12 col-md-12">
                  <input class="form-control" type="datetime-local" name="tanggal_mulai" placeholder="Masukkan Nama Jabatan">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-12 col-md-4 col-form-label">Tanggal Selesai</label>
                <div class="col-sm-12 col-md-12">
                  <input class="form-control" type="text" name="tanggal_selesai" placeholder="Masukkan Nama Jabatan">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-12 col-md-4 col-form-label">Kategori</label>
                <div class="col-sm-12 col-md-12">
                  <input class="form-control" type="text" name="id_kategori" placeholder="Masukkan Nama Jabatan">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-12 col-md-4 col-form-label">Tempat</label>
                <div class="col-sm-12 col-md-12">
                  <input class="form-control" type="text" name="nama_jabatan" placeholder="Masukkan Nama Jabatan">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-12 col-md-4 col-form-label">Status</label>
                <div class="col-sm-12 col-md-12">
                  <input class="form-control" type="text" name="id_status" placeholder="Masukkan Nama Jabatan">
                </div>
              </div>

              

              
            </div>
          
  
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
@endsection