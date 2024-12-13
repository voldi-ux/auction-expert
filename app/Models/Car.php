<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Carbon;

class Car extends Model
{
  protected  $fillable = [
    "make",
    "model",
    "year",
    "condition",
    "mileage",
    "body_type",
    "colour",
    "description",
    "drive",
    "code",
    "number_of_seats",
    "number_of_doors",
    "fuel_type",
    "tank_capacity",
    "engine_capacity",
    "gears",
    "cylinder_layout",
    "reserved_price",
    "transmission",
    "fuel_consumption"
  ];


  public function images(): HasMany
  {
    return $this->hasMany(Image::class);
  }
  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function payment(): HasOne
  {
    return $this->hasOne(Payment::class);
  }

  public function auction(): HasOne
  {
    return $this->hasOne(Auction::class);
  }

  public function docs(): HasMany
  {
    return $this->hasMany(VehicleFile::class);
  }

  public function formatedEndtime()
  {
    $end = Carbon::parse($this->created_at);
    return $end->format('D, M j, Y, g:ia');
  }
}
