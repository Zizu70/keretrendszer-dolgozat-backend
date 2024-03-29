<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sandwich>
 */
class SandwichFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->city(),
            "type" => fake()->randomKey(["normal"=>1, "vegan"=>2, "glutenfree"=>3]),
            "price" => fake()->numberBetween(400, 1000),
            "best_before_date" => fake()->dateTimeBetween('2024-04-01','2024-12-31')->format('Y-m-d'),
        ];
    }
}
