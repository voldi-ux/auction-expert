<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    /**
     * Update the specified resource in storage.
     */
    public function update_profile(Request $request)
    {
        //
    }

}
