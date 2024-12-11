@extends('admin.template')
@section('konten')
    <div class="card mt-2">
        <!-- START FORM -->
        <form action='{{ route('product.store') }}' method='POST' enctype="multipart/form-data">
            @csrf
            <a href='' class="m-3 p-2 btn btn-secondary"> <i class="fe-arrow-left"></i></a>
            <div class="my-3 p-3  rounded shadow-sm">
                <div class="mb-3 row">
                    <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_produk" id="nama_produk" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="deskripsi_produk" class="col-sm-2 col-form-label">Deskripsi Produk</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="deskripsi_produk" id="summernote"></textarea>
                        <div class="col-sm-10">
                            <script>
                                $(document).ready(function() {
                                    $('#summernote').summernote();
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga_produk" class="col-sm-2 col-form-label">Harga Produk</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="harga_produk" id="harga_produk" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="gambar_produk" class="col-sm-2 col-form-label">Gambar Produk</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="gambar_produk" id="gambar_produk">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- AKHIR FORM -->
    </div>
@endsection
