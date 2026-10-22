<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuKantin extends Model
{
    protected $fillable = [
        'kode_menu',
        'nama_menu',
        'kategori',
        'harga',
        'stok',
        'status',
        'keterangan'
    ];
}
