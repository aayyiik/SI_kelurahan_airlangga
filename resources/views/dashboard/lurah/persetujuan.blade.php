@extends('templates.master')
@section('content')
    
    
<main id="main" class="main">

    <!-- Page Heading -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Daftar kegiatan</li>
    </ol>

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
                            <td>{{ $item->validasi }}</td>
                            <td>
                                <a href="/kota/edit" class="btn btn-warning rounded-pill">
                                    Edit
                                </a>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>                   
                </table>
            </div>
        </div>
    </div> 
</main>

@endsection