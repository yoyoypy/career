<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    protected $table = 'jobcategories';
    protected $fillable = [
        'slug',
        'category',
        'image'
    ];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    /**
     * Get all of the Job for the JobCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Job()
    {
        return $this->hasMany(Job::class, 'jobcategory_id', 'id');
    }
}
