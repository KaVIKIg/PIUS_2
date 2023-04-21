<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        
            'name' => $this->faker->unique()->text(10),
            'slug' => $this->faker->unique()->slug(3),
            'description' => $this->faker->text(50),
            'price' => $this->faker->randomFloat(2, 0, 10000),
            'image' => $this->faker->imageUrl(),
            'quantity' => $this->faker->numberBetween(0, 50),
            'category_id' => Category::factory(),
  
        ];
    }
}
