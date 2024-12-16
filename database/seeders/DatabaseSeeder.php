<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Image;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\VehicleFile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // define the different roles
        Role::create(["name"=> "Admin"]);
        Role::create(["name"=> "Seller"]);
        Role::create(["name"=> "Buyer"]);

        $sellers = User::factory()->count(10)->hasProfile()->hasAddress()->create();
        $buyers = User::factory()->count(10)->hasProfile()->hasAddress()->create();
        
        foreach($sellers as $seller) {
            $seller->roles()->attach(2); // assign roles of sellers
            //for each seller, create 10 cars with 5 images, vehicle docs and a single auction
            $cars = Car::factory()->count(10)->has(Image::factory()->count(5))->has(VehicleFile::factory()->count(5))->hasAuction()->for($seller)->create();
        };

        foreach($buyers as $buyer) {
            $buyer->roles()->attach(3); // assigne roles of buyer
        };

        
        $admin = User::factory()->hasProfile()->hasAddress()->create(["email" => "admin@auctionexpert.co.za"]);
        $admin->roles()->attach(1);
                
    }
}
