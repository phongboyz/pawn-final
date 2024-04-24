<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'muad_id',
        'cate_id',
        'unit',
        'location',
        'note',
        'image',
        'user_id',
    ];

    public function muadname()
    {
        return $this->belongsTo('App\Models\Muad','muad_id','id');
    }

    public function catename()
    {
        return $this->belongsTo('App\Models\Category','cate_id','id');
    }

    public function username()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
