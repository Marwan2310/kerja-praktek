@extends('layout.app')

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <!-- Main Card -->
            <div class="card border-2 rounded-3 shadow">
                <div class="card-body">
                    <!-- Welcome Card with Background Image -->
                    <div class="card border-0 rounded-3 mb-4 text-white" style="background-color: #0d6efd;">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h2 class="card-title">Form Pengajuan Kerja Praktek</h2>
                            </div>
                        </div>
                    </div>

                    <!-- Pengajuan KP Card -->
                    <div class="card bg-light mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Pengajuan KP</h5>
                            <p class="card-text">Klik di bawah untuk mengisi form pengajuan KP</p>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#pengajuanModal">
                                Isi Form
                            </button>

                            <div class="modal fade" id="pengajuanModal" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="pengajuanModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form method="post" action="/pengajuan" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="pengajuanModalLabel">Form Pengajuan</h5>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Your form content goes here -->
                                                <div class="mb-3 row">
                                                    <label for="nama"
                                                        class="col-sm-4 col-form-label text-end text-md-start text-dark">Nama</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="nama"
                                                            name="nama" value="{{ old('nama') }}">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="alamat"
                                                        class="col-sm-4 col-form-label text-end text-md-start text-dark">Alamat</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="alamat"
                                                            name="alamat" value="{{ Session::get('alamat') }}">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="asaluniv"
                                                        class="col-sm-4 col-form-label text-end text-md-start text-dark">Asal
                                                        Universitas / Sekolah</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="asaluniv"
                                                            name="asaluniv" value="{{ Session::get('asaluniv') }}">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="jurusan"
                                                        class="col-sm-4 col-form-label text-end text-md-start text-dark">Jurusan</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="jurusan"
                                                            name="jurusan" value="{{ Session::get('jurusan') }}">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="tglawal"
                                                        class="col-sm-4 col-form-label text-end text-md-start text-dark">Tanggal
                                                        Awal</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control datepicker" type="text"
                                                            id="tglawal" name="tglawal"
                                                            value="{{ Session::get('tglawal') }}">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="tglakhir"
                                                        class="col-sm-4 col-form-label text-end text-md-start text-dark">Tanggal
                                                        Akhir</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control datepicker" type="text"
                                                            id="tglakhir" name="tglakhir"
                                                            value="{{ Session::get('tglakhir') }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="file"
                                                        class="col-sm-4 col-form-label text-end text-md-start text-dark">File</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="file" id="file"
                                                            name="file">
                                                        <small class="form-text text-muted">Format: PDF, gabungkan file
                                                            PDF menjadi satu</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Ajukan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>


                            <!-- User Information Table -->

                            <div class="card border-2 rounded-3 shadow">
                                <div class="card-body">
                                    <h5 class="card-title">Daftar Kerja Praktek</h5>
                                    <br>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Pesan
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><b>Pesan</b></h5>
                                                </div>
                                                <div style="text-align:center;">
                                                    <h6><b> Pengumuman Penerimaan Dokumen </b></h6>
                                                </div>
                                                <div class="modal-body" style="text-align: justify">
                                                    "Kepada seluruh siswa dan mahasiswa yang telah mengisi data dan
                                                    dokumen, mohon untuk memantau website kami selama 2 sampai 4 hari.
                                                    Informasi mengenai status penerimaan akan kami umumkan di website form pengajuan
                                                    kerka praktek. Terima kasih atas perhatiannya."
                                                </div>
                                                <hr>
                                                <div style="text-align:center;">
                                                    <h6><b> Pemberitahuan Kepada Siswa dan Mahasiswa yang Diterima </b></h6>
                                                </div>
                                                <div class="modal-body" style="text-align: justify">
                                                    "Kepada seluruh siswa dan mahasiswa yang telah <b>diterima (Status:
                                                    Diterima)</b> untuk kerja praktek, kami mohon untuk segera
                                                    mendatangi kantor Diskominfo guna pelaksanaan kerja praktek yang
                                                    telah ditetapkan. Terima kasih atas kerjasamanya."
                                                </div>




                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Tanggal Mulai</th>
                                                    <th>Tanggal Berakhir</th>
                                                    <th>Nama</th>
                                                    <th>Asal Universitas / Sekolah</th>
                                                    <th>Jurusan</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                    <tr>
                                                        <td>{{ $item->tglawal }}</td>
                                                        <td>{{ $item->tglakhir }}</td>
                                                        <td>{{ $item->nama }}</td>
                                                        <td>{{ $item->asaluniv }}</td>
                                                        <td>{{ $item->jurusan }}</td>
                                                        <td>{{ $item->status }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <a href="/" class="btn btn-primary float-end">Kembali ke Halaman
                                            Utama</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
