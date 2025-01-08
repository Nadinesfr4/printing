@extends('admin.template')
@section('konten')

<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm" >
<!-- FORM PENCARIAN -->
<div class="pb-3">
<form class="d-flex" action="{{ route ('blog.index') }}" method="get">
    <input class="form-control me-1" type="search" name="katakunci" 
    value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
    <button class="btn btn-secondary" type="submit">Cari</button>
</form>
</div>

<!-- TOMBOL TAMBAH DATA -->
<div class="pb-6" style="background-color: white">
<a href='{{ route ('blog.create') }}' class="btn btn-primary">+ Tambah Blog</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-striped" style="background-color: white">
<thead style="background-color: white">
    <tr >
        <th class="col-md-2">No</th>
        <th class="col-md-2">Tanggal</th>
        <th class="col-md-2">Post Tittle</th>
        <th class="col-md-2">Nama Penulis</th>
        <th class="col-md-2">Cover</th>
        <th class="col-md-2">Aksi</th>
    </tr>
</thead>
<tbody>

@foreach ($data as $item)
<tr style="background-color: white">
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
<td style="background-color: white">
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