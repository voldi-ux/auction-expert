<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bid extends Model
{
    //


    public function auction() : BelongsTo {
        return $this->belongsTo(Auction::class);
    }
}
