@extends('templates.master')
@section('content')
    
<main id="main" class="main">

    <!-- Page Heading -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Daftar kegiatan</li>
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
            <h6 class="m-0 font-weight-bold text-primary">Data kegiatan Acara Kelurahan Airlangga</h6>
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
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Tempat</th>
                            <th>Kategori</th>
                            <th>Status</th>  
                            <th>Gambar Pendukung</th>  
                            <th>Validasi</th>                     
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($kegiatan as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama_kegiatan }}</td>
                            <td>{{ $item->tanggal_mulai}}</td>
                            <td>{{ $item->tanggal_selesai }}</td>
                            <td>{{ $item->tempat }}</td>
                            <td>{{ $item->kategori->jenis_kategori }}</td>
                            <td>{{ $item->status->nama_status }}</td>
                            <td>{{ $item->gambar }}</td>
                            
                                @if ($item->validasi == 1)
                                <td>
                                <a href="" class="btn-sm btn-warning" data-toggle="modal" data-target="#confirmation-modal" type="button">
							        Beri validasi
                                </a> 
                                </td>
                            @else
                                <td>
                                    <span class="badge badge-pill badge-danger" >Ditolak</span>
                                </td>
                            @endif
                                
                            <td>
                                <a href="/edit/{{ $item->id_jabatan }}/edit" class="btn-sm btn-warning "><i class="fas fa-fw fa-edit"></i></a>
                                <a href="/hapus/{{ $item->id_jabatan }}/hapus" class="btn-sm btn-danger "><i class="fas fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div> 
</main>

<div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h4 class="padding-top-30 mb-30 weight-500">Setujui Program Kegiatan ini?</h4>
                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
                    <div class="col-6">
                        <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        Tolak
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-check"></i></button>
                        Setuju
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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