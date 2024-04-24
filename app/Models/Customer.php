<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'count_sv',
        'gender',
        'name',
        'lname',
        'phone',
        'address',
        'vill_id',
        'dis_name',
        'pro_name',
        'detail',
        'image',
    ];

    public function vilname()
    {
        return $this->belongsTo('App\Models\Village','vill_id','id');
    }
}
