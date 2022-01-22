<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SentCofluence extends Model
{
    use HasFactory;

    protected $fillable = [
        'sinal',
        'side',
        'expiry',
        'symbol',
        'strategy_id',
        'color'
    ];
}
