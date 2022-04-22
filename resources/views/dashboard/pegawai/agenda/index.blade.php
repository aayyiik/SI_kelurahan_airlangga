@extends('templates.master')
@section('content')

                <main id="main" class="main">

                    <!-- Page Heading -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Agenda</li>
                      </ol>
                     <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Agenda Hari ini</h6>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Deskripsi kegiatan</th>
                                            <th>Bukti Kegiatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach ($agenda as $item)
                                    <tbody>
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->aktivitas }}</td>
                                            <td>{{ $item->gambar }}</td>
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
