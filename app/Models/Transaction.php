<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_date',
        'tran_type',
        'type',
        'code',
        'cus_id',
        'cate_id',
        'product_id',
        'crc_id',
        'money_lak',
        'money_thb',
        'money_usd',
        'detail',
        'user_id',
        'branch_id',
    ];

    public function cusname()
    {
        return $this->belongsTo('App\Models\Customer','cus_id','id');
    }

    public function catename()
    {
        return $this->belongsTo('App\Models\Category','cate_id','id');
    }

    public function proname()
    {
        return $this->belongsTo('App\Models\Product','product_id','id');
    }

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
