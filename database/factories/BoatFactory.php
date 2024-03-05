<?php

namespace Database\Factories;

use App\Models\Boat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Boat>
 */
class BoatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'condition' => fake()->numberBetween(1,2),
            'price' => fake()->numberBetween(10000, 500000),
            'image' => fake()->imageUrl(200, 200),
            'user_id' => fake()->numberBetween(1,1)
        ];
    }
}
