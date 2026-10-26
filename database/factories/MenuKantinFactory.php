<?php

namespace Database\Factories;

use App\Models\MenuKantin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MenuKantin>
 */
class MenuKantinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'kode_menu' => $this->faker->unique()->numerify('MENU-###'),
            'nama_menu' => $this->faker->randomElement(['Nasi Goreng', 'Ayam Bakar', 'Es Teh Manis', 'Roti Bakar Cokelat', 'Mie Goreng', 'Jus Jeruk', 'Pisang Goreng', 'Sate Ayam', 'Es Campur', 'Donat', 'Nasi Uduk', 'Teh Tarik', 'Keripik Singkong', 'Ayam Geprek', 'Jus Alpukat', 'Kue Cubit', 'Nasi Padang', 'Es Kelapa Muda', 'Roti Isi Cokelat', 'Soto Ayam', 'Jus Mangga', 'Bakso', 'Seblak', 'Batagor'] ),
            'kategori' => $this->faker->randomElement(['Makanan', 'Minuman','Snack']),
            'harga'    => $this->faker->numberBetween(10, 20) * 1000,
            'stok' => $this->faker->numberBetween(0, 100),
            'status' => $this->faker->randomElement(['Tersedia', 'Habis']),
            'keterangan' => $this->faker->sentence(8),
        ];
    }
}
