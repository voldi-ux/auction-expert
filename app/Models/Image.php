<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    //
    use HasFactory;
    
    protected $fillable = ["path"];

    public function car() : BelongsTo {
        return $this->BelongsTo(Car::class);
    }
}
