<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    protected $table = 'jobcategories';
    protected $fillable = [
        'category',
    ];
}
