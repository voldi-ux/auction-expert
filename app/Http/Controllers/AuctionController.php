<?php

namespace App\Http\Controllers;

use App\Events\NewBidEvent;
use App\Models\Car;
use App\Models\User;
use App\Models\Auction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;


class AuctionController
{
    /**
     * Display a listing of the resource.
     */
    public function get_all_running_auctions(Request $request)
    {
       $advancedSearch =  $request->query("advanced", false);
       $search =  $request->query("search", false);
       $make = $request->query("make");
       $model = $request->query("model");
       $fuel = $request->query("fuel_type");
       $transmission = $request->query("transmission");
       $drive = $request->query("drive");
       $condition = $request->query("condition");
       $body_type = $request->query("body_type");
       $sort = $request->query("sort");


       $sort_str = $sort == "new" ? "asc" : "desc";

        $auctions  = null;

       if($advancedSearch) {

           $auctions = Car::with("auction")->where(function (Builder $query) use($make, $model,$drive, $body_type, $condition, $transmission) {
            $query->orWhere("make", $make)
           ->orWhere("model", $model)
           ->orWhere("fuel_type", $fuel)
           ->orWhere("drive", $drive)
           ->orWhere("body_type", $body_type);
           } )
           ->where("status", "active")
           ->paginate(8)->withQueryString();
       } else if ($search) {
          $auctions = Car::with("auction")->where(function (Builder $query) use($make, $model, $sort_str, $condition){
            $query->orWhere("make", $make)
           ->orWhere("model", $model)
           ->orWhere("condition", $condition);
           } )
           ->where("status", "active")
          ->orderBy("created_at", $sort_str)
           ->paginate(8)->withQueryString();
       } else {
           $auctions = Car::with(["auction"])->where("status", "active")->paginate(8);
       }
       

        return view("main.runningAuctions", ['live_auctions' => $auctions]);
    }

    // get all the auctions the current user is participating in
    public function auctions_entered()
    {
        // eager load the auctions and paginate them
        $auctions = User::find(Auth::user()->id)->auctions()->where("status", "active")->paginate(5);

        return view("main.auctionsEntered", ["auctions" =>$auctions]);
    }

    // get all the scheduled auctions for admin to view and ponential manage
    public function get_scheduled_auctions(Request $request)
    {   
       $advancedSearch =  $request->query("advanced", false);
       $search =  $request->query("search", false);
       $make = $request->query("make");
       $model = $request->query("model");
       $fuel = $request->query("fuel_type");
       $transmission = $request->query("transmission");
       $drive = $request->query("drive");
       $condition = $request->query("condition");
       $body_type = $request->query("body_type");
       $sort = $request->query("sort");


       $sort_str = $sort == "new" ? "asc" : "desc";

        $auctions  = null;

       if($advancedSearch) {

           $auctions = Car::with("auction")->where(function (Builder $query) use($make, $model,$drive, $body_type, $condition, $transmission, $fuel) {
            $query->orWhere("make", $make)
           ->orWhere("model", $model)
           ->orWhere("fuel_type", $fuel)
           ->orWhere("drive", $drive)
           ->orWhere("body_type", $body_type)
           ->orWhere("transmission", $transmission);
           } )
           ->where("status", "scheduled")
           ->paginate(8)->withQueryString();
       } else if ($search) {
          $auctions = Car::with("auction")->where(function (Builder $query) use($make, $model, $sort_str, $condition){
            $query->orWhere("make", $make)
           ->orWhere("model", $model)
           ->orWhere("condition", $condition);
           } )
           ->where("status", "scheduled")
          ->orderBy("created_at", $sort_str)
           ->paginate(8)->withQueryString();
       } else {
           $auctions = Car::with(["auction"])->where("status", "scheduled")->paginate(8);
       }

        return view("main.scheduled", ['scheduled_auctions' => $auctions]);
    }


    // returns live auctions for all users
    public function home(Request $request)
    {
       $advancedSearch =  $request->query("advanced", false);
       $search =  $request->query("search", false);
       $make = $request->query("make");
       $model = $request->query("model");
       $fuel = $request->query("fuel_type");
       $transmission = $request->query("transmission");
       $drive = $request->query("drive");
       $condition = $request->query("condition");
       $body_type = $request->query("body_type");
       $sort = $request->query("sort");


       $sort_str = $sort == "new" ? "asc" : "desc";

        $auctions = null;

       if($advancedSearch) {

           $auctions = Car::with(["auction"])->where(function (Builder $query) use($make, $model,$drive, $body_type, $fuel, $condition, $transmission) {
            $query->orWhere("make", $make)
           ->orWhere("model", $model)
           ->orWhere("fuel_type", $fuel)
           ->orWhere("drive", $drive)
           ->orWhere("body_type", $body_type);
           } )
           ->where("status", "active")
           ->paginate(8)->withQueryString();
       } else if ($search) {
          $auctions = Car::with(["auction"])->where(function (Builder $query) use($make, $model, $sort_str, $condition){
            $query->orWhere("make", $make)
           ->orWhere("model", $model)
           ->orWhere("condition", $condition);
           } )
           ->where("status", "active")
          ->orderBy("created_at", $sort_str)
           ->paginate(8)->withQueryString();
       } else {
           $auctions = Car::with(["auction"])->where("status", "active")->paginate(8);
       }

        $scheduled = Car::with(["auction"])->where("status", "scheduled")->latest()->limit(8)->get();
        return view("home", ['live_auctions' => $auctions, "scheduled" => $scheduled]);
    }


    public function auction_view(Car $car, Request $request)
    {
        //To do: 
        //make sure the returned item does not contain the current vehicle being viewd
        $similar = Car::with(["auction"])->where("status", "active")->where(function (Builder $query) use($car) {
            $query->orWhere("make", $car->make)
           ->orWhere("model", $car->model)
           ->orWhere("fuel_type", $car->fuel_type)
           ->orWhere("transmission", $car->transmission)
           ->orWhere("body_type", $car->drive);
           } )->limit(8)->get();

        return view("auctionView", ["car" => $car, "similar" => $similar]);
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


    public function place_bid(Auction $auction, Request $request)
    {
        $validated = $request->validate(["amount" => ["required", "integer"]]);
        $auction->bids()->create($validated);
        $currentTop = $auction->getTopBid();

        // I don't think this is actually needed
        $currentTop = $currentTop > $validated["amount"] ? $currentTop : $validated["amount"];

        // these are automatic bids i.e R1000... etc
        $bids = [];
        foreach (range(1, 5) as $i) {
            $bids[$i] = $currentTop + $auction->bid_increment * $i;
        }
        $data = ["topBid" => $currentTop, "bids" => $bids];
        broadcast(new NewBidEvent($data, $auction->id))->toOthers();
        return Response()->json($data);
    }


    // public function enter_attempt(Auction $auction, Request $request)
    // {
    //     //    to do
    //     //   check if the user is partaking in this auction and if yes, redirect them to their live auction section
    //     //otherwise show them a page where they will choose how to make a depositve
    //     // for now assume they latter
    //     return view("main.paymentType", ["auction_ref" => "CT00000000000000"]);
    // }
}
