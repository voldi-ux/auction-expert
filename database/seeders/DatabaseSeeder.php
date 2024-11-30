<?php

namespace Database\Seeders;

use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // define the different 
        Role::create(["name"=> "Admin"]);
        Role::create(["name"=> "Guest"]);
        Role::create(["name"=> "User"]);

        // User::factory(10)->create();

         
         //create fake accounts
        for($i = 0; $i < 5; $i++) {
            User::factory()->create([
                'name' =>  fake()->name(),
                'email' =>  fake()->email(),
                "password" => "123456789"
            ]);            
        }


        $users = User::all();
    
        // randomly assign roles
        foreach($users as $user) {
                    $user->roles()->attach(rand(1,3));
        }


        $data = ['name'=> "Admin", "email"=> "admin@expert.co.za", "password" => "123456789"];
        $user =  User::create($data);
        $user->roles()->attach(1);
        $user->roles()->attach(2);
        
        $user = User::create(['name'=> "voldi", "email"=> "voldimuyumba57@gmail.com", "password" => "123456789"]);
        $user->roles()->attach(3);

        $user = User::create(['name'=> "user1", "email"=> "user1@gmail.com", "password" => "123456789"]);
        $user->roles()->attach(3);
        $user = User::create(['name'=> "user2", "email"=> "user2@gmail.com", "password" => "123456789"]);
        $user->roles()->attach(3);
        $user = User::create(['name'=> "user3", "email"=> "user3@gmail.com", "password" => "123456789"]);
        $user->roles()->attach(3);
        $user = User::create(['name'=> "user4", "email"=> "user4@gmail.com", "password" => "123456789"]);
        $user->roles()->attach(3);

        
    }
}
