<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

class CarController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
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

        $listed_cars  = null;

       if($search && $advancedSearch) {

           $listed_cars = Car::with(["images", "docs"])->where(function (Builder $query) use($make, $model,$drive, $body_type, $condition, $transmission) {
            $query->orWhere("make", $make)
           ->orWhere("model", $model)
           ->orWhere("fuel_type", $fuel)
           ->orWhere("drive", $drive)
           ->orWhere("body_type", $drive);
           } )
           ->where("status", "pending")
           ->paginate(8)->withQueryString();
       } else if ($search) {
          $listed_cars = Car::with(["images", "docs"])->where(function (Builder $query) use($make, $model, $sort_str, $condition){
            $query->orWhere("make", $make)
           ->orWhere("model", $model)
           ->orWhere("condition", $condition);
           } )
           ->where("status", "pending")
          ->orderBy("created_at", $sort_str)
           ->paginate(8)->withQueryString();
       } else {
           $listed_cars = Car::with(["images", "docs"])->where("status", "pending")->paginate(8);
       }

        return view("main.listings", ["listed_cars" => $listed_cars]);
    }

 
    public function store(VehicleRequest $request)
    {
        $validated  = $request->validated();
        //
        $files  = $request->file("images");
        $docs  = $request->file("docs");

        $paths = [];
        $docs_paths = [];

        $car = new Car($validated);

        $user = User::find(Auth::user()->id);

        $user->cars()->save($car);

        foreach ($files as $file) {
            $p = $file->store("vehicle-images", "public");
            array_push($paths, ["path" => $p]);
        }

        foreach ($docs as $file) {
            $p = $file->store("vehicle-docs", "public");
            array_push($docs_paths, ["path" => $p]);
        }



        $car->images()->createMany($paths);
        $car->docs()->createMany($docs_paths);

        return redirect(route("list_car"))->with(["message" => "Vehicle uploaded successfully"]);
    }




    public function decline(Car $car)
    {
        $car->status = "declined";
        $car->save();
        return view(route("listings"));
    }
    
    //returns view of all listed vehicles by the current seller
    public function listed_cars(Request $request)
    {      
    
        $filter  = $request->query("filter");
        $advancedSearch  = $request->query("advanced");
          $cars = null;
        if($advancedSearch) {
            $make = $request->query("make");
            $model = $request->query("model");
            $fuel = $request->query("fuel_type");
            $transmission = $request->query("transmission");
            $drive = $request->query("drive");
            $condition = $request->query("condition");
            $body_type = $request->query("body_type");

             $cars = Car::where("user_id", Auth::user()->id)->where(function (Builder $query) use($make, $model, $fuel,$transmission,$drive, $body_type) {
                $query->orWhere("make", $make)->orWhere("model",$model)->orWhere("fuel_type", $fuel)->orWhere("drive", $drive)->orWhere("transmission", $transmission);
             })->paginate(8)->withQueryString();
                
        } else if($filter) {
            $status = $request->query("status");
           $cars = Car::where("user_id", Auth::user()->id)->where("status", $status)->paginate(8)->withQueryString();
        } else {
            $cars = Car::where("user_id", Auth::user()->id)->paginate(8);
        }


        return view("main.listedAuctions", ["cars" => $cars]);
    }

    //returns view to list a vehicle
    public   function list()
    {
        return view("main.list");
    }


    public function auctions_entered()
    {
        return view("main.auctionsEntered");
    }
}
