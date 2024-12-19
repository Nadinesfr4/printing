<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */

//     public function index(Request $request)
// {
//     $katakunci = $request->katakunci;
//     $jumlahbaris = 5;

//     if (strlen($katakunci)) {
//         $data = Blog::where('judul', 'like', "%$katakunci%")
//             ->orWhere('penulis', 'like', "%$katakunci%")
//             ->paginate($jumlahbaris);
//     } else {
//         $data = Blog::orderBy('id', 'desc')->paginate($jumlahbaris);
//     }

//     return view('client.blog_grid', [
//         'tittle' => 'Blog',
//         'page' => 'Blog Grid',
//         'data' => $data
//     ]);
// }

// public function index(Request $request)
// {
//     $katakunci = $request->katakunci;
//     $jumlahbaris = 5;

//     if (strlen($katakunci)) {
//         $data = Blog::where('judul', 'like', "%$katakunci%")
//             ->orWhere('penulis', 'like', "%$katakunci%")
//             ->paginate($jumlahbaris);
//     } else {
//         $data = Blog::orderBy('id', 'desc')->paginate($jumlahbaris);
//     }

//     return view('admin.index', [ // Gunakan view admin untuk dashboard
//         'data' => $data,
//     ]);
// }

public function index(Request $request)
{
    $katakunci = $request->katakunci;
    $jumlahbaris = 5;

    if (strlen($katakunci)) {
        $data = Blog::where('judul', 'like', "%$katakunci%")
            ->orWhere('penulis', 'like', "%$katakunci%")
            ->paginate($jumlahbaris);
    } else {
        $data = Blog::orderBy('id', 'desc')->paginate($jumlahbaris);
    }

    return view('admin.index', [ // Admin dashboard view
        'data' => $data,
    ]);
}

public function blogGrid(Request $request)
{
    $jumlahbaris = 5;
    $data = Blog::orderBy('id', 'desc')->paginate($jumlahbaris);

    return view('client.blog_grid', [ // Client blog grid view
        'tittle' => 'Blog',
        'page' => 'Blog Grid',
        'data' => $data
    ]);
}
    
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'penulis' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Upload gambar jika ada
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('images', 'public');
        }

        // Simpan data ke tabel blog atau admin
        $data = [
            'tanggal' => $request->tanggal,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'penulis' => $request->penulis,
            'gambar' => $gambarPath,
        ];

        Blog::create($data);
        return redirect()->route('blog.index')->with('success', 'Blog baru berhasil ditambahkan');
    }



    public function show(string $id)
    {
        return view('client.blog_grid');
    }


    public function edit($id)
    {
        $data = Blog::where('id', $id)->first();

        if (!$data) {
            return redirect('dashboard')->with('error', 'Data tidak ditemukan.');
        }

        return view('admin.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'penulis' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048', // Validasi gambar
        ]);

        $data = Blog::where('id', $id)->first();

        if (!$data) {
            return redirect()->to('dashboard')->with('error', 'Data tidak ditemukan.');
        }

        // Proses gambar
        $gambarPath = $data->gambar; // Tetap gunakan gambar lama jika tidak ada yang baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($data->gambar && file_exists(storage_path('app/public/' . $data->gambar))) {
                unlink(storage_path('app/public/' . $data->gambar));
            }

            // Upload gambar baru
            $gambarPath = $request->file('gambar')->store('images', 'public');
        }

        // Update data tanpa mengubah primary key 'tanggal'
        $data->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'penulis' => $request->penulis,
            'gambar' => $gambarPath,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('blog.index')->with('success', 'Blog berhasil diperbarui.');
    }



    public function destroy(string $id)
    {
        // Cari data berdasarkan primary key (dalam hal ini 'tanggal')
        $data = Blog::find($id);

        if (!$data) {
            return redirect('dashboard')->with('error', 'Data tidak ditemukan.');
        }

        // Hapus gambar jika ada
        if ($data->gambar && file_exists(storage_path('app/public/' . $data->gambar))) {
            unlink(storage_path('app/public/' . $data->gambar));
        }

        $data->delete();

        return redirect()->route('blog.index')->with('success', 'Blog berhasil dihapus');
    }
}
