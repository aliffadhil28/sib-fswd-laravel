<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name'=> 'Shoes',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id' => 2,
                'name'=> 'Accessories',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id' => 3,
                'name'=> 'Item',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'id' => 4,
                'name'=> 'Furniture',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
