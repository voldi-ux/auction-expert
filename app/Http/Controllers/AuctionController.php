<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Auction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuctionController
{
    /**
     * Display a listing of the resource.
     */
    public function get_all_running_auctions()
    {
        $auctions = Auction::with(["car", "bids"])->where("status", "active")->paginate(4);
        
        return view("main.runningAuctions", ['live_auctions' => $auctions]);
    }

    // get all the auctions the current user is participating in
    public function auctions_entered()
    {    
        // eager load the auctions and paginate them
        $user = User::with(["auctions"=> function($q) {
             $q->paginate(10); // 10 auction per page
        }])->find(Auth::user()->id);
       
        return view("main.auctionsEntered", ["auctions" => $user->auctions]);
    }
    
    // get all the scheduled auctions for admin to view and ponential manage
    public function get_scheduled_auctions() {
        $auctions = Auction::with(["car"])->where("status", "scheduled")->paginate(4);
        return view("main.scheduled", ['scheduled_auctions' => $auctions]);
    }


    // returns live auctions for all users
    public function home()
    {
        $auctions = Auction::with(["car"])->where("status", "active")->paginate(4);
        $scheduled = Auction::with(["car"])->where("status", "scheduled")->latest()->limit(4)->get();
        return view("home", ['live_auctions' => $auctions, "scheduled" => $scheduled]);
    }


    public function auction_view(Auction $auction, Request $request)
    {
        //should return live auctions that are similar to the current one being viewd
        $similar = Auction::with(["car"])->where("status", "active")->limit(8)->get();

        return view("auctionView", ["auction" => $auction, "similar" => $similar]);
    }


    

    /**
     * create an auction.
     */
    public function store(Car $car, Request $request)
    {
        $validated = $request->validate([
            "bid_increment" => ["required"],
            "start_bid_amount" => ["required"],
            "end_date" => ["required"],
            "start_date" => ["required"],
            "when"        => ["required"]
        ]);

        //to do
        /**
         * Make sure start and end date are not in the past
         * Make sure the end date is ahead of the starting date
         * 
         * if now is set then then the start auction should start immidiately
         */

        $status = $validated["when"] == "now" ? "active" : "scheduled";

        $car->auction()->create(array_merge($validated, ["creator_id" => Auth::user()->id, "status" => $status]));
        $car->status =  $status;
        $car->save();

        return redirect(route("listings"))->with(["message" => "listed successfully"]);
    }


    public function decline(Car $car, Request $request)
    {

        $car->status = "declined";
        $car->save(); // commit the car back to the database
        return redirect(route("listings"))->with(["message" => "declined successfully"]);
    }




    public function enter_attempt(Auction $auction, Request $request) {
    //    to do
    //   check if the user is partaking in this auction and if yes, redirect them to their live auction section
    //otherwise show them a page where they will choose how to make a depositve
    // for now assume they latter


    
    return view("main.paymentType", ["auction_ref" => "CT00000000000000"]);
    }
}
