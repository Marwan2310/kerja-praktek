@extends('layout.app')

@section('konten')

    <form method="post" action="/pengajuan" enctype="multipart/form-data">
        @csrf
        <section class="vh-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-10 col-lg-8 col-xl-7"> <!-- Memperlebar kolom -->

                        <div class="card shadow-lg" style="border-radius: 15px; margin: 20px;"> <!-- Menambahkan margin -->
                            <div class="card-body">

                                <h1 class="text-dark mb-4 text-center">Form Pengajuan</h1>

                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-4 col-form-label text-end text-md-start text-dark">Nama</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" id="nama" name="nama" value="{{ Session::get('nama') }}">
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-4 col-form-label text-end text-md-start text-dark">Alamat</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" id="alamat" name="alamat" value="{{ Session::get('alamat') }}">
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="mb-3 row">
                                    <label for="asaluniv" class="col-sm-4 col-form-label text-end text-md-start text-dark">Asal Universitas</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" id="asaluniv" name="asaluniv" value="{{ Session::get('asaluniv') }}">
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="mb-3 row">
                                    <label for="jurusan" class="col-sm-4 col-form-label text-end text-md-start text-dark">Jurusan</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" id="jurusan" name="jurusan" value="{{ Session::get('jurusan') }}">
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="mb-3 row">
                                    <label for="file" class="col-sm-4 col-form-label text-end text-md-start text-dark">File</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="file" id="file" name="file">
                                        <small class="form-text text-muted">Format: PDF, gabungkan file PDF menjadi satu</small>
                                    </div>
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Ajukan</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
