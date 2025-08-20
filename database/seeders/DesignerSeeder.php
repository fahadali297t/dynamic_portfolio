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
            'name' => 'Apexvim',
            'phone_number' => '+923001234567',
            'email' => 'admin@apexvim.com',
        ]);
    }
}
