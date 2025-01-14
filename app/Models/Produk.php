<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'products';
    protected $fillable = ['nama_produk', 'deskripsi_produk', 'harga_produk', 'gambar_produk', 'buy'];

    public function isBuyable()
    {
        return $this->buy === true;
    }
}
