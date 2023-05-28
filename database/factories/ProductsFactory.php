<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;
    public function definition(): array
    {
        return [
            'categories_id' => fake()->numberBetween(1,10),
            'name' => fake()->name(),
            'description' => fake()->sentences(),
            'img' => fake()->image(),
            'price' => fake()->numberBetween(10000,1000000),
            'qty' => fake()->numberBetween(1,1000),
            'condition_scale' => fake()->numberBetween(1,100),
            'year' => fake()->year(),
            'status' => fake()->randomElements(['accepted','waiting','rejected']),
            'created_by' => 1,
            'verified_by' => 1,
            'verified_at' => fake()->dateTimeThisYear(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
