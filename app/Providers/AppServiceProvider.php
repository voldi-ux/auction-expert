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

    public function user_has_role($user, $role_check) : bool {
          $user_roles = $user->roles;
            foreach($user_roles as $role) {
               if($role->name == $role_check) return true;
            }
            return false;
    }
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //defining gate
        Gate::define("is-admin", function($user){return $this->user_has_role($user, "Admin");});
        Gate::define("is-seller", function($user){return $this->user_has_role($user, "Seller");});
        Gate::define("is-buyer", function($user){return $this->user_has_role($user, "Buyer");});
    
    }
}
