@extends('templates.master')
@section('content')


     <main id="main" class="main">

        <!-- Page Heading -->
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Edit kategori {{ $kategori->jenis_kategori }}</li>
          </ol>

              <!-- Alert notifikasi -->
                 
                  <div class="card shadow mb-4">
                      
                      <div class="card-body">
                        <form action="/kategori/{{ $kategori->id_kategori }}/update" method="POST">
                        @csrf
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Jenis Kategori</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="jenis_kategori" value="{{ $kategori->jenis_kategori }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Perbarui</button>
                        </form>
                      </div>
                  </div>
</main>


@endsection