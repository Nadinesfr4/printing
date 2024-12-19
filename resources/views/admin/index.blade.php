@extends('admin.template')
 @section('konten')
<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">
<!-- FORM PENCARIAN -->
<div class="pb-3">
<form class="d-flex" action="{{ route ('blog.index') }}" method="get">
    <input class="form-control me-1" type="search" name="katakunci" 
    value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
    <button class="btn btn-secondary" type="submit">Cari</button>
</form>
</div>

<!-- TOMBOL TAMBAH DATA -->
<div class="pb-3">
<a href='{{ route ('blog.create') }}' class="btn btn-primary">+ Tambah Blog</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-striped">
<thead>
    <tr>
        <th class="col-md-1">No</th>
        <th class="col-md-1">Tanggal</th>
        <th class="col-md-1">Post Tittle</th>
        <th class="col-md-1">Nama Penulis</th>
        <th class="col-md-1">Cover</th>
        <th class="col-md-1">Aksi</th>
    </tr>
</thead>
<tbody>

@foreach ($data as $item)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $item->tanggal }}</td>
<td>{{ $item->judul }}</td>
<td>{{ $item->penulis }}</td>
<td>
    @if($item->gambar)
        <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar" style="width: 100px;">
    @else
        Tidak ada gambar
    @endif
</td>
<td>
    {{-- <a href="{{ url('blog_grid', $item->id) }}" class="btn btn-info btn-sm">Detail</a> --}}
    {{-- <a href="{{ route('blog_grid', $item->id) }}" class="btn btn-info btn-sm">Detail</a> --}}
    <a href="{{ route('blog.blogGrid'), $item->id }}" class="btn btn-info btn-sm">Detail</a>
    <a href="{{ route('blog.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
    <form onsubmit="return confirm('Yakin Akan Menghapus Blog?')" class="d-inline" action="{{ route('blog.hapus', $item->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
    </form>
</td>
</tr>
@endforeach
{{ $data->links() }}

@endsection