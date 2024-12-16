<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Auction>
 */
class AuctionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     private $status = ["active", "pending", "scheduled", "done"];
    public function definition(): array
    {
        return [
            "status" => $this->status[array_rand($this->status)],
            "bid_increment" => fake()->numberBetween(1000,10000),
            "start_bid_amount" => fake()->numberBetween(100,10000),
            "creator_id" => fake()->numberBetween(0,100),
            "start_date" => now()->toDateString(),
            "end_date"   => now()->addDays(fake()->numberBetween(1, 30))->toDateString(),
        ];
    }
}
