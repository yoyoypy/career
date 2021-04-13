<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobvacancies';
    protected $fillable = [
        'jobtitle',
        'jobdescription',
        'jobrequirement',
        'joblocation_id',
        'jobcategory_id',
        'skill_id',
        'position',
        'slug',
        'status'
    ];

    protected $hidden = [

    ];

    public function Application()
    {
        //return $this->hasMany(Application::class, 'application_id');
    }

    /**
     * Get all of the comments for the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function JobCategory(): HasMany
    {
        //return $this->hasMany(JobCategory::class, 'jobcategory_id');
    }

    /**
     * Get all of the Location for the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Location(): HasMany
    {
        //return $this->hasMany(Location::class, 'location_id');
    }

    /**
     * Get all of the skill for the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Skill(): HasMany
    {
        //return $this->hasMany(Skill::class, 'skill_id');
    }


}
