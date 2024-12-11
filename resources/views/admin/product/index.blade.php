@extends('admin.template')
@section('konten')
    <!-- START DATA -->
    <div class="my-3 p-3 rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                    placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='{{ route('product.create') }}' class="btn btn-primary">+ Tambah Product</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif


        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-1">Nama Produk</th>
                    <th class="col-md-1">Deskripsi Produk</th>
                    <th class="col-md-1">Harga Produk</th>
                    <th class="col-md-1">Gambar</th>
                    <th class="col-md-1">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->deskripsi_produk }}</td>
                        <td>{{ $item->harga_produk }}</td>
                        <td>
                            @if ($item->gambar_produk)
                                <img src="{{ asset('storage/' . $item->gambar_produk) }}" alt="Gambar"
                                    style="width: 100px;">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                        <td>
                            <a href="" class="btn btn-info btn-sm">Detail</a>
                            <a href='{{ route('product.edit', $item->id) }}' class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin Akan Menghapus Blog?')" class='d-inline'
                                action="{{ route('product.hapus', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">del</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        {{ $data->links() }}
    </div>
    <!-- AKHIR DATA -->
@endsection
