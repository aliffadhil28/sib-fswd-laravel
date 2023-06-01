<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->count(10)->create();
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'avatar' => 'admin.jpg',
                'address' => 'Jl. Admin',
                'email' => 'admin@example.com',
                'role' => 'admin',
                'password' => Hash::make('admin123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Pembeli',
                'avatar' => 'pembeli.jpg',
                'address' => 'Jl. Pembeli',
                'email' => 'pembeli@example.com',
                'role' => 'staff',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Penjual',
                'avatar' => 'penjual.jpg',
                'address' => 'Jl. Penjual',
                'email' => 'penjual@example.com',
                'role' => 'user',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
