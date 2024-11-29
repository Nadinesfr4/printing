@extends('admin.template')
@section('konten')

<!-- START FORM -->
<form action="{{ url('dashboard/update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <a href="{{ url('dashboard') }}" class="my-3 p-2 btn btn-secondary">Kembali</a>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $data->tanggal }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="judul" class="col-sm-2 col-form-label">Post Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="judul" id="judul" value="{{ $data->judul }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="penulis" class="col-sm-2 col-form-label">Nama Penulis</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="penulis" id="penulis" value="{{ $data->penulis }}">
            </div>
        </div>
        <div class="mb-3 row">
                    <label for="isi" class="col-sm-2 col-form-label">Isi Blog</label>
                    @include('admin.isi')
                </div>
        <div class="mb-3 row">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="gambar" id="gambar">
                <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
                @if ($data->gambar)
                    <img src="{{ asset('storage/' . $data->gambar) }}" alt="Gambar" style="width: 100px;">
                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN PERUBAHAN</button>
            </div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->

@endsection
