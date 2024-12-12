<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\SaveSellerRequest;

class SellerController
{

    public function create(SaveSellerRequest $request) {
        // laravel will only store those keys that matches the attributes of the models
        $validated = $request->validated();
        $user = User::create(array_merge(["password" => "123456789"], $validated));
        $user->address()->create($validated);
        $user->profile()->create($validated);
        $file = $request->file("identity");
        $path = $file->store("identities", "public");
        $user->identity()->create(["path" => $path]);

        return redirect(route("all_sellers"))->with(["message" => $validated['email']." has been added to the system"]);
    }
    //
    public function sellers() {
        return view("main.users");
    }
}
