<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence,
            'location' => fake()->address,
            'value_min' => fake()->randomElement([30000, 310000, 320000]),
            'value_max' => fake()->randomElement([30000, 310000, 320000]),
            'type' => fake()->randomElement(['Apartment', 'Floor', 'Room']),
            'beds' => fake()->randomNumber(1),
            'bath' => fake()->randomNumber(1),
            'balcony' => fake()->randomNumber(1),
            'decoration' => fake()->randomElement(['Fully Furnished']),
            'carpet_area' => fake()->randomNumber(3),
            'floor' => fake()->randomNumber(3),
            'transaction_type' => fake()->randomElement(['Ready to Move']),
            'lift' => fake()->randomNumber(1),
            'facing' => fake()->randomElement(['South Facing']),
            'additional_rooms' => fake()->randomNumber(1),
            'age_of_construction' => fake()->randomElement(['New']),
        ];
    }
}
