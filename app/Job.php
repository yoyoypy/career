<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobsvacancies';
    protected $fillable = [
        'jobtitle',
        'jobdescription',
        'joblocation_id',
        'jobcategory_id',
        'benefit',
        'salary',
        'company_id',
        'position',
        'employment',
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
        return $this->hasMany(Application::class, 'jobvacancy_id', 'id');
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

    /**
     * Get all of the Questions for the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Questions()
    {
        return $this->hasMany(Questions::class, 'jobvacancy_id', 'id');
    }

    // public function Value()
    // {
    //     return $this->Questions()->with('value');
    // }

}
