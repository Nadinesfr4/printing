<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admin';
    protected $fillable = ['tanggal', 'judul', 'penulis', 'gambar'];
    public $incrementing = false; // Tidak menggunakan auto-increment
    public $timestamps = false; // Jika tabel tidak memiliki kolom 'created_at' dan 'updated_at'
    protected $primaryKey = null; // Tidak ada primary key
    protected $keyType = 'string'; // Kolom primary key berbentuk string (opsional jika ada kunci unik)
}
