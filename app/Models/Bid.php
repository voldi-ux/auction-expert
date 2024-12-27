<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bid extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        "amount",
        "bidder_id"
    ];
    
    public function auction() : BelongsTo {
        return $this->belongsTo(Auction::class);
    }
}
