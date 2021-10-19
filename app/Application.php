<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';
    protected $fillable = [
        'jobvacancy_id',
        'firstname',
        'lastname',
        'dob',
        'pob',
        'sex',
        'education',
        'id_card_address',
        'present_address',
        'phone_number',
        'email',
        'id_card_number',
        'marital_status',
        'cv',
        'status',
        'visitor'
    ];

    /**
     * Get the Vacancies that owns the Application
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Job()
    {
        return $this->belongsTo(Job::class, 'jobvacancy_id', 'id');
    }

    /**
     * The answers that belong to the Application
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function answers()
    {
        return $this->hasMany(Answers::class, 'application_id', 'id');
    }

    /**
     * Get the user that owns the Application
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function interview()
    {
        return $this->belongsTo(Interview::class, 'applications_id', 'id');
    }

    public function getCvAttribute($value)
    {
        return url('storage/' . $value);
    }
}
