<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VehicleFile extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        "path"
    ];

    public function car() : BelongsTo {
        return $this->belongsTo(Car::class);
    }
}
