<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateProfileRequest;

class BuyerController
{


    public function status(Request $request) {
       
        return view("main.status");
    }

    public function document(Request $request) {
       
        return view("main.buyerDocs");
    }
   

    
}
