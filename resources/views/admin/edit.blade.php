@extends('layout.admin')

@section('konten')

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Form Edit Kerja Praktek</h5>
    </div>
    <div class="card-body">

        <form method="post" action="{{ '/admin/'.$data->id }}" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="default input example" name="nama" id="nama" value="{{ $data->nama }}" readonly>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="default input example" name="alamat" id="alamat" value="{{ $data->alamat }}" readonly>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Asal Universitas</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="default input example" name="asaluniv" id="asaluniv" value="{{ $data->asaluniv }}" readonly>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="default input example" name="jurusan" id="jurusan" value="{{ $data->jurusan }}" readonly>
                </div>
            </div>

            @if ($data->status)
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-control" name="status" id="status">
                        <option value="Sedang diproses" {{ $data->status === 'Sedang diproses' ? 'selected' : '' }}>Sedang Proses</option>
                        <option value="Diterima" {{ $data->status === 'Diterima' ? 'selected' : '' }}>Diterima</option>
                        <option value="Tidak diterima" {{ $data->status === 'Tidak diterima' ? 'selected' : '' }}>Tidak Diterima</option>
                    </select>
                </div>
            </div>
            @endif

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Tanggal Awal</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="default input example" name="tglawal" id="tglawal" value="{{ $data->tglawal }}" readonly>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Tanggal Akhir</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="default input example" name="tglakhir" id="tglakhir" value="{{ $data->tglakhir }}" readonly>
                </div>
            </div>

            @if ($data->file)
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Existing PDF</label>
                <div class="col-sm-10">
                    <embed src="{{ url('/pdf_files').'/'.$data->file }}" width="100%" height="600px" />
                </div>
            </div>
        @endif

            <div class="mb-3 row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/pengajuan/show" class="btn btn-secondary">Back</a>
                </div>
            </div>

        </form>

    </div>
</div>

@endsection
