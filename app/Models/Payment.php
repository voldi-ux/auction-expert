<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    //

    public function car() : BelongsTo {
        return $this->belongsTo(Car::class);
    }

    
    public function auction() : BelongsTo {
        return $this->belongsTo(Car::class);
    }


}
