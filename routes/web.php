<?php

use Pusher\Pusher;
use App\Events\TestEvent;
use App\Events\NewBidEvent;
use App\Http\Middleware\HasRole;
use Spatie\LaravelPdf\Facades\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnalyticController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


//genral routes
Route::get("/", [AuctionController::class, "home"])->name("home");

Route::get("/auction/{car}", [AuctionController::class, "auction_view"])->name("auction_view");


//this too should be refactored later on
Route::middleware(["auth", "verified"])->group(function () {
    Route::get("/app/analytic", function () {
        return view("main.analytic");
    })->name("analytics");


    Route::get("/app/profile", [ProfileController::class, "get_profile"])->name("profile");
    Route::post("/create-profile", [ProfileController::class, "create_profile"])->name("create_profile");
    Route::patch("/update-profile", [ProfileController::class, "update_profile"])->name("update_profile");

    Route::get("app/notifications", function () {
        return view("main.notifications");
    })->name("notifications");



    Route::get("/app/settings", function () {
        return view("main.settings");
    })->name("settings");
});





// buyer routes
Route::middleware(["auth", "verified", "hasRole" . ":Buyer"])->prefix("buyer")->group(function () {
    //todo
    // replace the car class with the auction class
    Route::get("/auctions-entered", [AuctionController::class, "auctions_entered"])->name("entered_auctions");
    Route::get("/status", [BuyerController::class, "status"])->name("buyer_status");
    Route::get("/documents", [BuyerController::class, "document"])->name("buyer_docs");
    Route::post("/enter-auction/{auction}", [AuctionController::class, "enter_attempt"])->name("enter_auction");
    Route::post("/deposit/{auction}", [BuyerController::class, "pay_deposit"])->name("pay_deposit");

    Route::get("/join-auction/{auction}", [BuyerController::class, "join_auction"])->name("join_auction");
    Route::post("/place-bid/{auction}", [AuctionController::class, "place_bid"])->name("place_bid");
});


//seller actions
Route::middleware(["auth", "verified", "hasRole" . ":Seller"])->prefix("seller")->group(function () {
    Route::get("/listed", [CarController::class, "listed_cars"])->name("listed");
    Route::get("/analytics", [AnalyticController::class, "seller_analytics"])->name("seller_analytics")->middleware(HasRole::class);
    Route::get("/list", [CarController::class, "list"])->name("list_car");
    Route::post("list", [CarController::class, "store"])->name("post_car");
});


//adimn actions
Route::middleware(["auth", "verified", "hasRole" . ":Admin"])->prefix("admin")->group(function () {
    Route::get("/sellers", [SellerController::class, "sellers"])->name("all_sellers");
    Route::post("/seller", [SellerController::class, "create"])->name("create_seller");
    Route::patch("/seller/{id}", [SellerController::class, "update"])->name("update_seller");

    //auctions
    Route::post("/create-auction/{car}", [AuctionController::class, "store"])->name("approve_listing");
    Route::post("/decline-auction/{car}", [AuctionController::class, "decline"])->name("decline_listing");
    //cars
    Route::get("/listings", [CarController::class, "index"])->name("listings");

    Route::get("/analytics", [AnalyticController::class, "admin_analytics"])->name("admin_analytics");

    Route::get("/schedule", [AuctionController::class, "get_scheduled_auctions"])->name("schedules");

    Route::get("/live-auctions", [AuctionController::class, "get_all_running_auctions"])->name("running");
});


require __DIR__ . '/auth.php';
