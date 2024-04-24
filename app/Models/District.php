<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'pro_id',
    ];

    public function proname()
    {
        return $this->belongsTo('App\Models\Province','pro_id','id');
    }
}
