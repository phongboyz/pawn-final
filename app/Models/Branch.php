<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'tel',
        'address',
        'location',
        'sig1',
        'sig2',
        'sig3',
        'sig4',
        'logo',
    ];
}
