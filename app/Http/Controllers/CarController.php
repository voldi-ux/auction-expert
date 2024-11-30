<?php

namespace App\Http\Controllers;

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
         $listed_cars = Car::with(["images", "payment"])->where("status","")->get();
        return view("main.listings", ["listed_cars"=> $listed_cars]);
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
    public function store(Request $request)
    {
        $validated  = $request->validate([
           "make" => ["required"],
           "model" => ["required"],
           "year_made" => ["required"],
           "condition" => ["required"],
           "milage"    => ["required"],
           "body_type" => ["required"],
        ]);

        //
        $files  = $request->file("images");
        $paths = [];

        if(count($files)  < 2) {
            return back()->withErrors(["images" => "at least 2 images of the car must be selected"]);
        }
    
        $car = new Car($validated);

        $user = User::find(Auth::user()->id);
        
        $user->cars()->save($car);

        foreach($files as $file) {
            $p = $file->store("images" ,"public");
            array_push($paths, ["path" => $p]);
        }

        $car->images()->createMany($paths);
        
        return redirect(route("list"))->with(["message" => "Vehicle uploaded successfully"]);
    }
    


    
     public function decline(Car $car) {
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
}
