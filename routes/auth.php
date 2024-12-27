<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainAuthController;

Route::middleware("guest")->group(function () {
    
Route::view("/login", "auth.login")->name("login");
Route::view("/register", "auth.register")->name("register");


Route::post("/login", [MainAuthController::class, "login"]);
Route::post("/register", [MainAuthController::class, "register"]);
});

Route::get('/email/verify', [MainAuthController::class, "verification_noticec"])->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', [MainAuthController::class , "verify_email"])->middleware(['auth', 'signed'])->name('verification.verify');



Route::post('/email/verification-notification', [MainAuthController::class, "resend_email"])->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/forgot-password', [MainAuthController::class, "forgot_password_view"])->middleware('guest')->name('password.request');


Route::post('/forgot-password', [MainAuthController::class, "send_reset_link"])->middleware('guest')->name('password.email');


Route::get('/reset-password/{token}',[MainAuthController::class, "reset_password_view"])->middleware('guest')->name('password.reset');


Route::post('/reset-password', [MainAuthController::class, "reset_password"])->middleware('guest')->name('password.update');


Route::middleware("auth")->group(function() {
   Route::post("/logout", [MainAuthController::class,"logout"]);
});