<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'product_name' => $this->faker->unique()->sentence(),
            'product_description' => $this->faker->realText($maxNbChars = 250),
            'price' => $this->faker->randomFloat(2),
            'image' => $this->faker->imageUrl(640, 480),
            'is_published' => 1
        ];
    }
}
