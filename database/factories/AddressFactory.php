<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "city" => fake()->city(),
            "province" => fake()->country(),
            "suburb" => fake()->city(),
            "street" => fake()->streetAddress(),
            "postal_code" => fake()->postcode(),
            "unit_no" => fake()->numberBetween(0, 1000)
        ];
    }
}
