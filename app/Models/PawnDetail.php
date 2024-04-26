<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PawnDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'pawn_id',
        'apm_count',
        'apm_date',
        'apm_money',
        'apm_int',
        'pay_date',
        'expire_day',
        'pay',
        'int',
        'int_adj',
        'discount',
        'total',
        'detail',
        'image',
        'status',
        'user_id',
        'branch_id',
    ];

    public function pawnname()
    {
        return $this->belongsTo('App\Models\Pawn','pawn_id','id');
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
