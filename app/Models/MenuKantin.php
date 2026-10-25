<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuKantin extends Model
{
   use HasFactory;

   protected $table = 'menus';

   protected $fillable = [
    'kode_menu',
    'nama_menu',
    'kategori',
    'harga',
    'stok',
    'status',
    'keterangan',
   ];
}
