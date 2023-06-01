<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Products::factory()->count(10)->create();
        DB::table('products')->insert([
            [
                'id' =>1,
                'categories_id' => 1,
                'name' => 'Ancient Coin',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate eu scelerisque felis imperdiet. Morbi tristique senectus et netus et malesuada fames ac.',
                'img' => 'default_products.jpg',
                'price' => '2000000',
                'condition_scale' => 75,
                'qty' => 45,
                'year' => '2017',
                'status' => 'waiting',
                'created_by' => 1,
                'verified_by' => 1,
                'verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' =>2,
                'categories_id' => 3,
                'name' => 'Basketball Shoes',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate eu scelerisque felis imperdiet. Morbi tristique senectus et netus et malesuada fames ac.',
                'img' => 'default_products.jpg',
                'price' => '2000000',
                'condition_scale' => 75,
                'qty' => 45,
                'year' => '2002',
                'status' => 'waiting',
                'created_by' => 1,
                'verified_by' => 1,
                'verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' =>3,
                'categories_id' => 1,
                'name' => 'Basketball from 1989',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate eu scelerisque felis imperdiet. Morbi tristique senectus et netus et malesuada fames ac.',
                'img' => 'default_products.jpg',
                'price' => '4010000',
                'condition_scale' => 89,
                'qty' => 1,
                'year' => '1989',
                'status' => 'waiting',
                'created_by' => 1,
                'verified_by' => 1,
                'verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
       ]);
    }
}
