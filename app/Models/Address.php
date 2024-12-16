<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        "province", "city", "suburb", "street", "postal_code", "unit_no",
    ];


    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
