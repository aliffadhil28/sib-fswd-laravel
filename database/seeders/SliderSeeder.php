<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sliders')->insert([
            [
                'title' => 'Slider 1',
                'url' => 'https://example.com/slider1',
                'text' => 'Welcome to Slider 1',
                'image' => 'slider1.jpg',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Slider 2',
                'url' => 'https://example.com/slider2',
                'text' => 'Welcome to Slider 2',
                'image' => 'slider2.jpg',
                'is_active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Slider 3',
                'url' => 'https://example.com/slider3',
                'text' => 'Welcome to Slider 3',
                'image' => 'slider3.jpg',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Slider 4',
                'url' => 'https://example.com/slider4',
                'text' => 'Welcome to Slider 4',
                'image' => 'slider4.jpg',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Slider 5',
                'url' => 'https://example.com/slider5',
                'text' => 'Welcome to Slider 5',
                'image' => 'slider5.jpg',
                'is_active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
