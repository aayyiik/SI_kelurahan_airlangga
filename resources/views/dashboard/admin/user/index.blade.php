@extends('templates.master')
@section('content')
    
<main id="main" class="main">

    <!-- Page Heading -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">user</li>
      </ol>
     <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data user Acara Kelurahan Airlangga</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Kelurahan</th>
                            <th>Alamat</th>
                            <th>no_telp</th>
                            <th>Email</th>                          
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @php $no = 1; @endphp
                    @foreach ($user as $item)
                    <tbody>
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jabatan->nama_jabatan }}</td>
                            <td>{{ $item->kelurahan->nama_kelurahan}}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->no_telp }}</td>
                            <td>{{ $item->email }}</td>

                            <td>
                                <a href="/kota/edit" class="btn btn-warning rounded-pill">
                                    Edit
                                </a>
                               
                            </td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div> 
</main>
@endsection