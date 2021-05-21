<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobsvacancies';
    protected $fillable = [
        'jobtitle',
        'jobdescription',
        'jobrequirement',
        'joblocation_id',
        'jobcategory_id',
        'skill',
        'company_id',
        'position',
        'slug',
        'start',
        'end',
        'status'
    ];

    protected $hidden = [

    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function Application()
    {
        return $this->hasMany(Application::class, 'application_id');
    }

    /**
     * Get the user that owns the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Location()
    {
        return $this->belongsTo(Location::class, 'joblocation_id', 'id');
    }

    /**
     * Get the user that owns the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    /**
     * Get the user that owns the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function JobCategory()
    {
        return $this->belongsTo(JobCategory::class, 'jobcategory_id', 'id');
    }

}
