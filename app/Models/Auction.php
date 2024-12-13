<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

class Auction extends Model
{
    //

   protected $fillable = ["status", "creator_id", 
   "bid_increment", 
   "start_bid_amount", 
   "start_date", "end_date"];

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

  private function formatTime($time) {
    $time = Carbon::parse($time);
    return $time->format('D, M j, Y, g:ia');
  }
  //  utils 
  public function remainingTimeFormated() {
        $start = Carbon::now(); $end = Carbon::parse($this->end_date); 
        $days = floor($start->diffInDays($end));
        $hours = $start->diffInHours($end) % 24; 
        $minutes = $start->diffInMinutes($end);
        
        return "".$days."d"." ".$hours."h"." ".$days."m";
  }


  public function formatedEndtime() {
      return $this->formatTime($this->end_date);
  }

  public function formatScheduledDate() {
    return $this->formatTime($this->start_date);
  }
}
