<?php

namespace App\Http\Controllers;

use App\Models\Car;
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
        $auctions = Auction::with(["car","bids"])->where("status", "active")->get();
        return view("main.runningAuctions", ['auctions' => $auctions]);
    }

    public function get_user_auctions() {
         $user = Auth::user();
         return view("main.auctionsEntered", ["auctions" => $user->auctions]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * create an auction.
     */
    public function store(Car $car, Request $request)
    {   
        
        //make sure that only admins can create auctions 
        //Should later use policies
        if(!Gate::allows("is-admin")) return abort(403);
       
        $validated = $request->validate([
            "bid_increment" => ["required"],
            "when"        => ["required"]
        ]);
    
        if($validated["when"] != "now") {
          dd("auctions can only start immidiately, for now");
        };
        
      
        //user_id is the id of the person 
        $car->auction()->create(array_merge($validated, ["user_id" => Auth::user()->id,"status" => "active"]));
        $car->status = "active";
        $car->save();

        return redirect(route("listings"));
    }


    public function scheduled_auctions() {
        return view("main.scheduled");
    }
    
}
