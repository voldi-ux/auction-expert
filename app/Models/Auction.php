<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Auction extends Model
{
    //

   protected $fillable = ["status", "user_id", "bid_increment", "start_date", "end_date"];

   public function auction_creator() : BelongsTo {
    return $this->belongsTo(User::class);
   }

  public function users() : BelongsToMany {
    return $this->belongsToMany(User::class);
  }

  public function bids() : HasMany {
    return $this->hasMany(Bid::class);
  }

  public function car() : BelongsTo {
    return $this->belongsTo(Car::class);
  }
}
