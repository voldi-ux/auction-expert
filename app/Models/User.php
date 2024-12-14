<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Cashier\Billable;
use phpDocumentor\Reflection\Types\Boolean;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, Billable;

    /**
 * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
         "phone"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    //utils functions
    public function hasRole(String $role)   {
        $roles = $this->roles;
        foreach($roles as  $_role) {
            if($_role->name == $role ) return true;
        }
        return false;
    }


    // Entity relationships
    
    public function cars() : HasMany {
        return $this->hasMany(Car::class);
    }
    
    public function roles() : BelongsToMany {
        return $this->belongsToMany(Role::class);
    }


    //the auctions the user has is currently participating in
    public function auctions() : BelongsToMany {
        return $this->belongsToMany(Auction::class);
    }

    //get a user's identity
    public function identity() : HasOne {
        return $this->hasOne(Identity::class);
    }

    public function profile() : HasOne {
        return $this->hasOne(Profile::class);
    }
    public function address() : HasOne {
        return $this->hasOne(Address::class);
    }
}
