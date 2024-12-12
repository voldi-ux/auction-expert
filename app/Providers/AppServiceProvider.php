<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
    
    }
}
