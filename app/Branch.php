<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
    protected $fillable = [
        'branch',
        'pic',
        'pic_phone',
        'address',
        'gmaps_url'
    ];
}
