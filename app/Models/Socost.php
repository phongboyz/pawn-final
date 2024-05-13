<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socost extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'type',
        'crc_id',
        'total',
        'detail',
        'image',
        'user_id',
        'branch_id',
        'created_date',
    ];

    public function crcname()
    {
        return $this->belongsTo('App\Models\Currency','crc_id','id');
    }

    public function username()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function branchname()
    {
        return $this->belongsTo('App\Models\Branch','branch_id','id');
    }
}
