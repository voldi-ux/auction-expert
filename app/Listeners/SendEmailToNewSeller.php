<?php

namespace App\Listeners;

use App\Events\NewSellerAdded;
use App\Events\Testsend;
use App\Notifications\NewSeller;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class SendEmailToNewSeller implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewSellerAdded $event): void
    {       

        Log::alert("the listener is now working");

        // // //
        Notification::send($event->user, new NewSeller($event->user,  $event->password));

    }
}
