@extends('templates.master')
@section('content')
    
<main id="main" class="main">

    <!-- Page Heading -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Kategori</li>
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
            <h6 class="m-0 font-weight-bold text-primary">Data Kategori Acara Kelurahan Airlangga</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($kategori as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->jenis_kategori }}</td>
                            <td>
                                <a href="/kategori/{{ $item->id_kategori }}/edit" class="btn-sm btn-warning "><i class="fas fa-fw fa-edit"></i></a>
                                <a href="/kategori/{{ $item->id_kategori }}/delete" class="btn-sm btn-danger "><i class="fas fa-fw fa-trash"></i></a>
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