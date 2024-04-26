<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pawn extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'product_id',
        'cus_id',
        'crc_id',
        'rate',
        'money',
        'interest',
        'balance',
        'balance_int',
        'interestType',
        'pay_money',
        'pay_int',
        'adj_percent',
        'adj_money',
        'fees_percent',
        'fees_money',
        'discount',
        'detail',
        'status',
        'user_id',
        'branch_id',
        'count_date',
        'created_date',
        'expire_date',
        'count_expire_date',
    ];

    public function proname()
    {
        return $this->belongsTo('App\Models\Product','product_id','id');
    }

    public function cusname()
    {
        return $this->belongsTo('App\Models\Customer','cus_id','id');
    }

    public function crcname()
    {
        return $this->belongsTo('App\Models\Curency','crc_id','id');
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
