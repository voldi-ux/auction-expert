<?php

namespace App\Providers;

use App\Listeners\SendEmailToNewSeller;
use App\Notifications\NewSeller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */


    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //defining gate
        Gate::define("is-admin", function($user){return  $user->hasRole("Admin");});
        Gate::define("is-seller", function($user){return  $user->hasRole("Seller");});
        Gate::define("is-buyer", function($user){return  $user->hasRole("Buyer");});
        Gate::define("is-verified", function($user){return  $user->is_verified();});
        Gate::define("see-bidding-button", function($user){return  Auth::guest() || $user->hasRole("Buyer");});

        Event::listen(NewSeller::class, SendEmailToNewSeller::class);
    
    }
}
