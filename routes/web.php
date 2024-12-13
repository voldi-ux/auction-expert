<?php

use App\Events\newSellerAdded;
use App\Events\Testsend;
use App\Http\Middleware\HasRole;
use App\Notifications\NewSeller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\AnalyticController;
use App\Models\Auction;
use Illuminate\Support\Facades\Notification;




//geenral
Route::get("/", [AuctionController::class, "home"])->name("home");


Route::get("/auction/{auction}", [AuctionController::class, "auction_view"])->name("auction_view");


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
   Route::get("/listed", [CarController::class, "listed_cars"])->name("listed");
   Route::get("/analytics", [AnalyticController::class, "seller_analytics"])->name("seller_analytics")->middleware( HasRole::class);
   Route::get("/list", [CarController::class, "list"])->name("list_car");

   Route::post("list", [CarController::class, "store"])->name("post_car");
});


//adimn actions
Route::middleware(["auth","hasRole".":Admin"])->prefix("admin")->group(function() {
    Route::get("/sellers", [SellerController::class, "sellers"])->name("all_sellers");
    Route::post("/seller", [SellerController::class, "create"])->name("create_seller");
    Route::patch("/seller/{id}", [SellerController::class, "update"])->name("update_seller");


    //auctions
    Route::post("/create-auction/{car}", [AuctionController::class, "store"])->name("approve_listing");
    Route::post("/decline-auction/{car}", [AuctionController::class, "decline"])->name("decline_listing");
    //cars
    Route::get("/listings", [CarController::class, "index"])->name("listings");

   Route::get("/analytics", [AnalyticController::class, "admin_analytics"])->name("admin_analytics");

   Route::get("/schedule", [AuctionController::class, "scheduled_auctions"])->name("schedules");

Route::get("/live-auctions", [AuctionController::class, "get_all_running_auctions"])->name("running");

    
});








require __DIR__.'/auth.php';
