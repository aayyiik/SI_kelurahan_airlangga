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
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal</th>
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
                            <td>{{ $item->tanggal}}</td>
                            <td>{{ $item->tempat }}</td>
                            <td>{{ $item->kategori->jenis_kategori }}</td>
                            <td>{{ $item->status->nama_status }}</td>
                            <td>{{ $item->gambar }}</td>
                            
                                @if ($item->validasi == 1)
                                <td>
                                <a href="" class="btn-sm btn-warning" data-toggle="modal" data-target="#confirmation-modal" type="button">
							        Validasi
                                </a> 
                                </td>
                            @else
                                <td>
                                    <button type="button" class="btn-sm btn-danger">ditolak</button>
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


@endsection