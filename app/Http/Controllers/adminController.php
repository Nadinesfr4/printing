<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = admin::orderBy('tanggal','desc') -> paginate(3);
        return view('admin.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
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
        'penulis' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048', 
    ]);

    // Upload gambar jika ada
    $gambarPath = null;
    if ($request->hasFile('gambar')) {
        $gambarPath = $request->file('gambar')->store('images', 'public'); 
    }

    // Simpan data ke tabel blog atau admin
    Admin::create([
        'tanggal' => $request->tanggal,
        'judul' => $request->judul,
        'penulis' => $request->penulis,
        'gambar' => $gambarPath,
    ]);

    return redirect('dashboard')->with('success', 'Data berhasil ditambahkan');
}


    
    public function show(string $id)
    {
        return view('client.blog_grid');
    }

    
    public function edit($tanggal)
    {
    $data = Admin::where('tanggal', $tanggal)->first();

    if (!$data) {
        return redirect('dashboard')->with('error', 'Data tidak ditemukan.');
    }

    return view('admin.edit', compact('data'));
    }

    public function update(Request $request, $tanggal)
    {
    $request->validate([
        'tanggal' => 'required|date',
        'judul' => 'required|string|max:255',
        'penulis' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $data = Admin::where('tanggal', $tanggal)->first();

    if (!$data) {
        return redirect('dashboard')->with('error', 'Data tidak ditemukan.');
    }

    // Proses gambar
    $gambarPath = $data->gambar;
    if ($request->hasFile('gambar')) {
        $gambarPath = $request->file('gambar')->store('images', 'public');
        if ($data->gambar && file_exists(storage_path('app/public/' . $data->gambar))) {
            unlink(storage_path('app/public/' . $data->gambar));
        }
    }

    $data->update([
        'tanggal' => $request->tanggal,
        'judul' => $request->judul,
        'penulis' => $request->penulis,
        'gambar' => $gambarPath,
    ]);

    return redirect('dashboard')->with('success', 'Data berhasil diperbarui!');
    }


    public function destroy($tanggal)
{
    $data = Admin::where('tanggal', $tanggal)->first();

    if ($data) {
        if ($data->gambar && file_exists(storage_path('app/public/' . $data->gambar))) {
            unlink(storage_path('app/public/' . $data->gambar));
        }
        $data->delete();
    }

    return redirect('dashboard')->with('success', 'Data berhasil dihapus!');
}
}