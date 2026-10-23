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
            [ 'Salad Buah', 'Snack', 12000, 15, 'Tersedia', 'Salad buah segar dengan saus yogurt'],
            [ 'Roti Bakar', 'Snack', 15000, 10, 'Tersedia', 'Roti bakar dengan berbagai topping'],
            [ 'Pisang Goreng', 'Snack', 8000, 20, 'Habis', 'Pisang goreng renyah dengan gula'],
            [ 'Es Campur', 'Minuman', 12000, 18, 'Tersedia', 'Es campur segar dengan berbagai topping'],
            [ 'Teh Tarik', 'Minuman', 10000, 22, 'Tersedia', 'Teh tarik manis dan creamy'],
            [ 'Nasi Uduk', 'Makanan', 15000, 15, 'Tersedia', 'Nasi uduk dengan lauk pauk lengkap'],
            [ 'Ayam Bakar', 'Makanan', 20000, 10, 'Habis', 'Ayam bakar dengan bumbu khas'],
            [ 'Sate Ayam', 'Makanan', 18000, 12, 'Tersedia', 'Sate ayam dengan bumbu kacang'],
            [ 'Jus Alpukat', 'Minuman', 12000, 20, 'Tersedia', 'Jus alpukat segar dengan susu'],
            [ 'Jus Mangga', 'Minuman', 12000, 18, 'Tersedia', 'Jus mangga segar dan manis'],
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
