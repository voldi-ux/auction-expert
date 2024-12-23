<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    //
    use HasFactory;

    public function car() : BelongsTo {
        return $this->belongsTo(Car::class);
    }

    
    public function auction() : BelongsTo {
        return $this->belongsTo(Car::class);
    }


}
