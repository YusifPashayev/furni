<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = fake()->unique()->word();
        $slug = Str::slug($title, '-');

        return [
            'name' => $title,
            'slug' => $slug,
            'image_url' => fake()->imageUrl(640, 480, 'product', true),
            'price' => fake()->numberBetween(1, 100),
            'category_id' => fake()->numberBetween(1, 5),
        ];
    }
}
