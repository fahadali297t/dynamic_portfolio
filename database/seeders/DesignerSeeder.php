<?php

namespace Database\Seeders;

use App\Models\Designer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Designer::create([
            'name' => 'John Doe',
            'phone_number' => '+92 3001234567',
            'email' => 'john@example.com',
            'primaryImage' => 'assets/imgs/hero/hero-1/man.png',
            'secondaryImage' => 'assets/imgs/testimonials/testimonials-1/man.png',
        ]);
    }
}
