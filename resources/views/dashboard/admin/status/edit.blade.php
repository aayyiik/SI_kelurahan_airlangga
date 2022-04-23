@extends('templates.master')
@section('content')


     <main id="main" class="main">

        <!-- Page Heading -->
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Edit Status {{ $status->nama_status }}</li>
          </ol>

              <!-- Alert notifikasi -->
                 
                  <div class="card shadow mb-4">
                      
                      <div class="card-body">
                        <form action="/status/{{ $status->id_status }}/update" method="POST">
                        @csrf
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Nama status</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="nama_status" value="{{ $status->nama_status }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Perbarui</button>
                        </form>
                      </div>
                  </div>
</main>


@endsection