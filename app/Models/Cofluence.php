<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cofluence extends Model
{
    use HasFactory;

    protected $fillable = [
        'counter',
        'signal',
        'side',
        'expiry',
        'symbol'
    ];
}
