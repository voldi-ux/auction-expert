<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     private $conditions = ["new", "used", "damaged"];
    private $status = ["active", "pending", "scheduled", "done"];
    public function definition(): array
    {
        return [
            "make" => fake()->firstName(),
            "model" => fake()->firstName(),
            "year" => fake()->year(),
            "condition" => $this->conditions[array_rand($this->conditions)],
            "mileage" => fake()->numberBetween(100,400),
            "body_type" => fake()->name(),
            "colour" => fake()->colorName(),
            "description" => fake()->text(2000),
            "drive" => fake()->name(),
            "code" => fake()->numberBetween(0,5),
            "number_of_seats" => fake()->numberBetween(0,10),
            "number_of_doors" => fake()->numberBetween(0, 10),
            "fuel_type" => fake()->name(),
            "tank_capacity" => fake()->numberBetween(0, 10),
            "engine_capacity" => fake()->numberBetween(0, 10),
            "gears" => fake()->numberBetween(0, 10),
            "cylinder_layout" => fake()->numberBetween(0, 10),
            "reserved_price" => fake()->numberBetween(4000, 50000),
            "transmission" => fake()->name(),
            "fuel_consumption" => fake()->numberBetween(0, 10),
            "status" => $this->status[array_rand($this->status)],
        ];
    }
}
