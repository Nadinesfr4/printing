@extends('admin.template')
@section('konten')

<!-- START FORM -->
       <form action='{{ url('dashboard') }}' method='post' enctype="multipart/form-data">
        @csrf
        <a href='{{ url ('dashboard') }}' class="my-3 p-2 btn btn-secondary">Kembali</a>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="mb-3 row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal" id="tanggal" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Judul Blog</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="judul" id="judul" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penulis" class="col-sm-2 col-form-label">Nama Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="penulis" id="penulis" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="isi" class="col-sm-2 col-form-label">Isi Blog</label>
                    <div class="col-sm-10">
                    <textarea type="text" class="form-control" name="isi" id="summernote"></textarea>
                    <div class="col-sm-10">
                    <script>
                      $(document).ready(function() {
                          $('#summernote').summernote();
                      });
                    </script>
                </div>
                <div class="mb-3 row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="gambar" id="gambar">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                    </div>
                </div>
            </form>
        <!-- AKHIR FORM -->

        @endsection