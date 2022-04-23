@extends('templates.master')
@section('content')


     <main id="main" class="main">

        <!-- Page Heading -->
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Edit rapat {{ $rapat->nama_rapat }}</li>
          </ol>

              <!-- Alert notifikasi -->
                 
                  <div class="card shadow mb-4">
                      
                      <div class="card-body">
                        <form action="/rapat/{{ $rapat->id_rapat }}/update" method="POST">
                        @csrf
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Nama Admin</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="nik_admin" value="{{ $rapat->nik_admin }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Judul Rapat</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="nama_rapat" value="{{ $rapat->nama_rapat }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Tanggal</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="tanggal" value="{{ $rapat->tanggal }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Tempat</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="tempat" value="{{ $rapat->tempat }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Kategori</label>
                                <div class="col-sm-12 col-md-10">
                                    <select class="custom-select col-12">
                                        <option selected="">Pilih</option>
                                        @foreach ($kategori as $item)
                                        <option value="{{ $item->id_kategori }}">{{ $item->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="id_status" value="{{ $rapat->id_status }}">
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary float-right">Perbarui</button>
                        </form>
                      </div>
                  </div>
</main>


@endsection