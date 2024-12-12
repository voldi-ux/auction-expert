<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Identity extends Model
{
    //
    
    protected $fillable  = [
      "path"
    ];

    function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
