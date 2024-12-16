<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Auction extends Model
{
  //

  use HasFactory;

   protected $fillable = ["status", "creator_id", 
   "bid_increment", 
   "start_bid_amount", 
   "start_date", "end_date"];

   public function getTopBid() {
    $top = $this->bids()->orderBy("amount", "desc")->first();
   
    return  ($top ? $top->amount : 0);

   }
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
        $minutes = $start->diffInMinutes($end) % 60;
        
        return "".$days."d"." ".$hours."h"." ".$minutes."m";
  }


  public function formatedEndtime() {
      return $this->formatTime($this->end_date);
  }

  public function formatScheduledDate() {
    return $this->formatTime($this->start_date);
  }
}
