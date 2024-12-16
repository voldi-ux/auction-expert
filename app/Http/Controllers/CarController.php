<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CarController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $listed_cars = Car::with(["images", "docs"])->where("status", "pending")->paginate(8);
        return view("main.listings", ["listed_cars" => $listed_cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //


    }

    /**
     * Store a newly created resource in storage.
     */
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
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }


    //returns view of all listed vehicles by the current seller
    public function listed_cars()
    {
        $cars = Car::where("user_id", Auth::user()->id)->paginate(8);
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
