<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'category_id' => Category::factory(),
            'short_description' => $this->faker->paragraph(),
            'long_description' => $this->faker->sentence(250),
            'price' => $this->faker->numberBetween(10, 9999),
            'stock' => $this->faker->numberBetween(0, 10),
        ];
    }
}
