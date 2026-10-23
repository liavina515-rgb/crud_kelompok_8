<?php

namespace Database\Seeders;

use App\Models\MenuKantin;
use Illuminate\Database\Seeder;

class MenuKantinSeeder extends Seeder
{

    public function run(): void
    {
       $menu = [
            [ 'Nasi Goreng', 'Makanan', 15000, 20, 'Tersedia', 'Nasi goreng spesial'],
            [ 'Mie Ayam', 'Makanan', 12000, 15, 'Tersedia', 'Mie ayam dengan kuah kaldu'],
            [ 'Bakso', 'Makanan', 10000, 10, 'Habis', 'Bakso sapi dengan kuah segar'],
            [ 'Soto Ayam', 'Makanan', 13000, 12, 'Tersedia', 'Soto ayam dengan bumbu rempah'],
            [ 'Ayam Geprek', 'Makanan', 18000, 8, 'Tersedia', 'Ayam geprek pedas dengan sambal'],
            [ 'Es Teh', 'Minuman', 5000, 30, 'Tersedia', 'Es teh manis segar'],
            [ 'Es Jeruk', 'Minuman', 7000, 25, 'Tersedia', 'Es jeruk segar dengan perasan jeruk'],
            [ 'Kopi', 'Minuman', 10000, 20, 'Habis', 'Kopi hitam panas atau dingin'],
            [ 'Gorengan', 'Snack', 8000, 40, 'Tersedia', 'Berbagai macam gorengan renyah'],
            [ 'Salad Buah', 'Snack', 12000, 15, 'Tersedia', 'Salad buah segar dengan saus yogurt']
       ];

        foreach ($menu as $item => [$nama, $kategori, $harga, $stok, $status, $keterangan]) {
            MenuKantin::create([
            'kode_menu' => 'menu' . ($item + 1),
            'nama_menu' => $nama,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'status' => $status,
            'keterangan' => $keterangan,
        ]);
        }
    }
}
