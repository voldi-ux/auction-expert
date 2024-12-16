<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class MainAuthController
{

   public function login(Request $request)
   {
      $validated = $request->validate(
         [
            "password" => ["required", Password::default()],
            "email"  => "email"
         ]
      );

      //  attempt to log the user in
      if (!Auth::attempt($validated)) {
         return redirect(route("login"))->withErrors(["email" => "incorrect email or password"])->onlyInput("email");
      }

      //login was a success
      $request->session()->regenerate();

      return redirect()->back();
   }

   public function register(Request $request)
   {
      $validated  = $request->validate([
         "name" => ["required"],
         "password" => [Password::default(), "confirmed"],
         "email" => "email"
      ]);


      $user = User::create($validated);
      //should attach the Buyer's role here

      $user->roles()->attach(3); // assign the client a buyer's role
      Auth::login($user);

      return redirect("/");
   }

   public function  logout()
   {
      Auth::logout();
      return redirect()->back();
   }
}
