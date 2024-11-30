<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    //
    
    protected $fillable = ["path"];

    public function car() : BelongsTo {
        return $this->BelongsTo(Car::class);
    }
}
