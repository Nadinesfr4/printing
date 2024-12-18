<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::orderBy('id', 'asc')->paginate(5);
        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:225',
            'deskripsi_produk' => 'required|string',
            'harga_produk' => 'required|integer',
            'buy' => 'required|in:ya,tidak',
            'gambar_produk' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $pilihan = $validated['buy'] === 'ya';
        $gambarPath = null;
        if ($request->hasFile('gambar_produk')) {
            $file = $request->file('gambar_produk');

            $fileName = date('Y-m-d_H-i-s') . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

           
            $gambarPath = $file->storeAs('images', $fileName, 'public');
        }

      
        $data = [
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'harga_produk' => $request->harga_produk,
            'buy' => $pilihan,  
            'gambar_produk' => $gambarPath,
        ];

        
        Produk::create($data);

      
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table('products')->where('id', $id)->first();

        return view('admin.product.edit', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:225',
            'deskripsi_produk' => 'required|string',
            'harga_produk' => 'required|integer',
            'buy' => 'required|in:ya,tidak',
            'gambar_produk' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $pilihan = $validated['buy'] === 'ya';

        $data = Produk::where('id', $id)->first();

        if (!$data) {
            return redirect()->route('product.index')->with('error', 'Data tidak ditemukan.');
        }
        $gambarPath = $data->gambar_produk;
        if ($request->hasFile('gambar_produk')) {
            if ($data->gambar_produk && file_exists(storage_path('app/public/' . $data->gambar_produk))) {
                unlink(storage_path('app/public/' . $data->gambar_produk));
            }

            $file = $request->file('gambar_produk');

            $fileName = date('Y-m-d_H-i-s') . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            $gambarPath = $file->storeAs('images', $fileName, 'public');
        }

        $data->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'harga_produk' => $request->harga_produk,
            'buy' => $pilihan,  
            'gambar_produk' => $gambarPath,
        ]);

        return redirect()->route('product.index')->with('success', 'Produk berhasil diperbarui.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table('products')->where('id', $id)->first();

        if (!$data) {
            return redirect()->route('product.index')->with('error', 'Produk tidak ditemukan.');
        }

        if ($data->gambar_produk && file_exists(storage_path('app/public/' . $data->gambar_produk))) {
            unlink(storage_path('app/public/' . $data->gambar_produk));
        }

        DB::table('products')->where('id', $id)->delete();

        return redirect()->route('product.index')->with('success', 'Produk dan gambar berhasil dihapus.');
    }
}
