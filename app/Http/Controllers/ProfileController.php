<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateProfileRequest;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController
{
    /**
     * Get a user's profile.
     */
    public function get_profile(Request $request)
    {
        $user = User::with(["profile", "address"])->find(Auth::user()->id);

        return view("main.profile", ["user" => $user]);
    }


    public function create_profile(CreateProfileRequest $request)
    {
        $validated = $request->validated();
        $user = User::find(Auth::user()->id);
        $user->profile()->create($validated);
        $user->address()->create($validated);

        return view("main.profile", ["user" => $user])->with(["message" => "profile created successfully"]);
    }

    public function update_profile(UpdateProfileRequest $request)
    {
        $validated = $request->validated();
        $user = User::find(Auth::user()->id);

        $user->profile->update($validated);
        $user->address->update($validated);

        return
            view("main.profile", ["user" => $user])->with(["message" => "profile updated successfully"]);;
    }
}
