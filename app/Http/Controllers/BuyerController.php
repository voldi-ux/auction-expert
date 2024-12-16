<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Auction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateProfileRequest;

class BuyerController
{


    public function status(Request $request)
    {

        return view("main.status");
    }

    public function document(Request $request)
    {

        return view("main.buyerDocs");
    }


    public function join_auction(Auction $auction, Request $request)
    {
        // to do:  again make sure the auction is not closed
        $auction->users()->attach(Auth::user()->id);
        //an email/notifcation should sent to the user indicating thier payment was successfull and they have been joined the auction. The message should include some information about the auction e.g current top bid and remaing time
        return redirect(route("entered_auctions"))->with(["message" => "you have successfully joined an auction"]);
    }


    public function pay_deposit(Auction $auction, Request $request)
    {

        if ($request->user()->is_in_auction($auction->id)) return redirect(route("entered_auctions"));

        $stripePriceId = env("DEPOSIT_STRIPE_ID");
        // to do
        // make sure the auction is still active before they can deposit
        //proceed iff its active otherwise redirect the client back to home with a message
        // also check if the user is already taking part in this auction, if so redirect them their auction page othereise proceed with the payment
        return $request->user()->checkout([$stripePriceId], [
            'success_url' => route("join_auction", $auction->id),
            'cancel_url' => route('auction_view', $auction->id),
        ]);
    }
}
