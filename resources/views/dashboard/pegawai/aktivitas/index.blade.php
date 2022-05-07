@extends('templates.master')
@section('content')

                <main id="main" class="main">

                    <!-- Page Heading -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Aktiviitas</li>
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

                        <div class="col-lg-12 mb-4">
                            <div class="card bg-success text-white shadow">
                                <div class="card-body">
                                    <p>
                                        NAMA 
                                    </p>
                                    <p>
                                        NIP
                                    </p>
                                    <p>
                                        JABATAN
                                    </p>
                                </div>
                            </div>
                        </div>


                     <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">AKtivitas Hari ini</h6>
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
                                            <th>Nama Aktivitas</th>
                                            <th>Foto Aktivitas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach ($aktivitas as $item)
                                    <tbody>
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->nama_aktivitas }}</td>
                                            <th>{{ $item->foto }}</th>
                                            <td>
                                                <a href="/log_aktivitas/{{ $item->id_aktivitas }}/edit" class="btn-sm btn-warning "><i class="fas fa-fw fa-edit"></i></a>
                                                <a href="/log_aktivitas/{{ $item->id_aktivitas }}/delete" class="btn-sm btn-danger "><i class="fas fa-fw fa-trash"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                    @endforeach
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
          <h4 class="modal-title" id="myLargeModalLabel">Tambah Daftar Aktivitas Baru</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
  
        <div class="modal-body">
          <form action="/log_aktivitas/create" method="POST">
            @csrf
              <div class="form-group row">
                <label class="col-sm-12 col-md-4 col-form-label">Nama Aktivitas</label>
                <div class="col-sm-12 col-md-12">
                  <input class="form-control" type="text" name="nama_aktivitas" placeholder="Masukkan Deskripsi Aktivitas">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-12 col-md-4 col-form-label">Nama Pegawai</label>
                <div class="col-sm-12 col-md-12">
                  <input class="form-control" type="text" name="no_pegawai" placeholder="Masukkan Nama Pegawai">
                </div>
              </div>

              <div class="form-group">
                <label>Foto aktivitas</label>
                <div class="custom-file">
                    <input type="file" name="foto" class="custom-file-input">
                    <label class="custom-file-label">Pilih</label>
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
