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
            'kode_menu' => 'menu' . fake()->unique()->numerify('####'),
            'nama_menu' => fake()->randomElement([
                'Nasi Goreng', 'Mie Ayam', 'Bakso', 'Soto Ayam', 'Ayam Geprek',
                'Es Teh', 'Es Jeruk', 'Kopi', 'Gorengan', 'Salad Buah'
            ]),
            'kategori' => fake()->randomElement(['Makanan', 'Minuman']),
            'harga' => fake()->randomFloat(2, 1000, 100000),
            'stok' => fake()->numberBetween(1, 100),
            'status' => fake()->randomElement(['Tersedia', 'Habis']),
            'keterangan' => fake()->sentence(),
        ];
    }
}
