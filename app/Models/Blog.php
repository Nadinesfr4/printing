<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'id'; 
    public $incrementing = true;     
    protected $keyType = 'string'; 
    protected $fillable = ['id, tanggal', 'judul', 'isi', 'penulis', 'gambar'];
    public $timestamps = false;       
}
