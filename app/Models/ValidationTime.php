<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValidationTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'minutes',
        'description',
    ];
}
