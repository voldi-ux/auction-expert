<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    //

    protected $fillable = [
        "province", "city", "suburb", "street", "postal_code", "unit_no",
    ];


    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
