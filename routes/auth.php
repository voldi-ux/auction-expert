<?php

use App\Http\Controllers\MainAuthController;
use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group(function () {
    
Route::view("/login", "auth.login")->name("login");
Route::view("/register", "auth.register")->name("register");


Route::post("/login", [MainAuthController::class, "login"]);
Route::post("/register", [MainAuthController::class, "register"]);
});



Route::middleware("auth")->group(function() {
   Route::post("/logout", [MainAuthController::class,"logout"]);
});