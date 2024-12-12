<?php

use App\Http\Controllers\AnalyticController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\AuctionController;
use App\Http\Middleware\HasRole;

//geenral
Route::get("/", function () {
    return view("home");
})->name("home");


Route::get("/auction/{id}", function() {
      return view("auctionView");
});


//this too should be refactored later on
Route::middleware("auth")->group(function() {
    Route::get("/app/analytic", function() {
    return view("main.analytic");
})->name("analytics");


Route::get("/app/profile", function() {
    return view("main.profile");
})->name("profile");

Route::get("app/notifications", function(){
    return view("main.notifications");
})->name("notifications");


Route::get("/app/settings", function() {
    return view("main.settings");
})->name("settings");

});


// buyer routes
Route::middleware(["auth","hasRole".":Buyer"])->prefix("buyer", function() {
  Route::get("/auctions-entered", [CarController::class, "auctions_entered"])->name("entered");
})->middleware(["auth", "seller"]);


//seller actions
Route::middleware(["auth","hasRole".":Seller"])->prefix("seller")->group(function() {
   Route::get("/listed", [CarController::class, "listedCars"])->name("listed");
   Route::get("/analytics", [AnalyticController::class, "seller_analytics"])->name("seller_analytics")->middleware( HasRole::class);
   Route::get("/list", [CarController::class, "list"])->name("list_car");
   // Route::post("store-car", [CarController::class, "store"]);
});


//adimn actions
Route::middleware(["auth","hasRole".":Admin"])->prefix("admin")->group(function() {
    Route::get("/sellers", [SellerController::class, "sellers"])->name("all_sellers");
    Route::post("/seller", [SellerController::class, "create"])->name("create_seller");
    Route::patch("/seller/{id}", [SellerController::class, "update"])->name("update_seller");


    //auctions
    Route::post("/create-auction/{car}", [AuctionController::class, "store"]);
    Route::post("/decline-auction/{car}", [AuctionController::class, "decline"]);

    //cars
    Route::get("/listings", [CarController::class, "index"])->name("listings");

   Route::get("/analytics", [AnalyticController::class, "admin_analytics"])->name("admin_analytics");

   Route::get("/schedule", [AuctionController::class, "scheduled_auctions"])->name("schedules");

Route::get("/live-auctions", [AuctionController::class, "get_all_running_auctions"])->name("running");

    
});








require __DIR__.'/auth.php';
