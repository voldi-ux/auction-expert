<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    //
      use HasFactory;
    
    protected $fillable = [
        "name", "surname", "email", "dob", "identity_no"
    ];
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
