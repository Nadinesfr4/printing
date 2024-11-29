 @extends('admin.template')
 @section('konten')
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url ('dashboard/create') }}' class="btn btn-primary">+ Tambah Blog</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-2">Tanggal</th>
                            <th class="col-md-2">Post Tittle</th>
                            <th class="col-md-2">Nama Penulis</th>
                            <th class="col-md-2">Cover</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $i }}</td>
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
                                <a href="{{ url('/blog_grid') }}" class="btn btn-info btn-sm">View</a>
                                <a href='{{ url ('dashboard/'.$item->tanggal.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Yakin Akan Menghapus Blog?')"
                                class='d-inline' action="{{ url('dashboard/'. $item->tanggal) }}" 
                                method="post">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">del</button>
                                </form>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach    
                    </tbody>
                </table>  
                {{ $data->links() }}     
          </div>
          <!-- AKHIR DATA -->

          @endsection
