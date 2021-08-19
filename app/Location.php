<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'joblocations';
    protected $fillable = [
        'location',
        'image'
    ];

    public function Job()
    {
        return $this->hasMany(Job::class, 'id', 'joblocation_id');
    }
}
