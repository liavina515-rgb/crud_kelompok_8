<?php

namespace Database\Seeders;

use App\Models\MenuKantin;
use Illuminate\Database\Seeder;

class MenuKantinSeeder extends Seeder
{

    public function run(): void
    {
        MenuKantin::factory()->count(20)->create();
    }
}
