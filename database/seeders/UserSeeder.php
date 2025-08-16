<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => '$2y$12$u8rCNPsIImiwvPw/m5.bX.OVeYjfq4I55Ajl40r6yQcLw/Fi9muvW'
        ]);
    }
}
