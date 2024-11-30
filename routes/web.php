<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return redirect(route("home"));
});

Route::get('/home', function () {
    if(Auth::check()) {
        return redirect(route("analytics"));
    } 
    return view('welcome');
})->name("home");


Route::middleware("auth")->group(function() {

    Route::get("/app/analytic", function() {
    return view("main.analytic");
})->name("analytics");

Route::get("/app/listings", [CarController::class, "index"])->name("listings");

Route::get("/app/profile", function() {
    return view("main.profile");
})->name("profile");

Route::get("/app/schedule", function() {
    return view("main.scheduled");
})->name("schedules");

Route::get("/app/running-auctions", [AuctionController::class, "get_all_running_auctions"])->name("running");

Route::get("/app/users", function() {
    return view("main.users");
})->name("users");


Route::get("app/list", function() {
    return view("main.list");
})->name("list");

Route::get("app/listed", function() {
    return view("main.listedAuctions");
})->name("listed");
Route::get("app/auctions-entered", function() {
    return view("main.auctionsEntered");
})->name("entered");


Route::get("app/notifications", function(){
    return view("main.notifications");
})->name("notifications");


Route::get("/app/settings", function() {
    return view("main.settings");
})->name("settings");




//car/s

Route::post("/app/decline-car/{car_id}", [CarController::class, "decline"]);


//auctions
Route::post("/app/create-auction/{car}", [AuctionController::class, "store"]);


});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });





Route::post("store-car", [CarController::class, "store"]);

require __DIR__.'/auth.php';
