<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = [
        'slug',
        'title',
        'description',
        'thumbnail'
    ];

    public function getThumbnailAttribute($value)
    {
        return url('storage/' . $value);
    }
}
