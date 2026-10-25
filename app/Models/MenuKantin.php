<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuKantin extends Model
{
   use HasFactory;

   protected $fillable = ['nama_menu', 'harga', 'stok', 'deskripsi'];

   protected $table = [
    'id' => 'integer',
    'kode_menu' => 'string',
   ];
}
