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
            'email' => 'john@example.com'
        ]);
    }
}
