<?php

namespace App\Http\Controllers;

use App\Events\newSellerAdded;
use App\Models\User;
use App\Http\Requests\SaveSellerRequest;
use App\Notifications\NewSeller;

class SellerController
{

    public function create(SaveSellerRequest $request) {
        // laravel will only store those keys that matches the attributes of the models
        $validated = $request->validated();
        $password = fake()->password();

        $user = User::create(array_merge(["password" => $password], $validated));
        $user->address()->create($validated);
        $user->profile()->create($validated);
        $user->roles()->attach(2);


        $file = $request->file("identity");
        $path = $file->store("identities", "public");
        $user->identity()->create(["path" => $path]);
        
        // dispatch an event
        newSellerAdded::dispatch($user, $password);

  
        return redirect(route("all_sellers"))->with(["message" => $validated['email']." has been added to the system"]);
    }
    //
    public function sellers() {
        $sellers = User::with("profile")->paginate(8);
        return view("main.users", ["sellers" => $sellers]);
    }

}
