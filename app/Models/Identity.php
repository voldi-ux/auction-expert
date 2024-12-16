<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Identity extends Model
{
  //
  use HasFactory;
    protected $fillable  = [
      "path"
    ];

    function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
