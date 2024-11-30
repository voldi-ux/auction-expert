<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Client\Request;

class Car extends Model
{
  protected  $fillable = ["make", "model", "year_made", "condition", "milage", "body_type" ];


  public function images() : HasMany {
    return $this->hasMany(Image::class);
  }
  public function user() : BelongsTo {
    return $this->belongsTo(User::class);
  }
  
  public function payment() : HasOne {
    return $this->hasOne(Payment::class);
  }

  public function auction() : HasOne {
    return $this->hasOne(Auction::class);
  }
}
