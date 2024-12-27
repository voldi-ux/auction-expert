<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password as Pass;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class MainAuthController
{

   public function login(Request $request)
   {
      $validated = $request->validate(
         [
            "password" => ["required", Pass::default()],
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
         "password" => [Pass::default(), "confirmed"],
         "email" => "email"
      ]);


      $user = User::create($validated);
      //should attach the Buyer's role here

      $user->roles()->attach(3); // assign the client a buyer's role
      Auth::login($user);

      event(new Registered($user));

      return redirect(route("verification.notice"));
   }

   public function verification_notice()
   {
      return view('auth.verify-email');
   }

   public function verify_email(EmailVerificationRequest $request)
   {
      $request->fulfill();

      return redirect('/');
   }

   public function resend_email()
   {
      Auth::user()->sendEmailVerificationNotification();

      return back()->with('message', 'Verification link sent!');
   }

   public function forgot_password_view()
   {
      return view('auth.forgot-password');
   }
   public function reset_password_view(string $token)
   {
      return view('auth.reset-password', ['token' => $token]);
   }

   public function send_reset_link(Request $request)
   {
      $request->validate(['email' => 'required|email']);

      $status = Password::sendResetLink(
         $request->only('email')
      );

      return $status === Password::RESET_LINK_SENT
         ? back()->with(['status' => __($status)])
         : back()->withErrors(['email' => __($status)]);
   }


   public function reset_password(Request $request)
   {
      $request->validate([
         'token' => 'required',
         'email' => 'required|email',
         'password' => 'required|min:8|confirmed',
      ]);

      $status = Password::reset(
         $request->only('email', 'password', 'password_confirmation', 'token'),
         function (User $user, string $password) {
            $user->forceFill([
               'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            //   to do 
            // email the user that their password has been reset
         }
      );

      return $status === Password::PASSWORD_RESET
         ? redirect()->route('login')->with('status', __($status))
         : back()->withErrors(['email' => [__($status)]]);
   }

   public function  logout()
   {
      Auth::logout();
      return redirect()->back();
   }
}
