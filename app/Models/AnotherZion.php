<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnotherZion extends Model
{
    use HasFactory;

    protected $fillable = [
        'clean',
        'play',
        'smash',
        'drunk'
    ]
}
