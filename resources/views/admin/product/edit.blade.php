@extends('admin.template')
@section('konten')
    <div class="card mt-2">
        <!-- START FORM -->
        <form action='{{ route('product.update', $data->id) }}' method='POST' enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <a href='{{ route('product.index') }}' class="m-3 p-2 btn btn-secondary"> <i class="fe-arrow-left"></i></a>
            <div class="my-3 p-3  rounded shadow-sm">
                <div class="mb-3 row">
                    <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_produk" id="nama_produk"
                            value="{{ $data->nama_produk }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="deskripsi_produk" class="col-sm-2 col-form-label">Deskripsi Produk</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="deskripsi_produk" id="summernote">{{ $data->deskripsi_produk }}</textarea>
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
                        <input type="number" class="form-control" name="harga_produk" id="harga_produk"
                            value="{{ $data->harga_produk }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="gambar_produk" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="gambar_produk" id="gambar_produk">
                        <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
                        @if ($data->gambar_produk)
                            <p><strong></strong> {{ basename($data->gambar_produk) }}</p>
                        @endif
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Pilih Ya atau Tidak</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="buy" id="pilihan_ya" value="ya"
                                @if (old('buy', $data->buy) === 1) checked @endif>
                            <label class="form-check-label" for="pilihan_ya">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="buy" id="pilihan_tidak" value="tidak"
                                @if (old('buy', $data->buy) === 0) checked @endif>
                            <label class="form-check-label" for="pilihan_tidak">Tidak</label>
                        </div>
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
